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

            <div class="project-filter-box">

                <input type="text" id="searchInput" placeholder="Search Project">

                <select id="projectType">

                    <option value="">
                        All Types
                    </option>

                    <option value="Bridge">
                        Bridge
                    </option>

                    <option value="Flyover">
                        Flyover
                    </option>

                    <option value="Infrastructure">
                        Infrastructure
                    </option>

                </select>

                <input type="number" id="projectYear" placeholder="Year">

                <button id="resetFilter">
                    Reset
                </button>

            </div>

        </div>

    </div>

    <section class="project-section">

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
