@extends('layouts.app')

@section('content')



    <min_header :icon="'fa-solid fa-circle-info'" :title="'About Us'" :url="'about'"></min_header>

    <our_features></our_features>

    <our_expertise></our_expertise>

    <work_progress></work_progress>


@endsection
