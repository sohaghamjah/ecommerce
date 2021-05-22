@extends('admin.layouts.app')

@section('title', 'Admin - Brands')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Categories</span>
            </nav>

            <div class="sl-pagebody">
                <div class="row row-sm">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <Categories></Categories>
                            </div>
                            <div class="card-body">
                                <div class="table-wrapper">
                                    <table id="datatable1" class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category Icon</th>
                                            <th>Category Name En</th>
                                            <th>Category Name Bn</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                        @foreach ($cat as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>
                                                    <span class="btn btn-success" style="font-size: 18px">
                                                        <i class="{{ $item -> cat_icon }}"></i>
                                                    </span>
                                                </td>
                                                <td>{{ $item -> cat_name_en }}</td>
                                                <td>{{ $item -> cat_name_bn }}</td>
                                                <td>
                                                    <a style="font-size: 18px" title="Edit Data" href="{{ url('admin/categories/edit/'. $item ->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a id="delete_confirm" style="font-size: 18px" title="Delete Data" href="{{ url('admin/categories/delete/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                Add new category
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.categories.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Category name English: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="cat_name_en" value="{{ old('brand_name_en') }}" placeholder="Enter category name English">
                                        @error('cat_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Category name Bangla: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="cat_name_bn" value="{{ old('cat_name_bn') }}" placeholder="Enter category name Bangla">
                                        @error('cat_name_bn')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Category icon: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="cat_icon" value="{{ old('cat_icon') }}" placeholder="Enter category icon">
                                        @error('cat_icon')
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
