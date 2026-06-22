@extends('frontend.layouts.app')

@section('title', 'Career Journey')

@section('content')

    @include('frontend.welcome_page.header')

    <div class="career-wrapper">

        <div class="section-title">
            <h2>Career Journey</h2>
            <p>
                Professional Growth Through More Than 43 Years of Engineering,
                Project Management and Infrastructure Development.
            </p>
        </div>

        <div class="timeline">

            @foreach ($careers as $career)
                <div class="timeline-item ">

                    <div class="timeline-dot"></div>

                    <div class="timeline-content">

                        <span class="career-duration">
                            {{ $career->duration }}
                        </span>

                        <h4>
                            {{ $career->position }}
                        </h4>

                        <p>
                            {{ $career->summary }}
                        </p>

                    </div>

                </div>
            @endforeach

        </div>

    </div>
    @include('frontend.welcome_page.footer')
@endsection
