@extends('admin.layouts.app')

@section('title', 'Admin - Edit Product')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Edit Product</span>
            </nav>

            <div class="sl-pagebody">
                <div class="card">
                        <div class="card-header">
                            Edit Product
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.update') }}" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product -> id }}">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Brand<span class="tx-danger">*</span></label>
                                            <select name="brand_id" class="form-control select2-show-search" data-placeholder="Choose Brand" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                @foreach ($brand as $item)
                                                     <option value="{{ $item -> id }}" {{ $item -> id == $product -> brand_id ? 'selected' : '' }}>{{ ucwords($item -> brand_name_en) }}</option>
                                                @endforeach
                                            </select>
                                            @error('brand_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Category<span class="tx-danger">*</span></label>
                                            <select name="cat_id" class="form-control select2-show-search" data-placeholder="Choose Category" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                @foreach ($cat as $item)
                                                     <option value="{{ $item -> id }}">{{ ucwords($item -> cat_name_en) }}</option>
                                                @endforeach
                                            </select>
                                            @error('cat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Sub Category<span class="tx-danger">*</span></label>
                                            <select name="subcat_id" class="form-control select2-show-search" data-placeholder="Choose Sub category" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                {{-- @foreach ($cat as $item)
                                                     <option value="{{ $item -> id }}">{{ ucwords($item -> cat_name_en) }}</option>
                                                @endforeach --}}
                                            </select>
                                            @error('subcat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Sub Sub Category<span class="tx-danger">*</span></label>
                                            <select name="subsubcat_id" class="form-control select2-show-search" data-placeholder="Choose Sub Sub Category" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                {{-- @foreach ($cat as $item)
                                                     <option value="{{ $item -> id }}">{{ ucwords($item -> cat_name_en) }}</option>
                                                @endforeach --}}
                                            </select>
                                            @error('subsubcat_id')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Name English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_name_en" value="{{ $product -> product_name_en }}" placeholder="Enter Product Name English">
                                            @error('product_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_name_bn" value="{{ $product -> product_name_bn }}" placeholder="Enter Product Name Bangla">
                                            @error('product_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Tags English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_tags_en" data-role="tagsinput" value="{{ $product -> product_tags_en }}" placeholder="Enter Product Tags English">
                                            @error('product_tags_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Tags Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_tags_bn" data-role="tagsinput" value="{{ $product -> product_tags_bn }}" placeholder="Enter Product Tags Bangla">
                                            @error('product_tags_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_size_en" data-role="tagsinput" value="{{ $product -> product_size_en }}" placeholder="Enter Product Size English">
                                            @error('product_size_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_size_bn" data-role="tagsinput" value="{{ $product -> product_size_bn }}" placeholder="Enter Product Size Bangla">
                                            @error('product_size_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_color_en" data-role="tagsinput" value="{{ $product -> product_color_en }}" placeholder="Enter Product Color English">
                                            @error('product_color_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_color_bn" data-role="tagsinput" value="{{ $product -> product_color_bn }}" placeholder="Enter Product Color Bangla">
                                            @error('product_color_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_code" value="{{ $product -> product_code }}" placeholder="Enter Product Code">
                                            @error('product_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_qty" value="{{ $product -> product_qty }}" placeholder="Enter Product Quantity">
                                            @error('product_qty')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="selling_price" value="{{ $product -> selling_price }}" placeholder="Enter Selling Price">
                                            @error('selling_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="discount_price" value="{{ $product -> discount_price }}" placeholder="Enter Discount Price">
                                            @error('discount_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Short Description English: <span class="tx-danger">*</span></label>
                                            <textarea name="short_desc_en" id="summernote">
                                                {{ $product -> shor_des_en }}
                                            </textarea>
                                            @error('short_desc_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Short Description Bangla: <span class="tx-danger">*</span></label>
                                            <textarea name="short_desc_bn" id="summernote2">
                                                {{ $product -> shor_des_bn }}
                                            </textarea>
                                            @error('short_desc_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Long Description English: <span class="tx-danger">*</span></label>
                                            <textarea name="long_desc_en" id="summernote3">
                                                {{ $product -> long_des_en }}
                                            </textarea>
                                            @error('long_desc_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">:Long Description Bangla: <span class="tx-danger">*</span></label>
                                            <textarea name="long_desc_bn" id="summernote4">
                                                {{ $product -> shor_des_bn }}
                                            </textarea>
                                            @error('long_desc_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="hot_deals" value="1" type="checkbox" {{ $product -> hot_deals == 1 ? 'checked' : '' }}><span>Hot Deals</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="featured" value="1" {{ $product -> featured == 1 ? 'checked' : '' }} type="checkbox"><span>Featured</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="special_offer" value="1" {{ $product -> special_offer == 1 ? 'checked' : '' }} type="checkbox"><span>Special Offer</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="special_deals" value="1" {{ $product -> special_deals == 1 ? 'checked' : '' }} type="checkbox"><span>Special Deals</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Product">
                                </div>
                            </form>
                            {{-- Main thumbnail update --}}
                            <form action="{{ route('admin.product.main-thumb.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product -> id }}">
                                <div class="row row-sm" style="margin-top: 30px">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Main thumbnail update</h3>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="multi_image">
                                                    <img class="card-img-top borderd img-thumbnail multi_img_delete" src="{{ asset($product -> product_thumb) }}" alt="Card image cap">
                                                </div>
                                                <div class="mt-4">
                                                    <label class="form-control-label">Change Thumbnain:</label>
                                                    <input onchange="mainThambUrl(this)" class="form-control" type="file" name="thumb">
                                                    <img src="" id="mainThmb" style="margin: 5px; border: 3px solid #dadada; border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Thumbnail">
                                    </div>
                                </div>
                            </form>
                            {{-- Multiple image update --}}
                            <form action="{{ route('admin.product.multi-img.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product -> id }}">
                                <div class="row row-sm" style="margin-top: 30px">
                                    <div class="row">
                                        <div class="col">
                                            <h3>Multiple image update</h3>
                                            <br>
                                        </div>
                                    </div>
                                    <div class="row">
                                    @foreach ($multiImg as $item)
                                        <div class="col-md-3">
                                            <div class="card">
                                                <div class="multi_image">
                                                    <img class="card-img-top borderd img-thumbnail multi_img_delete" src="{{ asset($item -> photo) }}" alt="Card image cap">
                                                    <div class="multi_img_delete_btn">
                                                        <a id="delete_confirm" style="font-size: 18px" title="Delete Data" href="{{ url('admin/product/manage-product/multi-img/delete/'. $item -> id) }}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <label class="form-control-label">Change Image:</label>
                                                    <input onchange="mulTiImageUrl(this)" class="form-control" type="file" name="multiimage[{{ $item -> id }}]">
                                                    <img src="" class="multiImage{{ $item -> id }}" style="margin: 5px; border: 3px solid #dadada; border-radius: 5px;">
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-md-3">
                                       <div class="d-flex justify-content-center align-items-center h-100">
                                            <div class="form-group">
                                                <label class="form-control-label">Add Image:</label>
                                                <input class="form-control" type="file" name="singleimage">
                                             </div>
                                       </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <br>
                                        <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Update Image">
                                    </div>
                                </div>
                            </form>
                        </div>
                </div><!-- card -->
            </div><!-- sl-pagebody -->
          </div><!-- sl-mainpanel -->
          <!-- ########## END: MAIN PANEL ########## -->


          <script src="{{ asset('assets/backend/lib/js/jquery-2.2.4.min.js') }}"></script>
          <script>
              $(document).ready(function(){
                //   Category
                  $('select[name="cat_id"]').on('change', function(){
                      var cat_id = $(this).val();
                      if(cat_id){
                          $.ajax({
                              type    : "GET",
                              url     : "{{ url('admin/categories/sub-category/ajax/') }}/"+cat_id,
                              dataType: "json",
                              success : function (response) {
                                $('select[name="subsubcat_id"]').html('')
                                  var d = $('select[name="subcat_id"]').empty();
                                  $.each(response, function (key, value) {
                                      $('select[name="subcat_id"]').append('<option value="'+value.id+'">'+value.subcat_name_en+'</option>')
                                  })
                              }
                          });
                      }
                  })
                // Sub Category
                $('select[name="subcat_id"]').on('change', function(){
                      var subcat_id = $(this).val();
                      if(subcat_id){
                          $.ajax({
                              type    : "GET",
                              url     : "{{ url('admin/sub-subcategory/ajax/') }}/"+subcat_id,
                              dataType: "json",
                              success : function (response) {
                                  var d = $('select[name="subsubcat_id"]').empty();
                                  $.each(response, function (key, value) {
                                      $('select[name="subsubcat_id"]').append('<option value="'+value.id+'">'+value.sub_sub_cat_name_en+'</option>')
                                  })
                              }
                          });
                      }
                  })
              })
          </script>
          {{-- Image show --}}
          <script>
            $(document).ready(function(){
             $('#multiImage').on('change', function(){ //on file input change
                if (window.File && window.FileReader && window.FileList && window.Blob) //check File API supported browser
                {
                    var data = $(this)[0].files; //this file data
                    $.each(data, function(index, file){ //loop though each file
                        if(/(\.|\/)(gif|jpe?g|png)$/i.test(file.type)){ //check supported file type
                            var fRead = new FileReader(); //new filereader
                            fRead.onload = (function(file){ //trigger function on successful read
                            return function(e) {
                                var img = $('<img/>').addClass('thumb').attr('src', e.target.result).width(60)
                            .height(60); //create image element
                                $('#preview_img').append(img); //append image to output element
                            };
                            })(file);
                            fRead.readAsDataURL(file); //URL representing the file's data.
                        }
                    });
                }else{
                    alert("Your browser doesn't support File API!"); //if File API is absent
                }
             });
            });
        </script>

        {{-- <script>
            function mainThambUrl(input){
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('#mainThmb').attr('src',e.target.result).width(60)
                            .height(60);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }

            function mulTiImageUrl(input){

                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e){
                        $('.multiImage{{  }}').attr('src',e.target.result).width(60)
                            .height(60);
                    };
                    reader.readAsDataURL(input.files[0]);
                }
            }
        </script> --}}
@endsection
