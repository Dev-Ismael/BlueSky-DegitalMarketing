@extends('layouts.app')

@section('content')

    <main_navbar :dark-logo="false"></main_navbar>

    <min_header :icon="'fa-solid fa-handshake-angle'" :title="'Service Name'" :url="'service'"></min_header>

    <service_details></service_details>


@endsection
