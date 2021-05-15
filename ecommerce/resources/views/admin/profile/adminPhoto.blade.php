@extends('admin.layouts.app')

@section('title', 'Admin - Dashboard')

@section('content')

<div class="sl-mainpanel">

    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
        <span class="breadcrumb-item active">Admin Profile</span>
      </nav>

    {{-- User Profile --}}
    <div class="sl-pagebody sl-pagebody-padding">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-sm-4">
                    @include('admin.inc.sidebar')
                </div>
                <div class="col-sm-8">
                <div class="card">
                    <h3 class="text-center">
                        <span class="text-danger">Hi..!
                            <strong>{{ Auth::user()->name }}</strong>
                        </span>
                        Update Your Profile Photo
                    </h3>
                    <div class="card-body">
                    <form action="{{ route('admin.update.photo') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="old_photo" value="{{ Auth::user()->photo }}">
                        <div class="form-group">
                            <label for="">Profile Photo</label>
                            <input type="file" name="photo" class="form-control">
                            @error('photo')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button style="cursor: pointer" class="btn btn-danger" type="submit">Upload</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
            </div>

        </div>
    </div>

        {{-- User Profile --}}

</div>


@endsection
