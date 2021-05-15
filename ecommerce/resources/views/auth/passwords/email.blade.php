@extends('frontend.layouts.app')

@section('title', 'Forgot Password')

@section('content')
<div class="breadcrumb">
    <div class="container">
       <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
             <li><a href="{{ url('/') }}">Home</a></li>
             <li class='active'>Reset Password</li>
          </ul>
       </div>
       <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
 </div>



 <div class="sign-in-page d-flex-justify-content-center">
    <div class="row">
       <!-- Sign-in -->
       <div class="col-md-12 col-sm-12 sign-in">
          <h4 class="">Forgot Password</h4>
          <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('password.email') }}">
            @csrf
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="email" value="{{ old('email') }}" placeholder="Your Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <a href="{{ route('login') }}" class="btn-upper btn btn-info  checkout-page-button">Login</a>
             <button type="submit" class="btn-upper btn btn-primary checkout-page-button">{{ __('Send Password Reset Link') }}</button>
          </form>
       </div>
       <!-- Sign-in -->
    </div>
    <!-- /.row -->
 </div>
 <!-- /.sigin-in-->
@endsection
