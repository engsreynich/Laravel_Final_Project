<!-- resources/views/pages/about.blade.php -->
@extends('layouts.app')

@section('title', 'About | Profusion')

@section('content')
    <!-- About Section Start -->
    <div class="about_section layout_padding">
        <div class="container">
            <div class="about_main">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="about_taital">About Our Dance Studio</h1>
                        <p class="about_text">English. Many desktop publishing <br>packages and web page editors now use Lorem Ipsum as their default model text, and a search</p>
                        <p class="about_text_1">using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                        <br>
                        <div style="text-align: center; margin: 24px 0;">
                            <img src="{{ asset('P/Profusion-1.0.0/images/forparent.png') }}" alt="For Parent" style="max-width:500px; width:100%; height:auto; display:inline-block;">
                        </div>
                        <div class="readmore_bt"><a href="#">Read More</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Section End -->
@endsection