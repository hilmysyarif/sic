@extends('auth.auth')

@section('htmlheader_title')
    Password recovery
@endsection

@section('content')

<body class="login-page">


<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="{{ url('/password/email') }}" method="post" class="j-forms" id="forms-login" novalidate>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="login-form-header">
            <div class="logo">
                <a href="{{ url('/') }}"><b><img src="{{ asset('images/logo.png') }}" alt="logo"></a>
            </div>


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        </div>
        <div class="login-form-content">



            <!-- start login -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                </div>
            </div>
            <!-- end login -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary">Send Password Reset Link</button>
            <a href="{{ url('/auth/login') }}">Log in</a><br>
        </div>

    </form>
</div>
</div>
</div>
<!--Footer Start Here -->
<footer class="login-page-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
                <div class="footer-content">
                    <span class="footer-meta">{!! Settings::get('copyright') !!}</span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--Footer End Here -->
</section>
</body>
@endsection
