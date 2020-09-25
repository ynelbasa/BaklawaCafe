<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Baklawa Cafe - Home</title>

    <!-- Scripts -->
    <script src="{{ asset('../js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Styles -->
    <link href="{{ asset('../css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('../css/client.css') }}" rel="stylesheet">

</head>
<body>
<!-- Top Bar  -->
<div class="top-bar">
    <div class="container">
        <div class="col-12 text-center">
            <p> 46 Stoddard Road, Mount Roskill, Auckland 1041,
                <a href="tel:09-620 5400">Call us: 09-620 5400</a>
                Ext 4
            </p>
        </div>
    </div>
</div>
<!-- End Top Bar -->
<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top navbar-custom">
    <div class="container">
        <a href="index.html" class="navbar-brand">
            <img src="images/logo1.png" alt=""/>
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ url('/') }}" class="nav-link {{ (request()->is('home')) ? 'active' : '' }}">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/menu') }}" class="nav-link {{ (request()->is('menu')) ? 'active' : '' }}">Food Menu</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/gallery') }}" class="nav-link {{ (request()->is('gallery')) ? 'active' : '' }}">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('/story') }}" class="nav-link {{ (request()->is('story')) ? 'active' : '' }}">Our
                        Story</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-sm btn-outline-secondary nav-button"
                       type="button"
                       href="{{ url('/booking') }}"> Book A Table! </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- End Navigation -->
@yield('content')
<!--- Footer -->
<footer>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
            <div class="col-md-9">
                <ul class="ml-auto footer-nav">
                    <li class="">
                        <a href="{{ url('/') }}" class="">Home</a>
                    </li>
                    <li class="">
                        <a href="{{ url('/menu') }}" class="">Food Menu</a>
                    </li>
                    <li class="">
                        <a href="{{ url('/gallery') }}" class="">Gallery</a>
                    </li>
                    <li class="">
                        <a href="{{ url('/story') }}" class="">Our Story</a>
                    </li>
                    <li class="">
                        <a href="{{ url('/booking') }}" class="">Book A Table!</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div class="col-12 text-center">
    <h5 style="font-size: 13px; color: black; opacity: 0.5">
        &copy; Marinel & Subash
    </h5>
</div>
</body>
</html>
