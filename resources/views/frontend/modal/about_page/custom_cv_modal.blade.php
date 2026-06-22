<div class="modal fade"
    id="cvModal"
    tabindex="-1">

    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content cv-modal">

            <div class="modal-header border-0">

                <h5 class="modal-title">
                    Curriculum Vitae
                </h5>

                <button type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="cv-icon">

                    <i class="fas fa-file-word"></i>

                </div>

                <h4>
                    Engr. Md. Anwar Hossain
                </h4>

                <p>
                    Additional Chief Engineer (Retd.), LGED
                </p>

                <div class="cv-actions">

                    <a href="{{ asset('uploads/cv/Md Anwar Hossain CV.pdf') }}"
                        target="_blank"
                        class="cv-action-btn view-cv">

                        <i class="fas fa-eye"></i>
                        View CV

                    </a>

                    <a href="{{ asset('uploads/cv/Md Anwar Hossain CV.pdf') }}"
                        download
                        class="cv-action-btn download-cv">

                        <i class="fas fa-download"></i>
                        Download CV (in PDF)
                    </a>

                    <a href="{{ asset('uploads/cv/Md Anwar Hossain CV.docx') }}"
                        download
                        class="cv-action-btn download-cv">

                        <i class="fas fa-download"></i>
                        Download CV (in Word)
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>