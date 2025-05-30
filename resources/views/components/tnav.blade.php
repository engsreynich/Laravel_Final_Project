<!-- resources/views/components/nav.blade.php -->
<div class="header_section">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('P/Profusion-1.0.0/images/logo.png') }}" alt="Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {{ Route::is('home') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item {{ Route::is('about') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item {{ Route::is('services') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('services') }}">Services</a>
                    </li>
                    <li class="nav-item {{ Route::is('client') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('client') }}">Client</a>
                    </li>
                    <li class="nav-item {{ Route::is('contact') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    @auth
                        @if (auth()->user()->role === 'teacher')
                            <li class="nav-item {{ Route::is('teacher.courses') ? 'active' : '' }}">
                                <a class="nav-link" href="{{ route('teacher.courses') }}">Manage Courses</a>
                            </li>
                        @endif
                    @endauth
                </ul>
                <div class="form-inline my-2 my-lg-0">
                    @auth
                        <div class="user_icon">
                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> {{ auth()->user()->name }}</a>
                        </div>
                        <div class="user_icon">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    @else
                        <div class="user_icon">
                            <a href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Login</a>
                        </div>
                        <div class="user_icon">
                            <a href="{{ route('register') }}"><i class="fa fa-user-plus" aria-hidden="true"></i> Register</a>
                        </div>
                    @endauth
                    <div class="user_icon">
                        <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </div>
                </div>
                <div class="call_btn">
                    <a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left10">Call : +1234567890</span></a>
                </div>
            </div>
        </nav>
    </div>
</div>
