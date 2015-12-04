@extends('app')

@section('content')
<a href="{{url('/auth/logout')}}">Logout {{Auth::user()->name}}</a>
@endsection