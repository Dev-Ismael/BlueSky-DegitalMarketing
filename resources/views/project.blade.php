@extends('layouts.app')

@section('content')

    <min_header :icon="'fa-solid fa-sitemap'" :title="'Portfolio'" :url="'portfolio'"></min_header>

    <project_details></project_details>

@endsection
