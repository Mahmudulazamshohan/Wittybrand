
@if(Auth::user()->verified == 1)
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>{{ env('APP_NAME')}} |  {{ $title }}</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="https://www.wittybrand.com/images/logo.png">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{asset('plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" rel="stylesheet" />
         @yield('style')
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="{{route('person.dashboard')}}" class="logo">
                            <span>
                                <img src="https://www.wittybrand.com/images/logo.png" alt="" height="32">
                            </span>
                            <i>
                                <img src="{{asset('assets/images/logo_sm.png' ) }}" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                    
                            @if(is_null($profile))
                                    <img src="{{asset('assets/images/user-avatar.png')}}" alt="user" class="rounded-circle img-fluid">
                                    @else
                                      <img src="{{route('person.image-views',explode('/',$profile->profile_image_location)[1]) }}?w=50 &h=50" alt="user" class="rounded-circle">
                                    @endif
                        </div>
                        <h5><a href="{{route('person.profile')}}">{{Auth::user()->name}}</a> </h5>
                        <p class="text-muted">Welcome to dashboard</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                           

                            <li>
                                <a href="{{route('person.dashboard')}}">
                                    <i class="fi-air-play"></i>
                                    @if(!Auth::check())
                                       <span class="badge badge-success badge-pill pull-right">7</span>
                                    @endif 
                                    <span> Dashboard </span>
                                </a>
                            </li>
                             <li>
                                <a href="{{route('person.apps')}}">
                                    <i class="fa fa-mobile" style="font-size:25px; "></i> <span> Apps </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{route('person.reference-user')}}">
                                    <i class="fa fa-users"  style="font-size:15px; "></i> <span> My Team </span>
                                </a>
                            </li>
                           
                            <li>
                                <a href="javascript: void(0);">
                                    <i class="fa fa-money" style="font-size:15px; "></i> <span> Income Source </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="#">Daily Earn</a></li>
                                    <li><a href="#">Blog Earn</a></li>
                                    <li><a href="#">Video Ads</a></li>
                                    <li><a href="#">Microworks</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="#">
                                    <i class="fa fa-bullseye"  style="font-size:15px; "></i> <span> Goal </span>
                                </a>
                            </li>
                            

                            <li>
                                <a href="#">
                                    <i class="fa fa-trophy"  style="font-size:15px; "></i> <span> Challenge </span>
                                </a>
                            </li>

                           
                            <li>
                                <a href="#">
                                    <i class="fa fa-usd"  style="font-size:15px; "></i> <span> Withdraw </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-laptop"  style="font-size:15px; "></i> <span> Tutorials </span>
                                </a>
                            </li>

                             <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart"  style="font-size:15px; "></i> <span> Shopping </span>
                                </a>
                            </li>
                            
                             <li>
                                <a href="#">
                                    <i class="fa fa-certificate"  style="font-size:15px; "></i> <span> Rate us </span>
                                </a>
                            </li>
                             <li>
                                <a href="#">
                                    <i class="fa fa-cog"  style="font-size:15px; "></i> <span> Setting </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-info-circle"  style="font-size:15px; "></i> <span> Terms and Condition </span>
                                </a>
                            </li>
                          
                          <li>
                                <a href="{{route('person.feedback')}}">
                                    <i class="fa fa-send"  style="font-size:15px; "></i> <span> Feed Back </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-question-circle"  style="font-size:15px; "></i> <span> Help </span>
                                </a>
                            </li>


                        </ul>

                    </div>
                    <!-- Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="hide-phone app-search">
                                <form>
                                    <input type="text" placeholder="Search..." class="form-control">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                    <i class="fi-bell noti-icon"></i>
                                    <span class="badge badge-success badge-pill noti-icon-badge">
                                        {{$notify[1]}}
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated dropdown-lg">

                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h5 class="m-0"><span class="float-right"><a href="" class="text-dark"><small>Clear All</small></a> </span>Notification</h5>
                                    </div>

                                    <div class="slimscroll" style="max-height: 230px;">
                                      @if($notify[0])
                                        @foreach($notify[0] as $n)
                                        <!-- item-->
                                        <a href="{{route('person.notification',[$n->id,md5($n->id)])}}" class="dropdown-item notify-item">
                                            <div class="notify-icon bg-success"><i class="mdi mdi-comment-account-outline"></i></div>
                                               <p class="notify-details">{{ $n->notification_string }}
                                                  <small class="text-muted">{{$n->time}}</small>
                                               </p>
                                        </a>
                                        @endforeach
                                      @endif

                                       
                                    </div>

                                    <!-- All-->
                                    <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                        View all <i class="fi-arrow-right"></i>
                                    </a>

                                </div>
                            </li>

                            

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                   @if(is_null($profile))
                                    <img src="{{asset('assets/images/user-avatar.png')}}" alt="user" class="rounded-circle">
                                    @else
                                      <img src="{{route('person.image-views',explode('/',$profile->profile_image_location)[1]) }}?w=100 &h=100" alt="user" class="rounded-circle">
                                    @endif
                                     <span class="ml-1">Maxine K <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Welcome !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="{{ route('person.profile') }}" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>My Account</span>
                                    </a>

                                    

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fa fa-question-circle" style="font-size: 17px;"></i> <span>Help</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{route('person.change-password')}}" class="dropdown-item notify-item">
                                        <i class="fi-lock"></i> <span>Change Password</span>
                                    </a>

                                    <!-- item-->
                                    <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                     class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>
                            <li>
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard </h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Welcome to {{env('APP_NAME')}}</li>
                                    </ol>
                                </div>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                        @yield('section')

                    </div> <!-- container -->

                </div> <!-- content -->

                <footer class="footer text-right">
                    2018 © {{env('APP_NAME')}}
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
          <script src="{{ asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js" type="text/javascript') }}"></script>
         

        <!-- Flot chart -->
        <script src="{{ asset('plugins/flot-chart/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.time.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.tooltip.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.resize.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.crosshair.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/curvedLines.js') }}"></script>
        <script src="{{ asset('plugins/flot-chart/jquery.flot.axislabels.js') }}"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="{{ asset('plugins/jquery-knob/jquery.knob.js') }}"></script>

        <!-- Dashboard Init -->
        <script src="{{ asset('assets/pages/jquery.dashboard.init.js') }}"></script>
         @yield('script')

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>

    </body>
</html>
@else
 @include('auth.verify-mail')
@endif