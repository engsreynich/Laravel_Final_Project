<!-- resources/views/pages/index.blade.php -->
@extends('layout.app')

@section('title', 'Home | Profusion')

@section('content')
    <!-- Banner Section Start -->
    <div class="banner_section layout_padding">
        <div class="container">
           <img src="{{ asset('P/Profusion-1.0.0/images/tutor_banner.jpg') }}" class="banner_img" alt="Banner" style="opacity: 0.8;">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    @for ($i = 0; $i < 4; $i++)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1 class="banner_taital">Start Dance</h1>
                                    <div class="contact_bt"><a href="{{ route('contact') }}">Read More</a></div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Service Section Start -->
    <div class="service_section layout_padding">
        <div class="container">
            <h1 class="service_taital">Our Classes</h1>
            <div class="service_section_2 layout_padding">
                <div class="owl-carousel owl-theme">
                    @php
                        $classes = [
                            ['name' => 'Rock Dance', 'image' => 'img-1.png'],
                            ['name' => 'Hip Hop Dance', 'image' => 'img-2.png'],
                            ['name' => 'Style Dance', 'image' => 'img-1.png'],
                            ['name' => 'Rock Dance', 'image' => 'img-1.png'],
                            ['name' => 'Rock Dance', 'image' => 'img-1.png'],
                            ['name' => 'Hip Hop Dance', 'image' => 'img-2.png'],
                            ['name' => 'Style Dance', 'image' => 'img-1.png'],
                        ];
                    @endphp
                    @foreach ($classes as $class)
                        <div class="item">
                            <div class="image_box">
                                <img src="{{ asset('P/Profusion-1.0.0/images/' . $class['image']) }}" alt="{{ $class['name'] }}" />
                            </div>
                            <h3 class="sound_text">{{ str_replace(' ', '<br>', $class['name']) }}</h3>
                            <div class="buy_bt"><a href="#">Read More</a></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Service Section End -->

    <!-- About Section Start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_main">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="about_taital">About Our Dance Studio</h1>
                        <p class="about_text">English. Many desktop publishing <br>packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <p class="about_text_1">using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                        <div style="text-align: center; margin: 24px 0;">
                            <img src="{{ asset('P/Profusion-1.0.0/images/forparent.png') }}" alt="For Parent" style="max-width:500px; width:100%; height:auto; display:inline-block;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->

    <!-- Price Section Start -->
    <div class="price_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="price_taital">Our Price</h1>
                </div>
            </div>
            <div class="price_section_2">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="first_price_text">First Price</h3>
                        <div class="price_box">
                            <div class="taital_main">
                                <h4 class="rate_text"><span style="color: #f6815e;">$</span>500</h4>
                                <p class="month_text">/one month</p>
                            </div>
                            <p class="dummy_text">Passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                            <div class="readmore_bt"><a href="#">Join Now</a></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h3 class="first_price_text">Second Price</h3>
                        <div class="price_box">
                            <div class="taital_main">
                                <h4 class="rate_text"><span style="color: #f6815e;">$</span>1000</h4>
                                <p class="month_text">/one month</p>
                            </div>
                            <p class="dummy_text">Passages of Lorem Ipsum available, but the majority have suffered alteration</p>
                            <div class="readmore_bt"><a href="#">Join Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Price Section End -->

    <!-- Client Section Start -->
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
                    @for ($i = 0; $i < 4; $i++)
                        <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                            <div class="client_section_2">
                                <div class="client_main">
                                    <div class="client_left">
                                        <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}" alt="Client"></div>
                                    </div>
                                    <div class="client_right">
                                        <h3 class="name_text">Jonyro <span style="float: right;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}" alt="Icon"></span></h3>
                                        <p class="dolor_text">Voluptate</p>
                                        <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu</p>
                                    </div>
                                </div>
                                <div class="client_main_2">
                                    <div class="client_right_2">
                                        <h3 class="name_text">Jonyro <span style="float: left;"><img src="{{ asset('P/Profusion-1.0.0/images/quick-icon.png') }}" alt="Icon"></span></h3>
                                        <p class="dolor_text">Voluptate</p>
                                        <p class="lorem_text">consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation eu</p>
                                    </div>
                                    <div class="client_left_2">
                                        <div class="client_img"><img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}" alt="Client"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- Client Section End -->

    <!-- Contact Section Start -->
    <div class="contact_section layout_padding">
        <div class="container">
            <h1 class="contact_taital">Get In Touch</h1>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="contact_section_2">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="contact_main layout_padding">
                            <form action="{{ route('contact.submit') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Name" name="name" value="{{ old('name') }}" required>
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" class="email-bt" placeholder="Phone Number" name="phone" value="{{ old('phone') }}" required>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" class="email-bt" placeholder="Email" name="email" value="{{ old('email') }}" required>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" required>{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </form>
                             <div class="send_bt"><a href="#">Send Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section End -->
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            // Initialize Bootstrap Carousel
            $('#carouselExampleIndicators').carousel({
                interval: 5000 // Adjust slide interval as needed
            });

            // Initialize Owl Carousel
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
        });
    </script>
@endsection