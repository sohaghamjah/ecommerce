@extends('admin.layouts.app')

@section('title', 'Admin - Profile')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Dashboard</span>
            </nav>

            <div class="sl-pagebody sl-pagebody-padding">

              <div class="row row-sm">

                <div class="col-sm-4">
                    @include('admin.inc.sidebar')
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
                        <form action="{{ route('admin.update.profile') }}" method="POST">
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
                                <button style="cursor: pointer" class="btn btn-danger" type="submit">Update</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
              </div><!-- row -->



            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
