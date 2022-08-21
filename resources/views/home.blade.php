@extends('layouts.app')

@section('content')



    <!---------- Header ------------>
    <section class="ptb-70 gradient-bg ">
        {{-- <video class="fullscreen" src="{{ asset('images/header.mp4') }}" loop muted playsinline autoplay muted loop></video> --}}
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="hero-slider-content text-white pt-5">
                        <strong>Digital Marketing</strong>
                        <h1 class="text-white">Ready <br> For Growth?</h1>
                        <p class="lead">
                            Lead generation, inbound marketing, web development, and marketing automation solutions.
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
                <div class="col-md-12 col-lg-7">
                    <div class="image-wrap pt-5">
                        {{-- <video class="fullscreen" src="{{ asset('images/header.mp4') }}" loop muted playsinline autoplay muted loop></video>     --}}
                        <img src="{{ asset('digimark_template/img/SEO12.gif') }}" class="img-fluid custom-width" alt="hero">
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
