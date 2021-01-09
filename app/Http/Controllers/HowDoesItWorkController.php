<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\HowDoesItWork;
use Image;

class HowDoesItWorkController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:sanctum');
   }

   public function index()
   {
       return view('howdoesitwork.index',[
           'banner' => HowDoesItWork::first(),
       ]);
   }

   public function store(Request $request)
   {
       $request->validate([
        'header'  => 'required',
        'description_one' => 'required',
        'bullet_one' => 'required', 
        'bullet_two' => 'required', 
        'bullet_three' => 'required', 
        'bullet_four' => 'required', 
       ]); 

         $HowDoesItWork = HowDoesItWork::findOrFail($request->id);
         $HowDoesItWork->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = $HowDoesItWork->id. '.' .$image->extension('image');
            $location = public_path('uploads/howdoesitwork/' . $filename);
            Image::make($image)->save($location);

            $HowDoesItWork->image = $filename;
            $HowDoesItWork->save(); 
        }

        return back()->withSuccess('How it works updated');

        
   }
}
