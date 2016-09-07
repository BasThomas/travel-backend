@extends('master')
@section('title', 'Places')
@section('content')
    <!-- Main component for a primary marketing message or call to action -->
    <h1>Places</h1>
    @foreach($places as $place)
        <h2>{{$place->name}}</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-4by3">
                    <iframe
                            class="embed-responsive-item"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCpTVguER8ZWZGtRG25OtiDbylye_wTMVM&q={{$place->name}}">
                    </iframe>
                </div>
            </div>
            <div class="col-md-8">

            </div>
        </div>
    @endforeach
@endsection