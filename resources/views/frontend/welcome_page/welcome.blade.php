@extends('frontend.layouts.app')

@section('title', 'Engr. Md. Anwar Hossain | Former Additional Chief Engineer, LGED')

@section('content')

    @include('frontend.welcome_page.header')

    @include('frontend.welcome_page.banner')

    @include('frontend.welcome_page.about_base')

    @include('frontend.welcome_page.career_journey')

    @include('frontend.welcome_page.achievements')

    @include('frontend.welcome_page.training')

    @include('frontend.welcome_page.footer')

@endsection
