@extends('admin.layouts.app')

@section('title', 'Admin - Sliders')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Sliders</span>
            </nav>

            <div class="sl-pagebody">
                <div class="row row-sm">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Sliders
                            </div>
                            <div class="card-body">
                                <div class="table-wrapper table-responsive">
                                    <table class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>SLider</th>
                                            <th>Title</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                        @foreach ($slider as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>
                                                    <img style="width: 80px" src="{{ asset($item -> photo) }}" alt="">
                                                </td>
                                                <td>
                                                    @if ($item -> title_en == NULL)
                                                        <span class="badge badge-pill badge-danger" style="font-size: 14px">No Title found</span>
                                                    @else
                                                        {{ $item -> title_en }}
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item -> status == 1)
                                                        <span class="badge badge-pill badge-success" style="font-size: 14px">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger" style="font-size: 14px">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item -> status == 1)
                                                        <a style="font-size: 18px" title="Inactive Slider" href="{{ url('admin/slider/inactive/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a style="font-size: 18px" title="Active Slider" href="{{ url('admin/slider/active/'. $item -> id) }}" class="btn btn-success"><i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                    <a style="font-size: 18px" title="Edit Data" href="{{ url('admin/slider/edit/'. $item ->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a id="delete_confirm" style="font-size: 18px" title="Delete Data" href="{{ url('admin/slider/destroy/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div><!-- table-wrapper -->
                            </div>
                          </div><!-- card -->
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header">
                                Add new Slider
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.slider.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Title English:</label>
                                        <input class="form-control" type="text" name="slider_title_en" value="{{ old('slider_title_en') }}" placeholder="Enter Slider Title English">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Title Bangla:</label>
                                        <input class="form-control" type="text" name="slider_title_bn" value="{{ old('slider_title_bn') }}" placeholder="Enter Slider Title Bangla">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Description English:</label>
                                        <input class="form-control" type="text" name="slider_des_en" value="{{ old('slider_des_en') }}" placeholder="Enter Slider Description English">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Description Bangla:</label>
                                        <input class="form-control" type="text" name="slider_des_bn" value="{{ old('slider_des_bn') }}" placeholder="Enter Slider Description Bangla">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Image: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="photo">
                                        @error('photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Add Slider">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
