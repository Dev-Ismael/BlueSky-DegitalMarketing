@extends('layouts.app')

@section('content')

    <main_navbar></main_navbar>

    <min_header :icon="'fa-solid fa-sitemap'" :title="'Portfolio'" :url="'portfolio'"></min_header>

    <our_portfolio></our_portfolio>

@endsection
