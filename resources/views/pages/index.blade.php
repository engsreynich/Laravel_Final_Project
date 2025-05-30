@extends('layouts.app')

@section('title', 'Home | Profusion')

@section('content')
<!-- Banner Section Start -->
<div class="banner_section position-relative d-flex align-items-center justify-content-center"
     style="
        width: 100%;
        height: 90vh;
        overflow: hidden;
        background-color: #0c0707;
     ">

    <!-- Background Image -->
    <div style="
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url('/P/Profusion-1.0.0/images/index_image.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    opacity: 0.7;
    z-index: 0;
"></div>

    <!-- Content -->
    <div class="text-center text-dark px-3"
         style="position: relative; z-index: 2; max-width: 90vw; animation: fadeInUp 1.2s ease forwards; padding-bottom: 5rem;">
        <h1 class="display-3 fw-bold mb-4" style="text-shadow: 0 2px 5px rgba(255,255,255,0.4); color: white">Start Learning Today</h1>
        <p class="lead mb-4" style="text-shadow: 0 1px 4px rgba(255, 255, 255, 0.4); font-size: 1.25rem; color: white;">
            Unlock your potential with engaging courses, expert guidance, and a community of passionate learners.
        </p>
        <a href="{{ route('contact') }}"
           class="btn btn-dark btn-lg px-5 py-3 fw-semibold"
           style="border-width: 2px; transition: background-color 0.1s, color 0.1s;">
            Learn More
        </a>
    </div>
</div>
<!-- Banner Section End -->

<!-- By the Numbers Section -->
<div class="numbers-section py-5 text-center">
    <h2 class="mb-5">By the Numbers</h2>
    <br>
    <div class="stats d-flex flex-row justify-content-center gap-5 mb-5" style="margin-top: 2rem;">
        <div class="stat" style="background: #e0f7fa; border-radius: 100%; width: 200px; height: 200px; display: flex; align-items: center; justify-content: center; color: #00695c; font-weight: 600; font-size: 1.7rem;">
            100+<br>Students
        </div>
        <div class="stat" style="background: #e0f7fa; border-radius: 100%; width: 200px; height: 200px; display: flex; align-items: center; justify-content: center; color: #00695c; font-weight: 600; font-size: 1.7rem;">
            10+<br>Tutors
        </div>
        <div class="stat" style="background: #e0f7fa; border-radius: 100%; width: 200px; height: 200px; display: flex; align-items: center; justify-content: center; color: #00695c; font-weight: 600; font-size: 1.7rem;">
            100+<br>Lessons
        </div>
    </div>
</div>

<!-- Tackling the Problem Section -->
<div class="problem-section py-5 text-center">
    <h2 class="mb-4">Tackling the Problem</h2>
    <div class="d-flex align-items-start mb-4">
        <img src="P\Profusion-1.0.0\images\student.jpg" alt="Students Collaborating" style="max-width: 400px; height: auto; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-right: 2rem;">
        <p class="mx-auto" style="max-width: 500px; text-align: left;">
            In today’s fast-paced world, students often face significant barriers to quality education, from high tutoring costs to limited access to personalized learning. Many struggle to keep up with schoolwork, especially in subjects like Math, Science, and English, due to a lack of tailored support. At Profusion, we bridge this gap by connecting students aged 7 to 13 with experienced high school and college tutors worldwide, offering affordable and flexible online tutoring sessions.
        </p>
    </div>
    <br>
    <div class="d-flex align-items-start">
        <p class="mx-auto" style="max-width: 500px; text-align: left; margin-right: 2rem;">
            Our platform ensures that every student receives the attention they need to thrive, with tutors who are not only subject matter experts but also mentors who inspire confidence and a love for learning. By leveraging technology, we make education accessible, inclusive, and engaging, supporting the UN’s Development Goal 4 of “ensuring inclusive and equitable quality education and promoting lifelong learning opportunities for all.”
        </p>
        <img src="P\Profusion-1.0.0\images\teacher.webp" alt="Tutor Teaching" style="max-width: 400px; height: auto; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
    </div>
</div>

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
        background-color: #070606 !important;
        color: #fffdfd !important;
        border-color: #070606 !important;
    }

    .numbers-section h2, .problem-section h2 {
        font-size: 2rem;
        font-weight: 600;
        color: #212529;
    }

    .problem-section p {
        font-size: 1rem;
        line-height: 1.6;
        color: #555;
    }

    /* Ensure circles align horizontally */
    .stats {
        flex-direction: row !important;
        justify-content: center;
        gap: 5rem;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .display-3 {
            font-size: 2.5rem !important;
        }
        .lead {
            font-size: 1rem !important;
        }
        .stats {
            gap: 2rem;
        }
        .stat {
            width: 80px;
            height: 80px;
            font-size: 0.9rem;
        }
        .d-flex {
            flex-direction: column;
            text-align: center;
        }
        .d-flex img {
            margin: 1rem auto;
            max-width: 80%;
        }
        .d-flex p {
            margin: 0 auto;
        }
    }
</style>
@endsection

@section('scripts')
<script>
    // No JS needed
</script>
@endsection

@section('navbar')
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #00f;">⚡ Profusion</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link" href="#">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Client</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search teachers..." aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
            <div class="ms-3">
                <a href="#" class="btn btn-outline-light me-2">Login</a>
                <a href="#" class="btn btn-outline-light">Register</a>
            </div>
        </div>
    </div>
</nav>
@endsection

@section('footer')
<footer class="bg-light text-center text-dark p-4 mt-5">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>⚡ PROFUSION</h5>
                <p>Empowering students and teachers to connect, grow, and succeed through tailored learning experiences and easy bookings.</p>
            </div>
            <div class="col">
                <h5>LINKS</h5>
                <p><a href="#">Services</a></p>
                <p><a href="#">About</a></p>
                <p><a href="#">Client</a></p>
                <p><a href="#">Contact</a></p>
            </div>
            <div class="col">
                <h5>SUPPORT</h5>
                <p><a href="#">Help Center</a></p>
                <p><a href="#">FAQs</a></p>
                <p><a href="#">Privacy Policy</a></p>
                <p><a href="#">Terms & Conditions</a></p>
            </div>
            <div class="col">
                <h5>CONTACT</h5>
                <p><span class="material-icons">home</span> Phnom Penh, Cambodia</p>
                <p><span class="material-icons">email</span> <a href="mailto:info@profusion.com">info@profusion.com</a></p>
                <p><span class="material-icons">phone</span> +855 12 345 678</p>
            </div>
        </div>
        <hr>
        <p class="mt-3">© 2025 Profusion. All rights reserved.</p>
    </div>
</footer>
@endsection