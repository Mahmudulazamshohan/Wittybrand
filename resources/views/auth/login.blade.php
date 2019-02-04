<!DOCTYPE html>
<html lang=en>

<head>
    <title>WittyBrand || Login</title>
    <meta charset=UTF-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel=icon type=image/png href=images/icons/favicon.ico>
    <!--===============================================================================================-->
    <!--===============================================================================================-->
    <script src=js/vendor/modernizr-2.8.3.min.js></script>
    <link rel=stylesheet type=text/css href="{{asset('wittycss/css/style.css') }}">
    <link rel=stylesheet type=text/css href="{{asset('wittycss/css/main.css') }}">
   
    <!--===============================================================================================-->
</head>

<body style="background-color: #999999;">
    
    <div class=limiter>
        <div class=container-login100>
            <div class=login100-more style="background-image: url('images/login.jpg');">
                <h3 class=any-title>Anywhere,Anytime,Anyone can start.</h3> </div>
            <div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-50">
                


                <a href="{{route('home')}}" class="navbar-brand logo"> <img src="{{asset('wittycss/images/logo.png') }}" class=logo alt=WittyBrand> </a>
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                    @csrf
                 <span class="login100-form-title p-b-59"> Freelancer Login </span>
                    
                    <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz"> <span class=label-input100>Email</span>

                        <input class=input100 type=text name="email" value="Your mail address"> 
                        @if (session()->has('errors'))
                                            <span class="invalid-feedback">
                                                <strong></strong>
                                            </span>
                        @endif
                        <span class=focus-input100></span> </div>
                    <div class="wrap-input100 validate-input" data-validate="Password is required"> <span class=label-input100>Password</span>
                        <input class=input100  type="password" name="password" placeholder=*************>
                       
                        @if ($errors->has('password'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                         @endif
                         <span class=focus-input100></span> </div>
                    <div class=container-login100-form-btn>
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                       @endif

                        <div class=wrap-login100-form-btn>
                            <div class=login100-form-bgbtn></div>
                            <button class=login100-form-btn type="submit"> Login </button>
                        </div>
                    </div>
                    <div class="alert alert-danger">asas</div>
                </form>
            </div>
        </div>
    </div>
   
</body>

</html>