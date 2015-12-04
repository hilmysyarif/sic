@extends('backend/master')

@section('htmlheader_title')
    Create News
@endsection


@section('main-content')

<!--Page Container Start Here-->
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
                <li class="active-page">Create News</li>
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
                                        <h3>Create a News</h3>
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
    {!! Form::open(['route' => 'news.store', 'method' => 'post', 'files' => 'true']) !!}

    <div class="form-group">
        {!! Form::label('Judul', 'Title:') !!}
        {!! Form::text('name',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Category', 'Category:') !!}
        {!! Form::select('category',
        $categories,
            null,
            ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('S_Content', 'Short Content') !!}
        {!! Form::textarea('s_content',null,['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Content', 'Content:') !!}
        {!! Form::textarea('content',null,['class'=>'form-control summernote']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Publisher', 'Publisher:') !!}
        {!! Form::select('publisher',
        $publisher,
            null,
            ['class' => 'form-control']) !!}
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