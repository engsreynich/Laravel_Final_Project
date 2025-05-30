@extends('layouts.app')

@section('title', 'Home | Profusion')

@section('content')
<!-- Banner Section Start -->
<div class="banner_section position-relative d-flex align-items-center justify-content-center"
     style="
        width: 100%;
        height: 90vh; /* Increased height */
        overflow: hidden;
        background-color: #f4f4f4;
     ">

    <!-- Background Image -->
    <div style="
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('https://i.pinimg.com/736x/88/97/2e/88972e15e737a204a0c0b9378c48431b.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        opacity: 0.7;
        z-index: 0;
    "></div>

    <!-- Content -->
    <div class="text-center text-dark px-3"
         style="position: relative; z-index: 2; max-width: 90vw; animation: fadeInUp 1.2s ease forwards; padding-bottom: 5rem;">
        <h1 class="display-3 fw-bold mb-4" style="text-shadow: 0 2px 5px rgba(255,255,255,0.4);">Start Learning Today</h1>
        <p class="lead mb-4" style="text-shadow: 0 1px 4px rgba(255,255,255,0.4); font-size: 1.25rem;">
            Unlock your potential with engaging courses, expert guidance, and a community of passionate learners.
        </p>
        <a href="{{ route('contact') }}"
           class="btn btn-dark btn-lg px-5 py-3 fw-semibold"
           style="border-width: 2px; transition: background-color 0.3s, color 0.3s;">
            Learn More
        </a>
    </div>
</div>
<!-- Banner Section End -->

<style>
    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .btn-dark:hover {
        background-color: #ffffff !important;
        color: #212529 !important;
        border-color: #212529 !important;
    }

    /* Responsive text size */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem !important;
        }

        .lead {
            font-size: 1rem !important;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // No JS needed
</script>
@endsection
