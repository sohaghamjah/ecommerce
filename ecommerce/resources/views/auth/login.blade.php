@extends('frontend.layouts.app')

@section('title', 'Login - Registration')

@section('content')
<div class="breadcrumb">
    <div class="container">
       <div class="breadcrumb-inner">
          <ul class="list-inline list-unstyled">
             <li><a href="home.html">Home</a></li>
             <li class='active'>Login</li>
          </ul>
       </div>
       <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
 </div>

<div class="sign-in-page">
    <div class="row">
       <!-- Sign-in -->
       <div class="col-md-6 col-sm-6 sign-in">
          <h4 class="">Sign in</h4>
          <p class="">Hello, Welcome to your account.</p>
          <div class="social-sign-in outer-top-xs">
             <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
             <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
          </div>
          <form class="register-form outer-top-xs" role="form" method="POST" action="{{ route('login') }}">
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
             <div class="form-group">
                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" name="password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="radio outer-xs">
                <label>
                <input type="radio" value="option2" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember me!
                </label>
                <a href="{{ route('password.request') }}" class="forgot-password pull-right">Forgot your Password?</a>
             </div>
             <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
          </form>
       </div>
       <!-- Sign-in -->
       <!-- create a new account -->
       <div class="col-md-6 col-sm-6 create-new-account">
          <h4 class="checkout-subtitle">Create a new account</h4>
          <p class="text title-tag-line">Create your new account.</p>
          <form class="register-form outer-top-xs" role="form" action="{{ route('register') }}" method="POST">
            @csrf
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email" value="{{ old('email') }} " placeholder="Your Email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
             </div>
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                <input type="name" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="name" value="{{ old('name') }}" placeholder="Your Name">

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="phone" value="{{ old('phone') }}" placeholder="Your Phone Number">

                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password" placeholder="Password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
             </div>
             <div class="form-group">
                <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password_confirmation" placeholder="Confirm Password">
             </div>
             <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Register</button>
          </form>
       </div>
       <!-- create a new account -->
    </div>
    <!-- /.row -->
 </div>
 <!-- /.sigin-in-->
@endsection

