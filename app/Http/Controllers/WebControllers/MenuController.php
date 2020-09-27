<?php

namespace App\Http\Controllers\WebControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use App\MenuItem;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MenuController extends Controller
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
     * Display a listing of all menu in a view.
     *
     * @return  View
     */
    public function index()
    {
        $menuItems = MenuItem::all();
        return view('dashboard.menu', ['menuItems' => $menuItems]);
    }
}
