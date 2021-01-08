<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Banner;
use Illuminate\Http\Request;
use Image;

class BannerController extends Controller
{
   public function __construct()
   {
       $this->middleware('auth:sanctum');
   }

   public function index()
   {
       return view('banner.index',[
           'banner' => Banner::first(),
       ]);
   }

   public function store(Request $request)
   {
       $request->validate([
        'first_word'  => 'required',
        'span_one'    => 'required',
        'span_green' => 'required',
        'span_two' => 'required',
        'sub_header' => 'required',
        'description' => 'required',
        'btn_one' => 'required',
        'btn_two' => 'required', 
       ]); 

         $banner = Banner::findOrFail($request->id);
         $banner->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->hasFile('banner_img'))
        {
            $image = $request->file('banner_img');
            $filename = $banner->id. '.' .$image->extension('banner_img');
            $location = public_path('uploads/banners/' . $filename);
            Image::make($image)->save($location);

            $banner->banner_img = $filename;
            $banner->save(); 
        }

        return back()->withSuccess('Banner updated');

        
   }

 // END  
}