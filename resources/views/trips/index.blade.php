@extends('master2')

@section('title')
Book a Trip
@endsection

@section('content')
    <table class="table">
        <tr>
            <td>Trip</td>
            <td>Price</td>
            <td>Number of Positions Left</td>
        </tr>
        @foreach($input as $trip)
            <tr>
                <td><a href="{{url('trips',  $trip->id)}}">{{$trip->name}}</a></td>
                <td>{{$trip->price}}</td>
                <td>{{$trip->num_cap}}</td>
            </tr>
        @endforeach
    </table>
@endsection