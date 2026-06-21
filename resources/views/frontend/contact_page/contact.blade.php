@extends('frontend.layouts.app')

@section('title', 'Contact Us')

@section('content')
    @include('frontend.welcome_page.header')

    <div class="contact-wrapper">

        <div class="contact-header">
            <h2>Contact Me</h2>
            <p>Feel free to send a message anytime</p>
        </div>

        @if (session('success'))
            <div class="alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="contact-container">

            {{-- LEFT SIDE - FORM --}}
            <div class="contact-col">

                <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
                    @csrf

                    {{-- ROW 1 --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name">
                            @error('name')
                                <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="Your Email">
                            @error('email')
                                <small class="error-text">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>

                    {{-- ROW 2 --}}
                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" value="{{ old('phone') }}" placeholder="Phone (optional)">
                        </div>

                        <div class="form-group">
                            <label>Subject</label>
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject">
                        </div>
                    </div>

                    {{-- ROW 3 (FULL WIDTH) --}}
                    <div class="form-group full">
                        <label>Message</label>
                        <textarea name="message" rows="6" placeholder="Your Message...">{{ old('message') }}</textarea>
                        @error('message')
                            <small class="error-text">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- BUTTON --}}
                    <button type="submit" class="submit-btn">
                        Send Message
                    </button>

                </form>

            </div>
            {{-- RIGHT SIDE - INFO + MAP --}}
            <div class="contact-col">

                <div class="contact-info">

                    <h3>Contact Info</h3>

                    <p><strong>Name:</strong> MD. ANWAR HOSSAIN</p>
                    <p><strong>Email:</strong> md.ahossain82@yahoo.com</p>
                    <p><strong>Location:</strong> Banani, Dhaka</p>

                </div>

                {{-- GOOGLE MAP --}}
                <div class="contact-map">

                    <iframe src="https://www.google.com/maps?q=Shanta%20Akash%20Prodip%20Banani%20Dhaka&output=embed"
                        width="100%" height="280" style="border:0; border-radius:10px;" allowfullscreen loading="lazy">
                    </iframe>

                </div>

            </div>

        </div>

    </div>
    @include('frontend.welcome_page.footer')
@endsection
