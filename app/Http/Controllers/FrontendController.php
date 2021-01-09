<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Blog;
use App\Models\Banner;
use App\Mail\VisitorQueries;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function whoweare()
    {
        return view('frontend.whoweare');
    }

    public function howdoesitwork()
    {
        return view('frontend.howdoesitwork');
    }

    public function whatcanyoudo()
    {
        return view('frontend.whatcanyoudo');
    }

    public function blogDetails($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blogDetails', compact('blog'));
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function contactstore(Request $request)
    {
     $name = $request->name;
     $email = $request->email;
     $company = $request->company;
     $phone = $request->phone;
     $message = $request->message;

     Mail::to('spu.rahman@gmail.com')->send(new VisitorQueries($name, $email, $phone, $message, $company));

     return back()->withSuccess('Message received successfully.We will get back to you as soon as possible');
    }
}
