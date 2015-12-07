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

        <div class="media">
          <img class="media-object pull-left"alt="{{$album->name}}" src="/albums/{{$album->cover_image}}" width="350px">
          <div class="media-body">
            <h2 class="media-heading" style="font-size: 26px;">Album Name:</h2>
            <p>{{$album->name}}</p>
          <div class="media">
          <h2 class="media-heading" style="font-size: 26px;">AlbumDescription :</h2>
          <p>{{$album->description}}<p>
          <a href="{{URL::route('add_image',array('id'=>$album->id))}}"><button type="button"class="btn btn-primary btn-large">Add New Image to Album</button></a>
          <a href="{{URL::route('delete_album',array('id'=>$album->id))}}" onclick="return confirm('Are yousure?')"><button type="button"class="btn btn-danger btn-large">Delete Album</button></a>
        </div>

        @foreach($album->Photos as $photo)
          <div class="col-lg-3">
            <div class="thumbnail" style="max-height: 350px;min-height: 350px;">
              <img alt="{{$album->name}}" src="/albums/{{$photo->image}}">
              <div class="caption">
                <p>{{$photo->description}}</p>
                <p><p>Created date:  {{ date("d F Y",strtotime($photo->created_at)) }} at {{ date("g:ha",strtotime($photo->created_at)) }}</p></p>
                <a href="{{URL::route('delete_image',array('id'=>$photo->id))}}" onclick="return confirm('Are you sure?')"><button type="button" class="btnbtn-danger btn-small">Delete Image </button></a>
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

