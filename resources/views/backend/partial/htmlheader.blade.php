<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta name="description" content="{!! Settings::get('description') !!}">
    <meta name="keywords" content="{!! Settings::get('keywords') !!}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>{!! Settings::get('title') !!} - @yield('htmlheader_title', 'Dashboard')</title>

    <!-- Custom CSS Assets -->
    <link href="{{ asset('/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/material-design-iconic-font.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/bootstrap2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/animate2.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/layout.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/components.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/widgets.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/pages.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/bootstrap-extend.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/common.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/responsive.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/jquery.fileupload.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('/css/jquery.fileupload-ui.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.6.16/summernote.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
