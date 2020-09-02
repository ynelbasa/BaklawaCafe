@extends('layouts.dashboard')
@section('content')
    <div class="bg-light-gradient header-sm">
        <img src="/image/logo.png" alt="Logo" height="80">
    </div>
    <div class="p4 content">
        <div class="bg-white p-4 box-shadow rounded-lg">
            <h2 class="text-dark">Bookings</h2>
            <br>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="text-dark">
                    <tr>
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
                            <td>{{ $booking->first_name }} {{ $booking->last_name }}</td>
                            <td>{{ $booking->email_address }}</td>
                            <td>{{ $booking->phone_number }}</td>
                            <td>{{ $booking->date_time }}</td>
                            <td>{{ $booking->table_size }}</td>
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


@endsection
