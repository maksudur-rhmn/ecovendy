<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\GeneralSettings;
use Image;

class GeneralSettingsController extends Controller
{
    public function __construct()
   {
       $this->middleware('auth:sanctum');
   }

   public function index()
   {
       return view('generalsettings.index',[
           'banner' => GeneralSettings::first(),
       ]);
   }

   public function store(Request $request)
   {
       $request->validate([
        'email'  => 'required',
        'phone'    => 'required',
        'address' => 'required',
        'facebook' => 'required',
        'instagram' => 'required', 
        'twitter' => 'required', 
       ]); 

         $GeneralSettings = GeneralSettings::findOrFail($request->id);
         $GeneralSettings->update($request->except('_token') + ['updated_at' => Carbon::now()]);

        if($request->hasFile('image'))
        {
            $image = $request->file('image');
            $filename = $GeneralSettings->id. '.' .$image->extension('image');
            $location = public_path('uploads/generalsettings/' . $filename);
            Image::make($image)->save($location);

            $GeneralSettings->image = $filename;
            $GeneralSettings->save(); 
        }

        return back()->withSuccess('General Settings updated');

        
   }
}
