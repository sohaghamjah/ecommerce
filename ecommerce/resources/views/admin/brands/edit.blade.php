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
                <div class="card">
                        <div class="card-header">
                            Brands Edit
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.update.brand') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="old_photo" value="{{ $brand -> brand_photo }}">
                                <input type="hidden" name="brand_id" value="{{ $brand -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Brand Name English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="brand_name_en" value="{{ $brand -> brand_name_en }}" placeholder="Enter Brand Name English">
                                            @error('brand_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Brand Name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="brand_name_bn" value="{{ $brand -> brand_name_bn }}" placeholder="Enter Brand Name Bangla">
                                            @error('brand_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Brand Image: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="brand_photo">
                                            @error('brand_photo')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Add New">
                                </div>
                            </form>
                        </div>
                </div><!-- card -->
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
