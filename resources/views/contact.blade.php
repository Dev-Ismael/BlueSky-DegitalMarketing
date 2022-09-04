@extends('layouts.app')

@section('content')


    <min_header :icon="'fa-solid fa-message'" :title="'Contact Us'" :url="'contact'"></min_header>

    <contact_info></contact_info>

    <contact_form></contact_form>


@endsection
