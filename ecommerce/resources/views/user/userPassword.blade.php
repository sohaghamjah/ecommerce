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
                        Reset User Password
                    </h3>
                    <div class="card-body">
                    <form action="{{ route('user.update.password') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="">Old Password</label>
                            <input type="password" name="old_password" class="form-control" placeholder="Old Password">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                                <label for="">New Password</label>
                                <input type="password" name="new_password" class="form-control" placeholder="New Password">
                                @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" placeholder="Re-Type Password">
                                @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">Change Password</button>
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
