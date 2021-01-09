<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use Illuminate\Http\Request;
use Auth;
use Image;
use Str;

class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('blog.index',[
           'blogs' => Blog::latest()->get(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
       $request->validate(['title' => 'required', 'sub_title' => 'required', 'description_one' => 'required', 'image' => 'required']);
       $blog = Blog::create($request->except('_token') + ['created_at' => Carbon::now(), 'written_by' => Auth::user()->name]);

       $image = $request->file('image');
       $filename = $blog->id. '.' .$image->extension('image');
       $location = public_path('uploads/blogs/' . $filename);
       Image::make($image)->save($location);

       if($request->hasFile('image_one'))
       {
        $image_one = $request->file('image_one');
        $filename_one = $blog->id. '-'. Str::random(3). '.' .$image_one->extension('image_one');
        $location = public_path('uploads/blogs/' . $filename_one);
        Image::make($image_one)->save($location);
        $blog->image_one = $filename_one;
       }
       if($request->hasFile('image_two'))
       {
        $image_two = $request->file('image_two');
        $filename_two = $blog->id. '-'. Str::random(3). '.' .$image_two->extension('image_two');
        $location = public_path('uploads/blogs/' . $filename_two);
        Image::make($image_two)->save($location);
        $blog->image_two = $filename_two;
       }
       if($request->hasFile('image_three'))
       {
        $image_three = $request->file('image_three');
        $filename_three = $blog->id. '-'. Str::random(3). '.' .$image_three->extension('image_three');
        $location = public_path('uploads/blogs/' . $filename_three);
        Image::make($image_three)->save($location);
        $blog->image_three = $filename_three;
       }

       $blog->image = $filename;
       $blog->save();

       return redirect('/blog')->withSuccess('Blog Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        if($request->hasFile('image'))
        {
            $img = public_path('uploads/blogs/' . $blog->image);
            unlink($img);

            $image = $request->file('image');
            $filename = $blog->id. '.' .$image->extension('image');
            $location = public_path('uploads/blogs/' . $filename);
            Image::make($image)->save($location);
            $blog->image = $filename;
        }
        if($request->hasFile('image_one'))
        {
            $img_one = public_path('uploads/blogs/' . $blog->image_one);
            unlink($img_one);
         $image_one = $request->file('image_one');
         $filename_one = $blog->id. '-'. Str::random(3). '.' .$image_one->extension('image_one');
         $location = public_path('uploads/blogs/' . $filename_one);
         Image::make($image_one)->save($location);
         $blog->image_one = $filename_one;
        }
        if($request->hasFile('image_two'))
        {
            $img_two = public_path('uploads/blogs/' . $blog->image_two);
            unlink($img_two);
         $image_two = $request->file('image_two');
         $filename_two = $blog->id. '-'. Str::random(3). '.' .$image_two->extension('image_two');
         $location = public_path('uploads/blogs/' . $filename_two);
         Image::make($image_two)->save($location);
         $blog->image_two = $filename_two;
        }
        if($request->hasFile('image_three'))
        {
            $img_three = public_path('uploads/blogs/' . $blog->image_three);
            unlink($img_three);
         $image_three = $request->file('image_three');
         $filename_three = $blog->id. '-'. Str::random(3). '.' .$image_three->extension('image_three');
         $location = public_path('uploads/blogs/' . $filename_three);
         Image::make($image_three)->save($location);
         $blog->image_three = $filename_three;
        }

        $blog->title = $request->title;
        $blog->sub_title = $request->sub_title;
        $blog->description_one = $request->description_one;
        $blog->description_two = $request->description_two;
        $blog->description_three = $request->description_three;
        $blog->save();

        return redirect('/blog')->withSuccess('Blog updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    // Custom Delete 
    public function delete($id)
    {
        Blog::findOrFail($id)->delete();

        return back()->withSuccess('Blog deleted');
    }
}
