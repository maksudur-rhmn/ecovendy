<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\WhatCanYouDo;
use Illuminate\Http\Request;
use Image;

class WhatCanYouDoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
 
    public function index()
    {
        return view('whatcanyoudo.index',[
            'banner' => WhatCanYouDo::first(),
        ]);
    }
 
    public function store(Request $request)
    {
        $request->validate([
         'header'  => 'required',
         'description_one' => 'required',
         'description_two' => 'required',
         'title' => 'required',
         'bullet_one' => 'required', 
         'bullet_two' => 'required', 
         'bullet_three' => 'required', 
        ]); 
 
          $WhatCanYouDo = WhatCanYouDo::findOrFail($request->id);
          $WhatCanYouDo->update($request->except('_token') + ['updated_at' => Carbon::now()]);
 
         if($request->hasFile('image'))
         {
             $image = $request->file('image');
             $filename = $WhatCanYouDo->id. '.' .$image->extension('image');
             $location = public_path('uploads/whatcanyoudo/' . $filename);
             Image::make($image)->save($location);
 
             $WhatCanYouDo->image = $filename;
             $WhatCanYouDo->save(); 
         }
 
         return back()->withSuccess('What Can you do updated');
}

}