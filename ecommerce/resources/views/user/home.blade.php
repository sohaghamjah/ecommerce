@extends('frontend.layouts.app')

@section('content')
    <div class="breadcrumb">
        <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
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
                            Update Your Profile
                        </h3>
                        <div class="card-body">
                        <form action="{{ route('user.update.profile') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" name="name" class="form-control" value="{{ Auth::user()->name }}">
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="text" name="email" class="form-control" value="{{ Auth::user()->email }}">
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    {{-- User Profile --}}


@endsection
