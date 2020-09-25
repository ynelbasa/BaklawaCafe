<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
<!-- Authentication Links -->
<nav class="navbar navbar-expand-md navbar-light bg-baklawa-blue shadow-sm">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/dashboard') }}">
            Dashboard
        </a>
        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link  text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item {{ (request()->is('dashboard')) ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ url('/dashboard') }}">Home</a>
                    </li>
                    <li class="nav-item {{ (request()->is('dashboard/booking')) ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ url('/dashboard/booking') }}">Bookings</a>
                    </li>
                    <li class="nav-item {{ (request()->is('dashboard/menu')) ? 'active' : '' }}">
                        <a class="nav-link text-white" href="{{ url('/dashboard/menu') }}">Menu</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right text-white" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
<main>
    @yield('content')
</main>
</body>
</html>
