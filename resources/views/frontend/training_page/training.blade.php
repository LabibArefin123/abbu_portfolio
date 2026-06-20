@extends('frontend.layouts.app')

@section('title', 'Professional Training')

@section('content')
    @include('frontend.welcome_page.header')

    <section class="training-hero">

        <div class="container">

            <h1>
                Professional Training &
                International Exposure
            </h1>

            <p>
                Continuous learning and professional development
                throughout a distinguished engineering career.
            </p>

        </div>

    </section>

    <section class="training-section">

        <div class="container">

            <div class="section-title">
                Bangladesh Training Programs
            </div>

            <div class="row">

                @foreach ($localTrainings as $training)
                    <div class="col-lg-6 mb-4">

                        <div class="training-card">

                            <h4>{{ $training->title }}</h4>

                            <p>
                                {{ $training->duration }}
                            </p>

                            <span>
                                {{ $training->location }}
                            </span>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>

    <section class="international-section">

        <div class="container">

            <div class="section-title">
                International Training & Study Tours
            </div>

            <div class="row">

                @foreach ($internationalTrainings as $training)
                    <div class="col-lg-4 mb-4">

                        <div class="country-card">

                            <h5>{{ $training->title }}</h5>

                            <p>{{ $training->location }}</p>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
    @include('frontend.welcome_page.footer')

@endsection
