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
                $classes = ['Mathematics', 'Science', 'Language'];
                $images = [
                    'Mathematics' => 'https://i.pinimg.com/736x/d0/e9/8d/d0e98da09f6a29fc98ccec165818aaf4.jpg',
                    'Science' => 'https://i.pinimg.com/736x/d0/2c/3f/d02c3fc164df94b48c05110739ff8b7f.jpg',
                    'Language' => 'https://i.pinimg.com/736x/cf/5b/77/cf5b773a457a251e60be55a6e59f7a1a.jpg',
                ];
            @endphp

            @foreach($classes as $class)
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="card border-0 shadow-lg h-100 hover-zoom rounded-4 overflow-hidden">
                        <img src="{{ $images[$class] }}"
                             alt="{{ $class }} Study"
                             class="card-img-top img-fluid" style="height: 270px; object-fit: cover;">
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
    </div>
</div>
<!-- Services Section End -->
@endsection

@section('styles')
<style>
    /* Card hover zoom effect */
    .hover-zoom:hover img {
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
