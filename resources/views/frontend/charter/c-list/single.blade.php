@extends('frontend/master')

@section('main')
        @foreach ($page as $key => $value)
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
                                            Sed aliquam nunc eget velit imperdiet, in rutrum mauris malesuada. Quisque ullamcorper vulputate nisi, et fringilla ante convallis quis. Nullam vel tellus non elit suscipit volutpat. Integer id felis et nibh rutrum dignissim ut non risus. In tincidunt urna quis sem luctus, sed accumsan magna pellentesque. Donec et iaculis tellus. Vestibulum ut iaculis justo, auctor sodales lectus. Donec et tellus tempus, dignissim maurornare, consequat lacus. Integer dui neque, scelerisque nec sollicitudin sit amet, sodales a erat. Duis vitae condimentum ligula. Integer eu mi nisl. Donec massa dui, commodo id arcu quis, venenatis scelerisque velit.
<br /><br />
Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec nec velit non odio aliquam suscipit. Sed non neque faucibus, condimentum lectus at, accumsan enim. Fusce pretium egestas cursus. Etiam consectetur, orci vel rutrum volutpat, odio odio pretium nisiodo tellus libero et urna. Sed commodo ipsum ligula, id volutpat risus vehicula in. Pellentesque non massa eu nibh posuere bibendum non sed enim. Maecenas lobortis nulla sem, vel egestas dui ullamcorper ac.
<br /><br />
Sed scelerisque lectus sit amet faucibus sodales. Proin ut risus tortor. Etiam fermentum tellus auctor, fringilla sapien et, congue quam. In a luctus tortor. Suspendisse eget tempor libero, ut sollicitudin ligula. Nulla vulputate tincidunt est non congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus at est imperdiet, dapibus ipsum vel, lacinia nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Phasellus id interdum lectus, ut elementum elit. Nullam a molestie magna. Praesent eros turpis, commodo vel justo at, pulvinar mollis eros. Mauris aliquet eu quam id ornare. Morbi ac quam enim. Cras vitae nulla condimentum, semper dolor non, faucibus dolor. Vivamus adipiscing eros quis orci fringilla, sed pretium lectus viverra.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <article class="detailed-logo">
                            <figure>
                                <img width="320" height="180" src="images/azi.jpg" alt="">
                            </figure>
                            <div class="details">
                                <h2 class="box-title">Azimut 50</h2>
                                <span class="price clearfix">
                                    <small class="pull-left">from</small>
                                    <span class="pull-right">Rp 40.000.000</span>
                                </span>
                               
                                <p class="description">Nunc cursus libero purus ac congue ar lorem cursus ut sed vitae pulvinar massa idend porta nequetiam elerisque mi id, consectetur adipi deese cing elit maus fringilla bibe endum.</p>
                                <a class="button yellow full-width uppercase btn-small">Booking Now</a>
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