@start
@extends('frontend/master')

@section('main')

        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Last news & artikel </h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">Home</a></li>
                    <li class="active">News</li>
                </ul>
            </div>
        </div>
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
                                                <figure class="animated" data-animation-type="fadeInDown" data-animation-delay="0">
                                                    <a href="{{ URL::to('/') }}/news/{{ $value->slug }}" class="hover-effect"><img width="270" height="160" alt="" src="{{ URL::to('/') }}/{{ $value->image }}"></a>
                                                </figure>
                                                <div class="details">
                                                    <h3 class="entry-title">{{ $value->title }}</h3>
                                                    <hr>
                                                    <div class="row time">
                                                        <div class="friends col-lg-12">
                                                            <div class="post-content entry-content">
                                                                <span class="skin-color">{!! $value->s_content !!}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="action">
                                                        <a class="button btn-small full-width" href="{{ URL::to('/') }}/news/{{ $value->slug }}">Read More</a>
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
@stop