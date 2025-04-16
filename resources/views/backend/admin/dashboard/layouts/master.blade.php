<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title') {{ config('app.name', 'Ecomm') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
 
 <meta
   content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
   name="viewport"
 />
 <link
   rel="icon"
   href="{{asset('admin/assets/img/kaiadmin/favicon.ico')}}"
   type="image/x-icon"
 />

 <!-- Fonts and icons -->
 <script src="{{asset('admin/assets/js/plugin/webfont/webfont.min.js')}}"></script>
 <script>
   WebFont.load({
     google: { families: ["Public Sans:300,400,500,600,700"] },
     custom: {
       families: [
         "Font Awesome 5 Solid",
         "Font Awesome 5 Regular",
         "Font Awesome 5 Brands",
         "simple-line-icons",
       ],
       urls: ["assets/css/fonts.min.css"],
     },
     active: function () {
       sessionStorage.fonts = true;
     },
   });
 </script>

 <!-- CSS Files -->
 <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}" />
 <link rel="stylesheet" href="{{asset('admin/assets/css/plugins.min.css')}}" />
 <link rel="stylesheet" href="{{asset('admin/assets/css/kaiadmin.min.css')}}" />

 <!-- CSS Just for demo purpose, don't include it in your project -->
 <link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>


    <div class="wrapper">
        <!-- Sidebar  -->
        @include('backend.admin.dashboard.layouts.partials.sidebar')
        <!-- Page Content  -->
        <div class="main-panel">
            <!-- Header -->
            @include('backend.admin.dashboard.layouts.partials.header')

            <div class="container">
                <div class="page-inner">
                    @yield('content')
                </div>
            </div>

            <!-- Footer -->
            @include('backend.admin.dashboard.layouts.partials.footer')
        </div>
    </div>

    <script src="{{asset('assets/js/core/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{asset('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>

    <!-- Chart JS -->
    <script src="{{asset('assets/js/plugin/chart.js/chart.min.js')}}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{asset('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js')}}"></script>

    <!-- Chart Circle -->
    <script src="{{asset('assets/js/plugin/chart-circle/circles.min.js')}}"></script>

    <!-- Datatables -->
    <script src="{{asset('assets/js/plugin/datatables/datatables.min.js')}}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{asset('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{asset('assets/js/plugin/jsvectormap/jsvectormap.min.js')}}"></script>
    <script src="{{asset('assets/js/plugin/jsvectormap/world.js')}}"></script>

    <!-- Sweet Alert -->
    <script src="{{asset('assets/js/plugin/sweetalert/sweetalert.min.js')}}"></script>

    <!-- Kaiadmin JS -->
    <script src="{{asset('assets/js/kaiadmin.min.js')}}"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="{{asset('assets/js/setting-demo.js')}}"></script>
    <script src="{{asset('assets/js/demo.js')}}"></script>
    <script>
      $("#lineChart").sparkline([102, 109, 120, 99, 110, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#177dff",
        fillColor: "rgba(23, 125, 255, 0.14)",
      });

      $("#lineChart2").sparkline([99, 125, 122, 105, 110, 124, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#f3545d",
        fillColor: "rgba(243, 84, 93, .14)",
      });

      $("#lineChart3").sparkline([105, 103, 123, 100, 95, 105, 115], {
        type: "line",
        height: "70",
        width: "100%",
        lineWidth: "2",
        lineColor: "#ffa534",
        fillColor: "rgba(255, 165, 52, .14)",
      });
    </script>
  </body>
</html>
