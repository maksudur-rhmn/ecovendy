@extends('layouts.dashboard')

@section('title')
    Ecovendy - Admin Panel
@endsection

@section('settings_menu_active')
    mm-active
@endsection

@section('page-name')
General Settings
@endsection

@section('breadcrumb')
     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecovendy</a></li>
            <li class="breadcrumb-item active">General</li>
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

            <h4 class="card-title">General Setting</h4>

            <form class="form-group" method="POST" action="{{ route('settings.store') }}" enctype="multipart/form-data">
            @csrf
                    <div class="py-3">
                        <input type="hidden" value="{{ $banner->id }}" name="id">
                        <label for="address">Address</label>
                        <input value="{{ $banner->address }}" type="text"  id="address" name="address" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="phone">Phone</label>
                        <input type="text" value="{{ $banner->phone }}" id="phone" name="phone" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="email">Email</label>
                        <input type="text" value="{{ $banner->email }}" id="email" name="email" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="facebook">Facebook</label>
                        <input type="text" value="{{ $banner->facebook }}" id="facebook" name="facebook" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="instagram">Instagram</label>
                        <input type="text" value="{{ $banner->instagram }}" id="instagram" name="instagram" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="twitter">Twitter</label>
                        <input type="text" value="{{ $banner->twitter }}" id="twitter" name="twitter" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="youtube">Youtube</label>
                        <input type="text" value="{{ $banner->youtube }}" id="youtube" name="youtube" class="form-control">
                    </div>
                    
                    <div class="py-3">
                        <label for="image">Website Logo</label>
                        <input type="file"  id="image" name="image" class="form-control">
                    </div>
                    <div class="py-3">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ $banner->image}}" alt="not found" width="200">
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