<?php

namespace App\Http\Controllers\ApiControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingApiController extends Controller
{
    /**
     * Display a listing of all booking.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Booking::paginate(8), 200);
    }

    /**
     * Store a newly created booking in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email_address' => 'required|email',
            'phone_number' => 'required',
            'table_size' => 'required|min:1|max:24',
            'date_time' => 'required|date|after:now',
            'notes' => 'nullable',
        ]);

        $bookings = Booking::create($validatedData +
            ['status' => 'pending']);

        return response()->json($bookings, 201);
    }

    /**
     * Display the specified booking.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(Booking::find($id), 200);
    }


    /**
     * Update the specified booking in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Booking $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $booking)
    {
        $booking->update($request->all());
        return response()->json($booking, 200);
    }

    /**
     * Remove the specified booking from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Booking::destroy($id);
        return response()->json(204);
    }
}
