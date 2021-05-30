@extends('admin.layouts.app')

@section('title', 'Admin - Product Details')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Product Details</span>
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
                                    <h3>Product Naming Part</h3>
                                    <table class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th class="wd-25p">Name</th>
                                            <th class="wd-25p">Details</th>
                                            <th class="wd-25p">Name</th>
                                            <th class="wd-25p">Details</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                            <tr>
                                                <th>Product Brand</th>
                                                <td>{{ $product -> brand -> brand_name_en }}</td>
                                                <th>Category</th>
                                                <td>{{ $product -> cat -> cat_name_en }}</td>
                                            </tr>
                                            <tr>
                                                <th>Sub-Category</th>
                                                <td>{{ $product -> subCat -> subcat_name_en }}</td>
                                                <th>Sub Sub-Category</th>
                                                <td>{{ $product -> subSubCat -> sub_sub_cat_name_en }}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Name English</th>
                                                <td>{{ $product -> product_name_en }}</td>
                                                <th>Product Name English</th>
                                                <td>{{ $product -> product_name_bn }}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Code</th>
                                                <td>{{ $product -> product_code }}</td>
                                                <th>Product Quantity</th>
                                                <td>{{ $product -> product_qty }}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Tags English</th>
                                                <td>{{ $product -> product_tags_en }}</td>
                                                <th>Product Tags Bangla</th>
                                                <td>{{ $product -> product_tags_bn }}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Color English</th>
                                                <td>{{ $product -> product_color_en }}</td>
                                                <th>Product Color Bangla</th>
                                                <td>{{ $product -> product_color_bn }}</td>
                                            </tr>
                                            <tr>
                                                <th>Selling Price</th>
                                                <td>{{ $product -> selling_price }}</td>
                                                <th>Discount Price</th>
                                                <td>{{ $product -> discount_price }}</td>
                                            </tr>
                                      </tbody>
                                    </table>
                                    <h3>Product Description and Images Part</h3>
                                    <table class="table display responsive nowrap">
                                      <thead>
                                        <tr>
                                            <th class="wd-25p">Name</th>
                                            <th class="wd-75p">Details</th>
                                        </tr>
                                      </thead>
                                      <tbody class="brand_table">
                                            <tr>
                                                <th>Short Description English</th>
                                                <td>{!! htmlspecialchars_decode($product -> shor_des_en) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Short Description Bangla</th>
                                                <td>{!! htmlspecialchars_decode($product ->  shor_des_bn) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Long Description English</th>
                                                <td>{!! htmlspecialchars_decode($product -> long_des_en) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Long Description Bangla</th>
                                                <td>{!! htmlspecialchars_decode($product -> long_des_bn) !!}</td>
                                            </tr>
                                            <tr>
                                                <th>Product Thumbnail</th>
                                                <td>
                                                    <img class="image_thumbnail rounded" width="100px" height="80px" src="{{ asset( $product -> product_thumb) }}" alt="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th>Product Multiple Image</th>
                                                <td>
                                                   @foreach ($multi as $item)
                                                     <img class="image_thumbnail rounded" width="100px" height="80px" src="{{ asset( $item -> photo) }}" alt="">
                                                   @endforeach
                                                </td>
                                            </tr>
                                      </tbody>
                                    </table>
                                    <h3>Product Options</h3>
                                    <div class="form-group pt-4">
                                        <label class="ckbox">
                                            <input readonly {{ $product -> hot_deals == 1 ? 'checked' : '' }} type="checkbox"><span>Hot Deals</span>
                                        </label>
                                        <label readonly class="ckbox">
                                            <input {{ $product -> featured == 1 ? 'checked' : '' }} type="checkbox"><span>Featured</span>
                                        </label>
                                        <label readonly class="ckbox">
                                            <input {{ $product -> special_offer == 1 ? 'checked' : '' }} type="checkbox"><span>Special Offer</span>
                                        </label>
                                        <label readonly class="ckbox">
                                            <input {{ $product -> special_deals == 1 ? 'checked' : '' }} type="checkbox"><span>Special Deals</span>
                                        </label>
                                        <label readonly class="ckbox">
                                            <input {{ $product -> status == 1 ? 'checked' : '' }} type="checkbox"><span>Active Status</span>
                                        </label>
                                    </div>
                                  </div><!-- table-wrapper -->
                            </div>
                          </div><!-- card -->
                    </div>
                </div>
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->
@endsection
