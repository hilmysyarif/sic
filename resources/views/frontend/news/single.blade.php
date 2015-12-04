@extends('frontend/master')

@section('main')

    @foreach ($news as $key => $value)
        <div class="page-title-container">
            <div class="container">
                <div class="page-title pull-left">
                    <h2 class="entry-title">{{ $value->title }}</h2>
                </div>
                <ul class="breadcrumbs pull-right">
                    <li><a href="#">HOME</a></li>
                    <li class="active"><a href="#">NEWS & ARTICLES</a></li>
                </ul>
            </div>
        </div>



<section id="content">
            <div class="container">
                <div class="row">
                    <div id="main" class="col-sm-12 col-md-12">
                        <div id="post-257" class="post-257 post type-post status-publish format-standard has-post-thumbnail hentry category-uncategorized tag-adventure tag-romance">
                                                        <figure class="image-container"><img width="870" height="342" src="{{ URL::to('/') }}/{{ $value->image }}" class="attachment-post-thumbnail wp-post-image" alt="1"></figure>                          <div class="details">
                                                        <hr/>
                                <h1 class="entry-title">{{ $value->title }}</h1>
                                <hr />
                                <div class="post-content entry-content">
                                   {!! $value->content !!}
                                                                    </div>
                                <div class="post-meta">
                                    <div class="entry-date">
                                        <label class="date">05</label>
                                        <label class="month">Nov</label>
                                    </div>
                                    <hr >
                                    <div class="entry-author fn">
                                        <i class="icon soap-icon-user"></i> Posted By:
                                        <a href="#" class="author-section">{{ $value->publisher }}</a>


                                    </div>
                                    <div class="entry-action">

                                        <a href="#" class="button entry-comment btn-small">
                                            <i class="soap-icon-comment"></i>
                                            <span>
                                                0 Comment
                                            </span>
                                        </a>
                                    </div>


                                </div>
                            </div>
                            <!--<div class="single-navigation block">
                                <div class="row">
    <iv class="col-xs-6 col-xs-offset-6"><a rel="next" href="http://www.soaptheme.net/wordpress/travelo/slideshow-post-with-slider/" class="button btn-large next full-width"><span>Next Post</span><i class="soap-icon-longarrow-right"></i></a></div> -->
                                                                    </div>
                            </div>



                            <!-- <h2>You Might Also Like This</h2>
                                                                                        <div class="travelo-box">
                                    <div class="suggestions image-carousel style2" data-animation="slide" data-item-width="150" data-item-margin="22">

                                    <div class="flex-viewport" style="overflow: hidden; position: relative;"><ul class="slides" style="width: 1400%; transition-duration: 0.6s; transform: translate3d(0px, 0px, 0px);">
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/amazing-places/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/17-150x150.png" class="middle-item wp-post-image" alt="1" draggable="false">                                               </a>
                                                <h5 class="caption">Amazing Places</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/travel-insurance/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/23-150x150.png" class="middle-item wp-post-image" alt="2" draggable="false">                                               </a>
                                                <h5 class="caption">Travel Insurance</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/travelo-with-video-post/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/14-150x150.png" class="middle-item wp-post-image" alt="1" draggable="false">                                               </a>
                                                <h5 class="caption">Travelo with video post</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/post-without-a-featured-image/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/3-150x150.png" class="middle-item wp-post-image" alt="3" draggable="false">                                                </a>
                                                <h5 class="caption">Post without featured image</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/slideshow-post-without-slider/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/2-150x150.png" class="middle-item wp-post-image" alt="2" draggable="false">                                                </a>
                                                <h5 class="caption">Slideshow post without slider</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/gallery-post-with-slider/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/3-150x150.png" class="middle-item wp-post-image" alt="3" draggable="false">                                                </a>
                                                <h5 class="caption">Gallery post with slider</h5>
                                            </li>
                                                                                        <li style="width: 150px; float: left; display: block;">
                                                <a href="http://www.soaptheme.net/wordpress/travelo/slideshow-post-with-slider/" class="hover-effect">
                                                    <img width="150" height="150" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/11/1-150x150.png" class="middle-item wp-post-image" alt="1" draggable="false">                                                </a>
                                                <h5 class="caption">Slideshow post with slider</h5>
                                            </li>
                                                                                    </ul></div><ol class="flex-control-nav flex-control-paging"><li><a class="flex-active">1</a></li><li><a class="">2</a></li></ol><ul class="flex-direction-nav"><li><a class="flex-prev" href="#">Previous</a></li><li><a class="flex-next" href="#">Next</a></li></ul></div>
                                </div>

    <div class="comments-container block">
        <h2>One Comment</h2>
        <ul class="comment-list travelo-box">
                    <li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="comment-2">
            <div class="the-comment clearfix">
                <div class="avatar">
                    <img width="72" height="72" alt="avatar" src="http://www.soaptheme.net/wordpress/travelo/wp-content/uploads/2014/12/author11.png">              </div>
                <div class="comment-box">
                    <div class="comment-author">
                        <a rel="nofollow" class="comment-reply-link button btn-mini pull-right" href="http://www.soaptheme.net/wordpress/travelo/standard-single-image-post/?replytocom=2#respond">REPLY</a>                        <h4 class="box-title">admin<small>November 6, 2014</small></h4>
                    </div>
                    <div class="comment-text">
                        <p></p><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s stand dummy text ever since the 1500s, when an unknown printer took.</p>
<p></p>
                    </div>
                </div>
            </div>
        </li>
    <!-- #comment-##
        </ul>
            </div> -->

    <div class="post-comment block" id="respond">
        <div class="travelo-box">
                                                <div id="respond" class="comment-respond">

                                                    {{ $comments }}
                <h3 id="reply-title" class="comment-reply-title">Leave a Comment <small><a rel="nofollow" id="cancel-comment-reply-link" href="/wordpress/travelo/standard-single-image-post/#respond" style="display:none;">Cancel reply</a></small></h3>
                                                                    {!! Form::open(array('action' => 'NewsController@comment', 'class'=>'comment-form','id'=>'comment-form', '_method'=>'POST')) !!}
                                                                            <p class="comment-notes">Your email address will not be published. All fields are required.</p>                         <div class="form-group row"><div class="col-xs-6"> <label>Your Name</label>                                                 {!! Form::text('author', null,
                                                    array('required',
                                                          'placeholder'=>'Your name', 'class'=>'input-text full-width')) !!} </div>
<div class="col-xs-6"> <label>Your Email</label>                                                 {!! Form::text('email', null,
                                                    array('required',
                                                          'placeholder'=>'Your name', 'class'=>'input-text full-width')) !!} </div>
</div>                                              <div id="comment-textarea" class="form-group"><label for="comment">Your Message</label>                                                {!! Form::textarea('comment', null,
                                                    array('required',
                                                          'placeholder'=>'Your name', 'class'=>'input-text full-width')) !!}</div>
                        <p class="form-submit"><input name="submit" type="submit" id="comment-submit" class="submit" value="Post Comment"> <input type="hidden" name="comment_post_ID" value="257" id="comment_post_ID">
<input type="hidden" name="comment_parent" id="comment_parent" value="0">
</p>
        <input type="hidden" name="icl_comment_language" value="en">


                            {!! Form::close() !!}
                            </div><!-- #respond -->
                    </div>
    </div>
                        </div>
                    </div>
            </div>
        </section>



@endforeach

@endsection
