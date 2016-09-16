<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Intervention\Image\Facades\Image;

Route::get('/', function () {
    return view('home');
});

Route::get('places', 'PlacesController@getPlaces');

Route::get('images/{filename}', function ($filename)
{
    return Image::make(storage_path() . '/app/images/' . $filename)->response();
});
