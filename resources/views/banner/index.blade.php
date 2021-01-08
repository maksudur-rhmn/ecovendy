@extends('layouts.dashboard')

@section('title')
    Ecovendy - Admin Panel
@endsection

@section('banner_menu_active')
    mm-active
@endsection

@section('page-name')
   Banner Settings
@endsection

@section('breadcrumb')
     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecovendy</a></li>
            <li class="breadcrumb-item active">Banner</li>
        </ol>
    </div> 
@endsection


@section('content')

{{-- Error Message --}}
@if($errors->all())
<div class="alert alert-danger">
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</div>
@endif

{{-- Success Message --}}
@if(session('success'))
<div class="aler alert-success">
    {{ session('success') }}
</div>
@endif

{{-- Info Message --}}
@if(session('info'))
<div class="alert alert-info">
    {{ session('info') }}
</div>
@endif

{{-- Warning Message --}}
@if(session('warning'))
<div class="alert alert-warning">
    {{ session('success') }}
</div>
@endif

<div class="row">
<div class="col-xl-10 m-auto">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Banner Setting</h4>

            <form class="form-group" method="POST" action="{{ route('banner.store') }}" enctype="multipart/form-data">
            @csrf
                    <div class="py-3">
                        <input type="hidden" value="{{ $banner->id }}" name="id">
                        <label for="first_word">First Word (Only one word)</label>
                        <input value="{{ $banner->first_word }}" type="text"  id="first_word" name="first_word" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="span_one">Second Word (Max two word)</label>
                        <input type="text" value="{{ $banner->span_one }}" id="span_one" name="span_one" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="span_green">Green Word (one word this will turn green on the site.)</label>
                        <input type="text" value="{{ $banner->span_green }}" id="span_green" name="span_green" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="span_two">Last words of the sentence (Preferred one word)</label>
                        <input type="text" value="{{ $banner->span_two }}" id="span_two" name="span_two" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="sub_header">Sub Header</label>
                        <input type="text" value="{{ $banner->sub_header }}" id="sub_header" name="sub_header" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="description">Short Description</label>
                        <textarea name="description" id="description" class="form-control">{{ $banner->description }}</textarea>
                    </div>
                    
                    <div class="py-3">
                        <label for="btn_one">First Button Text</label>
                        <input type="text" value="{{ $banner->btn_one }}" id="btn_one" name="btn_one" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="btn_two">Second Button Text</label>
                        <input type="text" value="{{ $banner->btn_two }}" id="btn_two" name="btn_two" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="banner_img ">Banner Image</label>
                        <input type="file"  id="banner_img " name="banner_img" class="form-control">
                    </div>
                    <div class="py-3">
                        <img src="{{ asset('uploads/banners') }}/{{ $banner->banner_img }}" alt="not found" width="200">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-success">Update Settings</button>
                    </div>

            </form>

        </div>
    </div>
</div> <!-- end col -->
</div>

@endsection