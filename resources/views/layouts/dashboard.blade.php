<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="@yield('meta_content')" name="description" />
    <meta content="Digital Tech" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('dashboard_assets/images/favicon.ico') }}">

    <!-- Bootstrap Css -->

    <link href="{{ asset('dashboard_assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet"
        type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('dashboard_assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('dashboard_assets/css/icon.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    @yield('top_css')
    <link href="{{ asset('dashboard_assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />

</head>


<body>
    <!-- <body data-layout="horizontal" data-topbar="colored"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">


        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="{{ url('/') }}" class="logo logo-dark">
                            <span class="logo-sm">

                                <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="20">
                            </span>
                        </a>

                        <a href="{{ url('/') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button"
                        class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                </div>
                    <div class="dropdown d-none d-lg-inline-block ml-1">
                        <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                            <i class="uil-minus-path"></i>
                        </button>
                    </div>

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="{{ Auth::user()->profile_photo_url }}"
                                alt="Header Avatar">
                            <span
                                class="d-none d-xl-inline-block ml-1 font-weight-medium font-size-15">{{ Auth::user()->name }}</span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a class="dropdown-item" href="{{ url('/user/profile') }}"><i
                                    class="uil uil-user-circle font-size-18 align-middle text-muted mr-1"></i> <span
                                    class="align-middle">View Profile</span></a>
                            <a class="dropdown-item" href="#"><i
                                    class="uil uil-lock-alt font-size-18 align-middle mr-1 text-muted"></i> <span
                                    class="align-middle">Lock screen</span></a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();"><i
                                    class="uil uil-sign-out-alt font-size-18 align-middle mr-1 text-muted"></i> <span
                                    class="align-middle">Sign out</span></a>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== Left Sidebar Start ========== -->
        <div class="vertical-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{ url('/') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="20">
                    </span>
                </a>

                <a href="{{ url('/') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="" height="20">
                    </span>
                </a>
            </div>

            <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

            <div data-simplebar class="sidebar-menu-scroll">

                <!--- Sidemenu -->
                <div id="sidebar-menu">
                    <!-- Left Menu Start -->
                    <ul class="metismenu list-unstyled" id="side-menu">
                      <li class="menu-title">Menu</li>

                      <li>
                          <a href="{{ url('/') }}">
                              <i class="fas fa-globe"></i>
                              <span>Visit Ecovendy</span>
                          </a>
                      </li>

                      <li class="@yield('dashboard_menu_active')">
                          <a href="{{ route('dashboard') }}">
                              <i class="uil-home-alt"></i>
                              <span>Dashboard</span>
                          </a>
                      </li>

                      <li class="@yield('banner_menu_active')">
                          <a href="{{ route('banner.index') }}">
                              <i class="uil-home-alt"></i>
                              <span>Banner Settings</span>
                          </a>
                      </li>

                      <li class="@yield('whoweare_menu_active')">
                          <a href="{{ route('whoweare.index') }}">
                              <i class="uil-home-alt"></i>
                              <span>Who we are Settings</span>
                          </a>
                      </li>

                      <li class="@yield('whowearebottom_menu_active')">
                          <a href="{{ route('whowearebottom.index') }}">
                              <i class="uil-home-alt"></i>
                              <span>Who we are Bottom</span>
                          </a>
                      </li>

                      <li class="@yield('whatwedo_menu_active')">
                          <a href="{{ route('whatwedo.index') }}">
                              <i class="uil-home-alt"></i>
                              <span>What we do</span>
                          </a>
                      </li>

                      <li class="@yield('interesting_menu_active')">
                          <a href="{{ route('interesting.index') }}">
                              <i class="uil-home-alt"></i>
                              <span>Interesting Facts</span>
                          </a>
                      </li>
                      <li class="@yield('howdoesitwork_menu_active')">
                        <a href="{{ route('howdoesitwork.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>How it works Settings</span>
                        </a>
                    </li>

                      <li class="@yield('video_menu_active')">
                        <a href="{{ route('video.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>Video Settings</span>
                        </a>
                    </li>
                    <li class="@yield('faqs_menu_active')">
                        <a href="{{ route('faqs.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>Faq</span>
                        </a>
                    </li>

                      <li class="@yield('whatcanyoudo_menu_active')">
                        <a href="{{ route('whatcanyoudo.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>What can you do Settings</span>
                        </a>
                    </li>

                      <li class="@yield('partner_menu_active')">
                        <a href="{{ route('partner.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>Partner Settings</span>
                        </a>
                    </li>

                    <li class="">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="uil-500px"></i>
                            <span>Blogs</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('blog.index') }}">Blog list</a></li>
                            <li><a href="{{ route('blog.create') }}">Add Blogs</a></li>
                        </ul>
                    </li>

                    <li class="@yield('settings_menu_active')">
                        <a href="{{ route('settings.index') }}">
                            <i class="uil-home-alt"></i>
                            <span>General Settings</span>
                        </a>
                    </li>
                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->



        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">@yield('page-name')</h4>
                                @yield('breadcrumb')
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    @yield('content')


                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())

                            </script> © Ecovendy.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a
                                    href="https://dgtaltech.com/" target="_blank" class="text-reset">Digital Tech</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->


    <!-- JAVASCRIPT -->

    <script src="{{ asset('dashboard_assets/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/metismenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard_assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('dashboard_assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <script src="{{ asset('dashboard_assets/js/pages/dashboard.init.js') }}"></script>
    @yield('bottom_js')
    <script src="{{ asset('dashboard_assets/js/app.js') }}"></script>
    
</body>

</html>
