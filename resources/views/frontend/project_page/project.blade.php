@extends('frontend.layouts.app')

@section('content')
    @include('frontend.welcome_page.header')
    <section class="project-hero">

        <div class="container">

            <h1>Major Projects</h1>

            <p>
                Bridges, Flyovers &
                Infrastructure Projects
            </p>

        </div>

    </section>

    <div class="container">

        <div class="project-filter-card">

            <div class="project-filter-header">

                <a href="{{ route('welcome') }}" class="back-home-btn">

                    <i class="fas fa-house"></i>

                    Back To Home

                </a>

                <button id="resetFilter" class="filter-reset-btn">

                    <i class="fas fa-rotate-right"></i>

                    Reset

                </button>

            </div>
            <div class="project-filter-box">

                {{-- Search --}}
                <div>
                    <label class="filter-label">
                        Search Project
                    </label>

                    <input type="text" id="searchInput" placeholder="Search project...">
                </div>

                {{-- Location --}}
                <div>
                    <label class="filter-label">
                        Project Location
                    </label>

                    <select id="projectLocation">

                        <option value="">
                            All Locations
                        </option>

                        @foreach ($projectLocations as $loc)
                            <option value="{{ $loc->location }}">
                                {{ $loc->location }} ({{ $loc->total }})
                            </option>
                        @endforeach

                    </select>
                </div>

                {{-- Type --}}
                <div>
                    <label class="filter-label">
                        Project Type
                    </label>

                    <select id="projectType">

                        <option value="">
                            All Types
                        </option>

                        @foreach ($projectTypes as $type)
                            <option value="{{ $type }}">
                                {{ $type }}
                            </option>
                        @endforeach

                    </select>
                </div>

                {{-- Position --}}
                <div>
                    <label class="filter-label">
                        Position
                    </label>

                    <select id="position">

                        <option value="">
                            All Positions
                        </option>

                        @foreach ($positions as $position)
                            <option value="{{ $position }}">
                                {{ $position }}
                            </option>
                        @endforeach

                    </select>
                </div>

                {{-- Year --}}
                <div>
                    <label class="filter-label">
                        Year
                    </label>

                    <select id="projectYear">

                        <option value="">
                            All Years
                        </option>

                        @foreach ($years as $year)
                            <option value="{{ $year }}">
                                {{ $year }}
                            </option>
                        @endforeach

                    </select>
                </div>

            </div>

        </div>

    </div>
    <section class="project-section py-5">

        <div class="container">

            <div id="projectContainer" class="project-grid">

                @foreach ($projects as $project)
                    <div class="project-card">

                        <span class="project-type">
                            {{ $project->project_type }}
                        </span>

                        <h3>
                            {{ $project->project_name }}
                        </h3>

                        <div class="project-meta">
                            📍 {{ $project->location }}
                        </div>

                        <div class="project-meta">
                            👷 {{ $project->position }}
                        </div>

                        <div class="project-meta">
                            📅 {{ $project->project_year }}
                        </div>

                        <div class="project-description">
                            {{ $project->description }}
                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </section>
    @include('frontend.welcome_page.footer')
@endsection
