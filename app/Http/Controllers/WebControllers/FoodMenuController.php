<?php

namespace App\Http\Controllers\WebControllers;

use App\MenuType;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class FoodMenuController extends Controller
{
    /**
     * Display a listing of all menu in a view.
     *
     * @return  View
     */
    public function index(Request $request)
    {
        $type = (int)$request->query('type');

        if ($type == null) {
            $menuItems = DB::table('menu_items')
                ->where('menu_items.enabled', true)
                ->orderByDesc('menu_items.menu_type_id')
                ->join('menu_types', 'menu_items.menu_type_id', '=', 'menu_types.id')
                ->select('menu_items.*', 'menu_types.name as menuType')
                ->get();
        } else {
            $menuItems = DB::table('menu_items')
                ->where('menu_items.menu_type_id', $type)
                ->where('menu_items.enabled', true)
                ->orderByDesc('menu_items.menu_type_id')
                ->join('menu_types', 'menu_items.menu_type_id', '=', 'menu_types.id')
                ->select('menu_items.*', 'menu_types.name as menuType')
                ->get();
        }

        $menuTypes = MenuType::all();

        return view('client.menu',
            ['menuItems' => $menuItems,
                'menuTypes' => $menuTypes,
                'type' => $type]);
    }
}
