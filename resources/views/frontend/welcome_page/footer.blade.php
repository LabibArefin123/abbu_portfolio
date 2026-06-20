<!-- Footer -->
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/footer/footer_base.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/footer/footer_contact.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/footer/footer_effects.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/footer/footer_links.css') }}">
<link rel="stylesheet" href="{{ asset('css/frontend/custom_layout/footer/footer_responsive.css') }}">
<footer class="footer bg-info text-white pt-2">
    <footer class="footer bg-info text-white pt-4">


        <div class="container">

            <div class="row g-4">

                <!-- Profile Summary -->
                <div class="col-lg-4">

                    <h4 class="text-warning fw-bold">
                        Engr. Md. Anwar Hossain
                    </h4>

                    <p>
                        Former Additional Chief Engineer (LGED),
                        Civil Engineer (BUET), Infrastructure Development
                        Specialist with more than 43 years of experience
                        in bridges, roads, flyovers, procurement,
                        project management and supervision.
                    </p>

                </div>

                <!-- Contact -->
                <div class="col-lg-4">

                    <h5 class="text-warning fw-bold mb-3">
                        Contact Information
                    </h5>

                    <p>
                        <i class="fas fa-map-marker-alt me-2 text-danger"></i>
                        Banani, Dhaka, Bangladesh
                    </p>

                    <p>
                        <i class="fas fa-envelope me-2 text-warning"></i>
                        md.ahossain82@yahoo.com
                    </p>

                </div>

                <!-- Quick Links -->
                <div class="col-lg-4">

                    <h5 class="text-warning fw-bold mb-3">
                        Quick Links
                    </h5>

                    <ul class="list-unstyled">

                        <li>
                            <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                                Home
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                                About
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                                Projects
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                                Training
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('welcome') }}" class="text-white text-decoration-none">
                                Contact
                            </a>
                        </li>

                    </ul>

                </div>

            </div>

            <div class="text-center small mt-4 pt-3 border-top border-white">

                © {{ date('Y') }}
                Designed & Developed by

                <a href="https://www.labib.work" target="_blank"
                    class="custom-footer-link fw-bold text-decoration-none">
                    Labib Arefin
                </a>

            </div>

        </div>


    </footer>

    <script>
        function openProblemModal() {
            const modal = document.getElementById('problemModal');
            modal.style.display = 'flex';
        }

        function closeProblemModal() {
            const modal = document.getElementById('problemModal');
            modal.style.display = 'none';
        }

        // Optional: click outside modal to close
        window.addEventListener('click', function(event) {
            const modal = document.getElementById('problemModal');
            if (event.target === modal) {
                closeProblemModal();
            }
        });
    </script>

</footer>
