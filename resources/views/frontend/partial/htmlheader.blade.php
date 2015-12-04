<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>{!! Settings::get('title') !!}</title>

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="keywords" content="{!! Settings::get('keywords') !!}" />
    <meta name="description" content="{!! Settings::get('description') !!}">
    <meta name="author" content="Noob digital">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/animate.min.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

    <!-- Main Style -->
    <script type="text/javascript">
        var mainStyle = "style.css";
        if (typeof localStorage != "undefined") {
            var colorSkin = localStorage.getItem("colorSkin");
            if (colorSkin != null) {
                mainStyle = "style-" + colorSkin + ".css";
            }
        }
        document.write('<link id="main-style" rel="stylesheet" href="{{ asset('/css') }}/' + mainStyle + '">');

    </script>

    <!-- Custom Styles -->
    <link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="{{ asset('/css/updates.css') }}">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="{{ asset('/css/responsive.css') }}">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
