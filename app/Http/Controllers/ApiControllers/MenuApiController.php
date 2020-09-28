<?php

namespace App\Http\Controllers\ApiControllers;

use App\Http\Controllers\Controller;
use App\MenuItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuApiController extends Controller
{
    /**
     * Display a listing of all menu items.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageSize = 8;
        $menuItems = DB::table('menu_items')
            ->orderByDesc('menu_items.menu_type_id')
            ->join('menu_types', 'menu_items.menu_type_id', '=', 'menu_types.id')
            ->select('menu_items.*', 'menu_types.name')
            ->paginate($pageSize);
        return response()->json($menuItems, 200);
    }

    /**
     * Store a newly created menu item in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'menu_type_id' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'thumbnail_path' => 'required',
        ]);

        $menuItems = MenuItem::create($validatedData);

        return response()->json($menuItems, 201);
    }

    /**
     * Display the specified menu item.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(MenuItem::find($id), 200);
    }

    /**
     * Update the specified menu item in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param MenuItem $menuItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MenuItem $menuItem)
    {
        // Validate enabled to boolean values only
        $validatedData = $request->validate(['enabled' => 'required|boolean']);

        $menuItem->update($validatedData);
        return response()->json($menuItem, 200);
    }

    /**
     * Remove the specified menu item from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MenuItem::destroy($id);
        return response()->json(204);
    }
}
