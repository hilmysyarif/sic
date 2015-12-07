@extends('backend/master')

@section('htmlheader_title')
    Edit Booking
@endsection


@section('main-content')

<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>Booking</h2>
            <p></p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page">Edit Booking</li>
            </ul>
        </div>
    </div>
</div>


    <div class="row">
        <div class="col-md-12">
            <div class="widget-wrap material-table-widget">

                <div class="widget-container margin-top-0">
                    <div class="widget-content">
                        <div class="data-action-bar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="widget-header">
                                        <h3>Edit Booking</h3>
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
    {!! Form::model($booking, [ '_method' => 'PUT', 'files' => 'true', 'route' => ['booking.update', $booking->id]]) !!}
    <div class="form-group">
        {!! Form::label('N_Tour', 'Tour Name:') !!}
        {!! Form::text('tour_name', null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('D_Tour', 'Tour Date:') !!}
        {!! Form::text('tour_date',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('P_Tour', 'Price:') !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Status', 'Status:') !!}
        {!! Form::select('status',
        (['0' => 'Select Status', '1' => 'Confirmed', '2' => 'On Going', '3' => 'Completed', '4' => 'Cancelled']),
            null,
            ['class' => 'form-control']) !!}
    </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
    <div class="form-group">
        {!! Form::label('Customer', 'Customer Name:') !!}
        {!! Form::text('cust_name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Email', 'E-mail:') !!}
        {!! Form::text('email',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Phone', 'Phone:') !!}
        {!! Form::text('phone',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Country', 'Country:') !!}
        {!! Form::text('country',null,['class'=>'form-control']) !!}
    </div>

                                        </div>
                                    </div>
                                </div>
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>    {!! Form::close() !!}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@stop