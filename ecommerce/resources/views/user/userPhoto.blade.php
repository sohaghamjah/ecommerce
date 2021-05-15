@extends('frontend.layouts.app')

@section('content')
    <div class="breadcrumb">
        <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li class='active'>User Dashboard</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
        </div>
        <!-- /.container -->
    </div>

    {{-- User Profile --}}
    <div class="container">
        <div class="sign-in-page">
            <div class="row">
                <div class="col-sm-4">
                    @include('user.inc.sidebar')
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
                    <form action="{{ route('user.update.photo') }}" method="POST" enctype="multipart/form-data">
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
                            <button class="btn btn-danger" type="submit">Upload</button>
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>


            </div>


        </div>

    {{-- User Profile --}}


@endsection
