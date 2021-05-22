@extends('admin.layouts.app')

@section('title', 'Admin - Category Edit')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Category Edit</span>
            </nav>

            <div class="sl-pagebody">
                <div class="card">
                        <div class="card-header">
                            Category Edit
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.categories.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $cat -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Category Name English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="cat_name_en" value="{{ $cat -> cat_name_en }}" placeholder="Enter Category Name English">
                                            @error('cat_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Category Name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="cat_name_bn" value="{{ $cat -> cat_name_bn }}" placeholder="Enter Category Name Bangla">
                                            @error('cat_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Category Icon: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="cat_icon" value="{{ $cat -> cat_icon }}" placeholder="Enter Category Icon">
                                            @error('cat_icon')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Category">
                                </div>
                            </form>
                        </div>
                </div><!-- card -->
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
