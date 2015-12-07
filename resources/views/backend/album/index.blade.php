@extends('backend/master')

@section('htmlheader_title')
    Album
@endsection


@section('main-content')

<!--Page Container Start Here-->
<section class="main-container">
<div class="container-fluid">
<div class="page-header filled full-block light">
    <div class="row">
        <div class="col-md-6">
            <h2>ALBUM</h2>
            <p></p>
        </div>
        <div class="col-md-6">
            <ul class="list-page-breadcrumb">
                <li><a href="#">Home <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li><a href="#">Dashboard <i class="zmdi zmdi-chevron-right"></i></a></li>
                <li class="active-page"> Album</li>
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
                                        <h3>Show All Album</h3>
                                        <p>

                                        </p>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="data-align-right">
                                        <div class="tbl-action-toolbar">
                                            <ul>
                                                <li><a href="{{URL::route('create_album_form')}}" class="btn add-row btn-primary">Add New</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                      @foreach($albums as $album)
                        <div class="col-lg-3">
                          <div class="thumbnail" style="min-height: 514px;">
                            <img alt="{{$album->name}}" src="/albums/{{$album->cover_image}}">
                            <div class="caption">
                              <h3>{{$album->name}}</h3>
                              <p>{{$album->description}}</p>
                              <p>{{count($album->Photos)}} image(s).</p>
                              <p>Created date:  {{ date("d F Y",strtotime($album->created_at)) }} at {{date("g:ha",strtotime($album->created_at)) }}</p>
                              <p><a href="{{URL::route('show_album', array('id'=>$album->id))}}" class="btn btn-big btn-default">Show Gallery</a></p>
                            </div>
                          </div>
                        </div>
                      @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

