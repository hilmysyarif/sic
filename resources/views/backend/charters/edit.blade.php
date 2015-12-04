@extends('backend/master')

@section('htmlheader_title')
    Edit News
@endsection


@section('main-content')

<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>NEWS</h2>
            <p></p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page">Edit News</li>
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
                                        <h3>Edit News</h3>
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
                                        {!! Form::model($news, [ '_method' => 'PUT', 'files' => 'true', 'route' => ['charters.update', $news->id]]) !!}
                                            <div class="form-group">
                                                {!! Form::label('N_Tour', 'Charters Name:') !!}
                                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('C_Tour', 'Yacth Categories:') !!}
                                                {!! Form::select('yacth',
                                                $yacth,
                                                    null,
                                                    ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('C_Tour', 'Yacth Location:') !!}
                                                {!! Form::select('lokasi',
                                                $lokasi,
                                                    null,
                                                    ['class' => 'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('B_Tour', 'Bedrooms:') !!}
                                                {!! Form::text('beds',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('Bt_Tour', 'Bathrooms:') !!}
                                                {!! Form::text('bath',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('Bt_Tour', 'Berths:') !!}
                                                {!! Form::text('beths',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('sqft', 'SQ FT:') !!}
                                                {!! Form::text('sqft',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('P_Tour', 'Price:') !!}
                                                {!! Form::text('price',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('Image', 'Featured Image:') !!}
                                                {!! Form::file('image', null) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
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