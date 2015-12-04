@extends('frontend/master')

@section('main')
            <div id="slideshow" class="slideshow-bg full-screen">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slidebg" style="background-image: url(http://localhost/tour/public/images/slider/11.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(http://localhost/tour/public/images/slider/12.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(http://localhost/tour/public/images/slider/1.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(http://localhost/tour/public/images/slider/11.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(http://localhost/tour/public/images/slider/1.jpg);"></div>
                        </li>
                    </ul>
                </div>
                <div class="container">
                    <div class="table-wrapper full-width">
                        <div class="table-cell">

                            <div class="heading box">
                                <h1 class="title">Plan Your Perfect Adventure</h1>
                                </br></br>
                            </div>
                            <div class="search-box">
                                              <form action="" method="post">
                                                    <div class="row">
                                                         <div class="col-xs-6 col-md-4">
                                                                <div class="form-group">
                                                                    <label>Where do you want to go</label>
                                                                    <div class="selector">
                                                                        <select class="full-width">
                                                                            <option value="">All Indonesia</option>
                                                                            <option value="">Alor</option>
                                                                            <option value="">Ambon</option>
                                                                            <option value="">Bali</option>
                                                                            <option value="">Banda Sea</option>
                                                                            <option value="">Cendrawasih Bay</option>
                                                                            <option value="">Halmahera</option>
                                                                            <option value="">Komodo</option>
                                                                            <option value="">Raja Ampat</option>
                                                                            <option value="">Wakatobi</option>
                                                                        </select>
                                                                    </div>
                                                                  </div>
                                                            </div>

                                                        <div class="col-xs-6 col-md-3">
                                                            <div class="form-group">
                                                                <label>From</label>
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="col-xs-6 col-md-3">
                                                                <div class="form-group">
                                                                    <label>TO</label>
                                                                    <div class="datepicker-wrap">
                                                                        <input type="text" class="input-text full-width" placeholder="mm/dd/yy" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="form-group col-md-2 fixheight">
                                                            <label class="hidden-xs">&nbsp;</label>
                                                            <button class="icon-check full-width"><a href="inquiry.html"> SEARCH NOW</a></button>
                                                        </div>
                                                    </div>
                                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="section">
                <div class="container">
                    <div class="text-center description block">
                        <h1>Our Exclusive Deals</h1>
                    </div>
                 <section id="content">
                   <div class="container">
                    <div id="main">
                        <div class="row image-box style3 cruise listing-style1">
                            @foreach ($produk as $key => $value)
                            <div class="col-sm-6 col-md-4">
                                <article class="box">
                                    <figure class="animated fadeInDown" data-animation-type="fadeInDown" data-animation-delay="0" style="animation-duration: 1s; visibility: visible;">
                                        <a href="" class="hover-effect"><img width="270" height="160" alt="" src="{!! Settings::get('site_url') !!}{{ $value->image }}"></a>
                                    </figure>
                                    <div class="details">
                                        <h3 class="box-title feedback">{{ $value->title }}</h3>

                                        <div class="row time">
                                            <div class="friends col-xs-6">
                                                <i class="soap-icon-friends yellow-color"></i>
                                                <div>
                                                    <span class="skin-color">Berths</span><br>{{ $value->berths }}
                                                </div>
                                            </div>
                                            <div class="departure col-xs-6">
                                                <i class="soap-icon-departure yellow-color"></i>
                                                <div>
                                                    <span class="skin-color">Base :</span><br> {{ $value->lokasi }}
                                                </div>
                                            </div>
                                        </div>
                                        <p class="description fourty-space">IDR <span class="skin-color">{{ $value->price }}</span>/Day</p>
                                        <div class="action">
                                            <a class="button btn-small full-width" href="">Booking Now</a>
                                        </div>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>


                   </div>
                  </section>
                </div>
            </div>




@endsection