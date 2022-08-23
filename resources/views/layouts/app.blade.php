<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}">

    <!------- FontAwesome  ------->
    <script src="https://kit.fontawesome.com/bc98e6aa51.js" crossorigin="anonymous"></script>

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/themify-icons.css') }}">
    <!--Fontawesome icon css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/all.min.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('digimark_template/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/responsive.css') }}">
    <!--cutomize css-->
    <link rel="stylesheet" href="{{ asset('digimark_template/css/cutomize.css') }}">


    {{-- <!------- FontAwesome  ------->
        <script src="https://kit.fontawesome.com/bc98e6aa51.js" crossorigin="anonymous"></script>


        <!------- Bootstrap 5 ---------->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script src="{{ mix('js/app.js') }}" defer></script> --}}



</head>

<body>
    <div id="app">





        <!--header section start-->
        <header class="header">
            <!--start navbar-->
            <nav class="navbar navbar-expand-lg custom-nav-3 fixed-top">
                <div class="container">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset("images/BlueSky-Logo.png") }}" alt="logo" width="120" class="img-fluid">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="ti-menu"></span>
                    </button>
                    <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto menu">
                            {{-- <li><a href="#" class="dropdown-toggle"> Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home Page 01</a></li>
                                    <li><a href="index-2.html">Home Page 02</a></li>
                                    <li><a href="index-3.html">Home Page 03</a></li>
                                    <li><a href="index-4.html">Home Page 04</a></li>
                                    <li><a href="index-5.html">Home Page 05</a></li>
                                    <li><a href="index-6.html">Home Page 06</a></li>
                                    <li><a href="index-7.html">Home Page 07 <span class="badge badge-warning ml-2">New</span></a></li>
                                </ul>
                            </li>
                            <li><a href="about-us.html">About Us</a></li>
                            <li><a href="#" class="dropdown-toggle">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="#" class="dropdown-toggle-inner">Login & Sign Up</a>
                                        <ul class="sub-menu">
                                            <li><a href="basic-login.html">Login Page 1</a></li>
                                            <li><a href="login.html">Login Page 2</a></li>
                                            <li><a href="basic-sign-up.html">Signup Page 1</a></li>
                                            <li><a href="sign-up.html">Signup Page 2</a></li>
                                            <li><a href="password-reset.html">Reset Password</a></li>
                                            <li><a href="change-password.html">Change Password</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-toggle-inner">Utilities</a>
                                        <ul class="sub-menu">
                                            <li><a href="download.html">Download Page</a></li>
                                            <li><a href="review.html">Review Page</a></li>
                                            <li><a href="faq.html">FAQ Page</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                            <li><a href="thank-you.html">Thank You Page</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-toggle-inner">Team</a>
                                        <ul class="sub-menu">
                                            <li><a href="team.html">Our Team Members</a></li>
                                            <li><a href="team-single.html">Team Member Profile</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" class="dropdown-toggle-inner">Our Blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog-default.html">Blog Grid</a></li>
                                            <li><a href="blog-no-sidebar.html">Blog No Sidebar</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                            <li><a href="blog-right-sidebar-2.html">Blog Right Sidebar 02</a></li>
                                            <li><a href="blog-single-left-sidebar.html">Details Left Sidebar</a></li>
                                            <li><a href="blog-single-right-sidebar.html">Details Right Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="project-details.html">Project Details </a></li>
                                    <li><a href="services-details.html">Services Details</a></li>
                                </ul>
                            </li> --}}
                            <li><a href="services.html"> <i class="fa-solid fa-house-user"></i> Home</a></li>
                            <li><a href="services.html"> <i class="fa-solid fa-circle-info"></i> About</a></li>
                            <li><a href="services.html"> <i class="fa-solid fa-handshake-angle"></i> Services</a></li>
                            <li><a href="project.html"> <i class="fa-solid fa-sitemap"></i> Portfolio </a></li>
                            <li><a href="contact-us.html"> <i class="fa-solid fa-message"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!--header section end-->

        @yield('content')




        <!--footer section start-->
        <footer class="footer-section">
            <!--footer top start-->
            <div class="footer-top gradient-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-9">
                            <div class="row footer-top-wrap">
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-nav-wrap text-white">
                                        <img src="{{ asset('images/BlueSky-WhiteLogo.png') }}" width="160" alt="logo">
                                        {{-- <p>Continually myocardinate inexpensive catalysts for change with seamless
                                            initiatives.</p> --}}
                                        <div class="social-nav mt-4">
                                            <ul class="list-unstyled social-list mb-0">
                                                <li class="list-inline-item tooltip-hover">
                                                    <a href="#" class="rounded"><span
                                                            class="ti-facebook"></span></a>
                                                    <div class="tooltip-item">Facebook</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-twitter"></span></a>
                                                    <div class="tooltip-item">Twitter</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-linkedin"></span></a>
                                                    <div class="tooltip-item">Linkedin</div>
                                                </li>
                                                <li class="list-inline-item tooltip-hover"><a href="#"
                                                        class="rounded"><span class="ti-dribbble"></span></a>
                                                    <div class="tooltip-item">Dribbble</div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-nav-wrap text-white">
                                        <h4 class="text-white">COMPANY</h4>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">About Our Services</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Our Affiliates Program</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">View Our Blog</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Check Our Careers</a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <div class="footer-nav-wrap text-white">
                                        <h4 class="text-white">LEGAL</h4>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Legal Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Report Abuse</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Terms of Service</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-3">
                            <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                                <div class="col-12">
                                    <div class="footer-nav-wrap text-white">
                                        <h4 class="text-white">GET IN TOUCH</h4>
                                        <ul class="get-in-touch-list">
                                            <li class="d-flex align-items-center py-2"><span
                                                    class="fas fa-map-marker-alt mr-2"></span> 1234 Street Name, City
                                                Name, USA
                                            </li>
                                            <li class="d-flex align-items-center py-2"><span
                                                    class="fas fa-envelope mr-2"></span> you@domain.com
                                            </li>
                                            <!--<li class="d-flex align-items-center py-2"><span class="fas fa-phone-alt mr-2"></span> (123) 456-7890 - (123) 456-7890</li>-->
                                        </ul>
                                        <form class="newsletter-form mt-3">
                                            <input type="text" class="input-newsletter"
                                                placeholder="Enter your email" name="EMAIL" required=""
                                                autocomplete="off">
                                            <button type="submit" class="disabled"
                                                style="pointer-events: all; cursor: pointer;"><i
                                                    class="fas fa-paper-plane"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--footer top end-->

            <!--footer copyright start-->
            {{-- <div class="footer-bottom gray-light-bg py-2">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-md-5 col-lg-5">
                            <p class="copyright-text pb-0 mb-0">Copyrights © 2020. All
                                rights reserved by
                                <a href="https://themeforest.net/user/themetags" target="_blank">ThemeTags</a>
                            </p>
                        </div>
                        <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                            <ul class="list-inline policy-nav text-right social-list">
                                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                                <li class="list-inline-item"><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--footer copyright end-->
        </footer>
        <!--footer section end-->

        <!--bottom to top button start-->
        <button class="scroll-top scroll-to-target" data-target="html">
            <span class="ti-angle-up"></span>
        </button>
        <!--bottom to top button end-->




    </div>


    <!--jQuery-->
    <script src="{{ asset('digimark_template/js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('digimark_template/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('digimark_template/js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('digimark_template/js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('digimark_template/js/jquery.easing.min.js') }}"></script>
    <!--jquery ytplayer js-->
    <script src="{{ asset('digimark_template/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--Isotope filter js-->
    <script src="{{ asset('digimark_template/js/mixitup.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('digimark_template/js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('digimark_template/js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('digimark_template/js/jquery.countdown.min.js') }}"></script>
    <!--jquery easypiechart-->
    <script src="{{ asset('digimark_template/js/jquery.easy-pie-chart.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('digimark_template/js/scripts.js') }}"></script>

</body>

</html>
