@extends('backend/master')

@section('htmlheader_title')
    Edit Destination
@endsection


@section('main-content')

<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>DESTINATION</h2>
            <p></p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page">Edit Destination</li>
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
                                        <h3>Edit Destination</h3>
                                        <p>

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-filter-header">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12">
    {!! Form::model($booking, [ '_method' => 'PUT', 'files' => 'true', 'route' => ['destination.update', $booking->id]]) !!}

    <div class="form-group">
        {!! Form::label('Judul', 'Name:') !!}
        {!! Form::text('tujuan',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Short Description:') !!}
        {!! Form::textarea('s_content',null,['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Description:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Address:') !!}
        {!! Form::text('address',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Floors:') !!}
        {!! Form::text('floors',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'City:') !!}
        {!! Form::text('city',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'State:') !!}
        {!! Form::text('state',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'MLS:') !!}
        {!! Form::text('mls',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Quare Feet:') !!}
        {!! Form::text('quare',$booking->quare_feet,['class'=>'form-control']) !!}
    </div>
     <div class="form-group">
        {!! Form::label('Judul', 'Square Feet:') !!}
        {!! Form::text('square',$booking->square_feet,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Bed:') !!}
        {!! Form::text('bed',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Bath:') !!}
        {!! Form::text('bath',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Judul', 'Price:') !!}
        {!! Form::text('price',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Tagged Feature:') !!}
        {!! Form::textarea('feature',null,['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Image', 'Featured Image:') !!}
        {!! Form::file('image', null) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
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
</section>
@stop