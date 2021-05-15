@extends('admin.layouts.app')

@section('title', 'Admin - Profile')

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
                        Reset User Password
                    </h3>
                    <div class="card-body">
                    <form action="{{ route('admin.update.password') }}" method="POST">
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
</div>
@endsection
