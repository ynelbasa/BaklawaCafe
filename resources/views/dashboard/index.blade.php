@extends('layouts.dashboard')

@section('content')
    <div class="bg-baklawa-green header-lrg text-center">
        <img src="/images/logo.png" class="my-3" alt="Logo" height="120"/>
    </div>
    <div class="p4 content">
        <div class="stats no-selection">
            <div class="bg-baklawa-blue p-4 text-white box-shadow rounded-lg">
                <h5 class="text-secondary">Today</h5>
                <h3>All Bookings</h3>
                <br>
                <h1 class="text-center stats-booking">
                    {{ $bookingsToday }}
                    <i class="fas fa-calendar-check ml-2"></i>
                </h1>
            </div>
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">2020</h5>
                <h3>Online Bookings</h3>
                <img src="{{ asset('../../images/chart1.png') }}" width="250px">
            </div>
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">Total</h5>
                <h3>Website Users</h3><br>
                <img src="{{ asset('../../images/chart2.png') }}" width="250px"></div>
            <div class="bg-baklawa-blue text-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">Total</h5>
                <h3>Menu Items</h3>
                <br>
                @foreach($menuTypes as $menuType)
                    <a href="{{ url("/dashboard/menu?type=$menuType->id") }}" class="text-decoration-none">
                        <h5 class="stats-menu">
                            {{$menuType->count}}
                            <i class="fas fa-utensils ml-4"></i>
                            {{$menuType->name}}
                        </h5>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
