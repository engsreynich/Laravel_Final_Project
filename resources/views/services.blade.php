<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <title>Services</title>

      <!-- Styles -->
      <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/bootstrap.min.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/style.css') }}">
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/responsive.css') }}">
      <link rel="icon" href="{{ asset('P/Profusion-1.0.0/images/fevicon.png') }}" type="image/gif" />
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/jquery.mCustomScrollbar.min.css') }}">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>

      <!-- Header -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('P/Profusion-1.0.0/images/logo.png') }}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                  <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/about') }}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/services') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/client') }}">Client</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="user_icon"><a href="#"><i class="fa fa-user"></i></a></div>
                     <div class="user_icon"><a href="#"><i class="fa fa-search"></i></a></div>
                  </form>
                  <div class="call_btn">
                     <a href="#"><i class="fa fa-phone"></i><span class="padding_left10">Call : +1234567890</span></a>
                  </div>
               </div>
            </nav>
         </div>
      </div>

      <!-- Services -->
      <div class="service_section layout_padding">
         <div class="container">
            <h1 class="service_taital">Our Classes</h1>
            <div class="service_section_2 layout_padding">
               <div class="owl-carousel owl-theme">

                  @php
                    $images = [
                        'Rock' => 'img-1.png',
                        'Hip Hop' => 'img-2.png',
                        'Style' => 'img-3.webp', // Make sure this image exists
                    ];
                @endphp

                @foreach(['Rock', 'Hip Hop', 'Style', 'Rock', 'Rock', 'Hip Hop', 'Style'] as $style)
                    <div class="item">
                        <div class="image_box">
                            <img src="{{ asset('P/Profusion-1.0.0/images/' . ($images[$style] ?? 'img-1.png')) }}" alt="{{ $style }} Dance" />
                        </div>
                        <h3 class="sound_text">{{ $style }} <br> Dance</h3>
                        <div class="buy_bt"><a href="#">Read More</a></div>
                    </div>
                @endforeach

               </div>
            </div>
         </div>
      </div>

      <!-- Footer -->
      <div class="footer_section margin_top90">
         <div class="location_bg">
            <div class="container">
               <div class="location_main">
                  <ul>
                     <li>
                        <a href="#"><img src="{{ asset('P/Profusion-1.0.0/images/map-icon.png') }}">
                        <span class="padding_15">Location</span></a>
                     </li>
                     <li>
                        <a href="#"><img src="{{ asset('P/Profusion-1.0.0/images/call-icon.png') }}">
                        <span class="padding_15">Call +01 1234567890</span></a>
                     </li>
                     <li>
                        <a href="#"><img src="{{ asset('P/Profusion-1.0.0/images/mail-icon.png') }}">
                        <span class="padding_15">demo@gmail.com</span></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <div class="map_main">
            <div class="map-responsive">
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&amp;q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>

      <!-- Copyright -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by 
               <a href="https://html.design">Free HTML Templates</a> Distribution by 
               <a href="https://themewagon.com/">Themewagon</a>
            </p>
         </div>
      </div>

      <!-- Scripts -->
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/popper.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/plugin.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/custom.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/owl.carousel.js') }}"></script>

      <script>
         $('.owl-carousel').owlCarousel({
            loop:true,
            margin:35,
            nav:true,
            center: true,
            responsive:{
               0:{ items:1, margin:0 },
               575:{ items:1, margin:0 },
               768:{ items:3, margin:0 },
               1000:{ items:3 }
            }
         });
      </script>

   </body>
</html>
