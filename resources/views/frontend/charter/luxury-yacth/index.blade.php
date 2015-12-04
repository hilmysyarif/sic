@extends('frontend/master')

@section('main')
        @foreach ($page as $key => $value)
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">{{ $value->name }} </h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">CHARTER</a></li>
                    <li class="active">{{ $value->name }}</li>
                </ul>
            </div>
        </div>
        @endforeach
        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="row">
                          <div class="col-sm-10 col-md-12">
                             <div class="cruise-list image-box style3 cruise listing-style1">
                                <div class="row">
                                    @foreach ($news as $key => $value)
<div class="col-sm-6 col-md-4">
                                            <article class="box">
                                                <figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="animation-duration: 1s; visibility: visible;">
                                                    <a href="{{ URL::to('/') }}/charters/luxury-yatch/{{ $value->slug }}" class="hover-effect"><img width="270" height="160" alt="" src="{{ URL::to('/') }}/{{ $value->image }}"></a>
                                                </figure>
                                                <div class="details">
                                                    <h3 class="box-title feedback">{{ $value->name }}</h3>

                                                    <div class="row time">
                                                        <div class="friends col-xs-6">
                                                            <i class="soap-icon-friends yellow-color"></i>
                                                            <div>
                                                                <span class="skin-color">Beds</span><br>{{ $value->beds }}
                                                            </div>
                                                        </div>
                                                        <div class="departure col-xs-6">
                                                            <i class="soap-icon-departure yellow-color"></i>
                                                            <div>
                                                                <span class="skin-color">{{ $value->lokasi }}
                                                                 :</span><br>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p class="description fourty-space">Sq ft <span class="skin-color">{{ $value->sqft }}m</span></p>
                                                    <div class="action">
                                                        <a class="button btn-small full-width" href="{{ URL::to('/') }}/inquiry/{{ $value->slug }}">Booking Now</a>
                                                    </div>
                                                </div>
                                            </article>
                                        </div>
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>

@endsection