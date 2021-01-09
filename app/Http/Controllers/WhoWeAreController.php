<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAre;
use Illuminate\Http\Request;
use Image;
use Carbon\Carbon;

class WhoWeAreController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:sanctum');
   }

   public function index()
   {
       return view('whoweare.index',[
           'banner' => WhoWeAre::first(),
       ]);
   }

   public function store(Request $request)
   {
       $request->validate([
        'header'  => 'required',
        'title'    => 'required',
        'sub_header' => 'required',
        'description_one' => 'required',
        'description_two' => 'required', 
       ]); 

         $whoweare = WhoWeAre::findOrFail($request->id);
         $whoweare->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = $whoweare->id. '.' .$image->extension('image');
            $location = public_path('uploads/whoweare/' . $filename);
            Image::make($image)->save($location);

            $whoweare->image = $filename;
            $whoweare->save(); 
        }

        return back()->withSuccess('Who we are updated');

        
   }
// END
}
