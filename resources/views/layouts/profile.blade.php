<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Profile</title>
    <!-- Favicon icon -->
    <link rel="icon" type="{{asset('assets/i')}}image/png" sizes="16x16" href="images/favicon.png">
    <!-- Pignose Calender -->
    <link href="{{asset('assets/admin/plugins/pg-calendar/css/pignose.calendar.min.css')}}" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="{{asset('assets/admin/plugins/chartist/css/chartist.min.css')}}">
    <link rel="stylesheet"
          href="{{asset('assets/admin/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css')}}">
    <!-- Custom Stylesheet -->
    <link href="{{asset('assets/admin/css/style.css')}}" rel="stylesheet">

</head>

<body>

<!--*******************
    Preloader start
********************-->
<div id="preloader">
    <div class="loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"/>
        </svg>
    </div>
</div>
<!--*******************
    Preloader end
********************-->


<!--**********************************
    Main wrapper start
***********************************-->
<div id="main-wrapper">
    <!--**********************************
        Nav header start
    ***********************************-->
    <div class="nav-header">
        <div class="brand-logo">
            <a href="#">
                <b class="logo-abbr"><img src="{{asset('assets/admin/images/logo.png')}}" alt=""> </b>
                <span class="logo-compact"><img src="{{asset('assets/admin/images/logo-compact.png')}}" alt=""></span>
                <span class="brand-title">
                        <img src="{{asset('assets/admin/images/logo-text.png')}}" alt="">
                </span>
            </a>
        </div>
    </div>
    <!--**********************************
        Nav header end
    ***********************************-->

    <!--**********************************
        Header start
    ***********************************-->
    <div class="header">
        <div class="header-content clearfix">

            <div class="nav-control">
                <div class="hamburger">
                    <span class="toggle-icon"><i class="icon-menu"></i></span>
                </div>
            </div>
            <div class="header-right">
                <ul class="clearfix">
                    <li class="icons dropdown"><a href="javascript:void(0)" data-toggle="dropdown">
                            <i class="mdi mdi-bell-outline"></i>
                            <span class="badge badge-pill gradient-2">{{auth()->user()->appointments_count}}</span>
                        </a>
                        <div class="drop-down animated fadeIn dropdown-menu dropdown-notfication">
                            <div class="dropdown-content-heading d-flex justify-content-between">
                                <span class="">{{auth()->user()->appointments_count}} New Notification</span>
                                <a href="javascript:void()" class="d-inline-block">
                                    <span
                                        class="badge badge-pill gradient-2">{{auth()->user()->appointments_count}}</span>
                                </a>
                            </div>

                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        @if(auth()->user()->role == 2)
                                            @foreach(auth()->user()->appointments as $appointment)
                                                <a href="{{route('profile.appointment.show',$appointment->id)}}">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Appointment
                                                            № {{$appointment->id}}</h6>
                                                        <h6 class="notification-heading">
                                                            From: {{$appointment->user->first_name.' '.$appointment->user->second_name}}</h6>

                                                        <span class="notification-text"></span>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @else
                                            @foreach(auth()->user()->appointments_client as $appointment)
                                                <a href="{{route('profile.appointment.show',$appointment->id)}}">
                                                <span class="mr-3 avatar-icon bg-success-lighten-2"><i
                                                        class="icon-present"></i></span>
                                                    <div class="notification-content">
                                                        <h6 class="notification-heading">Appointment
                                                            № {{$appointment->id}}</h6>
                                                        <h6 class="notification-heading">
                                                            To: {{$appointment->doctor->first_name.' '.$appointment->doctor->second_name}}</h6>

                                                        <span class="notification-text"></span>
                                                    </div>
                                                </a>
                                            @endforeach
                                        @endif
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="icons dropdown">
                        <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                            <span class="activity active"></span>
                            <img src="{{asset('storage/'.auth()->user()->photo_path)}}" height="40" width="40" alt="">
                        </div>
                        <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                            <div class="dropdown-content-body">
                                <ul>
                                    <li>
                                        <a href="app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                    </li>

                                    <hr class="my-2">
                                    <form action="{{route('logout')}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="border-0 bg-transparent">
                                            <li><a><i class="icon-key"></i> <span>Logout</span></a></li>
                                        </button>
                                    </form>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--**********************************
        Header end ti-comment-alt
    ***********************************-->

    <!--**********************************
        Sidebar start
    ***********************************-->
    <div class="nk-sidebar">
        <div class="nk-nav-scroll">
            <ul class="metismenu" id="menu">
                <li class="nav-label">Dashboard</li>
                <li>
                    <a href="{{route('profile.home.index')}}" aria-expanded="false">
                        <i class="ti-home menu-icon"></i><span class="nav-text">Home</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile.appointment.index')}}" aria-expanded="false">
                        <i class="ti-desktop menu-icon"></i><span class="nav-text">Appointments</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile.examination.index')}}" aria-expanded="false">
                        <i class="ti-tablet menu-icon"></i><span class="nav-text">Medical Examinations</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('profile.treatment.index')}}" aria-expanded="false">
                        <i class="ti-bookmark-alt menu-icon"></i><span class="nav-text">Treatments</span>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <!--**********************************
        Sidebar end
    ***********************************-->

    <!--**********************************
        Content body start
    ***********************************-->
@include('sweetalert::alert')
@yield('content')


<!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>SHC</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>
<!--**********************************
    Main wrapper end
***********************************-->

<!--**********************************
    Scripts
***********************************-->
<script src="{{asset('assets/admin/plugins/common/common.min.js')}}"></script>
<script src="{{asset('assets/admin/js/custom.min.js')}}"></script>
<script src="{{asset('assets/admin/js/settings.js')}}"></script>
<script src="{{asset('assets/admin/js/gleek.js')}}"></script>
<script src="{{asset('assets/admin/js/styleSwitcher.js')}}"></script>

<!-- Chartjs -->
<script src="{{asset('assets/admin/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Circle progress -->
<script src="{{asset('assets/admin/plugins/circle-progress/circle-progress.min.js')}}"></script>
<!-- Datamap -->
<script src="{{asset('assets/admin/plugins/d3v3/index.js')}}"></script>
<script src="{{asset('assets/admin/plugins/topojson/topojson.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/datamaps/datamaps.world.min.js')}}"></script>
<!-- Morrisjs -->
<script src="{{asset('assets/admin/plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/morris/morris.min.js')}}"></script>
<!-- Pignose Calender -->
<script src="{{asset('assets/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/pg-calendar/js/pignose.calendar.min.js')}}"></script>
<!-- ChartistJS -->
<script src="{{asset('assets/admin/plugins/chartist/js/chartist.min.js')}}"></script>
<script src="{{asset('assets/admin/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js')}}"></script>

<script src="{{asset('asset/admin/js/dashboard/dashboard-1.js')}}"></script>

</body>

</html>
