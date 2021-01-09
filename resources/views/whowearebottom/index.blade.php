@extends('layouts.dashboard')

@section('title')
    Ecovendy - Admin Panel
@endsection

@section('whoweare_menu_active')
    mm-active
@endsection

@section('page-name')
Who we are Bottom Settings
@endsection

@section('breadcrumb')
     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecovendy</a></li>
            <li class="breadcrumb-item active">Who we are Bottom</li>
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
<div class="col-xl-6 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Who we are Bottom Setting</h4>

            <form class="form-group" method="POST" action="{{ route('whowearebottom.store') }}" enctype="multipart/form-data">
            @csrf
                    <div class="py-3">
                        <label for="title">Title</label>
                        <input placeholder="Enter Title" type="text"  id="title" name="title" class="form-control">
                    </div>

                    <div class="py-3">
                        <label for="description"> Description</label>
                        <textarea placeholder="Enter description" name="description" id="description" class="form-control"></textarea>
                    </div>
                    
                    <div class="py-3">
                        <label for="image">Image (55 x 55px only)</label>
                        <input type="file"  id="image" name="image" class="form-control">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-success">Add bottom</button>
                    </div>

            </form>

        </div>
    </div>
</div> <!-- end col -->
<div class="col-xl-6 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Who we are Bottom List</h4>

            <div class="table table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Sl.</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @forelse ($whowearebottoms as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->description }}</td>
                            <td>
                                <img src="{{ asset('uploads/whowearebottom') }}/{{ $item->image }}" alt="Not found">
                            </td>
                            <td>
                                <a href="{{ route('whowearebottom.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        
                    @endforelse
                </table>
            </div>

        </div>
    </div>
</div> <!-- end col -->
</div>

@endsection