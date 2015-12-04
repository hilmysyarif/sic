<!DOCTYPE html>

<html>

@include('frontend.partial.htmlheader')

<body>
    <!-- Content Wrapper. Contains page content -->
    <div id="page-wrapper">
    @include('frontend.partial.header')

        @if (Request::path() == '/')
                <section id="content" class="tour">
                    @include('frontend.deals.index2')
                </section>
                    @include('frontend.partial.posts')
                    @include('frontend.partial.testimonial')
                    @include('frontend.partial.footer')
        @elseif (Request::path() != '/')
                <!-- Main content -->
        <section id="content" class="tour">
            <!-- Your Page Content Here -->
            @yield('main')
        </section>
        <!-- /.content -->
        @include('frontend.partial.footer')
        @endif

    </div>

    <!-- /.content-wrapper -->
@include('frontend.partial.scripts')

</body>
</html>