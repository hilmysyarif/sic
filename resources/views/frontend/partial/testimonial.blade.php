<div class="section global parallax" data-stellar-background-ratio="0.5" style="margin-top: 100px; background-position: 0px 91.5px;">
                        <div class="container">
                            <h1 class="text-center white-color">Testimonial</h1>
                            <div class="testimonial style3">
                                <ul class="slides ">
                                @foreach ($testimonial as $key => $value)
                                    <li  style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 1; display: block; z-index: 2; height: 196px;">
                                        <div class="author"><a href="#"><img src="{{ URL::to('/') }}/{{ $value->image }}" alt="" width="74" height="74" draggable="false"></a></div>
                                        <blockquote class="description">{!! $value->testimonial !!}</blockquote>
                                        <h2 class="name"> {{ $value->name }}</h2>
                                    </li>
                                @endforeach
                                </ul>
                            <ul class="testimonial-direction-nav"><li><a class="testimonial-prev testimonial-disabled" href="#" tabindex="-1">Previous</a></li><li><a class="testimonial-next" href="#">Next</a></li></ul></div>
                        </div>
                    </div>