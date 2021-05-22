@extends('admin.layouts.app')

@section('title', 'Admin - Sub Sub category edit')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Sub Category Edit</span>
            </nav>

            <div class="sl-pagebody">
                <div class="card">
                        <div class="card-header">
                            Sub Sub Category Edit
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.sub-sub-categories.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $subsubcat -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Sub Sub category name English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="subsubcat_name_en" value="{{ $subsubcat -> sub_sub_cat_name_en }}" placeholder="Enter sub sub category name English">
                                            @error('subsubcat_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Sub sub category name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="subsubcat_name_bn" value="{{ $subsubcat -> sub_sub_cat_name_bn }}" placeholder="Enter sub sub category name Bangla">
                                            @error('subsubcat_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Sub Category">
                                </div>
                            </form>
                        </div>
                </div><!-- card -->
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
