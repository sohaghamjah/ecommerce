@extends('admin.layouts.app')

@section('title', 'Admin - Sub category edit')

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
                            Sub Category Edit
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.sub-categories.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $subcat -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Category name<span class="tx-danger">*</span></label>
                                            <select name="cat_id" class="form-control select2-show-search" data-placeholder="Choose category" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                @foreach ($cat as $item)
                                                     <option value="{{ $item -> id }}"  {{ $item -> id == $subcat -> cat_id ? 'selected' : '' }}>{{ ucwords($item -> cat_name_en) }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Sub Category Name English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="subcat_name_en" value="{{ $subcat -> subcat_name_en }}" placeholder="Enter Sub Category Name English">
                                            @error('subcat_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Sub Category Name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="subcat_name_bn" value="{{ $subcat -> subcat_name_bn }}" placeholder="Enter Category Name Bangla">
                                            @error('subcat_name_bn')
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
