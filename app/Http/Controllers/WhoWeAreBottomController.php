<?php

namespace App\Http\Controllers;

use App\Models\WhoWeAreBottom;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Image;

class WhoWeAreBottomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return view('whowearebottom.index',[
            'whowearebottoms' => WhoWeAreBottom::latest()->get(),
        ]); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'description' => 'required',
        ]); 

        $data = WhoWeAreBottom::create($request->except('_token') + ['created_at' => Carbon::now()]); 

        $img = $request->file('image');
        $filename = $data->id. '.' .$img->extension('image');
        $location = public_path('uploads/whowearebottom/' . $filename);
        Image::make($img)->save($location);

        $data->image = $filename;
        $data->save();

        return back()->withSuccess('Data added successfully');
    }

    public function delete($id)
    {
        WhoWeAreBottom::findOrFail($id)->delete();
        return back()->withSuccess('Deleted successfully');
    }
}
