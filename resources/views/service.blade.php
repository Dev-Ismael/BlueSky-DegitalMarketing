@extends('layouts.app')

@section('content')


<min_header :icon="'fa-solid fa-handshake-angle'" :title="'Service Name'" :url="'service'"></min_header>

    <service_details></service_details>


@endsection
