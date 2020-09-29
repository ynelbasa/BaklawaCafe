<?php

namespace App\Http\Controllers\WebControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use App\MenuItem;
use App\MenuType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class DashboardController extends Controller
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
     * Display a listing of Baklawa Cafe statistics
     *
     * @return  View
     */
    public function index()
    {
        $bookingsToday = DB::table('bookings')->whereBetween('created_at', [Carbon::yesterday(), Carbon::today()])->count();

        $menuTypes = MenuType::all();
        $menuItems = MenuItem::all();
        foreach ($menuTypes as $menuType) {
            $menuType->count = $menuItems->where('menu_type_id', $menuType->id)->count();
        }

        return view('dashboard.index', ['bookingsToday' => $bookingsToday, 'menuTypes' => $menuTypes]);
    }
}
