<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
 
    public function index()
    {
        return view('video.index',[
            'banner' => Video::first(),
        ]);
    }
 
    public function store(Request $request)
    {
        $request->validate([
         'header'  => 'required',
         'title'    => 'required',
         'description_one' => 'required',
         'description_two' => 'required',
         'video' => 'required',
         'bullet_one' => 'required', 
         'bullet_two' => 'required', 
         'bullet_three' => 'required', 
         'bullet_four' => 'required', 
        ]); 
 
          $Video = Video::findOrFail($request->id);
          $Video->update($request->except('_token') + ['updated_at' => Carbon::now()]);
 
         return back()->withSuccess('How it works updated');
}
// END
}