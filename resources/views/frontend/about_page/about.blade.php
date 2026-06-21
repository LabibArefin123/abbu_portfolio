@extends('frontend.layouts.app')

@section('title', 'About Me')

@section('content')
    @include('frontend.welcome_page.header')

    <section class="about-me-hero">
        <div class="container">
            <h1>MD. ANWAR HOSSAIN</h1>
            <p>
                Former Additional Chief Engineer (LGED),
                Bridge Design & Infrastructure Specialist
            </p>
        </div>
    </section>

    <section class="about-me-section">
        <div class="container">

            <div class="section-title">
                Personal Information
            </div>

            <div class="about-card">

                <div class="info-row">
                    <span>Name</span>
                    <p>MD. ANWAR HOSSAIN</p>
                </div>

                <div class="info-row">
                    <span>Father's Name</span>
                    <p>Late Sader Ali Howlader</p>
                </div>

                <div class="info-row">
                    <span>Mother's Name</span>
                    <p>Late Joynab Bibi</p>
                </div>

                <div class="info-row">
                    <span>Date of Birth</span>
                    <p>30 January 1959</p>
                </div>

                <div class="info-row">
                    <span>Nationality</span>
                    <p>Bangladeshi</p>
                </div>

            </div>

        </div>
    </section>

    <section class="about-me-section bg-light">

        <div class="container">

            <div class="section-title">
                Contact & Address
            </div>

            <div class="about-card">

                <div class="address-box">

                    <h4>Present Address</h4>

                    <p>
                        Flat No: C-4, House No: 48<br>
                        Road No: 25, Block-A<br>
                        Banani Residential Area<br>
                        Dhaka-1213
                    </p>

                    <p>
                        Email:
                        md.ahossain82@yahoo.com
                    </p>

                </div>

                <div class="address-box">

                    <h4>Permanent Address</h4>

                    <p>
                        Holding No: 163/1<br>
                        Ward No: 06<br>
                        Kalapara Pourashava<br>
                        Post: Khepupara<br>
                        Upazila: Kalapara<br>
                        District: Patuakhali
                    </p>

                </div>

            </div>

        </div>

    </section>

    <section class="about-me-section">

        <div class="container">

            <div class="section-title">
                Educational Qualification
            </div>

            <div class="education-grid">

                <div class="education-card">

                    <h3>B.Sc Engineering (Civil)</h3>

                    <p>
                        Bangladesh University of Engineering &
                        Technology (BUET), Dhaka
                    </p>

                    <span>Passing Year: 1982</span>

                </div>

                <div class="education-card">

                    <h3>MS in Environmental Science</h3>

                    <p>
                        State University of Bangladesh,
                        Dhaka
                    </p>

                    <span>Passing Year: 2014</span>

                </div>

            </div>

        </div>

    </section>

    <section class="about-me-section bg-light">

        <div class="container">

            <div class="section-title">
                Professional & Social Affiliation
            </div>

            <div class="affiliation-card">

                <ul>

                    <li>
                        Fellow, Institution of Engineers,
                        Bangladesh (IEB)
                    </li>

                    <li>
                        Member, JICA Alumni Association,
                        Bangladesh
                    </li>

                </ul>

            </div>

        </div>

    </section>
    @include('frontend.welcome_page.footer')
@endsection
