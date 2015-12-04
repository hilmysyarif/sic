@extends('backend/master')

@section('htmlheader_title')
    Show News
@endsection


@section('main-content')
    <h1>Read News</h1>
     <div class="form-group">
            <label for="image" class="col-sm-2 control-label">Featured Image</label>
            <div class="col-sm-10">
                <img src="{{asset('img/'.$news->image.'.jpg')}}" height="180" width="150" class="img-rounded">
            </div>
        </div>
        <div class="form-group">
            <label for="isbn" class="col-sm-2 control-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" placeholder={{$news->title}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-sm-2 control-label">Category</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="category" placeholder={{$news->category}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="author" class="col-sm-2 control-label">Author</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="publisher" placeholder={{$news->publisher}} readonly>
            </div>
        </div>
        <div class="form-group">
            <label for="publisher" class="col-sm-2 control-label">Content</label>
            <div class="col-sm-10">
                <input type="textarea" class="form-control" id="content" value={{$news->content}} readonly>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <a href="{{ url('/admin/news')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </form>
@endsection