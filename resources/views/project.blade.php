@extends('layouts.app')

@section('content')

    <main_navbar></main_navbar>

    <min_header :icon="'fa-solid fa-sitemap'" :title="'Portfolio'" :url="'portfolio'"></min_header>

    <project_details></project_details>

@endsection
