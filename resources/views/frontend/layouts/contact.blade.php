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
      <div>
         <!-- inner page section -->
         <section class="inner_page_head">
            <div class="container_fuild">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <h3>Contact us</h3>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end inner page section -->
         <!-- why section -->
         <section class="why_section layout_padding">
            <div class="container">
               @if(session()->has('success'))
               <div class="alert alert-success">
                  {{ session()->get('success') }}
               </div>
               @endif
               <div class="row">
                  <div class="col-lg-8 offset-lg-2">
                     <div class="full">
                        <form action="{{ route('send.email') }}" method="POST">
                           @csrf
                           <fieldset>
                              <input type="text" placeholder="Enter your full name" name="name" required />
                              <input type="email" placeholder="Enter your email address" name="email" required />
                              <input type="text" placeholder="Enter subject" name="subject" required />
                              <textarea name="message" placeholder="Enter your message" required></textarea>
                              <input type="submit" value="Submit" />
                           </fieldset>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end why section -->
         <!-- arrival section -->
         <section class="arrival_section">
            <div class="container">
               <div class="box">
                  <div class="arrival_bg_box">
                     <img src="{{ asset('assets/images/arrival-bg.png')}}" alt="">
                  </div>
                  <div class="row">
                     <div class="col-md-6 ml-auto">
                        <div class="heading_container remove_line_bt">
                           <h2>
                              #NewArrivals
                           </h2>
                        </div>
                        <p style="margin-top: 20px;margin-bottom: 30px;">
                           Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                        </p>
                        <a href="">
                           Shop Now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- end arrival section -->
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