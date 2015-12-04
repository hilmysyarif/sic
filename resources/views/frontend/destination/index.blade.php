@extends('frontend/master')

@section('main')
<div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Destinations</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Destinations</li>
                </ul>
            </div>
        </div>

<section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-12 col-md-12">
                        <div class="booking-section">
                            <form class="cruise-booking-form">
                                <div class="person-information">
                                    <div class="block">
                                        <h1>Discover stunning local destinations, diverse culture, unique traditions and cuisine
                                        </h1>
                                        <div class="row image-box style2">
                                            @foreach ($destination as $key => $value)
                                            <div class="col-md-6">
                                                <article class="box">
                                                    <figure>
                                                        <a href="{{ URL::to('/') }}/destination/{{ $value->slug }}" title=""><img src="{{ URL::to('/') }}/{{ $value->image }}" alt="" width="272" height="192"></a>
                                                    </figure>
                                                    <div class="details">
                                                        <h4>{{ $value->tujuan }}</h4>
                                                        {!! $value->s_content !!}
                                                        <a href="{{ URL::to('/') }}/destination/{{ $value->slug }}" title="" class="button">SEE ALL</a>
                                                    </div>
                                                </article>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>


                                </div>
                        </form></div>
                    </div>
                </div>
            </div>
        </section>
@endsection