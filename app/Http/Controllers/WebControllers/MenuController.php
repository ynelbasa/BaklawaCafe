<?php

namespace App\Http\Controllers\WebControllers;

use App\Booking;
use App\Http\Controllers\Controller;
use App\MenuItem;
use App\MenuType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $pageSize = 8;
        $menuItems = DB::table('menu_items')
            ->orderByDesc('menu_items.menu_type_id')
            ->join('menu_types', 'menu_items.menu_type_id', '=', 'menu_types.id')
            ->select('menu_items.*', 'menu_types.name')
            ->paginate($pageSize);

        return view('dashboard.menu', ['menuItems' => $menuItems]);
    }
}
