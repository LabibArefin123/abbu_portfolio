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

    {{-- FILTER --}}
    <div class="container">

        <div class="training-filter-card">

            <div class="training-filter-header">

                <a href="{{ route('welcome') }}" class="back-home-btn">
                    <i class="fas fa-house"></i>
                    Back To Home
                </a>

                <button id="resetFilter" class="filter-reset-btn">
                    <i class="fas fa-rotate-right"></i>
                    Reset
                </button>

            </div>

            <div class="training-filter-box">

                <div>
                    <label class="filter-label">Search Training</label>
                    <input type="text" id="searchTraining" placeholder="Search training...">
                </div>

                <div>
                    <label class="filter-label">Training Type</label>
                    <select id="trainingType">
                        <option value="">All Types</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="International">International</option>
                    </select>
                </div>

                <div>
                    <label class="filter-label">Location</label>
                    <select id="trainingLocation">

                        <option value="">All Locations</option>

                        <optgroup label="Bangladesh">

                            @foreach ($localLocations as $location)
                                <option value="{{ $location }}">
                                    {{ $location }}
                                </option>
                            @endforeach

                        </optgroup>

                        <optgroup label="International">

                            @foreach ($internationalLocations as $location)
                                <option value="{{ $location }}">
                                    {{ $location }}
                                </option>
                            @endforeach

                        </optgroup>

                    </select>
                </div>

                <div>
                    <label class="filter-label">Year</label>
                    <select id="trainingYear">
                        <option value="">All Years</option>
                        @foreach ($years as $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="training-count-wrapper">

                <div id="totalTrainingCount">

                    Total Trainings:
                    {{ $localTrainings->count() + $internationalTrainings->count() }}

                </div>

            </div>

        </div>

    </div>

    {{-- TRAINING RESULT WRAPPERS --}}
    <section class="training-section">

        <div class="container">

            <div id="localTrainingSection">

                <div class="section-title d-flex justify-content-between align-items-center">

                    <span>
                        Bangladesh Training Programs
                    </span>

                    <span id="localTrainingCount" class="training-count-badge">
                        {{ $localTrainings->count() }} Trainings
                    </span>

                </div>

                <div class="row" id="trainingContainer">

                    @include('frontend.training_page.partials.training_cards')

                </div>

            </div>

        </div>

    </section>

    <section class="international-section">

        <div class="container">

            <div id="internationalTrainingSection">

                <div class="section-title d-flex justify-content-between align-items-center">

                    <span>
                        International Training & Study Tours
                    </span>

                    <span id="internationalTrainingCount" class="training-count-badge">
                        {{ $internationalTrainings->count() }} Trainings
                    </span>

                </div>

                <div class="row" id="internationalContainer">

                    @include('frontend.training_page.partials.international_cards')

                </div>

            </div>

        </div>

    </section>

    @include('frontend.welcome_page.footer')

@endsection
