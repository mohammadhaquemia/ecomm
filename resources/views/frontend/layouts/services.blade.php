
@extends('frontend.layouts.master')

@section('title', 'Home -')

@section('content')

<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">

    <!-- bootstrap core css -->

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Responsive styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" />

    

   
</head>

<body>
<div class="hero_area">
   <div class="container">
       <h1 class="text-center">Services</h1>


   </div>
    <!-- jQery -->
    <script src="{{ asset('assets/js/jquery-3.4.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{ asset('assets/js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{ asset('assets/js/bootstrap.js')}}"></script>
    <!-- custom js -->
    <script src="{{ asset('assets/js/custom.js')}}"></script> 
</body>

</html>
@endsection
