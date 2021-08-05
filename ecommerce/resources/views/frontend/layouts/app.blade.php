<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta name="description" content="">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <meta name="author" content="">
      <meta name="keywords" content="MediaCenter, Template, eCommerce">
      <meta name="robots" content="all">
      <title>@section('title')

      @show</title>
      <!-- Bootstrap Core CSS -->
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap.min.css">
      <!-- Customizable CSS -->
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/main.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/blue.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.carousel.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/owl.transitions.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/animate.min.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/rateit.css">
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/bootstrap-select.min.css">
      <!-- Icons/Glyphs -->
      <link rel="stylesheet" href="{{ asset('assets/frontend') }}/css/font-awesome.css">
      {{-- <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css"> --}}
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
      <style>
          .swal2-popup.swal2-toast .swal2-success {
                font-size: 18px;
            }
            .swal2-popup.swal2-toast .swal2-close {
                font-size: 36px;
            }
            .swal2-popup.swal2-toast .swal2-title {
                font-size: 18px !important;
            }
      </style>
   </head>
   <body class="cnt-home">
      <!-- ============================================== HEADER ============================================== -->
      @include('frontend.layouts.partials.header')
      <!-- ============================================== HEADER : END ============================================== -->
      <div class="body-content outer-top-xs" id="top-banner-and-menu">
         <div class="container">

        @section('content')

        @show


            <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('frontend.layouts.partials.brand')
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->


         </div>
         <!-- /.container -->
      </div>
      <!-- /#top-banner-and-menu -->
      <!-- ============================================================= FOOTER ============================================================= -->
        @include('frontend.layouts.partials.footer')
      <!-- ============================================================= FOOTER : END============================================================= -->

      <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="pname"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" style="width:16rem;">
                            <img id="pimage" src="" class="card-img-top"  alt="" style="height: 200px;">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-group">
                            <li class="list-group-item">Price: <strong class="text-danger">$<span id="pprice"></span> </strong>
                                <del id="pdprice">$</del>
                            </li>
                            <li class="list-group-item">Product Code: <strong id="pcode"></strong></li>
                            <li class="list-group-item">Category: <strong id="pcategory"></strong></li>
                            <li class="list-group-item">Brand: <strong id="pbrand"></strong> </li>
                            <li class="list-group-item">Stock: <span class="badge badge-pill badge-success" id="aviable" style="background:green; color:white;"></span>
                                <span class="badge badge-pill badge-danger" id="stockout" style="background:red; color:white;"></span>
                            </li>
                          </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group" id="cartModalColorArea">
                            <label for="color">Select Color</label>
                            <select id="cartModalColor" class="form-control" id="color" name="color">
                            </select>
                        </div>
                          <div class="form-group" id="cartModalSizeArea">
                            <label for="size">Select Size</label>
                            <select id="cartModalSize" class="form-control" id="size" name="size">
                            </select>
                          </div>
                          <div class="form-group">
                            <label for="qty">Quantity</label>
                            <input type="number" class="form-control" id="qty" value="1" min="1">
                          </div>
                          <input type="hidden" id="addToCartProductId">
                          <button type="submit" class="btn btn-danger" id="addTocartBtn">Add To Cart</button>
                          </div>
                    </div>
            </div>
        </div>
        </div>
    </div>



      <!-- For demo purposes – can be removed on production -->
      <!-- For demo purposes – can be removed on production : End -->
      <!-- JavaScripts placed at the end of the document so the pages load faster -->
      <script src="{{ asset('assets/frontend') }}/js/jquery-1.11.1.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/bootstrap.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/bootstrap-hover-dropdown.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/owl.carousel.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/echo.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/jquery.easing-1.3.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/bootstrap-slider.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/jquery.rateit.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/lightbox.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/bootstrap-select.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/wow.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/sweetalert2@11.js"></script>
      <script src="{{ asset('assets/backend') }}/js/toastr.min.js"></script>
      <script src="{{ asset('assets/frontend') }}/js/scripts.js"></script>

      <script>
            @if(Session::has('message'))
                var type = "{{ Session::get('alert-type', 'info') }}";
                switch(type){
                    case 'info':
                        toastr.info("{{ Session::get('message') }}");
                        break;

                    case 'warning':
                        toastr.warning("{{ Session::get('message') }}");
                        break;

                    case 'success':
                        toastr.success("{{ Session::get('message') }}");
                        break;

                    case 'error':
                        toastr.error("{{ Session::get('message') }}");
                        break;
                }
            @endif
      </script>
        @include('sweetalert::alert')

    <script>
        $.ajaxSetup({
            headers:{
                'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
            }
        })

        // ======== Start Product veiw with modal =========
        function productView(id){
            $.ajax({
                type: "GET",
                url: "product/view/modal/"+id,
                dataType: "json",
                success: function (response) {
                    $('#pname').text(response.product.product_name_en);
                    $('#pprice').text(response.product.selling_price);
                    $('#pcode').text(response.product.product_code);
                    $('#pcategory').text(response.product.cat.cat_name_en);
                    $('#pbrand').text(response.product.brand.brand_name_en);
                    $('#pimage').attr('src', response.product.product_thumb);
                    $('#addToCartProductId').val(id);
                    $('#qty').val(1);

                    //stock
                        if (response.product.product_qty > 0) {
                                $('#aviable').text('');
                                $('#stockout').text('');
                                $('#aviable').text('In Stock');
                        }else{
                                $('#aviable').text('');
                                $('#stockout').text('');
                                $('#stockout').text('Out Of Stock');
                        }

                    // Product price
                    if (response.product.discount_price == null) {
                        $('#pprice').text('');
                        $('#pdprice').text('');
                        $('#pprice').text(response.product.selling_price);
                    }else{
                        $('#pprice').text(response.product.discount_price);
                        $('#pdprice').text(response.product.selling_price);
                     }

                    // Product color
                    $('#cartModalColor').empty();
                    $.each(response.product_color, function (key, value) {
                        $('#cartModalColor').append('<option value="'+value+'">'+value+'</option>')
                    });

                    // Product size
                    $('#cartModalSize').empty();
                    $.each(response.product_size, function (key, value) {
                        $('#cartModalSize').append('<option value="'+value+'">'+value+'</option>')
                        if (response.product_size == "") {
                            $('#cartModalSizeArea').hide();
                        }else{
                            $('#cartModalSizeArea').show();
                        }
                    });
                }
            });
        }

        // ======== Add To Cart Product  =========

        $('#addTocartBtn').click(function (e) {
            e.preventDefault();
            var id = $('#addToCartProductId').val();
            var color = $('#cartModalColor option:selected').text();
            var size = $('#cartModalSize option:selected').text();
            var qty = $('#qty').val();
            var name = $('#pname').text();
            addToCart(id, color, size, qty, name);
        });

        function addToCart(id, color, size, qty, name){
            $.ajax({
                type: "POST",
                url: "/cart/data/store/"+id,
                data: {
                    color: color,
                    size : size,
                    qty  : qty,
                    name  : name,
                },
                dataType: "json",
                success: function (response) {
                    $('#cartModal').modal('hide');
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'success',
                        title: 'Product Added To Cart',
                        showConfirmButton: false,
                        timer: 3000
                    })
                },
                error: function (error) {
                    $('#cartModal').modal('hide');
                    Swal.fire({
                        toast: true,
                        position: 'top-end',
                        icon: 'error',
                        title: 'Product Added To Cart Faield',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }
            });
        }

        // ======== Mini cart view  =========

        function miniCartView(){
            $.ajax({
                type: "GET",
                url: "/product/minicart/show",
                dataType: "json",
                success: function (response) {
                   $.each(response.carts, function (kay, value) {
                    $('<row>').html('<div class="col-xs-4">'+
                        '<div class="image">'+
                        '<a href="detail.html"><img src='+value.options.image+' alt=""></a>'+
                        '</div>'+
                        '</div>'+
                        '<div class="col-xs-7">'+
                        '<h3 class="name"><a href="index8a95.html?page-detail">'+value.name+'</a></h3>'+
                        '<div class="price">Tk '+value.price+'</div>'+
                        '</div>'+
                        '<div class="col-xs-1 action">'+
                        '<a href="#"><i class="fa fa-trash"></i></a>'+
                        '</div>'
                        ).appendTo('#miniCart');
                   });
                }
            });
        }
        miniCartView()
    </script>
   </body>
</html>
