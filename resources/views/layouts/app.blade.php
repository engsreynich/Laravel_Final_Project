<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>@yield('title', 'Profusion') | Profusion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <style>
        /* Navbar dark background and shadow */
        .navbar {
            background: #ffffff; /* dark navy blue */
            box-shadow: 0 4px 12px rgba(255, 255, 255, 0.8);
        }

        .navbar-brand {
            color: #2200ff !important;
            font-weight: 700;
            font-size: 1.6rem;
        }

        .navbar-nav .nav-link {
            color: #000000;
            font-weight: 600;
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            transition: color 0.3s ease;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            color: #1500ff !important; /* bright cyan */
        }

        /* Navbar toggler icon uses default white for navbar-dark */
        
        /* Search button outline for dark background */
        .btn-outline-info {
            color: #000000;
            border-color: #000000;
        }
        .btn-outline-info:hover {
            background-color: #201f20;
            color: #73737b;
            border-color: #1a06f4;
        }

        .navbar-nav.ms-3 .nav-link {
            color: #000000;
        }

        .navbar-nav.ms-3 .nav-link:hover {
            color: #0000fd !important;
        }

        /* Footer link hover */
        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <i class="bi bi-lightning-charge-fill me-1 text-primary"></i>Profusion
            </a>
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav me-auto">
                    <a class="nav-link" href="{{ route('services') }}" style="color: black;">Services</a>
                    <a class="nav-link" href="{{ route('about') }}" style="color: black;">About</a>
                    <a class="nav-link" href="{{ route('client') }}" style="color: black;">Client</a>
                    <a class="nav-link" href="{{ route('contact') }}" style="color: black;">Contact</a>

                </div>
                <form class="d-flex" action="{{ route('search') }}" method="GET">
                    <input
                        class="form-control me-2"
                        type="search"
                        name="query"
                        placeholder="Search teachers..."
                        aria-label="Search"
                    />
                    <button class="btn btn-outline-info" type="submit">Search</button>
                </form>
                <div class="navbar-nav ms-3">
                    @if (auth()->guard('web')->check())
                        <a class="nav-link" href="{{ route('my.bookings') }}">My Bookings</a>
                        <a
                            class="nav-link"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >Logout</a
                        >
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @elseif (auth()->guard('teacher')->check())
                        <a class="nav-link" href="{{ route('teacher.courses') }}">My Courses</a>
                        <a
                            class="nav-link"
                            href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            >Logout</a
                        >
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    @else
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    @endif
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="bg-light text-dark pt-5 pb-4 mt-5 border-top shadow-sm">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h5 class="text-uppercase mb-4 fw-bold text-primary">
                        <i class="bi bi-lightning-charge-fill me-1"></i>Profusion
                    </h5>
                    <p>
                        Empowering students and teachers to connect, grow, and succeed through tailored learning experiences and easy bookings.
                    </p>
                </div>

                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase fw-bold mb-4">Links</h6>
                    <p><a href="{{ route('services') }}" class="text-dark text-decoration-none">Services</a></p>
                    <p><a href="{{ route('about') }}" class="text-dark text-decoration-none">About</a></p>
                    <p><a href="{{ route('client') }}" class="text-dark text-decoration-none">Client</a></p>
                    <p><a href="{{ route('contact') }}" class="text-dark text-decoration-none">Contact</a></p>
                </div>

                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase fw-bold mb-4">Support</h6>
                    <p><a href="#" class="text-dark text-decoration-none">Help Center</a></p>
                    <p><a href="#" class="text-dark text-decoration-none">FAQs</a></p>
                    <p><a href="#" class="text-dark text-decoration-none">Privacy Policy</a></p>
                    <p><a href="#" class="text-dark text-decoration-none">Terms & Conditions</a></p>
                </div>

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-3">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="bi bi-house-door-fill me-2"></i> Phnom Penh, Cambodia</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> info@profusion.com</p>
                    <p><i class="bi bi-telephone-fill me-2"></i> +855 12 345 678</p>
                </div>
            </div>

            <hr class="my-3" />

            <div class="text-center">
                <p>&copy; {{ date('Y') }} Profusion. All rights reserved.</p>
            </div>
        </div>
    </footer>

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
