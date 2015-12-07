
<div class="section has-border container">
                    <div class="row blog-posts">
                        <div class="text-center description block">
                            <h1>Recent News</h1>
                        </div>
                        @foreach ($news as $key => $value)
                        <div class="col-sm-4">
                            <article class="post post-masonry">
                                <div class="post-image">
                                    <div class="image">
                                        <img src="{{ URL::to('/') }}/{{ $value->image }}" alt="">
                                        <div class="image-extras">
                                            <a href="#" class="post-gallery"></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-content">
                                    <div class="post-author">
                                        <a href="{{ URL::to('/') }}/news/{{ $value->slug }}"><img src="{{ URL::to('/') }}/{{ $value->image2 }}" width="62"></a>
                                    </div>
                                    <div class="post-meta">
                                        <span class="entry-author fn">By <a href="#">{{ $value->publisher}}</a></span>
                                        <span class="entry-time"><span class="published">{{ $value->created_at }}</span></span>
                                        <span class="post-category">in <a href="#">{{ $value->category }}</a></span>
                                    </div>
                                    <h3 class="entry-title"><a href="{{ URL::to('/') }}/news/{{ $value->slug }}">{{ $value->title }}</a></h3>
                                    <p>{!! $value->s_content !!}</p>
                                </div>
                                <div class="post-action">
                                    <a href="#" class="btn btn-sm style3 post-comment"><i class="fa fa-comment"></i>0</a>
                                    <a href="#" class="btn btn-sm style3 post-like"><i class="fa fa-heart"></i>0</a>
                                    <a href="#" class="btn btn-sm style3 post-share"><i class="fa fa-share"></i>Share</a>
                                    <a href="{{ URL::to('/') }}/news/{{ $value->slug }}" class="btn btn-sm style3 post-read-more">More</a>
                                </div>
                            </article>
                        </div>
                        @endforeach
                    </div>
                </div>