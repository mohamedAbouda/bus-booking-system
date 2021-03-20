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

Route::group(['prefix' => 'bus'], function () {
    Route::post('check/available/seats', 'App\Http\Controllers\Apis\TripController@getAvailableSeats');
});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
