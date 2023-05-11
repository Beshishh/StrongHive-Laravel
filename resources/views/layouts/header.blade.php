<!doctype html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Health & Fitness | Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    {{--
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/slicknav.css">
    <link rel="stylesheet" href="/assets/css/flaticon.css">
    <link rel="stylesheet" href="/assets/css/gijgo.css">
    <link rel="stylesheet" href="/assets/css/animate.min.css">
    <link rel="stylesheet" href="/assets/css/animated-headline.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/nice-select.css">
    <link rel="stylesheet" href="/assets/css/style.css">



</head>

<body>
    <header>
        <!--? Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2 col-md-1">
                            <div class="logo">
                                <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <div class="menu-main d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="/" class="lng-home">Home</a></li>
                                            <li><a href="about" class="lng-about">About</a></li>
                                            <li><a href="services" class="lng-services">Subscriptions</a></li>
                                            <li><a href="schedule" class="lng-schedule">schedule</a></li>
                                            <li><a href="gallery" class="lng-gallery">gallery</a></li>
                                            <li><a href="blog" class="lng-blog">Blog</a></li>
                                            <li><a href="contact">Contact</a></li>

                                            @if (Auth::check())
                                                <li><a href="{{ url('/profile')}}">Profile</a></li>
                                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                                            @else
                                                <li><a href="{{ url('/start') }}">Sign in</a></li>
                                                <li><a href="{{ url('/register') }}">Sign up</a></li>
                                            @endif
                                            @if(Gate :: allows('isAdmin') || Gate :: allows('isManager'))
                                            <li><a href="{{ url ('/dashboard') }}">Admin</a></li>
                                            @endif
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
