@extends('admin.layouts.app')

@section('title', 'Admin - Brands')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Brands</span>
            </nav>

            <div class="sl-pagebody">
                <div class="row row-sm">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                Brands
                            </div>
                            <div class="card-body">
                                <div class="table-wrapper table-responsive">
                                    <table id="datatable1" class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Brand Image</th>
                                            <th>Brand Name</th>
                                            <th>Brand Name</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                        @foreach ($brand as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>
                                                    <img style="width: 80px" src="{{ asset($item -> brand_photo) }}" alt="">
                                                </td>
                                                <td>{{ $item -> brand_name_en }}</td>
                                                <td>{{ $item -> brand_name_bn }}</td>
                                                <td>
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
                                Add new brand
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.brand.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="brand_name_en" value="{{ old('brand_name_en') }}" placeholder="Enter Brand Name English">
                                        @error('brand_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="brand_name_bn" value="{{ old('brand_name_bn') }}" placeholder="Enter Brand Name Bangla">
                                        @error('brand_name_bn')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="file" name="brand_photo">
                                        @error('brand_photo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Add New">
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
