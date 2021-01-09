<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Roboto+Slab:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Favicon -->

    

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend_assets/images/fav-icon/favicon-16x16.png') }}">

    <!-- all css here -->

    <link rel="stylesheet" href="{{ asset('frontend_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend_assets/css/responsive.css') }}">
</head>

<body>

    <!--==========================Header Section Start==================-->

    <header class="">
        <div class="header_top d-none d-md-block pt-20 pb-20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-8 col-md-7 col-sm-12">
                        <div class="header_info d-flex">
                            <div class="phone mr-30">
                                <a href="tel:{{ footer()->phone }}">
                                    <i class="fas fa-mobile-alt"></i>+{{ footer()->phone }}</a>
                            </div>
                            <div class="email mr-30">
                                <a href="mailto:{{ footer()->email }}"><i class="far fa-envelope"></i>{{ footer()->email }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5 col-sm-12">
                        <div class="social_icon text-right">
                            <ul>
                                <li><a href="{{ footer()->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="{{ footer()->twitter }}"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="{{ footer()->instagram }}"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="{{ footer()->youtube }}"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container p-0">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="not found">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link @yield('home-active')" href="{{ url('/') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('whoweare-active')" href="@yield('url-whoweare')#about_section">who we are</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="@yield('url-whatwedo')#services_section">what we do</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="@yield('url-whatwedo')#blog_section">blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('faq-active')" href="{{ route('frontend.faqs') }}">faq</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @yield('contact-active')" href="{{ route('frontend.contact') }}">contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <!--=========================Header Section End=====================-->
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @yield('content')

        <!--=================Footer Section Start=====================-->

        <footer class="text-center wow fadeInUp animated animated animated">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer_logo text-center">
                            <img src="{{ asset('uploads/generalsettings') }}/{{ footer()->image }}" alt="not-found">
                        </div>
                        <div class="footer_icon pt-30">
                            <a href="{{ footer()->facebook }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ footer()->twitter }}"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copywright">
                <p>Copyrights © 2020 All Rights Reserved Ecovendy. Powered by <a href="https://dgtaltech.com">Farahnaz A</a>.</p>
            </div>
        </footer>
        <div class="scroll_top">
            <i class="fas fa-chevron-up"></i>
        </div>
    
        <!--=================Footer Section End======================-->
    
    
    
        <!-- JS here -->
        <script src="{{ asset('frontend_assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/slick.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/wow.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/ajax-form.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/appear.js') }}"></script>
        <script src="{{ asset('frontend_assets/js/script.js') }}"></script>
    
    </body>
    
    </html>
    