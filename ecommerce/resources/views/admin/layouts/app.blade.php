<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Starlight">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/starlight/img/starlight-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/starlight">
    <meta property="og:title" content="Starlight">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/starlight/img/starlight-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">

    <title>@section('title')

    @show</title>

    <!-- vendor css -->
    <link href="{{ asset('assets/backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/toastr.min.css">
    <link href="{{ asset('assets/backend') }}/lib/datatables/jquery.dataTables.css" rel="stylesheet">
    <link href="{{ asset('assets/backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    <!-- Starlight CSS -->
    <link rel="stylesheet" href="{{ asset('assets/backend') }}/css/starlight.css">
  </head>

  <body>
    {{-- Start Left Side Bar --}}
    @include('admin.layouts.partials.sidebar')

    {{-- Header --}}
    @include('admin.layouts.partials.header')

    {{-- Right Side Bar --}}

    @include('admin.layouts.partials.right_sidebar')

    @section('content')

    @show

    <script src="{{ asset('assets/backend') }}/lib/jquery/jquery.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/popper.js/popper.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/datatables/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/datatables-responsive/dataTables.responsive.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/select2/js/select2.min.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
    <script>
        $(function(){
          'use strict';

          $('#datatable1').DataTable({
            responsive: true,
            language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
              lengthMenu: '_MENU_ items/page',
            }
          });

        //   $('#datatable2').DataTable({
        //     bLengthChange: false,
        //     searching: false,
        //     responsive: true
        //   });

          // Select2
          $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
      </script>
    <script src="{{ asset('assets/backend') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/rickshaw/rickshaw.min.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('assets/backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>
    <script src="{{ asset('assets/backend') }}/js/toastr.min.js"></script>
    <script src="{{ asset('assets/backend') }}/js/starlight.js"></script>
    <script src="{{ asset('assets/backend') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('assets/backend') }}/js/dashboard.js"></script>

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
