@extends('layouts.app')

@section('content')




    <!---------- Header ------------>
    <section class="hero-equal-height ptb-70">
        <div class="hero-shape" style="background: url('{{ asset("digimark_template/img/Header-01.svg") }}')no-repeat top right"></div>
        <img src="{{ asset("digimark_template/img/cta-2-path-shape.png") }}" alt="group shape" class="img-fluid group-shape-1">
        <img src="{{ asset("digimark_template/img/cta-2-circle-shape.png") }}" alt="group shape" class="img-fluid group-shape-2">
        <img src="{{ asset("digimark_template/img/cta-2-tringle-shape.png") }}" alt="group shape" class="img-fluid group-shape-3">
        <img src="{{ asset("digimark_template/img/cta-2-tringle-shape.png") }}" alt="group shape" class="img-fluid group-shape-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-6">
                    <div class="hero-slider-content pt-5">
                        <strong class="color-secondary">Digital Marketing</strong>
                        <h1>Ready <br> For Growth?</h1>
                        <p class="lead">
                            Lead generation, inbound marketing, web development, and marketing automation solutions.
                        </p>
                        <div class="action-btns mt-3">
                            <a href="#" class="btn secondary-solid-btn">
                                Contact us
                                &nbsp;
                                {{-- <i class="fa-solid fa-message fa-beat-fade"></i> --}}
                                <i class="fa-solid fa-message"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="img-wrap">
                        <img src="{{ asset("digimark_template/img/t5-hero-img.svg") }}" alt="hero" class="img-fluid custom-width">
                    </div>
                </div>
            </div>
        </div>
    </section>



    
    <!------- Our Clients ----------->
    <div class="client-section ptb-100" style="background: url('{{ asset('digimark_template/img/client-bg.jpg') }}')no-repeat center center / cover">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6">
                    <div class="client-heading-wrap">
                        <h3>Who are Happy With Services and Work</h3>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="client-para">
                        <p>Seamlessly administrate synergistic growth strategies and collaborative markets. Globally empower
                            inexpensive infomediaries after sustainable mindshare customize principle-centered users with
                            fully tested. Phosfluorescently brand professional collaboration and idea-sharing without
                            principle-centered interfaces. </p>
                    </div>
                </div>
            </div>
            <!--clients logo start-->
            <div class="row align-items-center justify-content-center mb-4">
                <div class="col-md-10 col-lg-9">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator client-logo-wrap owl-loaded owl-drag">








                        <div class="owl-stage-outer">
                            <div class="owl-stage"
                                style="transform: translate3d(-1485px, 0px, 0px); transition: all 4.5s linear 0s; width: 2700px;">
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-03.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-04.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-05.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-06.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-07.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-08.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-01.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-02.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-03.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-04.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-05.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-06.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-07.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-08.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-01.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-02.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned active" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-03.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-04.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-05.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                                <div class="owl-item cloned" style="width: 120px; margin-right: 15px;">
                                    <div class="item single-client">
                                        <img src="{{ asset('digimark_template/img/clients-logo-06.png') }}" alt="client logo" class="client-img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span
                                    aria-label="Previous">‹</span></button><button type="button" role="presentation"
                                class="owl-next"><span aria-label="Next">›</span></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>



    <!-------- Video -------------->
    <section class="call-to-action-video">
        <div class="row m-0">
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-image text-center">
                    <img src="{{ asset('digimark_template/img/cta-2-girl-img.jpg') }}" alt="image" class="img-fluid">
                    <a href="https://www.youtube.com/watch?v=9No-FiEInLA" class="popup-youtube video-play-icon white-bip shadow"><span class="ti-control-play"></span> </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 p-0">
                <div class="free-trial-content text-white">
                    <h2 class="text-white">Best Consulting Every Business</h2>
                    <p>Interactively evisculate performance based ROI whereas premier mindshare. Dramatically matrix real-time convergence rather than empowered manufactured products.</p>
                    <a href="#" class="btn primary-solid-btn mt-3">Start Now</a>
                </div>
            </div>
        </div>
    </section>



    <!----------- Call Section ----------->
    <section class="call-to-action py-5 gray-light-bg">
        <div class="container">
            <div class="row justify-content-around align-items-center">
                <div class="col-md-7">
                    <div class="subscribe-content">
                        <h3 class="mb-1">Consulting Agency for Your Business</h3>
                        <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="action-btn text-lg-right text-sm-left">
                        <a href="#" class="btn secondary-solid-btn">Contact With Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
