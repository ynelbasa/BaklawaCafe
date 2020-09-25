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
     * @return  View
     */
    public function index()
    {
        $bookings = Booking::all();
        return view('dashboard.booking', ['bookings' => $bookings]);
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