@extends('master')
@section('title', 'Places')
@section('content')
    <!-- Main component for a primary marketing message or call to action -->
    <h1>Places</h1>
    @foreach($places as $place)
        <hr style="border-color: #999797;" />
        <h2>{{$place->name}}</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="embed-responsive embed-responsive-4by3" style="border: 1px solid #999797;">
                    <iframe
                            class="embed-responsive-item"
                            frameborder="0" style="border:0"
                            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCpTVguER8ZWZGtRG25OtiDbylye_wTMVM&q={{$place->lat}},{{$place->long}}">
                    </iframe>
                </div>
            </div>
            <div class="col-md-8">
                @if($place->images())
                    <div class="row grid">
                        @foreach($place->images()->get() as $img)
                            <div class="col-md-4 grid-item">
                                <a class="fancybox" rel="{{$place->id}}" href="{{URL::to($img->url)}}">
                                    <img class="grayscale" src="{{URL::to($img->url)}}" width="100%"/>
                                </a>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        @if ($loop->last)
            <hr style="border-color: #999797;" />
        @endif
    @endforeach
@endsection
