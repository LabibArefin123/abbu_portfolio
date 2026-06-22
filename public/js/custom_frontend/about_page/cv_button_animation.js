document.addEventListener("DOMContentLoaded", function () {
    const cvButton = document.querySelector(".cv-btn");

    if (!cvButton) {
        return;
    }

    setInterval(() => {
        cvButton.classList.add("cv-pulse");

        setTimeout(() => {
            cvButton.classList.remove("cv-pulse");
        }, 1200);
    }, 5000);
});
