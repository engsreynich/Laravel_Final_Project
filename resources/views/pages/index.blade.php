@extends('layouts.app')

@section('title', 'Home | Profusion')

@section('content')
<!-- Banner Section Start -->
<div class="banner_section position-relative d-flex align-items-center justify-content-center"
     style="
        width: 90vw;
        height: 100vh;
        overflow: hidden;
        background-image: url('https://i.pinimg.com/736x/cd/20/ed/cd20ed167fd7256412ca9a4bc00a632f.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        filter: brightness(0.55);
     ">

    <!-- Dark overlay -->
    <div style="position: absolute; top:0; left:0; width: 100%; height: 100%; background: rgba(0,0,0,0.5); z-index: 1;"></div>

    <!-- Content -->
    <div class="text-center text-white px-3"
         style="position: relative; z-index: 2; max-width: 90vw; animation: fadeInUp 1.2s ease forwards;">
        <h1 class="display-3 fw-bold mb-4" style="text-shadow: 0 2px 8px rgba(0,0,0,0.7);">Start Dance</h1>
        <p class="lead mb-4" style="text-shadow: 0 1px 6px rgba(0,0,0,0.6); font-size: 1.25rem;">
            Discover your passion, learn new moves, and join our vibrant dance community.
        </p>
        <a href="{{ route('contact') }}"
           class="btn btn-outline-light btn-lg px-5 py-3 fw-semibold"
           style="border-width: 2px; transition: background-color 0.3s, color 0.3s;">
            Read More
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
    .btn-outline-light:hover {
        background-color: white !important;
        color: #212529 !important;
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
    // No JS needed for background cover effect here
</script>
@endsection
