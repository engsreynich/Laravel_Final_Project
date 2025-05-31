@extends('layouts.app')

@section('title', 'Services | Profusion')

@section('content')
<!-- Services Section Start -->
<div class="service_section layout_padding py-5 bg-light">
    <div class="container">
        <h1 class="text-center mb-5 fw-bold text-primary" style="font-size: 3rem; letter-spacing: 1.5px; text-transform: uppercase;">
            Our Classes
        </h1>

        <div class="text-center mb-5">
            <a href="{{ route('classes.teachers', 'online') }}"
               class="btn btn-outline-primary me-3 px-5 py-3 fw-semibold rounded-pill shadow-sm"
               style="transition: all 0.3s ease;">
                Online Class
            </a>
            <a href="{{ route('classes.teachers', 'physical') }}"
               class="btn btn-primary px-5 py-3 fw-semibold rounded-pill shadow-sm"
               style="transition: all 0.3s ease;">
                Physical Class
            </a>
        </div>

        <div class="row g-4">
            @php
                $classes = ['Mathematics', 'Chemistry', 'Physics', 'History', 'Khmer', 'English'];
                $images = [
                    'Mathematics' => 'P/Profusion-1.0.0/images/math.webp',
                    'Chemistry' => 'P/Profusion-1.0.0/images/chemistry.png',
                    'Physics' => 'P/Profusion-1.0.0/images/physics.jpg',
                    'History' => 'P/Profusion-1.0.0/images/history.jpg',
                    'Khmer' => 'P/Profusion-1.0.0/images/khmer.jpg',
                    'English' => 'P/Profusion-1.0.0/images/english.jpg',
                    'Biology' => 'P/Profusion-1.0.0/images/biology.jpg',
                ];
            @endphp

            @foreach($classes as $class)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg h-100 hover-zoom rounded-4 overflow-hidden">
                        <div class="image-container" style="height: 270px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                            <img src="{{ $images[$class] }}"
                                 alt="{{ $class }} Study"
                                 class="card-img-top img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                        </div>
                        <div class="card-body text-center bg-white">
                            <h5 class="card-title fw-bold text-primary" style="letter-spacing: 0.05em;">
                                {{ $class }}
                            </h5>
                            <a href="#" class="btn btn-outline-primary mt-3 px-4 py-2 rounded-pill fw-semibold btn-hover">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Centered Biology Card -->
        <div class="row g-4 justify-content-center mt-4">
            <div class="col-sm-12 col-md-6 col-lg-4">
                <div class="card border-0 shadow-lg h-100 hover-zoom rounded-4 overflow-hidden">
                    <div class="image-container" style="height: 270px; display: flex; justify-content: center; align-items: center; overflow: hidden;">
                        <img src="{{ $images['Biology'] }}"
                             alt="Biology Study"
                             class="card-img-top img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
                    </div>
                    <div class="card-body text-center bg-white">
                        <h5 class="card-title fw-bold text-primary" style="letter-spacing: 0.05em;">
                            Biology
                        </h5>
                        <a href="#" class="btn btn-outline-primary mt-3 px-4 py-2 rounded-pill fw-semibold btn-hover">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Section End -->
@endsection

@section('styles')
<style>
    /* Card hover zoom effect */
    .hover-zoom:hover .image-container img {
        transform: scale(1.08);
        transition: transform 0.4s ease;
    }

    .hover-zoom {
        transition: box-shadow 0.3s ease, transform 0.3s ease;
        cursor: pointer;
    }

    .hover-zoom:hover {
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
        transform: translateY(-10px);
    }

    /* Button hover effect */
    .btn-hover {
        border-width: 2px;
        transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-hover:hover {
        background-color: #0d6efd;
        color: white !important;
        border-color: #0d6efd !important;
        box-shadow: 0 4px 12px rgba(13, 110, 253, 0.5);
        text-decoration: none;
    }

    /* Responsive heading */
    @media (max-width: 576px) {
        h1.text-center {
            font-size: 2.2rem !important;
        }
    }
</style>
@endsection

@section('scripts')
<!-- No additional scripts needed -->
@endsection