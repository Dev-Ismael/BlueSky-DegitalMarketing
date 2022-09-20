@extends('layouts.app')

@section('content')

    <main_navbar></main_navbar>

    <min_header :icon="'fa-solid fa-message'" :title="'Contact Us'" :url="'contact'" :background="'contact'"></min_header>

    <contact_info></contact_info>

    <contact_form></contact_form>


@endsection
