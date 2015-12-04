@extends('backend/master')

@section('htmlheader_title')
    Booking
@endsection


@section('main-content')

<!--Page Container Start Here-->
<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
        <ul class="nav nav-tabs">
            <li class="active">
                <a  href="#settings" data-toggle="tab">Website Settings</a>
            </li>
            <li><a href="#about" data-toggle="tab">About SIC</a>
            <li><a href="#company" data-toggle="tab">Company Profile</a>
            <li><a href="#privacy" data-toggle="tab">Privacy & Policy</a>
            <li><a href="#terms" data-toggle="tab">Terms and Conditions</a>                                          
        </ul>


        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Settings</li>
            </ul>
        </div>
    </div>
</div>


    <div class="row">

            <div class="tab-content ">
              <div class="tab-pane active" id="settings">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Website Configuration</h3>
                                        <p>

                                        </p>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
    {!! Form::model($bookings, [ '_method' => 'PUT', 'files' => 'true', 'route' => ['settings.update', $bookings]]) !!}
    
    <div class="form-group">
        {!! Form::label('S_TITLE', 'Site Title:') !!}
        {!! Form::text('title',settings('title'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_DESC', 'Site Description:') !!}
        {!! Form::text('desc',settings('desc'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_URL', 'Site Address (URL):') !!}
        {!! Form::text('url',settings('site_url'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_URL', 'E-mail Address:') !!}
        {!! Form::text('email',settings('email'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_KEYWRD', 'Site Keywords:') !!}
        {!! Form::text('keywords',settings('keywords'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_COPY', 'Copyright:') !!}
        {!! Form::text('copyright',settings('copyright'),['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




                </div>
                <div class="tab-pane" id="about">

        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>About SIC</h3>
                                        <p>

                                        </p>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
    <div class="form-group">
        {!! Form::label('S_URL', 'About Us:') !!}
        {!! Form::textarea('about',settings('about'),['class'=>'form-control summernote']) !!}
    </div>
        {!! Form::label('S_TITLE', 'Footer Description:') !!}
        {!! Form::textarea('desc_about',settings('desc_about'),['class'=>'form-control summernote']) !!}
    <div class="form-group">
        {!! Form::label('S_URL', 'Address:') !!}
        {!! Form::textarea('address',settings('address'),['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_URL', 'Phone:') !!}
        {!! Form::text('phone',settings('phone'),['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="tab-pane" id="company">

        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Company Profile</h3>
                                        <p>

                                        </p>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">

    <div class="form-group">
        {!! Form::label('S_DESC', 'Company Profile:') !!}
        {!! Form::textarea('compro',settings('company_profile'),['class'=>'form-control summernote']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="tab-pane" id="privacy">

        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Privacy and Policy</h3>
                                        <p>

                                        </p>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">

    <div class="form-group">
        {!! Form::label('S_DESC', 'Privacy & Policy:') !!}
        {!! Form::textarea('privacy',settings('privacy'),['class'=>'form-control summernote']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                <div class="tab-pane" id="terms">

        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Terms and Conditions</h3>
                                        <p>

                                        </p>
                                        @if(Session::has('message'))
                                        <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">

    <div class="form-group">
        {!! Form::label('S_DESC', 'Terms and Conditions:') !!}
        {!! Form::textarea('terms',settings('terms'),['class'=>'form-control summernote']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


            </div>


    </div>
</div>
</section>

@endsection

