@extends('layouts.app')

@section('title', 'Client | Profusion')

@section('styles')
<style>
    /* Prevent footer from showing initially by pushing content height */
    body, html {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    main {
        flex: 1 0 auto;
    }
    /* Subtle card hover */
    .teacher-card:hover {
        box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        transform: translateY(-5px);
        transition: all 0.3s ease;
    }
    /* Center and style carousel indicators */
    .carousel-indicators {
        bottom: -30px;
    }
    .carousel-indicators button {
        background-color: #0d6efd; /* Bootstrap primary */
        opacity: 0.7;
    }
    .carousel-indicators .active {
        opacity: 1;
    }
    /* Background gradient */
    .bg-gradient-light {
        background: linear-gradient(135deg, #8d969f 0%, #727679 100%);
    }

    /* Make all teacher images consistent size & shape */
    .teacher-card img.rounded-circle {
        width: 110px;
        height: 110px;
        border-radius: 50%;
        object-fit: cover;
        object-position: center;
        display: block;
        overflow: hidden;
    }
</style>
@endsection

@section('content')
<!-- Client Section Start -->
<div class="py-5 bg-gradient-light">
    <div class="container">
        <h1 class="text-center fw-bold text-primary mb-5">Meet Our Teachers</h1>

        @php
        $teachers = [
            [
                'name' => 'NyNy',
                'subject' => 'Mathematician',
                'image' => 'P/Profusion-1.0.0/images/Monica.jpg',
                'quote' => 'Empowering students to unlock the world of technology—one lesson at a time.'
            ],
            [
                'name' => 'Ryan Ahlers',
                'subject' => 'Biology Teacher',
                'image' => 'P/Profusion-1.0.0/images/Ryan.jpg',
                'quote' => "Life is full of amazing complexity waiting to be explored. I’m here to help you unlock the mysteries of biology and see the world through a scientific lens."
            ],
            [
                'name' => 'Sarah Lee',
                'subject' => 'Physics Teacher',
                'image' => 'P/Profusion-1.0.0/images/Sarah.jpg',
                'quote' => "Physics explains the rules that govern our universe, from the smallest particles to the vast cosmos. Together, we’ll unravel these mysteries and spark your curiosity."
            ],
            [
                'name' => 'Michael Smith',
                'subject' => 'Chemistry',
                'image' => 'P/Profusion-1.0.0/images/Smith.jpg',
                'quote' => "Unlocking the secrets of matter, chemistry reveals the building blocks of life and the universe. Together, we’ll make complex concepts clear and exciting."
            ],
        ];
        @endphp

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($teachers as $index => $teacher)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="card teacher-card border-0 shadow-sm rounded-4 p-5 bg-white text-center">
                                    <img src="{{ asset($teacher['image']) }}"
                                         class="rounded-circle mx-auto mb-4" width="200" height="200" alt="{{ $teacher['name'] }}">
                                    <h4 class="fw-bold mb-1 text-primary">{{ $teacher['name'] }}</h4>
                                    <p class="text-muted mb-3 fst-italic">{{ $teacher['subject'] }}</p>
                                    <p class="text-secondary fst-italic fs-5">"{{ $teacher['quote'] }}"</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                @foreach ($teachers as $index => $_)
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $index }}"
                        class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}"
                        aria-label="Slide {{ $index + 1 }}"></button>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-primary rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Client Section End -->
@endsection
