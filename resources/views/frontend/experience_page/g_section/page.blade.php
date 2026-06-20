@extends('frontend.layouts.app')

@section('title', 'Design & Supervision Experience')

@section('content')

    <section class="cv-hero">
        <div class="container">
            <h1>{{ $experience->position }}</h1>
            <p>{{ $experience->start_date }} - {{ $experience->end_date }}</p>
            <span>{{ $experience->organization }}</span>
        </div>
    </section>

    <section class="cv-body">
        <div class="container">

            <div class="section-title">Major Bridge Projects</div>

            <div class="card-box">
                {!! nl2br(e($experience->bridges)) !!}
            </div>

            <div class="section-title">Responsibilities</div>

            <div class="card-box">
                {!! nl2br(e($experience->responsibilities)) !!}
            </div>

        </div>
    </section>

@endsection
