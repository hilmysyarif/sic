            <div id="slideshow" class="slideshow-bg full-screen">
                <div class="flexslider">
                    <ul class="slides">
                        <li>
                            <div class="slidebg" style="background-image: url(images/slider/11.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(images/slider/12.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(images/slider/1.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(images/slider/11.jpg);"></div>
                        </li>
                        <li>
                            <div class="slidebg" style="background-image: url(images/slider/1.jpg);"></div>
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
                                                           @foreach ($produk2 as $key => $value)
                                              {!! Form::open(array("url"=>"/inquiry" . $value->slug, 'class'=>'comment-form','id'=>'comment-form', '_method'=>'POST')) !!}
                                             @endforeach              <div class="row">
                                                         <div class="col-xs-6 col-md-4">
                                                                <div class="form-group">
                                                                    <label>Where do you want to go</label>
                                                                    <div class="selector">
                                                                        {!! Form::select('tujuan',
                                                                        (['All Indonesia' => 'All Indonesia', 'Alor' => 'Alor', 'Ambon' => 'Ambon', 'Bali' => 'Bali', 'Banda Sea' => 'Banda Sea', 'Cendrawasih Bay' => 'Cendrawasih Bay', 'Halmahera' => 'Halmahera', 'Komodo' => 'Komodo', 'Raja Ampat' => 'Raja Ampat', 'Wakatobi' => 'Wakatobi']),
                                                                            null,
                                                                            ['class' => 'full-width']) !!}
                                                                    </div>
                                                                  </div>
                                                            </div>

                                                        <div class="col-xs-6 col-md-3">
                                                            <div class="form-group">
                                                                <label>From</label>
                                                                <div class="datepicker-wrap">
                                                                    <input type="text" class="input-text full-width" name="date_from" placeholder="mm/dd/yy" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                         <div class="col-xs-6 col-md-3">
                                                                <div class="form-group">
                                                                    <label>TO</label>
                                                                    <div class="datepicker-wrap">
                                                                        <input type="text" class="input-text full-width" name="date_to" placeholder="mm/dd/yy" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                         <div class="form-group col-md-2 fixheight">
                                                            <label class="hidden-xs">&nbsp;</label>
                                                           @foreach ($produk2 as $key => $value) <button class="icon-check full-width"><a href="{{ URL::to('/')}}/search"> SEARCH NOW</a></button> @endforeach
                                                        </div>
                                                    </div>
                                            {!! Form::close() !!}


                            </div>
                        </div>
                    </div>
                </div>
            </div>

                    @if(Session::has('message'))
                        <div>
                            {{ Session::pull('message') }}
                        </div>
                    @endif
                    @if(! $errors->isEmpty())
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

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
                                        <a href="{{ URL::to('/') }}/charters/motor-yacth/{{ $value->slug }}" class="hover-effect"><img width="270" height="160" alt="" src="{{ URL::to('/') }}/{{ $value->image }}"></a>
                                    </figure>
                                    <div class="details">
                                        <h3 class="box-title feedback">{{ $value->name }}</h3>

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
                                        @if( $value->price == "CALL FOR PRICE" )
                                        <p class="description fourty-space"> <span class="skin-color">{{ $value->price }}</span></p>
                                        @else
                                        <p class="description fourty-space">IDR <span class="skin-color">{{ $value->price }}</span>/Day</p>
                                        @endif
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
                  </section>
                </div>
            </div>