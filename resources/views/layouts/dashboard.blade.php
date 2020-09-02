<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Baklawa Cafe - Dashboard</title>

    <!-- Scripts -->
    <script src="{{ asset('../../js/dashboard.js') }}" defer></script>
    <script src="{{ asset('../../js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- Styles -->
    <link href="{{ asset('../../css/dashboard.css') }}" rel="stylesheet">
    <link href="{{ asset('../../css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex full-height">
    <div class="p-3 navigation">
        <div class="d-flex flex-column bd-highlight mb-3">
            <div class="p-4 bd-highlight font-weight-bolder divider">
                <span class="bg-round p-2">MB</span>
                <span class="p-2">Marinel Basa</span>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/dashboard') }}"><p>Dashboard</p></a>
                </li>
                <li class="nav-item {{ (request()->is('dashboard/booking')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/dashboard/booking') }}"><p>Bookings</p></a>
                </li>
                <li class="nav-item {{ (request()->is('dashboard/menu')) ? 'active' : '' }}">
                    <a class="nav-link" href="{{ url('/dashboard/menu') }}"><p>Menu</p></a>
                </li>
            </ul>
            <div class="text-center social padding">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="flex-grow-1">
        @yield('content')
    </div>
</div>
</body>
</html>
