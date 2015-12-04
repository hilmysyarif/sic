@extends('auth.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')

    <body class="register-page">


<section class="login-container boxed-login">
<div class="container">
<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
<div class="login-form-container">
    <form action="{{ url('/auth/register') }}" method="post" class="j-forms" id="forms-login" novalidate>
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



            <!-- start name -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="text" id="name" name="name" placeholder="Full Name" value="{{ old('name') }}">
                </div>
            </div>
            <!-- end name -->

            <!-- start email -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="login">
                        <i class="zmdi zmdi-account"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="email" id="email" name="email" placeholder="E-mail Address" value="{{ old('email') }}">
                </div>
            </div>
            <!-- end email -->

            <!-- start password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password" placeholder="Password">
                </div>
            </div>
            <!-- end password -->

            <!-- start confirmation password -->
            <div class="unit">
                <div class="input login-input">
                    <label class="icon-left" for="password">
                        <i class="zmdi zmdi-key"></i>
                    </label>
                    <input class="form-control login-frm-input"  type="password" id="password" name="password_confirmation" placeholder="Retype Password">
                </div>
            </div>
            <!-- end confirmation password -->


            <!-- start keep logged -->
            <div class="unit">
                <label class="checkbox">
                    <input type="checkbox" name="terms" value="true" checked="">
                    <i></i>
                    I agree the <a href="#">terms</a>
                </label>
            </div>
            <!-- end keep logged -->

            <!-- start response from server -->
            <div class="response"></div>
            <!-- end response from server -->



        </div>
        <div class="login-form-footer">
            <button type="submit" class="btn-block btn btn-primary">Register</button>
            <a href="{{ url('/auth/login') }}" class="text-center">I already have a membership</a>
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
