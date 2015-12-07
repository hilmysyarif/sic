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
                                        <h3>Create an Album</h3>
                                        <p>

                                        </p>
                                    @if($errors->has())
                                      <div class="alert alert-block alert-error fade in"id="error-block">
                                         <?php
                                         $messages = $errors->all('<li>:message</li>');
                                        ?>
                                        <button type="button" class="close"data-dismiss="alert">×</button>
                              
                                        <h4>Warning!</h4>
                                        <ul>
                                          @foreach($messages as $message)
                                            {{$message}}
                                          @endforeach

                                        </ul>
                                      </div>
                                    @endif


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

        <form name="createnewalbum" method="POST"action="{{URL::route('create_album')}}"enctype="multipart/form-data">
          <fieldset>
            <legend>Create an Album</legend>
            <div class="form-group">
              <label for="name">Album Name</label>
              <input name="name" type="text" class="form-control"placeholder="Album Name"value="{{Input::old('name')}}">
            </div>
            <div class="form-group">
              <label for="description">Album Description</label>
              <textarea name="description" type="text"class="form-control" placeholder="Albumdescription">{{Input::old('descrption')}}</textarea>
            </div>
            <div class="form-group">
              <label for="cover_image">Select a Cover Image</label>
              {!! Form::file('cover_image') !!}
            </div>
            <button type="submit" class="btnbtn-default">Create!</button>
          </fieldset>
        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>

@endsection

