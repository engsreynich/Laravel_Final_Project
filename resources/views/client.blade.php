<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Client</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('P/Profusion-1.0.0/images/fevicon.png') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.carousel.min.css') }}">
      <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('P/Profusion-1.0.0/images/logo.png') }}"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                     <div class="user_icon"><a href="#"><i class="fa fa-user" aria-hidden="true"></i></a></div>
                     <div class="user_icon"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
                  </form>
                  <div class="call_btn"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +1234567890</span></a></div>
               </div>
            </nav>
         </div>
      </div>
      <!-- header section end -->
      <!-- client section start -->
      <div class="client_sectiion">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="client_taital">Testimonial</h1>
               </div>
            </div>
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <ol class="carousel-indicators">
                  <li data-target="#custom_slider" data-slide-to="0" class="active"></li>
                  <li data-target="#custom_slider" data-slide-to="1"></li>
                  <li data-target="#custom_slider" data-slide-to="2"></li>
                  <li data-target="#custom_slider" data-slide-to="3"></li>
               </ol>
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Jonyro <span style="float: right;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text">Jonyro <span style="float: left;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Jonyro <span style="float: right;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text">Jonyro <span style="float: left;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Jonyro <span style="float: right;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text">Jonyro <span style="float: left;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="client_section_2">
                        <div class="client_main">
                           <div class="client_left">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                           <div class="client_right">
                              <h3 class="name_text">Jonyro <span style="float: right;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                        </div>
                        <div class="client_main_2">
                           <div class="client_right_2">
                              <h3 class="name_text">Jonyro <span style="float: left;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}"></span></h3>
                              <p class="dolor_text">Voluptate</p>
                              <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu </p>
                           </div>
                           <div class="client_left_2">
                              <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- footer section start -->
      <div class="footer_section">
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
               <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="400" frameborder="0" style="border:0; width: 100%;" allowfullscreen=""></iframe>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a> Distribution by <a href="https://themewagon.com/">Themewagon</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/popper.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('P/Profusion-1.0.0/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('P/Profusion-1.0.0/js/custom.js') }}"></script>
      <!-- javascript --> 
      <script src="{{ asset('P/Profusion-1.0.0/js/owl.carousel.js') }}"></script>
      <script>
         $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 35,
            nav: true,
            center: true,
            responsive: {
               0: {
                  items: 1,
                  margin: 0
               },
               575: {
                  items: 1,
                  margin: 0
               },
               768: {
                  items: 3,
                  margin: 0
               },
               1000: {
                  items: 3
               }
            }
         });
      </script>
   </body>
</html>