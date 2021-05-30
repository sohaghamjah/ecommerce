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
                                            <th>SLider Image</th>
                                            <th>Title</th>
                                            <th>Description</th>
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
                                                <td>{{ $item -> title }}</td>
                                                <td>{{ $item -> description }}</td>
                                                <td>
                                                    @if ($item -> status == 1)
                                                        <span class="badge badge-pill badge-success" style="font-size: 14px">Active</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger" style="font-size: 14px">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if ($item -> status == 1)
                                                        <a style="font-size: 18px" title="Inactive Product" href="{{ url('admin/product/manage_product/inactive/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a style="font-size: 18px" title="Active product" href="{{ url('admin/product/manage_product/active/'. $item -> id) }}" class="btn btn-success"><i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                    <a style="font-size: 18px" title="Edit Data" href="{{ url('admin/brand/edit/'. $item ->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a id="delete_confirm" style="font-size: 18px" title="Delete Data" href="{{ url('admin/brand/delete/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                        <label class="form-control-label">Slider Title: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="slider_title" value="{{ old('slider_title') }}" placeholder="Enter Slider Title">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Slider Description: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="slider_description" value="{{ old('slider_description') }}" placeholder="Enter Slider Description">
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
