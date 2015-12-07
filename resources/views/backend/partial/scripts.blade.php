
<!-- REQUIRED JS SCRIPTS -->

<script src="{{ asset('/js/lib/jquery.js') }}"></script>
<script src="{{ asset('/js/lib/jquery-migrate.js') }}"></script>
<script src="{{ asset('/js/lib/bootstrap.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.ui.js') }}"></script>
<script src="{{ asset('/js/lib/jRespond.js') }}"></script>
<script src="{{ asset('/js/lib/nav.accordion.js') }}"></script>
<script src="{{ asset('/js/lib/hover.intent.js') }}"></script>
<script src="{{ asset('/js/lib/hammerjs.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.hammer.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.fitvids.js') }}"></script>
<script src="{{ asset('/js/lib/scrollup.js') }}"></script>
<script src="{{ asset('/js/lib/smoothscroll.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.slimscroll.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.syntaxhighlighter.js') }}"></script>
<script src="{{ asset('/js/lib/velocity.js') }}"></script>
<script src="{{ asset('/js/lib/jquery-jvectormap.js') }}"></script>
<script src="{{ asset('/js/lib/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('/js/lib/jquery-jvectormap-us-aea.js') }}"></script>
<script src="{{ asset('/js/lib/smart-resize.js') }}"></script>
<script src="{{ asset('/js/lib/icheck.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.switch.button.js') }}"></script>
<script src="{{ asset('/js/lib/chart/sparkline/jquery.sparkline.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.maskedinput.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.validate.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.form.js') }}"></script>
<script src="{{ asset('/js/lib/j-forms.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.loadmask.js') }}"></script>
<script src="{{ asset('/js/lib/vmap.init.js') }}"></script>
<script src="{{ asset('/js/lib/tableExport.js') }}"></script>
<script src="{{ asset('/js/lib/jquery.base64.js') }}"></script>
<script src="{{ asset('/js/lib/sprintf.js') }}"></script>
<script src="{{ asset('/js/lib/jspdf.js') }}"></script>
<script src="{{ asset('/js/lib/base64.js') }}"></script>
<script src="{{ asset('/js/lib/footable.all.js') }}"></script>
<script src="{{ asset('/js/apps.js') }}"></script>
<script src="{{ asset('/js/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('/js/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('/js/jquery.fileupload.js') }}"></script>
<script src="{{ asset('/js/jquery.fileupload-proccess.js') }}"></script>
<script src="{{ asset('/js/jquery.fileupload-image.js') }}"></script>

<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.js') }}" type="text/javascript"></script>

<script src="{{ asset('/js/lib/jquery.dataTables.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/lib/dataTables.responsive.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/lib/dataTables.tableTools.js') }}" type="text/javascript"></script>
<script src="{{ asset('/js/lib/dataTables.bootstrap.js') }}" type="text/javascript"></script>

<script src="{{ asset('/vendor/jasekz/laradrop/js/enyo.dropzone.js') }}"></script>
<script src="{{ asset('/vendor/jasekz/laradrop/js/laradrop.js') }}"></script>

<script>

jQuery(document).ready(function(){
    jQuery('.laradrop').laradrop({
        onInsertCallback: function (src){
          // this is called when the 'select' button is clicked on a thumbnail
            //alert('File '+src+' selected.  Please implement onInsertCallback().');
            $('#images').val(src);
        }
    });
});

$('.summernote').summernote({
  height: 300,                 // set editor height

  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor

  focus: true,                 // set focus to editable area after initializing summernote
});

    $('#news').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/news',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'title', name: 'title'},
            {data: 'categories', name: 'categories'},
            {data: 's_content', name: 's_content'},
            {data: 'publisher', name: 'publisher'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    $('#news_category').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/news/category',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'}
        ]
    });

    $('#booking').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/booking',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'cust_name', name: 'cust_name'},
            {data: 'tour_name', name: 'tour_name'},
            {data: 'tour_date', name: 'tour_date'},
            {data: 'price', name: 'price'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    $('#charters').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/charters',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'name', name: 'name'},
            {data: 'lokasi', name: 'lokasi'},
            {data: 'categories', name: 'categories'},
            {data: 'price', name: 'price'},
            {data: 'headline', name: 'headline'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    $('#location').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/charters/location',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'}
        ]
    });

    $('#destination').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/destination',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'tujuan', name: 'tujuan'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    $('#testimonial').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/testimonial',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'name', name: 'name'},
            {data: 'testimonial', name: 'testimonial'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

    $('#users').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ URL::to('/') }}/admin/api/users',
        columns: [
            {data: 'id', name: 'id'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'image', name: 'image'},
            {data: 'created_at', name: 'created_at'},
            {data: 'action', name: 'action', orderable: false, searchable: false}
        ]
    });

</script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<!--- -->
