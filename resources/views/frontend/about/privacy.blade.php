@extends('frontend/master')

@section('main')
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">Privacy & Policy</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">About</a></li>
                    <li class="active"><a href="#">Privacy & Policy</a></li>
                </ul>
            </div>
        </div>



<section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-12 col-md-12">
                        <div id="post-257" class="post-257 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-adventure tag-romance">                          <div class="details">
                                                        <hr/>
                                <h1 class="entry-title">Privacy & Policy</h1>
                                <hr />
                                <div class="post-content entry-content">
                                   {!! Settings::get('privacy') !!}
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>



@endsection
