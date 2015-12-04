        <footer id="footer">
            <div class="footer-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <h2>Discover</h2>
                            <ul class="discover triangle hover row">
                                <li class="col-xs-6 active">
                                    <a href="{{ URL::to('/') }}">Home</a>
                                </li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/luxury-yatch">Luxury Yachts</a></li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/wood-motor-sail">Motor Wood/Sail</a></li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/phinisi-schooner">Phinisi Schooner</a></li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/motor-yacth">Motor Yachts</a></li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/wooden-schooner">Wooden Schooner</a></li>
                                <li class="col-xs-6"><a href="{{ URL::to('/') }}/charters/commercial">Commercial</a></li>
                                <li class="col-xs-6">
                                    <a href="{{ URL::to('/destination') }}">Destinations</a>
                                </li>

                                <li class="col-xs-6">
                                    <a href="{{ URL::to('/news') }}">News</a>
                                </li>
                                <li class="col-xs-6">
                                    <a href="{{ URL::to('/contact') }}">Contact</a>
                                </li>
                            </ul>                            
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Travel News</h2>
                            <ul class="travel-news">
                                @foreach ($news2 as $key => $value)
                                <li>
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="{{ URL::to('/') }}/{{ $value->image }}" alt="" width="100%" height="100%" />
                                        </a>
                                    </div>
                                    <div class="description">
                                        <h5 class="s-title"><a href="{{ URL::to('/') }}/news/{{ $value->slug }}">{{ $value->title }}</a></h5>
                                        <p>{!! $value->s_content !!}</p>
                                        <span class="date">{!! $value->created_at !!}</span>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>Mailing List</h2>
                            <p>Sign up for our mailing list to get latest updates and offers.</p>
                            <br />
                            <div class="icon-check">
                                <input name="subs" type="text" class="input-text full-width" placeholder="your email" />
                            </div>
                            <br />
                            <span>We respect your privacy</span>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <h2>SPICEISLANDCHARTERS.COM</h2>
                            <p>{!! Settings::get('desc_about') !!}</p>
                            <br />
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> {!! Settings::get('phone') !!}</span>
                                <br />
                                <a href="#" class="contact-email">{!! Settings::get('email') !!}</a>
                            </address>
                            <ul class="social-icons clearfix">
                                <li class="twitter"><a title="twitter" href="#" data-toggle="tooltip"><i class="soap-icon-twitter"></i></a></li>
                                <li class="googleplus"><a title="googleplus" href="#" data-toggle="tooltip"><i class="soap-icon-googleplus"></i></a></li>
                                <li class="facebook"><a title="facebook" href="#" data-toggle="tooltip"><i class="soap-icon-facebook"></i></a></li>
                                <li class="linkedin"><a title="linkedin" href="#" data-toggle="tooltip"><i class="soap-icon-linkedin"></i></a></li>
                                <li class="vimeo"><a title="vimeo" href="#" data-toggle="tooltip"><i class="soap-icon-vimeo"></i></a></li>
                                <li class="dribble"><a title="dribble" href="#" data-toggle="tooltip"><i class="soap-icon-dribble"></i></a></li>
                                <li class="flickr"><a title="flickr" href="#" data-toggle="tooltip"><i class="soap-icon-flickr"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom blue-area">
                <div class="container">
                    <div class="copyright pull-left">
                        <p>{!! Settings::get('copyright') !!}</p>
                    </div>
                    <div class="pull-right">
                        <a id="back-to-top" href="#" class="animated" data-animation-type="bounce"><i class="soap-icon-longarrow-up circle"></i></a>
                    </div>
                </div>
            </div>
        </footer>