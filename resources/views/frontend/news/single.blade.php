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
                                    <hr >
                                    <div class="entry-author fn">
                                        <i class="icon soap-icon-user"></i> Posted By:
                                        <a href="#" class="author-section">{{ $value->publisher }}</a>
                                        | 
                                        <i class="icon soap-icon-calendar"></i> Created on:
                                        <a href="#" class="author-section">{{ $value->created_at }}</a>
                                    </div>

                                    <hr >


                                    <div class="entry-action">

                                      <div id="disqus_thread"></div>
                                      <script type="text/javascript">
                                        var disqus_shortname = 'spiceislandcharter';
                                        @if (isset($slug))
                                          var disqus_identifier = 'blog-{{ $slug }}';
                                        @endif

                                        (function() {
                                          var dsq = document.createElement('script');
                                          dsq.type = 'text/javascript';
                                          dsq.async = true;
                                          dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                          (document.getElementsByTagName('head')[0] ||
                                            document.getElementsByTagName('body')[0]).appendChild(dsq);
                                        })();
                                      </script>
                                      <noscript>
                                        Please enable JavaScript to view the
                                        <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a>
                                      </noscript>
                                      <a href="http://disqus.com" class="dsq-brlink">
                                        comments powered by <span class="logo-disqus">Disqus</span>
                                      </a>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </section>



@endforeach

@endsection
