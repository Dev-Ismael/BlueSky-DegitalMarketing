@extends('layouts.app')

@section('content')

    <div class="header header-video">
        <video src="{{ asset("images/header.mp4") }}" loop muted autoplay ></video>

        <div class="logo">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-3">
                        <a href="{{ route("home") }}" class="logo" target="_blank">
                            <img src="{{ asset("images/BlueSky-Logo.png") }}" alt="BlueSky-Logo">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="header-content">
            <div class="container position-relative">
                <div class="row align-items-center vh-100 text-md-right">
                    <div class="col-md-5">
                        <h2 class="font-blue-dark">Ready <br> For Growth?</h2>
                        <p class="paragragh">
                            Lead generation, inbound marketing, web development, and marketing automation solutions.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
