<?php

namespace App\Http\Controllers\WebControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use function Illuminate\Support\Facades\Artisan;

class BookingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of all booking in a view.
     *
     * @param Request $request
     * @return  View
     */
    public function index(Request $request)
    {
        $pageSize = 8;
        $status = $request->query('status');

        if ($status == null) {
            $bookings = Booking::orderBy('status', 'desc')
                ->orderBy('date_time', 'asc')
                ->paginate($pageSize);
        } else {
            $bookings = Booking::where('status', $status)
                ->orderBy('status', 'desc')
                ->orderBy('date_time', 'asc')
                ->paginate($pageSize);
        }

        return view('dashboard.booking', ['bookings' => $bookings, 'status' => $status]);
    }

    /**
     * Show the form for editing booking.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }


    /**
     * Show the form for creating a new booking.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

}
