<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/* Client Routing */

Route::get('/', function () {
    return view('client.index');
});

Route::get('/menu', function () {
    return view('client.menu');
});

Route::get('/gallery', function () {
    return view('client.gallery');
});

Route::get('/story', function () {
    return view('client.story');
});

Route::get('/booking', function () {
    return view('client.booking');
});

/* Dashboard Routing */

Route::get('/dashboard', 'WebControllers\DashboardController@index');

Route::get('/dashboard/booking', 'WebControllers\BookingController@index');

Route::get('/dashboard/menu', 'WebControllers\MenuController@index');

/* Auth Routing */

Auth::routes();
Route::get('logout', 'Auth\LoginController@logout');

