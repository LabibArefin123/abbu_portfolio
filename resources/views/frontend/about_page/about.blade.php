@extends('frontend.layouts.app')

@section('title', 'About Engr. Md. Anwar Hossain')

@section('content')

    @include('frontend.welcome_page.header')

    <section class="about-profile-hero">

        <div class="container">

            <div class="about-profile-grid">

                <div class="about-profile-content">

                    <span class="about-tag">
                        Additional Chief Engineer (Retd.), LGED
                    </span>

                    <h1>
                        Engr. Md. Anwar Hossain
                    </h1>

                    <h3>
                        B.Sc. Engineering (Civil), BUET
                    </h3>
                    <div class="about-socials">
                        <button class="about-social-btn cv-btn" data-bs-toggle="modal" data-bs-target="#cvModal">

                            <i class="fas fa-file-alt"></i>
                            CV

                        </button>

                        <button class="about-social-btn email" data-bs-toggle="modal" data-bs-target="#emailModal">

                            <i class="fas fa-envelope"></i>
                            Email

                        </button>

                        <a href="https://www.facebook.com/hossain.anwar.551085" target="_blank"
                            class="about-social-btn facebook">

                            <i class="fab fa-facebook-f"></i>
                            Facebook

                        </a>

                        <a href="https://wa.me/8801711384252" target="_blank" class="about-social-btn whatsapp">

                            <i class="fab fa-whatsapp"></i>
                            WhatsApp

                        </a>

                    </div>
                    <p>
                        A highly accomplished Civil Engineer with more than
                        43 years of professional experience in planning,
                        design, construction supervision, procurement,
                        project management and infrastructure development.
                    </p>

                    <div class="about-stats">

                        <div class="stat-box">
                            <h2>43+</h2>
                            <span>Years Experience</span>
                        </div>

                        <div class="stat-box">
                            <h2>73+</h2>
                            <span>Total Projects</span>
                        </div>

                        <div class="stat-box">
                            <h2>BUET</h2>
                            <span>Graduate</span>
                        </div>

                        <div class="stat-box">
                            <h2>LGED</h2>
                            <span>ACE (Retd.)</span>
                        </div>

                    </div>

                </div>

                <div class="about-profile-image">

                    <img src="{{ asset('uploads/images/welcome_page/about_section/abbu_1.jpg') }}"
                        alt="Engr. Md. Anwar Hossain">

                </div>

            </div>

        </div>

    </section>

    <section class="bio-section">

        <div class="container">

            <div class="about-page-section-title">
                <span>Professional Biography</span>
            </div>

            <div class="bio-card">

                <p>
                    Engr. Md. Anwar Hossain is a distinguished Civil Engineer
                    and former Additional Chief Engineer of the Local Government
                    Engineering Department (LGED), Bangladesh.
                </p>

                <p>
                    Throughout a remarkable professional journey spanning more
                    than four decades, he has played a leading role in planning,
                    designing and supervising numerous bridge, road and
                    infrastructure projects across Bangladesh.
                </p>

                <p>
                    His expertise covers project management, procurement,
                    contract administration, structural design, infrastructure
                    development and international technical cooperation.
                </p>

            </div>

        </div>

    </section>

    <section class="career-section">

        <div class="container">
            <div class="about-page-section-title">
                <span>Career Highlights</span>
            </div>

            <div class="career-grid">

                <div class="career-card">
                    <h4>43+ Years</h4>
                    <p>Professional engineering experience.</p>
                </div>

                <div class="career-card">
                    <h4>LGED Leadership</h4>
                    <p>Served as Additional Chief Engineer.</p>
                </div>

                <div class="career-card">
                    <h4>73+ Projects</h4>
                    <p>Roads, bridges and infrastructure works.</p>
                </div>

                <div class="career-card">
                    <h4>International Exposure</h4>
                    <p>Professional training and study tours worldwide.</p>
                </div>

            </div>

        </div>

    </section>

    <section class="education-section py-5">

        <div class="container">

            <div class="about-page-section-title">
                <span>Education & Affiliation</span>
            </div>

            <div class="education-grid">

                <div class="education-card">

                    <h3>B.Sc. Engineering (Civil)</h3>

                    <p>
                        Bangladesh University of Engineering
                        & Technology (BUET)
                    </p>

                    <span>1982</span>

                </div>

                <div class="education-card">

                    <h3>MS in Environmental Science</h3>

                    <p>
                        State University of Bangladesh
                    </p>

                    <span>2014</span>

                </div>

                <div class="education-card">

                    <h3>Professional Membership</h3>

                    <p>
                        Fellow, Institution of Engineers Bangladesh (IEB)
                    </p>

                </div>

                <div class="education-card">

                    <h3>Association</h3>

                    <p>
                        JICA Alumni Association Bangladesh
                    </p>

                </div>

            </div>

        </div>

    </section>

    @include('frontend.welcome_page.footer')

@endsection
