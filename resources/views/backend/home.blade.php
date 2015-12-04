@extends('backend/master')

@section('htmlheader_title')
    Home
@endsection


@section('main-content')
<!--Page Container Start Here-->
<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6 col-sm-6">
            <h2>Dashboard</h2>
            <p></p>
        </div>
        <div class="col-md-6 col-sm-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Dashboard</li>
            </ul>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4 col-sm-4">
        <div class="stats-widget stats-widget">
            <div class="widget-header">
                <h3>News Stats</h3>
                <p>Total posts</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Posts count:</label> {{ $newscount }} posts </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Charters Stats</h3>
                <p>Total Charters</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Charters count:</label> {{ $chartercount }} charters</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-4 col-sm-4">
        <div class="widget-wrap stats-widget">
            <div class="widget-header">
                <h3>Registered user Stats</h3>
                <p>Total Users</p>
            </div>
            <div class="widget-stats-list">
                <ul>
                    <li><label>Registered users</label> {{ $userscount}} user</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row">
<div class="col-md-6">
    <div class="widget-wrap">
        <div class="widget-header block-header margin-bottom-0 clearfix">
            <div class="pull-left">
                <h3>Quick News Draft</h3>
                <p></p>
            </div>
            <div class="pull-right w-action">
		<div class="panel panel-default">
			<div class="panel-heading"></div>

			<div class="panel-body">
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
<div class="col-md-6">
    <div class="widget-wrap">
        <div class="widget-header block-header margin-bottom-0 clearfix">
            <div class="pull-left">
                <h3>Quick Artikel Draft</h3>
                <p></p>
            </div>
            <div class="pull-right w-action">
        <div class="panel panel-default">
            <div class="panel-heading"></div>

            <div class="panel-body">
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
</section>
@endsection
