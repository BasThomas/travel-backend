<?php

use Illuminate\Http\Request;

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

Route::get('/info', function (Request $request) {
    return response()->json(["app" => "Travelguide", "version" => "1.0"]);
});

Route::post('places/add', 'PlacesController@postAddPlace');