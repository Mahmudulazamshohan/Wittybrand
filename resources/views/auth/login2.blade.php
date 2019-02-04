<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Highdmin - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />

        <script src="{{asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body class="account-pages">

        <!-- Begin page -->
        <div class="accountbg" style="background: url('{{asset("assets/images/bg-1.jpg") }}');background-size: cover;"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-block">

                    <div class="account-box">

                        <div class="card-box p-5">
                            <h2 class="text-uppercase text-center pb-4">
                                <a href="{{route('home')}}" class="text-success">
                                    <span><img src="https://www.wittybrand.com/images/logo.png" alt="" height="50"></span>
                                </a>
                            </h2>

                            <form method="POST" action="{{ route('login') }}">
                              @csrf

                                <div class="form-group m-b-20 row">
                                    <div class="col-12">
                                        <label for="emailaddress">Email address</label>
                                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

		                                @if ($errors->has('email'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('email') }}</strong>
		                                    </span>
		                                @endif
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">
                                        <a href="{{route('password.request')}}" class="text-muted pull-right"><small>Forgot your password?</small></a>
                                        <label for="password">Password</label>
                                         <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                         @if ($errors->has('password'))
		                                    <span class="invalid-feedback">
		                                        <strong>{{ $errors->first('password') }}</strong>
		                                    </span>
		                                @endif
                                    </div>
                                </div>

                                <div class="form-group row m-b-20">
                                    <div class="col-12">

                                        <div class="checkbox checkbox-custom">
                                            <input id="remember" type="checkbox" checked="" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label for="remember">
                                                Remember me
                                            </label>
                                        </div>

                                    </div>
                                </div>

                                <div class="form-group row text-center m-t-10">
                                    <div class="col-12">
                                        <button class="btn btn-block btn-custom waves-effect waves-light" type="submit">Sign In</button>
                                    </div>
                                </div>

                            </form>

                            <div class="row m-t-50">
                                <div class="col-sm-12 text-center">
                                    <p class="text-muted">Don't have an account? <a href="{{route('register')}}" class="text-dark m-l-5"><b>Sign Up</b></a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="m-t-40 text-center">
                <p class="account-copyright">2018 © {{env('APP_NAME')}}</p>
            </div>

        </div>



        <!-- jQuery  -->
        <script src="{{asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{asset('assets/js/popper.min.js') }}"></script>
        <script src="{{asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{asset('assets/js/waves.js') }}"></script>
        <script src="{{asset('assets/js/jquery.slimscroll.js') }}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{asset('assets/js/jquery.app.js') }}"></script>

    </body>
</html>