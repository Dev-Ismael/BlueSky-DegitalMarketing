@extends('layouts.app')

@section('content')

    <min_header :icon="'fa-solid fa-sitemap'" :title="'Portfolio'" :url="'portfolio'"></min_header>

    <our_portfolio></our_portfolio>

@endsection
