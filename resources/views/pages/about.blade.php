@extends('layouts.app')

@section('title', 'About | Profusion')

@section('content')
<!-- About Section Start -->
<div class="about_section layout_padding py-5 bg-light">
    <div class="container">
        <div class="about_main text-center mx-auto" style="max-width: 720px;">
            <h1 class="about_taital text-primary mb-4 fw-bold" style="font-size: 2.8rem; letter-spacing: 1px;">
                About Our Learning Center
            </h1><br>

            <p class="about_text lead mb-3 text-secondary" style="font-size: 1.125rem; line-height: 1.6;">
                “At Profusion Learning Center, we believe studying is more than just memorizing facts — it’s a journey of curiosity, growth, and building confidence to face national exams and beyond. Our dedicated, expert instructors guide Cambodian Grade 12 students through every challenge, helping them master key subjects, develop critical thinking skills, and unlock their full potential. Whether it’s math, science, or languages, we’re here to support learners at every step — so they can succeed in school, university, and life.”
            </p><br>

            <p class="about_text_1 mb-4 text-muted" style="font-size: 1rem; line-height: 1.5;">
                Whether you’re just starting or building on your skills, our variety of courses and supportive environment help you grow while enjoying the process. Join us and experience learning like never before!
            </p>

            <div class="my-4">
                <img
                    src="{{ asset('P\Profusion-1.0.0\images\about_us.jpg') }}"
                    alt="Learning Studio Class"
                    class="img-fluid rounded shadow-lg"
                    style="max-width: 500px; width: 100%; object-fit: cover;">
            </div>

            <figcaption class="text-muted fst-italic mb-4" style="font-size: 0.9rem;">
                * Our welcoming learning center encourages curiosity, confidence, and community through every step of your study journey.
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
