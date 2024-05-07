<!doctype html>
<html lang="en">

<!-- Mirrored from ecologytheme.com/theme/kidsplace/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jun 2023 15:12:20 GMT -->

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PlayToons</title>
    <link rel="icon" href="{{asset('landing/images/logo.png')}}">
    <!-- Bootstrap CSS -->
    <link href="{{asset('landing/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('landing/css/all.css')}}" rel="stylesheet">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/slick.css')}}">
    <!-- Popup CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/meanmenu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/font-family/font-family-one.css')}}">
    <link rel="stylesheet" href="{{asset('landing/css/preloader.css')}}">
    <!-- KIDS CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('landing/css/style.css')}}">
    <!-- responsive css -->
    <link href="{{asset('landing/css/responsive.css')}}" rel="stylesheet">

    <!-- custom css  -->
    <link href="{{asset('landing/css/custom.css')}}" rel="stylesheet">
</head>

<body>
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- =======================
        end Preloader
======================== -->
    <header>
        <div class="menu">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="index.html"><img src="{{asset('landing/images/logo.png')}}" alt=""></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">

                            <li class="nav-item"><a class="nav-link" href="/">Home</a></li>

                            <li class="nav-item"><a class="nav-link" href="#about">About</a> </li>

                            <li class="nav-item"><a class="nav-link" href="#activity">Activities</a> </li>

                            <li class="nav-item"><a class="nav-link" href="#servies">Services</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#gallery">Gallery</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#event">Event</a> </li>
                            <li class="nav-item"><a class="nav-link" href="contact.html">Contact Us</a> </li>
                            <li class="nav-item">
                                @if(Auth::user())
                                <a class="nav-link btn btn-success kids-active-btn" href="{{route('home')}}"> Dashboard</a>
                                @else
                                <a class="nav-link btn btn-primary kids-active-btn" href="{{route('login')}}"> Sign Up</a>
                                @endif
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        @yield('content')
        <footer>
            <div class="container">
                <p>Copyright 2023@HunchaaDigital </p>
            </div>
        </footer>

        <!-- Theme Need JS -->
        <script src="{{asset('landing/js/jquery.min.js')}}"></script>
        <script src="{{asset('landing/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('landing/js/jquery.sticky.js')}}"></script>
        <script src="{{asset('landing/js/waypoints.min.js')}}"></script>
        <script src="{{asset('landing/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('landing/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('landing/js/slick.min.js')}}"></script>
        <script src="{{asset('landing/js/isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('landing/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('landing/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('landing/js/kids.js')}}"></script>
</body>

</html>