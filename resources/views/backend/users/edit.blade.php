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
                                            {!! Form::model($users, [ '_method' => 'PUT', 'files' => 'true', 'route' => ['users.update', $users->id]]) !!}
                                            <div class="form-group">
                                                {!! Form::label('A_NAME', 'Admin Name:') !!}
                                                {!! Form::text('name',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('A_EMAIL', 'Admin Email:') !!}
                                                {!! Form::text('email',null,['class'=>'form-control']) !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('A_PASS', 'Admin Password:') !!}
                                                {!! Form::text('password',null,['class'=>'form-control']) !!}
                                                {!! Form::label('A_PASS_NOTE', 'this password is encrypt by bcrypt, you can encrypt the password in http://bcrypthashgenerator.apphb.com/') !!}
                                            </div>
                                            <div class="form-group">
                                                {!! Form::label('Image', 'Admin Image:') !!}
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