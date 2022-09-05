@extends('layouts.app')

@section('content')

    <main_navbar :dark-logo="false"></main_navbar>

    <min_header :icon="'fa-solid fa-circle-info'" :title="'About Us'" :url="'about'"></min_header>

    <our_features></our_features>

    <work_progress></work_progress>

    <our_expertise></our_expertise>



@endsection
