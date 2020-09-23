<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('booking','ApiControllers\BookingApiController@index');
Route::get('booking/{id}','ApiControllers\BookingApiController@show');
Route::post('booking','ApiControllers\BookingApiController@store');
Route::put('booking/{booking}','ApiControllers\BookingApiController@update');
Route::delete('booking/{id}','ApiControllers\BookingApiController@destroy');
