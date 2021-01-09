<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Partner;
use Illuminate\Http\Request;
use Image;

class PartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return view('partner.index',[
            'partners' => Partner::latest()->get(),
        ]);
    }

    public function store(Request $request)
    {
        $data = Partner::create($request->except('_token') + ['created_at' => Carbon::now()]);

        $img = $request->file('image');
        $filename = $data->id. '.' .$img->extension('image');
        $location = public_path('uploads/partners/' . $filename);
        Image::make($img)->save($location);

        $data->image = $filename;
        $data->save();

        return back()->withSuccess('Partner added');
    }

    public function delete($id)
    {
        Partner::findOrFail($id)->delete();
        return back()->withSuccess('Partner Deleted');
    }
}
