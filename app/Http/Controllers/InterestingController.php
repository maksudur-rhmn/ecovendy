<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Interesting;
use Illuminate\Http\Request;

class InterestingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        return view('interesting.index',[
            'interestings' => Interesting::latest()->get(),
        ]); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'description' => 'required',
        ]); 

        $data = Interesting::create($request->except('_token') + ['created_at' => Carbon::now()]); 


        return back()->withSuccess('Data added successfully');
    }

    public function delete($id)
    {
        Interesting::findOrFail($id)->delete();
        return back()->withSuccess('Deleted successfully');
    }
}
