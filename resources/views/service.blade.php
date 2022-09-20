@extends('layouts.app')

@section('content')

    <main_navbar></main_navbar>

    <min_header :icon="'fa-solid fa-handshake-angle'" :title="'Our Services'" :url="'services'"></min_header>

    <service_details></service_details>


@endsection
