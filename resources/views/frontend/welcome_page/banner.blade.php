<section id="banner" class="bg-white w-100">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_base.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_image.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_indicators.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_navigation.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_slide.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_doctor.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend/welcome_page/banner_section/banner_responsive.css') }}">
    <div id="slider" class="portfolio-slider">


        @php
            $slides = [
                [
                    'title' => 'Engr. Md. Anwar Hossain',
                    'subtitle' => 'Former Additional Chief Engineer, LGED',
                    'content' =>
                        '43+ years of professional experience in Civil Engineering, Bridge Construction, Project Management and Infrastructure Development.',
                ],

                [
                    'title' => 'Infrastructure Leadership',
                    'subtitle' => 'National Development Projects',
                    'content' =>
                        'Served as Assistant Engineer, Executive Engineer, Project Director, Superintending Engineer and Additional Chief Engineer.',
                ],

                [
                    'title' => 'Major Bridge Projects',
                    'subtitle' => 'Design & Supervision Engineer',
                    'content' =>
                        'Successfully supervised and monitored PSC Girder, RCC and Box Girder Bridges throughout Bangladesh.',
                ],

                [
                    'title' => 'Mega Flyover Projects',
                    'subtitle' => 'Urban Infrastructure Development',
                    'content' =>
                        'Technical supervision of Tejgaon Flyover and Rampura-Malibagh-Mouchak Flyover Projects.',
                ],

                [
                    'title' => 'International Experience',
                    'subtitle' => 'Training & Study Tours',
                    'content' =>
                        'Professional training and study visits in Japan, Thailand, Vietnam, China, Malaysia, South Korea, Italy and Portugal.',
                ],
            ];
        @endphp

        @foreach ($slides as $index => $slide)
            <div class="portfolio-slide {{ $index == 0 ? 'active' : '' }}">

                <div class="container h-100">

                    <div class="row justify-content-center align-items-center h-100">

                        <div class="col-lg-10">

                            <div class="portfolio-content">

                                <span class="portfolio-badge">
                                    Engineering Excellence
                                </span>

                                <h1>
                                    {{ $slide['title'] }}
                                </h1>

                                <h4>
                                    {{ $slide['subtitle'] }}
                                </h4>

                                <p>
                                    {{ $slide['content'] }}
                                </p>

                                <div class="portfolio-stats">

                                    <div class="stat-box">
                                        <h3>43+</h3>
                                        <span>Years Experience</span>
                                    </div>

                                    <div class="stat-box">
                                        <h3>100+</h3>
                                        <span>Projects</span>
                                    </div>

                                    <div class="stat-box">
                                        <h3>BUET</h3>
                                        <span>Civil Engineer</span>
                                    </div>

                                    <div class="stat-box">
                                        <h3>LGED</h3>
                                        <span>Leadership</span>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
        @endforeach

        <div class="slider-dots">

            @foreach ($slides as $i => $slide)
                <span class="dot {{ $i == 0 ? 'active' : '' }}" onclick="goToSlide({{ $i }})">
                </span>
            @endforeach

        </div>


    </div>


</section>
