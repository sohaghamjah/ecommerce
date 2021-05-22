@extends('admin.layouts.app')

@section('title', 'Admin - Add Product')

@section('content')
        <!-- ########## START: MAIN PANEL ########## -->
        <div class="sl-mainpanel">
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Dokan</a>
              <span class="breadcrumb-item active">Add Product</span>
            </nav>

            <div class="sl-pagebody">
                <div class="card">
                        <div class="card-header">
                            Add Product
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Select Brand<span class="tx-danger">*</span></label>
                                            <select name="brand_id" class="form-control select2-show-search" data-placeholder="Choose Brand" tabindex="-1" aria-hidden="true">
                                                <option label="Choose one"></option>
                                                @foreach ($brand as $item)
                                                     <option value="{{ $item -> id }}">{{ ucwords($item -> brand_name_en) }}</option>
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
                                            <input class="form-control" type="text" name="product_name_en" value="{{ old('product_name_en') }}" placeholder="Enter Product Name English">
                                            @error('product_name_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Name Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_name_bn" value="{{ old('product_name_bn') }}" placeholder="Enter Product Name Bangla">
                                            @error('product_name_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Code: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_code" value="{{ old('product_code') }}" placeholder="Enter Product Code">
                                            @error('product_code')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Quantity: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_qty" value="{{ old('product_qty') }}" placeholder="Enter Product Quantity">
                                            @error('product_qty')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Tags English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_tags_en" data-role="tagsinput" value="{{ old('product_tags_en') }}" placeholder="Enter Product Tags English">
                                            @error('product_tags_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Tags Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_tags_bn" data-role="tagsinput" value="{{ old('product_tags_bn') }}" placeholder="Enter Product Tags Bangla">
                                            @error('product_tags_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_size_en" data-role="tagsinput" value="{{ old('product_size_en') }}" placeholder="Enter Product Size English">
                                            @error('product_size_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Size Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_size_bn" data-role="tagsinput" value="{{ old('product_size_bn') }}" placeholder="Enter Product Size Bangla">
                                            @error('product_size_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color English: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_color_en" data-role="tagsinput" value="{{ old('product_color_en') }}" placeholder="Enter Product Color English">
                                            @error('product_color_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Product Color Bangla: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="product_color_bn" data-role="tagsinput" value="{{ old('product_color_bn') }}" placeholder="Enter Product Color Bangla">
                                            @error('product_color_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Selling Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="selling_price" value="{{ old('selling_price') }}" placeholder="Enter Selling Price">
                                            @error('selling_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Discount Price: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="text" name="discount_price" value="{{ old('discount_price') }}" placeholder="Enter Discount Price">
                                            @error('discount_price')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Main Thumnail: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="product_thumb" value="{{ old('product_thumb') }}"  onchange="mainThambUrl(this)">
                                            @error('product_thumb')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <img src="" id="mainThmb" style="margin: 5px; border: 3px solid #dadada; border-radius: 5px;">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="form-control-label">Multiple Image: <span class="tx-danger">*</span></label>
                                            <input class="form-control" type="file" name="multi_img[]" value="{{ old('multi_img') }}" multiple id="multiImage">
                                            @error('multi_img')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                            <div>
                                                <div id="preview_img" class="row" style="margin: 5px;"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Short Description English: <span class="tx-danger">*</span></label>
                                            <textarea name="short_desc_en" id="summernote"></textarea>
                                            @error('short_desc_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Short Description Bangla: <span class="tx-danger">*</span></label>
                                            <textarea name="short_desc_bn" id="summernote2"></textarea>
                                            @error('short_desc_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Long Description English: <span class="tx-danger">*</span></label>
                                            <textarea name="long_desc_en" id="summernote3"></textarea>
                                            @error('long_desc_en')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">:Long Description Bangla: <span class="tx-danger">*</span></label>
                                            <textarea name="long_desc_bn" id="summernote4"></textarea>
                                            @error('long_desc_bn')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="hot_deals" value="1" type="checkbox"><span>Hot Deals</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="featured" value="1" type="checkbox"><span>Featured</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="special_offer" value="1" type="checkbox"><span>Special Offer</span>
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label class="ckbox">
                                                <input name="special_deals" value="1" type="checkbox"><span>Special Deals</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input style="cursor: pointer" type="submit" class="btn btn-info" name="submit" value="Add Product">
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

        <script>
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
        </script>
@endsection
