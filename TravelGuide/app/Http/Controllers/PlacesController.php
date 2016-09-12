<?php
/**
 * Created by PhpStorm.
 * User: Casper
 * Date: 07/09/16
 * Time: 12:33
 */

namespace App\Http\Controllers;


use App\Place;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PlacesController extends Controller
{
    public function getPlaces(){
        $places = Place::all();
        return view('places')->with("places", $places);
    }

    public function postAddPlace(Request $request){

        $place = Place::where('pageid',$request->pageid)->first();
        if(!$place) {
            $place = new Place();
            $place->name = $request->title;
            $place->long = $request->lon;
            $place->lat = $request->lat;
            $place->pageid = $request->pageid;
            $place->save();
            return response("ok", 201);
        }
        return response("already exists", 409);
    }
}