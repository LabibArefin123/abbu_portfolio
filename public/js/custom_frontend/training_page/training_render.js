function initializeTrainingCards() {
    const cards = document.querySelectorAll(".training-card, .country-card");

    cards.forEach((card, index) => {
        card.style.opacity = 0;

        card.style.transform = "translateY(30px)";

        setTimeout(() => {
            card.style.transition = "all .5s ease";

            card.style.opacity = 1;

            card.style.transform = "translateY(0)";
        }, index * 60);
    });
}

document.addEventListener("DOMContentLoaded", initializeTrainingCards);
