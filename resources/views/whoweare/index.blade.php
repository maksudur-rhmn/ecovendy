@extends('layouts.dashboard')

@section('title')
    Ecovendy - Admin Panel
@endsection

@section('whoweare_menu_active')
    mm-active
@endsection

@section('page-name')
{{ ucfirst($banner->header) }} Settings
@endsection

@section('breadcrumb')
     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecovendy</a></li>
            <li class="breadcrumb-item active">{{ ucfirst($banner->header) }}</li>
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

            <h4 class="card-title">{{ ucfirst($banner->header) }} Setting</h4>

            <form class="form-group" method="POST" action="{{ route('whoweare.store') }}" enctype="multipart/form-data">
            @csrf
                    <div class="py-3">
                        <input type="hidden" value="{{ $banner->id }}" name="id">
                        <label for="header">Header</label>
                        <input value="{{ $banner->header }}" type="text"  id="header" name="header" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="sub_header">Sub Header</label>
                        <input type="text" value="{{ $banner->sub_header }}" id="sub_header" name="sub_header" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="title">Title</label>
                        <input type="text" value="{{ $banner->title }}" id="title" name="title" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="description_one"> Description</label>
                        <textarea name="description_one" id="description_one" class="form-control">{{ $banner->description_one }}</textarea>
                    </div>

                    <div class="py-3">
                        <label for="description_two"> Description Two</label>
                        <textarea name="description_two" id="description_two" class="form-control">{{ $banner->description_two }}</textarea>
                    </div>
                    
                    <div class="py-3">
                        <label for="image">Banner Image</label>
                        <input type="file"  id="image" name="image" class="form-control">
                    </div>
                    <div class="py-3">
                        <img src="{{ asset('uploads/whoweare') }}/{{ $banner->image}}" alt="not found" width="200">
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