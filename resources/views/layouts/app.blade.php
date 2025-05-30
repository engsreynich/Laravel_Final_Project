<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Profusion') | Profusion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Profusion</a>
            <div class="navbar-nav me-auto">
                <a class="nav-link" href="{{ route('services') }}">Services</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('client') }}">Client</a>
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </div>
            <form class="d-flex" action="{{ route('search') }}" method="GET">
                <input class="form-control me-2" type="search" name="query" placeholder="Search teachers..." aria-label="Search">
                <button class="btn btn-outline-primary" type="submit">Search</button>
            </form>
            <div class="navbar-nav ms-3">
                @if (auth()->guard('web')->check())
                    <a class="nav-link" href="{{ route('my.bookings') }}">My Bookings</a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @elseif (auth()->guard('teacher')->check())
                    <a class="nav-link" href="{{ route('teacher.courses') }}">My Courses</a>
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                @endif
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>