<!-- resources/views/layout/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>@yield('title', 'Profusion')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('P/Profusion-1.0.0/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/responsive.css') }}">
    <link rel="icon" href="{{ asset('P/Profusion-1.0.0/images/fevicon.png') }}" type="image/gif" />
    <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/jquery.mCustomScrollbar.min.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('P/Profusion-1.0.0/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>
    @include('components.nav')
    @yield('content')
    @include('components.footer')
    <script src="{{ asset('P/Profusion-1.0.0/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/popper.min.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/plugin.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/custom.js') }}"></script>
    <script src="{{ asset('P/Profusion-1.0.0/js/owl.carousel.js') }}"></script>
    @yield('scripts')
</body>
</html>