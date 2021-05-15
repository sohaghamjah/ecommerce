<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- Meta -->
      <meta charset="utf-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
      <meta name="description" content="">
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
      <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css">
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
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
   </body>
</html>
