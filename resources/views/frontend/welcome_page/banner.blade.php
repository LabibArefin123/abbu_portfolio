<section id="banner" class="bg-white w-100">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_image.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_indicators.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_doctor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_responsive.css') }}">


    @php
        $slides = [
            [
                'image' => 'engineer_1.jpg',
                'align' => 'right',
                'name' => 'Engr. Md. Anwar Hossain',
                'designation' => 'Former Additional Chief Engineer, LGED',
                'details' => '
                B.Sc Engineering (Civil), BUET<br>
                M.S. in Environmental Science<br>
                Fellow, Institution of Engineers Bangladesh<br>
                43+ Years Professional Experience
            ',
                'route' => route('welcome'),
            ],

            [
                'image' => 'bridge_1.jpg',
                'align' => 'left',
                'name' => 'Infrastructure Leadership',
                'designation' => 'National Development Projects',
                'details' => '
                Project Director & Additional Chief Engineer<br>
                Road, Bridge & Urban Infrastructure Development<br>
                Procurement, Planning & Monitoring Specialist
            ',
                'route' => route('welcome'),
            ],

            [
                'image' => 'bridge_2.jpg',
                'align' => 'right',
                'name' => 'Major Bridge Projects',
                'designation' => 'Design & Supervision Engineer',
                'details' => '
                Chapail Bridge - 592m<br>
                Shalotia Bridge - 810m<br>
                Bancharampur Y Bridge - 771m
            ',
                'route' => route('welcome'),
            ],

            [
                'image' => 'flyover.jpg',
                'align' => 'left',
                'name' => 'Urban Mega Projects',
                'designation' => 'Technical Leadership',
                'details' => '
                Tejgaon Flyover Project<br>
                Rampura-Malibagh-Mouchak Flyover<br>
                Urban Infrastructure Modernization
            ',
                'route' => route('welcome'),
            ],

            [
                'image' => 'world.jpg',
                'align' => 'right',
                'name' => 'International Exposure',
                'designation' => 'Training & Study Tours',
                'details' => '
                Japan, Thailand, Vietnam<br>
                Malaysia, China, South Korea<br>
                Italy & Portugal
            ',
                'route' => route('welcome'),
            ],
        ];
    @endphp

    @foreach ($slides as $index => $slide)
        <div class="slide {{ $index == 0 ? 'active' : '' }}" data-route="{{ $slide['route'] }}"
            style="position:absolute; inset:0;">

            <div class="doctor-slide h-100">

                <div class="container h-100">

                    <div class="row h-100 align-items-center">

                        @if ($slide['align'] == 'left')
                            <div class="col-lg-6 h-100 position-relative">
                                <img src="{{ asset('uploads/images/banner/' . $slide['image']) }}"
                                    class="doctor-img left" alt="{{ $slide['name'] }}">
                            </div>
                        @endif

                        <div class="col-lg-6 text-white z-2">

                            <span class="badge bg-warning text-dark mb-3">
                                Engineering Excellence
                            </span>

                            <h1 class="fw-bold display-5">
                                {{ $slide['name'] }}
                            </h1>

                            <h4 class="mb-3">
                                {{ $slide['designation'] }}
                            </h4>

                            <p class="lh-lg">
                                {!! $slide['details'] !!}
                            </p>

                            <a href="{{ $slide['route'] }}" class="btn btn-warning btn-lg">
                                Explore More
                            </a>

                        </div>

                        @if ($slide['align'] == 'right')
                            <div class="col-lg-6 h-100 position-relative">
                                <img src="{{ asset('uploads/images/banner/' . $slide['image']) }}"
                                    class="doctor-img right" alt="{{ $slide['name'] }}">
                            </div>
                        @endif

                    </div>

                </div>

            </div>

        </div>
    @endforeach

    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 z-3 d-flex gap-2">
        @foreach ($slides as $i => $slide)
            <span class="dot" onclick="goToSlide({{ $i }})"></span>
        @endforeach
    </div>


    </div>
</section>
