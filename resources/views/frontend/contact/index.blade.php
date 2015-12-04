@extends('frontend/master')

@section('main')

         <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Contact Us</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Contact</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div id="main">
                    <div class="travelo-google-map block">{!! Mapper::render() !!}</div>

                    <div class="row">
                        <div class="col-sm-4 col-md-3">
                            <div class="travelo-box contact-us-box">
                                <h4>Contact us</h4>
                                <ul class="contact-address">
                                    <li class="address">
                                        <i class="soap-icon-address circle"></i>
                                        <h5 class="title">Address</h5>
                                            {!! Settings::get('address') !!}
                                    </li>
                                    <li class="phone">
                                        <i class="soap-icon-phone circle"></i>
                                        <h5 class="title">Phone</h5>
                                            {!! Settings::get('phone') !!}
                                    </li>
                                    <li class="email">
                                        <i class="soap-icon-message circle"></i>
                                        <h5 class="title">Email</h5>
                                        {!! Settings::get('email') !!}
                                    </li>
                                </ul>
                                <ul class="social-icons full-width">
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Twitter"><i class="soap-icon-twitter"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="GooglePlus"><i class="soap-icon-googleplus"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Facebook"><i class="soap-icon-facebook"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Linkedin"><i class="soap-icon-linkedin"></i></a></li>
                                    <li><a href="#" data-toggle="tooltip" title="" data-original-title="Vimeo"><i class="soap-icon-vimeo"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-8 col-md-9">
                            <div class="travelo-box">
                                {!! Form::open(array('route' => 'contact', 'class'=>'contact-form', '_method'=>'POST')) !!}
                                    <h4 class="box-title">Send us a Message<br /><br />
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </h4>
                                    <div class="row form-group">
                                        <div class="col-xs-6">
                                            <label>Your Name *</label>
                                                {!! Form::text('name', null,
                                                    array('required',
                                                          'placeholder'=>'Your name', 'class'=>'input-text full-width')) !!}
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Your Email *</label>
                                                {!! Form::text('email', null,
                                                    array('required',
                                                          'placeholder'=>'Your e-mail address', 'class'=>'input-text full-width')) !!}
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-xs-6">
                                            <label>Phone</label>
                                                {!! Form::text('phone', null,
                                                    array('required',
                                                          'placeholder'=>'Your phone number', 'class'=>'input-text full-width')) !!}
                                        </div>
                                        <div class="col-xs-6">
                                            <label>Subject</label>
                                                {!! Form::text('subject', null,
                                                    array('required',
                                                          'placeholder'=>'Subject', 'class'=>'input-text full-width')) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Your Message</label>
                                            {!! Form::textarea('message', null,
                                                array('required',
                                                      'placeholder'=>'Your message', 'class'=>'input-text full-width')) !!}
                                    </div>
                                    <div class="action">
                                         <button type="submit" class="btn btn-small">SEND MESSAGE</button>
                                    </div>

                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
    </div>

@endsection