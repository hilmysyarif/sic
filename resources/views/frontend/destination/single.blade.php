@extends('frontend/master')

@section('main')
        @foreach ($news as $key => $value)
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">{{ $value->tujuan }}</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">Destination</a></li>
                    <li class="active">{{ $value->tujuan }}</li>
                </ul>
            </div>
        </div>
        @endforeach
        <section id="content" class="gray-area">
            <div class="container">
                <div class="row">
                @foreach ($news as $key => $value)                    
                    <div id="main" class="col-sm-12 col-md-12">
                        <div class="post">
                            <figure class="image-container">
                                <a href="#"><img src="{{ URL::to('/') }}/{{ $value->image }}" alt=""></a>
                            </figure>
                            <div class="details">
                                <h1 class="entry-title"></h1>
                         <div class="tab-container box">
                            <ul class="tabs full-width">
                                <li class="active"><a data-toggle="tab" href="#recent-posts">Description</a></li>
                                <li><a data-toggle="tab" href="#popular-posts">Details</a></li>
                                <li><a data-toggle="tab" href="#new-posts">Photos</a></li>
                            </ul>
                            <div class="tab-content">
                                    <div id="recent-posts" class="tab-pane fade in active">
                                        <p>{!! $value->description !!}</p>

                                        <div class="col-sm-12 col-lg-12 table-cell cruise-itinerary">
                                            <div class="travelo-box">
                                                <table>
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Trip Length</th>
                                                            <th>Route</th>
                                                            <th>Dept from</th>
                                                            <th>Arrive at</th>
                                                            <th>Spaces</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($news as $key => $value)                                                          
                                                        <tr>
                                                            <td>{{ $value->tour_date }}</td>
                                                            <td>{{ $value->trip_length }}</td>
                                                            <td>{{ $value->route }}</td>
                                                            <td>{{ $value->dept_from }}</td>
                                                            <td>{{ $value->arrive_at }}</td>
                                                            <td><b>{{ $value->space }}</b></td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <p>For special rates for groups or full boat charter inquiries please contact us<br />
                                           call on : +62 21 5790 3975 | cs@spiceislandcharters.com</p>


                                    </div>
                                    <div id="popular-posts" class="tab-pane fade">
                                        <div class="col-sm-12 col-lg-12 table-cell cruise-itinerary">
                                            <div class="travelo-box">
                                                <table>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td>PRICE</td>
                                                            <td>{{ $value->price }}</td>
                                                            <td>FLOORS</td>
                                                            <td>{{ $value->floors }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>ADDRESS</td>
                                                            <td>{{ $value->address }}</td>
                                                            <td>QUARE FEET</td>
                                                            <td>{{ $value->quare_feet }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>CITY</td>
                                                            <td>{{ $value->city }}</td>
                                                            <td>LOT SQUARE FEET</td>
                                                            <td>{{ $value->square_feet }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>STATE</td>
                                                            <td>{{ $value->state }}</td>
                                                            <td>BEDROOMS</td>
                                                            <td>{{ $value->bed }}</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>MLS</td>
                                                            <td>{{ $value->mls }}</td>
                                                            <td>BATHROOMS</td>
                                                            <td>{{ $value->bath }}</td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <p>{!! $value->feature !!}</p>
                                    </div>
                                    <div id="new-posts" class="tab-pane fade">

                                    </div>
                                </div>
                          </div>

                            </div>

                            <div class="post-comment block">
                                <h2 class="reply-title">Listing Inquiry</h2>
                                <div class="travelo-box">
                                    <form class="comment-form">
                                        <div class="form-group row">
                                            <div class="col-xs-12">
                                                <label>Your Name *</label>
                                                <input class="input-text full-width" type="text">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-xs-6">
                                                <label>Your Email *</label>
                                                <input class="input-text full-width" type="text">
                                            </div>
                                            <div class="col-xs-6">
                                                <label>Phone</label>
                                                <input class="input-text full-width" type="text">
                                            </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <label>Your Message</label>
                                                <textarea rows="6" class="input-text full-width" placeholder="write message here"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-4">
                                                <button type="submit" class="btn-large full-width">SEND COMMENT</button>
                                            </div>
                                        </div>
                                      </div>

                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endforeach
@endsection