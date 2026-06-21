<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_base.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_links.css') }}">

<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_dropdown_base.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_dropdown_items.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_dropdown_submenu.css') }}">

<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_animation.css') }}">

<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_buttons.css') }}">

<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_toggle.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_overlay.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_sidebar.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/navbar/navbar_mobile_dropdown.css') }}">
<nav class="main-header navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">


    <div class="container-fluid px-4">

        {{-- ==========================================
        BRAND
    ========================================== --}}
        <a href="{{ route('welcome') }}" class="navbar-brand">

            <div class="brand-wrapper">

                <h5 class="mb-0 text-warning fw-bold">
                    Engr. Md. Anwar Hossain
                </h5>

                <small class="text-light">
                    Former Additional Chief Engineer, LGED
                </small>

            </div>

        </a>

        {{-- ==========================================
        MOBILE TOGGLE
    ========================================== --}}
        <button type="button" id="navbarToggle" class="custom-navbar-toggler">

            <span></span>
            <span></span>
            <span></span>

        </button>

        {{-- ==========================================
        MOBILE OVERLAY
    ========================================== --}}
        <div class="mobile-navbar-overlay"></div>

        {{-- ==========================================
        MOBILE SIDEBAR
    ========================================== --}}
        <div class="mobile-navbar">

            <div class="mobile-navbar-header">

                <h5 class="mb-0">
                    Portfolio Menu
                </h5>

                <button type="button" class="mobile-navbar-close">
                    &times;
                </button>

            </div>

            <ul class="mobile-navbar-menu">

                <li>
                    <a href="{{ route('welcome') }}">
                        Home
                    </a>
                </li>

                <li>
                    <a href="#about">
                        About
                    </a>
                </li>

                <li>
                    <a href="#career">
                        Career Journey
                    </a>
                </li>

                <li>
                    <a href="#projects">
                        Major Projects
                    </a>
                </li>


                <li>
                    <a href="#training">
                        Training
                    </a>
                </li>

                <li>
                    <a href="#contact">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

        {{-- ==========================================
        DESKTOP NAVIGATION
    ========================================== --}}
        <div class="collapse navbar-collapse justify-content-center">

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="{{ route('welcome') }}"
                        class="nav-link custom-link {{ request()->routeIs('welcome') ? 'active' : '' }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('about') }}" class="nav-link custom-link">
                        About
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('career') }}" class="nav-link custom-link">
                        Career
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('experience') }}" class="nav-link custom-link">
                        Experience
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#projects" class="nav-link custom-link">
                        Projects
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#achievements" class="nav-link custom-link">
                        Achievements
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('training') }}" class="nav-link custom-link">
                        Training
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact') }}" class="nav-link custom-link">
                        Contact
                    </a>
                </li>

            </ul>

        </div>

        {{-- ==========================================
        RIGHT BUTTON
    ========================================== --}}
        <div class="d-flex align-items-center">

            <a href="{{ route('contact') }}" class="btn login-btn">

                Contact Me

            </a>

        </div>

    </div>


</nav>


<!------start of welcome link js--->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const welcomeUrl = "{{ route('welcome') }}";

        document.querySelectorAll('a.nav-link[href^="#"]').forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');

                // If NOT on welcome page
                if (window.location.pathname !== new URL(welcomeUrl).pathname) {
                    e.preventDefault();
                    window.location.href = welcomeUrl + targetId;
                }
            });
        });
    });
</script>
<!------end of welcome link js--->

<!------start of facility js--->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdown = document.getElementById('facility_dropdown');
        const toggleLink = dropdown.querySelector('.dropdown-toggle');
        const menu = dropdown.querySelector('.dropdown-menu');

        // Toggle on click
        toggleLink.addEventListener('click', function(e) {
            e.preventDefault();

            const isOpen = menu.classList.contains('show');
            document.querySelectorAll('.dropdown-menu.show').forEach(el => {
                el.classList.remove('show');
            });

            menu.classList.toggle('show', !isOpen);
            toggleLink.setAttribute('aria-expanded', !isOpen);
        });

        // Close when clicking outside
        document.addEventListener('click', function(e) {
            if (!dropdown.contains(e.target)) {
                menu.classList.remove('show');
                toggleLink.setAttribute('aria-expanded', 'false');
            }
        });
    });
</script>
<!------end of facility js--->
