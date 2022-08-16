@extends('layouts.app')

@section('content')

    <div class="header header-video">
        <video class="fullscreen" src="{{ asset("images/header.mp4") }}" loop muted playsinline autoplay muted loop>
        </video>
        <div class="logo">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route("home") }}" class="logo" target="_blank">
                            <img src="{{ asset("images/BlueSky-Logo.png") }}" alt="BlueSky-Logo">
                            <img src="{{ asset("images/BlueSky-WhiteLogo.png") }}" class="d-none" alt="BlueSky-Logo">
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

@endsection
