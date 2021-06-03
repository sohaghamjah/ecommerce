@extends('admin.layouts.app')

@section('title', 'Admin - Slider Edit')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Slider Edit</span>
            </nav>

            <div class="sl-pagebody">
                <div class="card">
                        <div class="card-header">
                            Slider Edit
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.slider.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_photo" value="{{ $slider -> photo }}">
                                <input type="hidden" name="id" value="{{ $slider -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Top Title English:</label>
                                            <input class="form-control" type="text" name="top_en" value="{{ $slider -> top_en }}" placeholder="Enter Slider Top Title English">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Top Title Bangla:</label>
                                            <input class="form-control" type="text" name="top_en" value="{{ $slider -> top_bn }}" placeholder="Enter Slider Top Title Bangla">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Title English:</label>
                                            <input class="form-control" type="text" name="title_en" value="{{ $slider -> title_en }}" placeholder="Enter Slider Title English">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Title Bangla:</label>
                                            <input class="form-control" type="text" name="title_bn" value="{{ $slider -> title_bn }}" placeholder="Enter Slider Title English">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Description English:</label>
                                            <input class="form-control" type="text" name="des_en" value="{{ $slider -> des_en }}" placeholder="Enter Slider Description English">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Slider Description Bangla:</label>
                                            <input class="form-control" type="text" name="des_bn" value="{{ $slider -> des_bn }}" placeholder="Enter Slider Description English">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">slider Image: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="photo">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Old Image:</label>
                                            <img src="{{ asset($slider -> photo) }}" width="200px" height="80px" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Slider">
                                </div>
                            </form>
                        </div>
                </div><!-- card -->
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
