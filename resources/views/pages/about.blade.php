@extends('layouts.app')

@section('title', 'About | Profusion')

@section('content')
<!-- About Section Start -->
<div class="about_section layout_padding py-5 bg-light">
    <div class="container">
        <div class="about_main text-center mx-auto" style="max-width: 720px;">
            <h1 class="about_taital text-primary mb-4 fw-bold" style="font-size: 2.8rem; letter-spacing: 1px;">
                About Our Dance Studio
            </h1>

            <p class="about_text lead mb-3 text-secondary" style="font-size: 1.125rem; line-height: 1.6;">
                At Profusion Dance Studio, we believe dance is more than movement — it’s an expression of passion, culture, and community. Our expert instructors guide dancers of all levels to find their rhythm and confidence.
            </p>

            <p class="about_text_1 mb-4 text-muted" style="font-size: 1rem; line-height: 1.5;">
                Whether you’re just starting out or refining your skills, our diverse class offerings and supportive environment help you grow your technique while having fun. Join us and experience the joy of dance like never before!
            </p>

            <div class="my-4">
                <img
                    src="https://i.pinimg.com/736x/ac/97/36/ac97365c419fafa6f4a917249de21e10.jpg"
                    alt="Dance Studio Class"
                    class="img-fluid rounded shadow-lg"
                    style="max-width: 500px; width: 100%; object-fit: cover;">
            </div>

            <figcaption class="text-muted fst-italic mb-4" style="font-size: 0.9rem;">
                * Our welcoming studio encourages creativity, confidence, and community through every step.
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
