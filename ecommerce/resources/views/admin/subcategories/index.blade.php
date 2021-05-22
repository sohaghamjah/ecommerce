@extends('admin.layouts.app')

@section('title', 'Admin - Sub Category')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Sub Categories</span>
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
                                            <th>Category Name</th>
                                            <th>Sub Cat Name</th>
                                            <th>Sub Cat Name</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                        @foreach ($subcat as $item)
                                            <tr>
                                                <td>{{ $item -> cat -> cat_name_en }}</td>
                                                <td>{{ $item -> subcat_name_en }}</td>
                                                <td>{{ $item -> subcat_name_bn }}</td>
                                                <td>
                                                    <a style="font-size: 18px" title="Edit Data" href="{{ url('admin/sub-categories/edit/'. $item ->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a id="delete_confirm" style="font-size: 18px" title="Delete Data" href="{{ url('admin/sub-categories/delete/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
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
                                Add new sub category
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.sub-category.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Category name<span class="tx-danger">*</span></label>
                                        <select name="cat_id" class="form-control select2-show-search" data-placeholder="Choose category" tabindex="-1" aria-hidden="true">
                                            <option label="Choose one"></option>
                                            @foreach ($cat as $item)
                                                 <option value="{{ $item -> id }}">{{ ucwords($item -> cat_name_en) }}</option>
                                            @endforeach
                                        </select>
                                        @error('cat_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Sub category name English: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="subcat_name_en" value="{{ old('subcat_name_en') }}" placeholder="Enter sub category name English">
                                        @error('subcat_name_en')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Sub category name Bangla: <span class="tx-danger">*</span></label>
                                        <input class="form-control" type="text" name="subcat_name_bn" value="{{ old('subcat_name_bn') }}" placeholder="Enter sub category name Bangla">
                                        @error('subcat_name_bn')
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
