document.addEventListener("DOMContentLoaded", function () {
    const slider = document.getElementById("slider");

    // Stop if slider doesn't exist
    if (!slider) return;

    let currentIndex = 0;

    const slides = slider.querySelectorAll(".portfolio-slide");
    const dots = slider.querySelectorAll(".dot");

    if (slides.length === 0) return;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle("active", i === index);
        });

        dots.forEach((dot, i) => {
            dot.classList.toggle("active", i === index);
        });

        currentIndex = index;
    }

    function nextSlide() {
        const nextIndex = (currentIndex + 1) % slides.length;
        showSlide(nextIndex);
    }

    function prevSlide() {
        const prevIndex = (currentIndex - 1 + slides.length) % slides.length;

        showSlide(prevIndex);
    }

    // Global function for dots
    window.goToSlide = function (index) {
        showSlide(index);
    };

    // Auto Slide
    let autoSlide = setInterval(nextSlide, 8000);

    // Pause when user hovers
    slider.addEventListener("mouseenter", () => {
        clearInterval(autoSlide);
    });

    slider.addEventListener("mouseleave", () => {
        autoSlide = setInterval(nextSlide, 8000);
    });

    showSlide(0);
});
