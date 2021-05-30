@extends('admin.layouts.app')

@section('title', 'Admin - Product Management')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Product Management</span>
            </nav>

            <div class="sl-pagebody">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <Categories></Categories>
                            </div>
                            <div class="card-body">
                                <div class="table-wrapper table-responsive">
                                    <table id="datatable1" class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Image</th>
                                            <th>Product Name English</th>
                                            <th>Quantity</th>
                                            <th>Product Price</th>
                                            <th>Discount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                        @foreach ($product as $item)
                                            <tr>
                                                <td>{{ $loop -> index + 1 }}</td>
                                                <td>
                                                    <img style="width: 80px; height: 60px;
                                                    border: 3px solid #0000001c;" src="{{ asset($item -> product_thumb) }}" alt="">
                                                </td>
                                                <td>{{ $item -> product_name_en }}</td>
                                                <td>{{ $item -> product_qty }}</td>
                                                <td>{{ $item -> selling_price }}</td>
                                                <td>
                                                    @if ($item -> discount_price == NULL)
                                                        <span class="badge badge-pill badge-danger" style="font-size: 14px">No</span>
                                                    @else
                                                        @php
                                                            $ammount = $item -> selling_price - $item -> discount_price;
                                                            $discount = ($ammount / $item -> selling_price) * 100;
                                                        @endphp
                                                        <span class="badge badge-pill badge-success" style="font-size: 14px">{{ round($discount) }}%</span>
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
                                                        <a style="font-size: 18px" title="Inactive Product" href="{{ url('admin/product/manage_product/inactive/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-arrow-down"></i></a>
                                                    @else
                                                        <a style="font-size: 18px" title="Active product" href="{{ url('admin/product/manage_product/active/'. $item -> id) }}" class="btn btn-success"><i class="fa fa-arrow-up"></i></a>
                                                    @endif
                                                    <a style="font-size: 18px" title="Viewo product datails" href="{{ url('admin/product/manage_product/show/'. $item -> id) }}" class="btn btn-warning"><i class="fa fa-eye"></i></a>
                                                    <a style="font-size: 18px" title="Edit product details" href="{{ url('admin/product/manage-product/edit/'. $item ->id) }}" class="btn btn-primary"><i class="fa fa-pencil"></i></a>
                                                    <a id="delete_confirm" style="font-size: 18px" title="Delete product" href="{{ url('admin/product/manage_product/delete/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div><!-- table-wrapper -->
                            </div>
                          </div><!-- card -->
                    </div>
                </div>
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
