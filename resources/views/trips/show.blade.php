@extends('master2')

@section('title')
    {{$trip->name}}
@endsection

@section('content')
    <article>
        <h3>{{$trip->name}}</h3>
        <h4>Rendezvous at {{$trip->meet_loc}}</h4>
        <iframe
                width="330"
                height="300"
                frameborder="0" style="border:0"
                src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCROhBHXNtmvKZUu3HLC9TV179e21_tDHg&q={{$trip->meet_loc}}" allowfullscreen>
        </iframe>
        <div class="body">
            <p>{{$trip->description}}</p>
            <p>Price (in Canadian Dollars): ${{$trip->price}}</p>
            {!! Form::open(['url' => 'booking']) !!}


            @if ($trip->num_cap > 0)
                {!! Form::label('name', 'Name: ') !!}
                {!! Form::text('name') !!}
                <br/><br/>

                {!! Form::label('email', 'Email: ') !!}
                {!! Form::text('email') !!}
                <br/><br/>

                {!! Form::hidden('price', $trip->price) !!}
                {!! Form::hidden('trip_id', $trip->id) !!}
                {!! Form::hidden('trip_name', $trip->name) !!}
                {!! Form::submit('Book this trip') !!}
            @else
                <p>Sorry, this trip is full.</p>
            @endif
            {!! Form::close() !!}

            @if($errors->any())
                <ul class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif
        </div>
    </article>
@endsection