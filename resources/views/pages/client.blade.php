@extends('layouts.app')

@section('title', 'Client | Profusion')

@section('content')
<!-- Client Section Start -->
<div class="py-5 bg-light">
    <div class="container">
        <h1 class="text-center fw-bold text-primary mb-5">Teachers</h1>

        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 0; $i < 4; $i++)
                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="card border-0 shadow-sm rounded-4 p-4 bg-white text-center">
                                    <img src="{{ asset('P/Profusion-1.0.0/images/client-img.png') }}"
                                         class="rounded-circle mx-auto mb-3" width="90" height="90" alt="Client">
                                    <h5 class="fw-bold">Jonyro</h5>
                                    <p class="text-muted mb-1">Voluptate</p>
                                    <p class="text-secondary fst-italic">
                                        "Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation eu."
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <!-- Carousel Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Client Section End -->
@endsection
