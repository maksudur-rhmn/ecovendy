@extends('layouts.dashboard')

@section('title')
    Ecovendy - Admin Panel
@endsection

@section('whatwedo_menu_active')
    mm-active
@endsection

@section('page-name')
Partner Settings
@endsection

@section('breadcrumb')
     <div class="page-title-right">
        <ol class="breadcrumb m-0">
            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecovendy</a></li>
            <li class="breadcrumb-item active">Partner</li>
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

            <h4 class="card-title">Partner Setting</h4>

            <form class="form-group" method="POST" action="{{ route('partner.store') }}" enctype="multipart/form-data">
            @csrf
                  
                    <div class="py-3">
                        <label for="icon">Partner Logo</label>
                        <input type="file" placeholder="Enter icon (Example : fas fa-recycle)" id="icon" name="image" class="form-control">
                    </div>
                    <div class="py-3">
                        <button type="submit" class="btn btn-success">Add partner logo</button>
                    </div>

            </form>

        </div>
    </div>
</div> <!-- end col -->
<div class="col-xl-6 col-md-6 col-lg-6">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Partner List</h4>

            <div class="table table-responsive">
                <table class="table table-striped table-bordered">
                    <tr>
                        <th>Sl.</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>

                    @forelse ($partners as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>
                               <img src="{{ asset('uploads/partners') }}/{{ $item->image }}" alt="">
                            </td>
                            <td>
                                <a href="{{ route('partner.delete', $item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <p>No data available</p>
                    @endforelse
                </table>
            </div>

        </div>
    </div>
</div> <!-- end col -->
</div>

@endsection