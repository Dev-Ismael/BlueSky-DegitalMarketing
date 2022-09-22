@extends('layouts.app')

@section('content')

    <main_navbar></main_navbar>

    <main_header></main_header>

    <services></services>

    <about></about>

    <pricing :visitor-country='"{{ $visitorCountry }}"'></pricing>

    <our_clients></our_clients>

    <youtube_video></youtube_video>


@endsection
