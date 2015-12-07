@extends('frontend/master')

@section('main')
        @foreach ($news as $key => $value)
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">{{ $value->name }}</h2>
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
                <div class="row">
                    @foreach ($news as $key => $value)                    
                    <div id="main" class="col-md-9">
                        <div class="tab-container style1" id="cruise-main-content">
                            <ul class="tabs">
                                <li class="active"><a data-toggle="tab" href="#photos-tab">photos</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="photos-tab" class="tab-pane fade in active">
                                    <div class="photo-gallery style1" data-animation="slide" data-sync="#photos-tab .image-carousel">
                                        <ul class="slides">
                                            <li><img src="images/yachtdetails.jpg" alt="" /></li>
											 <li><img src="images/details/2.jpg" alt="" /></li>
	                                         <li><img src="images/details/3.jpg" alt="" /></li>
	                                         <li><img src="images/details/4.jpg" alt="" /></li>
	                                         <li><img src="images/details/5.jpg" alt="" /></li>
	                                         <li><img src="images/details/6.jpg" alt="" /></li>
	                                         <li><img src="images/details/7.jpg" alt="" /></li>
	                                         <li><img src="images/details/8.jpg" alt="" /></li>
	                                         <li><img src="images/details/9.jpg" alt="" /></li>
	                                         <li><img src="images/details/10.jpg" alt="" /></li>
	                                         <li><img src="images/details/2.jpg" alt="" /></li>
                                        </ul>
                                    </div>
                                    <div class="image-carousel style1" data-animation="slide" data-item-width="70" data-item-margin="10" data-sync="#photos-tab .photo-gallery">
                                        <ul class="slides">
                                            <li><img src="images/details/thumb1.jpg" alt="" /></li>
                                            <li><img src="images/details/2.jpg" alt="" /></li>
                                            <li><img src="images/details/3.jpg" alt="" /></li>
                                            <li><img src="images/details/4.jpg" alt="" /></li>
                                            <li><img src="images/details/5.jpg" alt="" /></li>
                                            <li><img src="images/details/6.jpg" alt="" /></li>
                                            <li><img src="images/details/7.jpg" alt="" /></li>
                                            <li><img src="images/details/8.jpg" alt="" /></li>
                                            <li><img src="images/details/9.jpg" alt="" /></li>
                                            <li><img src="images/details/10.jpg" alt="" /></li>
                                            <li><img src="images/details/2.jpg" alt="" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div id="cruise-features" class="tab-container">
                            <ul class="tabs">
                                <li class="active"><a href="#yacht-description" data-toggle="tab">Description</a></li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="yacht-description">
                                    <div class="intro table-wrapper full-width hidden-table-sms">
                                      
                                    </div>
                                    <div class="long-description">
                                        <h2>About {{ $value->name }} </h2>
                                        <p>
                                            {{ $value->descr }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <article class="detailed-logo">
                            <figure>
                                <img width="320" height="180" src="{{ URL::to('/')}}/{{ $value->image }}" alt="">
                            </figure>
                            <div class="details">
                                <h2 class="box-title">{{ $value->name }}</h2>
                                <span class="price clearfix">
                                    <small class="pull-left">from</small>
                                        @if( $value->price == "CALL FOR PRICE" )
                                            <span class="pull-right">{{ $value->price }}</span>
                                        @else
                                            <span class="pull-right">Rp {{ $value->price }}</span>
                                        @endif
                                </span>
                            
                                <a class="button yellow full-width uppercase btn-small" href="{{ URL::to('/') }}/inquiry/{{ $value->slug }}">Booking Now</a>
                            </div>
                        </article>
                        <div class="travelo-box contact-box">
                            <h4>Need Help?</h4>
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> {!! Settings::get('phone') !!}</span>
                                <br>
                                <a class="contact-email" href="#">{!! Settings::get('email') !!}</a>
                            </address>
                        </div>
                    </div>
                    @endforeach                    
                </div>
            </div>
        </section>



@endsection