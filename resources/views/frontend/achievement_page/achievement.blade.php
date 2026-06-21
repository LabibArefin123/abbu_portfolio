@extends('frontend.layouts.app')

@section('title', 'Major Achievements')

@section('content')

    @include('frontend.welcome_page.header')

    <div class="achievement-wrapper">

        <div class="achievement-header">

            <h2>Major Achievements</h2>

            <p>
                Significant bridge construction projects successfully
                completed during a distinguished engineering career.
            </p>

        </div>

        <div class="achievement-grid">

            @foreach ($achievements as $achievement)
                <div class="achievement-card">

                    <div class="year-badge">
                        {{ $achievement->completion_year }}
                    </div>

                    <h3>
                        {{ $achievement->title }}
                    </h3>

                    <div class="achievement-location">
                        📍 {{ $achievement->location }}
                    </div>

                    <div class="achievement-position">
                        {{ $achievement->position }}
                    </div>

                    <div class="achievement-duration">
                        {{ $achievement->duration }}
                    </div>

                    <p>
                        {{ $achievement->description }}
                    </p>

                </div>
            @endforeach

        </div>

    </div>
    @include('frontend.welcome_page.footer')
@endsection
