document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".training-card").forEach((card) => {
        let countryCode = card.dataset.country;

        let flag = card.querySelector(".country-flag");

        flag.src = `https://flagcdn.com/w160/${countryCode}.png`;
    });
});
