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
Route::post('register', 'App\Http\Controllers\Apis\AuthController@Register');
Route::post('login', 'App\Http\Controllers\Apis\AuthController@login');


Route::group(['prefix' => 'bus', 'middleware' => 'auth:api'], function () {
    Route::post('check/available/seats', 'App\Http\Controllers\Apis\TripController@getAvailableSeats');
    Route::post('book/trip/seat', 'App\Http\Controllers\Apis\TripController@bookTripSeat');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
