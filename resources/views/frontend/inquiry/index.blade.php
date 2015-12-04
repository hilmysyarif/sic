@extends('frontend/master')

@section('main')
<div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Inquiry</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active">Inquiry</li>
                </ul>
            </div>
        </div>
        <section id="content">
            <div class="container">
                <div class="row">                   
                    <div id="main" class="col-md-9">
                        <div class="tab-container style1" id="cruise-main-content">
                            <ul class="tabs">
                                <li class="active"><a data-toggle="tab" href="#inquiry-tab">Inquiry</a></li>
                            </ul>
                            <div class="tab-content">
                                <div id="inquiry-tab" class="tab-pane fade in active">

                                        <div class="booking-section travelo-box">
                                                <div class="person-information">
                                                    <h2>Your are currently inquiry : {{ $tour->name }}</h2>
                                                    <p>Please fill the required form for the next steps</p>
                                        </div>
                                    </div>

                        <hr />

                        <div class="booking-section travelo-box">
                            {!! Form::open(array("url"=>"inquiry/" . $tour->slug, 'class'=>'comment-form','id'=>'comment-form', '_method'=>'POST')) !!}
                                <div class="person-information">
                                    <h2>Your Personal Information</h2>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif

                                    <div class="row">


                                            <div class="form-group col-sm-6 col-md-5">
                                                {!! Form::label('Name', 'Your Name * :') !!}
                                                {!! Form::text('name',null,['class'=>'input-text full-width']) !!}
                                            </div>
                                            <div class="form-group col-sm-6 col-md-5">
                                                {!! Form::label('Email', 'Your E-mail *:') !!}
                                                {!! Form::text('email',null,['class'=>'input-text full-width']) !!}
                                            </div>



                                                <div class="form-group col-sm-6 col-md-5">
                                                    {!! Form::label('PhCode', 'Country Code :') !!}
                                                    {!! Form::select('phcode',
                                                    (['+62' => 'Indonesia (+62) *']),
                                                        +62,
                                                        ['class' => 'custom-select full-width']) !!}
                                                </div>
                                                <div class="form-group col-sm-6 col-md-5">
                                                    {!! Form::label('PhCode', 'Phone Number * :') !!}
                                                    {!! Form::text('phone',null,['class'=>'input-text full-width']) !!}
                                                </div>


                                        <div class="form-group col-sm-6 col-md-5">
                                            {!! Form::label('Country', 'Country :') !!}
                                            {!! Form::select('country',
                                            (['Indonesia' => 'Indonesia', 'Singapore' => 'Singapore', 'Dubai' => 'Dubai', 'Saudi Arabia' => 'Saudi Arabia']),
                                            null,
                                            ['class' => 'custom-select full-width']) !!}
                                        </div>


                                             <div class="form-group col-sm-6 col-md-8">
                                                {!! Form::label('message', 'Message * :') !!}
                                                {!! Form::textarea('message','write message here',['class'=>'input-text full-width']) !!}
                                            </div>

                                            <hr />


                                        <div class="form-group">
                                            <div class="col-sm-6 col-md-5">
                                                <button type="submit" class="btn-large full-width">SEND</button>
                                            </div>
                                        </div>
                                            {!! Form::close() !!}
                            </div>
                        </div>
                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar col-md-3">
                        <div class="travelo-box contact-box">
                            <h4>Need Help?</h4>
                            <p>We would be more than happy to help you. Our team advisor are 24/7 at your service to help you.</p>
                            <address class="contact-details">
                                <span class="contact-phone"><i class="soap-icon-phone"></i> {!! Settings::get('phone') !!}</span>
                                <a class="contact-email" href="#">{!! Settings::get('email') !!}</a>
                            </address>
                        </div>
                    </div>                 
                </div>
            </div>
        </section>



@endsection