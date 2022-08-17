@extends('layouts.app')

@section('content')
    <!------------ Header --------------->
    <div class="header header-video">
        <video class="fullscreen" src="{{ asset('images/header.mp4') }}" loop muted playsinline autoplay muted loop></video>
        <div class="logo">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route('home') }}" class="logo" target="_blank">
                            <img src="{{ asset('images/BlueSky-Logo.png') }}" alt="BlueSky-Logo">
                            <img src="{{ asset('images/BlueSky-WhiteLogo.png') }}" class="d-none" alt="BlueSky-Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-content">
            <div class="container position-relative">
                <div class="row align-items-center vh-100 text-md-right">
                    <div class="col-md-6 col-lg-5">
                        <h2 class="font-blue-dark">Ready <br> For Growth?</h2>
                        <p class="paragragh">
                            Lead generation, inbound marketing, web development, and marketing automation solutions.
                        </p>
                        <a href="#" class="btn btn-primary mt-5">
                            Contact us
                            &nbsp;
                            {{-- <i class="fa-solid fa-message fa-beat-fade"></i> --}}
                            <i class="fa-solid fa-message"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!------------ About --------------->
    <div id="about-us" class="section-padding">
        <div class="container">
            <p class="section-title"> What we do </p>
            <div class="row">
                <div class="col-12">
                    <p class="paragragh">
                        There are your brand values and what the audience expects of them. We are the connective tissue that
                        links you together. We understand what you need and can help you meet your goals. We are a digital
                        marketing agency that pride ourselves on our ability to work with diverse and unique brands,
                        understand them and execute the best possible strategy for them across various platforms.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!------------ About --------------->
    <section id="services" class="wide-40 services-section division">
        <div class="container">

            <!-- SECTION TITLE -->
            <div class="row">

                <!-- Title 	-->
                <div class="col text-center">
                    <h3 class="h3-xl">Services</h3>
                    <p>We provide various services that fit your needs and help you lead a more profitable business.</p>
                </div>
            </div>
        </div>
        <!-- END SECTION TITLE -->
        <div class="container">
            <div class="row">

                <!-- SERVICE BOX #1 -->
                <div id="sb-1" class="col-sm-6 col-lg-6">
                    <div class="sbox-3 box-icon rose-icon wow fadeInUp" data-wow-delay="0.1s"
                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

                        <!-- Icon -->
                        <div class="b-icon"><span><img src="{{ asset('images/services/Branding.png') }}"
                                    alt="advertising agency in alexandria"></span></div>

                        <!-- Title -->
                        <h5 class="h5-xl">Branding</h5>

                        <!-- Text -->
                        <p class="grey-color">Generates powerful vibes that will help your business succeed. Create a new identity that will last forever. A strong brand is a winner. Our goal is to make our clients satisfied. Who can be trusted, rely on, and never forget? </p>

                        <ul class="content-list">
                            <li>
                                Brand strategy
                            </li>

                            <li>
                                Corporate identity
                            </li>
                            <li>
                                Marketing materials
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- SERVICE BOX #2 -->
                <div id="sb-2" class="col-sm-6 col-lg-6">
                    <div class="sbox-3 box-icon rose-icon wow fadeInUp" data-wow-delay="0.2s"
                        style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

                        <!-- Icon -->
                        <div class="b-icon"><span><img src="{{ asset('images/services/Digital-Marketing.png') }}"
                                    alt="advertising agency in alexandria"></span></div>

                        <!-- Title -->
                        <h5 class="h5-xl">Digital Marketing</h5>

                        <!-- Text -->
                        <p class="grey-color">
                            Effectively turning the audience into dependable clients with the aid of using evaluation to decorate the technique and growing an advertising plan that places your commercial enterprise at the proper route and motion plan that generates fulfillment to enlarge your social media presence efficiently.
                        </p>

                    </div>
                </div>

                <!-- SERVICE BOX #4 -->
                <div id="sb-4" class="col-sm-6 col-lg-6">
                    <div class="sbox-3 box-icon rose-icon wow fadeInUp" data-wow-delay="0.4s"
                        style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">

                        <!-- Icon -->
                        <div class="b-icon"><span><img src="{{ asset('images/services/Graphic-design.png') }}"
                                    alt="advertising agency in alexandria"></span></div>

                        <!-- Title -->
                        <h5 class="h5-xl">Graphic Design &amp; Printing</h5>

                        <!-- Text -->
                        <p class="grey-color">
                            We provide you with robust and expert designs that reduce the noise and Clarify who you are. We can assure you creatively designed, expertly accomplished, and fantastic printing and packaging solutions.
                        </p>
                        <ul class="content-list">
                            <li>
                                Corporate Identity Design
                            </li>

                            <li>
                                Printing & Packaging
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- SERVICE BOX #6 -->
                <div id="sb-6" class="col-sm-6 col-lg-6">
                    <div class="sbox-3 box-icon rose-icon wow fadeInUp" data-wow-delay="0.6s"
                        style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">

                        <!-- Icon -->
                        <div class="b-icon"><span><img src="{{ asset('images/services/Web-Development.png') }}"
                                    alt="advertising agency in alexandria"></span></div>

                        <!-- Title -->
                        <h5 class="h5-xl">Web Designs &amp; Development</h5>

                        <!-- Text -->
                        <p class="grey-color">Because of the increasing reliance on mobile usage and web browsing over the
                            past few years, your website is the most important component of your company’s image. We provide
                            expert web development and services and create outstanding, high performance and responsive
                            websites with the focus on a unique design.
                        </p>
                        <ul class="content-list">

                            <li class="wow fadeInUp" data-wow-delay="0.4s"
                                style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                                <p>Website Design
                                </p>
                            </li>

                            <li class="wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <p>Websites redesign
                                </p>
                            </li>
                            <li class="wow fadeInUp" data-wow-delay="0.5s"
                                style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                                <p>E-commerce
                                </p>
                            </li>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- End row -->
    </section>
@endsection
