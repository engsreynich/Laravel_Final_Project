<!-- resources/views/pages/client.blade.php -->
@extends('layouts.app')

@section('title', 'Client | Profusion')

@section('content')
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
@endsection