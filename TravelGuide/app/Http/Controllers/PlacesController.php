<?php
/**
 * Created by PhpStorm.
 * User: Casper
 * Date: 07/09/16
 * Time: 12:33
 */

namespace App\Http\Controllers;


use App\Place;

class PlacesController extends Controller
{
    public function getPlaces(){
        
        return view('places');
    }

    public function getAddPlace(){
        $place = new Place();
        $place->name = "Test location";
        $place->long = 51.46334393;
        $place->lat = 5.48519353;
        $place->pageid = 1001;
        $place->save();
        return response("Added place", 200);
    }
}