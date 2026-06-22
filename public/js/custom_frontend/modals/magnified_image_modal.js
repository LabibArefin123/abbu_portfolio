document.addEventListener("DOMContentLoaded", () => {
    const modal = document.createElement("div");

    modal.classList.add("image-modal");

    modal.innerHTML = `
        <div class="modal-box">

            <span class="close-btn">

                &times;

            </span>

            <img
                src=""
                alt="Magnified Image">

        </div>
    `;

    document.body.appendChild(modal);

    const modalImg = modal.querySelector("img");

    const closeBtn = modal.querySelector(".close-btn");

    function closeModal() {
        modal.style.display = "none";

        modalImg.src = "";
    }

    function openModal(src) {
        modal.style.display = "flex";

        modalImg.src = src;
    }

    document.querySelectorAll(".magnify-img").forEach((img) => {
        img.addEventListener("click", () => {
            openModal(img.src);
        });
    });

    closeBtn.addEventListener("click", closeModal);

    modal.addEventListener("click", (e) => {
        if (e.target === modal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && modal.style.display === "flex") {
            closeModal();
        }
    });
});
