document.addEventListener("DOMContentLoaded", function () {
    document
        .querySelectorAll("#trainingCountries .training-card")
        .forEach((card) => {
            card.style.cursor = "pointer";

            card.addEventListener("click", function () {
                const country = this.querySelector("h5").textContent.trim();

                window.location.href = `${window.trainingUrl}?country=${encodeURIComponent(country)}`;
            });
        });
});
