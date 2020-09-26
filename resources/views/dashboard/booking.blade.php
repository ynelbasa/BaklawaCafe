@extends('layouts.dashboard')
@section('content')
    <div class="bg-baklawa-green header-sm text-center">
        <img src="/images/logo.png" class="my-3" alt="Logo" height="80"/>
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Bookings</h2>
            <span class="float-right p-2">
                <i class="fas fa-search"></i>
                <i class="fas fa-filter ml-2"></i>
            </span>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-dark">
                    <tr>
                        <th scope="col"></th>
                        <th scope="col">Customer</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Date</th>
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
                                        id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                        {{$booking->status}}
                                    </button>
                                    <div class="dropdown-menu text-uppercase" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item text-confirmed" href="#">
                                            Confirmed</a>
                                        <a class="dropdown-item text-pending" href="#">
                                            Pending</a>
                                        <a class="dropdown-item text-cancelled" href="#">
                                            Cancelled</a></div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                {{ $bookings->links() }}
            </div>
        </div>
    </div>
@endsection
