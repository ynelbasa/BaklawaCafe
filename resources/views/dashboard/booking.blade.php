@extends('layouts.dashboard')
@section('content')
    <div class="bg-baklawa-green header-sm text-center">
        <img src="/images/logo.png" class="my-3" alt="Logo" height="80"/>
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Bookings</h2>
            <div class="row">
                <div class="col-sm-2">
                    <h5 class="m-4">Filter by Status</h5>
                </div>
                <div class="col-sm-7">
                    <div class="status-option m-3 row">
                        <div class="col-sm-2 m-2">
                            <a class="{{ $status == 'confirmed' ? 'active' : '' }}"
                               href="{{ url('/dashboard/booking?status=confirmed') }}">Confirmed</a>
                        </div>
                        <div class="col-sm-2 m-2">
                            <a class="{{ $status == 'pending' ? 'active' : ''}}"
                               href="{{ url('/dashboard/booking?status=pending') }}">Pending</a>
                        </div>
                        <div class="col-sm-2 m-2">
                            <a class="{{ $status == 'cancelled' ? 'active' : ''}}"
                               href="{{ url('/dashboard/booking?status=cancelled') }}">Cancelled</a>
                        </div>
                        <div class="col-sm-2 m-2">
                            <a class="{{ $status ? '' : 'active'}}" href="{{ url('/dashboard/booking') }}">All</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3 my-3 text-center">
                </div>
            </div>
            <br>
            @if( count($bookings) === 0)
                <h5 class="text-center m-5">No records found that matches your criteria</h5>
            @endif
            @if( count($bookings) > 0)
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="text-dark">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">Customer</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Reserved Date</th>
                            <th scope="col">Table</th>
                            <th scope="col">Notes</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{ $booking->id }}</td>
                                <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                                <td>{{ $booking->email_address }}</td>
                                <td>{{ $booking->phone_number }}</td>
                                <td>{{ $booking->date_time }}</td>
                                <td class="text-lg-center">
                                    <h5>
                                        {{ $booking->table_size }}
                                        <i class="fas fa-user"></i></h5>
                                </td>
                                <td>{{ $booking->notes }}</td>
                                <td>
                                    <div class="dropdown w-auto">
                                        <button
                                            class="btn btn-secondary dropdown-toggle border-0 text-uppercase {{$booking->status}}"
                                            type="button"
                                            id="statusDropdown_{{$booking->id}}" data-toggle="dropdown"
                                            aria-haspopup="true"
                                            aria-expanded="false">
                                            {{$booking->status}}
                                        </button>
                                        <div class="dropdown-menu text-uppercase" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               onclick="updateStatus( {{ $booking->id }}, 'confirmed')">Confirmed</a>
                                            <a class="dropdown-item"
                                               onclick="updateStatus( {{ $booking->id }}, 'pending')">
                                                Pending</a>
                                            <a class="dropdown-item"
                                               onclick="updateStatus( {{ $booking->id }}, 'cancelled')">
                                                Cancelled</a></div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $bookings->appends(['status' => $status])->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection
