@extends('frontend.layouts.app')

@section('title', 'Professional Experience')

@section('content')

    @include('frontend.welcome_page.header')
    <section class="experience-hero">

        <div class="container">

            <h1>
                43 Years of Professional Experience
            </h1>

            <p>
                Engineering Leadership, Infrastructure Development,
                Bridge Design and Project Management.
            </p>

        </div>

    </section>

    <section class="experience-section">
        <div class="container">
            <div class="experience-filter-card">
    
                <div class="filter-title">
                    <i class="fas fa-filter"></i>
                    <span>Filter Experience Records</span>
                </div>
    
                <div class="experience-filter-box">
    
                    <div class="filter-group">
                        <label>Search</label>
                        <input type="text" id="searchInput" placeholder="Position, project or keyword">
                    </div>
    
                    <div class="filter-group">
                        <label>From Date</label>
                        <input type="date" id="fromDate">
                    </div>
    
                    <div class="filter-group">
                        <label>To Date</label>
                        <input type="date" id="toDate">
                    </div>
    
                    <div class="filter-action">
                        <button id="resetFilter">
                            <i class="fas fa-undo"></i> Reset
                        </button>
                    </div>
    
                </div>
            </div>
            <div class="experience-search-result">
    
                <div id="resultCountBox" class="result-count-box">
                    Showing all experience records
                </div>
    
                <div id="searchSuggestionBox" class="search-suggestion-box"></div>
    
            </div>
        </div>

        <div class="container">

            <div id="experienceContainer">
                @foreach ($experiences as $experience)
                    <div class="experience-card" id="experience-{{ $experience->id }}">

                        <div class="experience-header">

                            <h3>
                                {{ $experience->position }}
                            </h3>

                            <span>
                                {{ \Carbon\Carbon::createFromFormat('d-m-Y', trim(explode(' to ', $experience->duration)[0]))->format('d F Y') }}
                                -
                                {{ \Carbon\Carbon::createFromFormat('d-m-Y', trim(explode(' to ', $experience->duration)[1]))->format('d F Y') }}
                            </span>

                        </div>

                        <div class="experience-body">
                            <div class="description-responsibility">
                                {!! nl2br(e($experience->description)) !!}
                            </div>

                        </div>

                        @if ($experience->responsibilities)
                            <div class="experience-responsibility">

                                {!! nl2br(e($experience->responsibilities)) !!}

                            </div>
                        @endif

                    </div>
                @endforeach

            </div>
        </div>

    </section>

    @include('frontend.welcome_page.footer')
@endsection
