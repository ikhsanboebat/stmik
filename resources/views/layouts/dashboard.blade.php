<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title>Water Monitoring | Dashboard</title>

    <link rel="shortcut icon" href="{{ asset('images/logo/watermonitoring.png') }}">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/morris/morris.css') }}">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.2/dist/sweetalert2.all.min.js"></script>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <link href="//ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
   
    <script type = "text/JavaScript">
        <!--
           function AutoRefresh( t ) {
              setTimeout("location.reload(true);", t);
           }
        //-->
     </script>
</head>


<body class="fixed-left" onload = "JavaScript:AutoRefresh(3600000);">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <div class="text-center">
                    <a href="index-2.html" class="logo"><img src="{{ asset('images/logo/watermonitoring.png') }}" alt="logo-img"></a>
                    <a href="index-2.html" class="logo-sm"><img src="{{ asset('images/logo/watermonitoring.png') }}"
                            alt="logo-img"></a>
                </div>
            </div>
            <!-- Button mobile view to collapse sidebar menu -->


            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                        <li class="hide-phone app-search float-left">
                            {{--  <form role="search" class="navbar-form">
                                <input type="text" placeholder="Search..." class="form-control search-bar">
                                <a href="#" class="btn-search"><i class="fa fa-search"></i></a>
                            </form>  --}}
                            <h4 class="ml-2 p-1">{{ Auth::user()->name }} 
                                {{--  <span class="badge bg-danger">
                                @if (Auth::user()->level_id == 1)
                                    Member
                                @elseif (Auth::user()->level_id == 2)
                                    Member Premium
                                @elseif(Auth::user()->level_id == 3)
                                    Reseller Premium
                                @elseif(Auth::user()->level_id == 4)
                                    Admin  
                                @endif
                            </span>  --}}
                            </h4>
                        </li>
                    </ul>

                    <ul class="nav navbar-right float-right list-inline">
                        <li class="dropdown d-none d-sm-block">
                            {{-- <a href="#" data-target="#"
                                class="dropdown-toggle waves-effect waves-light notification-icon-box"
                                data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell"></i> --}}
                                {{-- <span class="badge badge-xs badge-danger"></span> --}}
                            {{-- </a> --}}
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="text-center notifi-title">Pemberitahuan </li>
                                {{-- <span class="badge badge-xs badge-success">3</span> --}}
                                <li class="list-group">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="media-heading">Your order is placed</div>
                                            <p class="m-0">
                                                <small>Dummy text of the printing and typesetting industry.</small>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="media-body clearfix">
                                                <div class="media-heading">New Message received</div>
                                                <p class="m-0">
                                                    <small>You have 87 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="media-body clearfix">
                                                <div class="media-heading">Your item is shipped.</div>
                                                <p class="m-0">
                                                    <small>It is a long established fact that a reader will</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- last list item -->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <small class="text-primary">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="d-none d-sm-block">
                            <a href="#" id="btn-fullscreen" class="waves-effect waves-light notification-icon-box"><i
                                    class="mdi mdi-fullscreen"></i></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown"
                                aria-expanded="true">
                                <img src="{{ asset('images/profile/user.png') }}" alt="user-img" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-right">
                                {{--  <li><a href="javascript:void(0)" class="dropdown-item"><i class="fas fa-user"></i> Profil Pengguna</a></li>  --}}
                                <li><a href="{{ route('pengaturan.ubahpassword') }}" class="dropdown-item"><i class="fas fa-cog"></i> Pengaturan </a></li>
                                {{-- <span class="badge badge-success float-right">5</span> --}}
                                {{-- <li><a href="javascript:void(0)" class="dropdown-item"> Lock screen</a></li> --}}
                                <li class="dropdown-divider"></li>
                                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();" class="dropdown-item "><i class="fas fa-power-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>  
            </nav>
        </div>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->

        <div class="left side-menu">
            <div class="sidebar-inner slimscrollleft">

                <!--<div class="user-details">-->
                <!--<div class="pull-left">-->
                <!--<img src="{{ asset('assets/images/users/avatar-1.jpg') }}" alt="" class="thumb-md img-circle">-->
                <!--</div>-->
                <!--<div class="user-info">-->
                <!--<div class="dropdown">-->
                <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">David Cooper <span class="caret"></span></a>-->
                <!--<ul class="dropdown-menu">-->
                <!--<li><a href="{{ route('profile') }}"><i class="md md-face-unlock"></i> Profile<div class="ripple-wrapper"></div></a></li>-->
                <!--<li><a href="javascript:void(0)"><i class="md md-settings"></i> Settings</a></li>-->
                <!--<li><a href="javascript:void(0)"><i class="md md-lock"></i> Lock screen</a></li>-->
                <!--<li><a href="{{ route('logout') }}"><i class="md md-settings-power"></i> Logout</a></li>-->
                <!--</ul>-->
                <!--</div>-->

                <!--<p class="text-muted m-0">Admin</p>-->
                <!--</div>-->
                <!--</div>-->
                <!--- Divider -->


                <div id="sidebar-menu">
                    <ul>
                        <li class="menu-title">Menu</li>
                        <li>
                            <a href="{{ route('home') }}" class="waves-effect"><i class="mdi mdi-temperature-celsius"></i><span>
                                    Grafik Suhu
                                    <span class="badge badge-pill badge-primary float-right"></span></span></a>
                        </li>
                        <li>
                            <a href="{{ route('home2') }}" class="waves-effect"><i class="mdi mdi-water"></i><span>
                                    Grafik PH
                                    <span class="badge badge-pill badge-primary float-right"></span></span></a>
                        </li>
                        <li>
                            <a href="{{ route('home3') }}" class="waves-effect"><i class="mdi mdi-test-tube"></i><span>
                                    Grafik PPM
                                    <span class="badge badge-pill badge-primary float-right"></span></span></a>
                        </li>

                        <li class="has_sub">
                            <a href="{{ route('pengaturan.ubahpassword') }}" class="waves-effect"><i
                                    class="mdi mdi-account-settings-variant"></i><span>
                                    Pengaturan </span><span class="float-right"><i
                                        class="mdi mdi-plus"></i></span></a>
                            <ul class="list-unstyled">
                                <li><a href="{{ route('pengaturan.ubahpassword') }}">Ubah Password</a></li>
                            </ul>
                        </li>

                        <li class="menu-title">Auth</li>

                        <li class="has_sub">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                                class="waves-effect bg-danger text-light"><i class="mdi mdi-power text-light"></i><span>
                                    Logout </span></a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div> <!-- end sidebarinner -->
        </div>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->

        <div class="content-page">
            @yield('content')

            <footer class="footer">
                © 2020 NMPROduction - All Rights Reserved.
            </footer>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

    <!--Morris Chart-->
     {{-- <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>  --}}

    {{--  <script src="assets/pages/dashborad.js"></script>  --}}
    <script src="assets/plugins/flot-chart/jquery.flot.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.time.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.selection.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.stack.js"></script>
    <script src="assets/plugins/flot-chart/jquery.flot.crosshair.js"></script>
    <script src="assets/pages/flot.init.js"></script>    

    <script src="{{ asset('assets/js/app.js') }}"></script>

    <script>
        function getSoon(){
            Swal.fire(
            'Coming Soon :D',
            'Tunggu di versi Aplikasi selanjutnya ya',
            'info'
            )
        }
    </script>

</body>

</html>