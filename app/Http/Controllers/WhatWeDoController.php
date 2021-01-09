<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\WhatWeDo;
use Illuminate\Http\Request;

class WhatWeDoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return view('whatwedo.index',[
            'WhatWeDos' => WhatWeDo::latest()->get(),
        ]); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]); 

        $data = WhatWeDo::create($request->except('_token') + ['created_at' => Carbon::now()]); 


        return back()->withSuccess('Data added successfully');
    }

    public function delete($id)
    {
        WhatWeDo::findOrFail($id)->delete();
        return back()->withSuccess('Deleted successfully');
    }
}
