@extends('master2')

@section('content')
    <h3>Create a new trip</h3>
    {!! Form::open(['url' => 'trip']) !!}
    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name') !!}
        <br/>
        {!! Form::label('price') !!}
        {!! Form::text('price') !!}
        <br/>
        {!! Form::label('num_cap', 'Number of Spots') !!}
        {!! Form::text('num_cap') !!}
        <br/>
        {!! Form::label('meet_loc', 'Rendezvous Location') !!}
        {!! Form::text('meet_loc') !!}
        <br/>
        {!! Form::label('description') !!}
        <br/>
        {!! Form::textarea('description') !!}
        <br/>
        {!! Form::submit('Create', ['class' => 'btn']) !!}
    </div>
    {!! Form::close() !!}
@endsection

