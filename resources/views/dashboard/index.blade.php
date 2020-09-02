@extends('layouts.dashboard')

@section('content')
    <div class="bg-light-gradient header-lrg">
    </div>
    <div class="p4 content">
        <div class="stats">
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">Today</h5>
                <h3>All Bookings</h3>
                <br>
                <h1 class="text-center stats-booking">
                    72
                    <i class="fas fa-calendar-check ml-2"></i>
                </h1>
            </div>
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">2020</h5>
                <h3>Online Bookings</h3>
                <img src="{{ asset('../../image/chart1.png') }}" width="210px">
            </div>
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">Total</h5>
                <h3>Menu Items</h3>
                <br>
                <h5 class="text-center stats-menu-breakfast">
                    16
                    <i class="fas fa-utensils ml-4"></i>
                    Breakfast
                </h5>
                <h5 class="text-center stats-menu-dinner">
                    52
                    <i class="fas fa-utensils ml-4"></i>
                    Dinner
                </h5>
                <h5 class="text-center stats-menu-buffet">
                    23
                    <i class="fas fa-utensils ml-4"></i>
                    Buffet
                </h5>
            </div>
            <div class="bg-white p-4 box-shadow rounded-lg">
                <h5 class="text-secondary">Total</h5>
                <h3>Website Users</h3><br>
                <img src="{{ asset('../../image/chart2.png') }}" width="210px"></div>
        </div>
    </div>
@endsection