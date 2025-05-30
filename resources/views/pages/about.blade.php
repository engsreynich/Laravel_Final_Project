@extends('layouts.app')

@section('title', 'About | Profusion')

@section('content')
<!-- About Section Start -->
<div class="about_section layout_padding py-5 bg-light">
    <div class="container">
        <div class="about_main text-center mx-auto" style="max-width: 720px;">
            <h1 class="about_taital text-primary mb-4 fw-bold" style="font-size: 2.8rem; letter-spacing: 1px;">
                About Our Learning Studio
            </h1>

            <p class="about_text lead mb-3 text-secondary" style="font-size: 1.125rem; line-height: 1.6;">
                At Profusion Learning Studio, we believe studying is more than just gaining knowledge — it’s a journey of curiosity, growth, and community. Our expert instructors help learners at every level discover their passion and confidence.
            </p>

            <p class="about_text_1 mb-4 text-muted" style="font-size: 1rem; line-height: 1.5;">
                Whether you’re just starting or building on your skills, our variety of courses and supportive environment help you grow while enjoying the process. Join us and experience learning like never before!
            </p>

            <div class="my-4">
                <img
                    src="https://i.pinimg.com/736x/b3/9a/1b/b39a1bb110835c00650c7284f8b0f6e8.jpg"
                    alt="Learning Studio Class"
                    class="img-fluid rounded shadow-lg"
                    style="max-width: 500px; width: 100%; object-fit: cover;">
            </div>

            <figcaption class="text-muted fst-italic mb-4" style="font-size: 0.9rem;">
                * Our welcoming studio encourages curiosity, confidence, and community through every step of your study journey.
            </figcaption>

            <div class="readmore_bt mt-3">
                <a href="#" class="btn btn-primary rounded-pill px-5 py-3 fw-semibold shadow-sm"
                   style="transition: background-color 0.3s ease;">
                    Read More
                </a>
            </div>
        </div>
    </div>
</div>
<!-- About Section End -->
@endsection
