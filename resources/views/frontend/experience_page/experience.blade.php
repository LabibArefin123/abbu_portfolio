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


    <div class="experience-filter-box">

        <input type="text" id="searchInput" placeholder="Search position / project..." />

        <input type="date" id="fromDate" />

        <input type="date" id="toDate" />

        <button id="resetFilter">Reset</button>

    </div>
    <section class="experience-section">

        <div class="container">

            @foreach ($experiences as $experience)
                <div class="experience-card">

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

    </section>

    @include('frontend.welcome_page.footer')
@endsection
