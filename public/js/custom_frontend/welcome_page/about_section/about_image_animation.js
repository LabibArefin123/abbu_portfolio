document.addEventListener("DOMContentLoaded", () => {
    const stack = document.querySelector(".about-image-stack");

    if (!stack) return;

    let cards = Array.from(stack.querySelectorAll(".about-image"));

    function applyPositions() {
        cards.forEach((card, index) => {
            card.classList.remove(
                "image-main",
                "image-top",
                "image-bottom",
                "active",
            );

            if (index === 0) {
                card.classList.add("image-main", "active");
            } else if (index === 1) {
                card.classList.add("image-top");
            } else {
                card.classList.add("image-bottom");
            }
        });
    }

    function rotateImages() {
        cards.push(cards.shift());

        applyPositions();
    }

    cards.forEach((card) => {
        card.addEventListener("click", (e) => {
            if (
                e.target.closest(".image-view-btn") ||
                e.target.closest(".image-info-btn") ||
                e.target.classList.contains("magnify-img")
            ) {
                return;
            }

            const index = cards.indexOf(card);

            if (index > 0) {
                cards.splice(index, 1);

                cards.unshift(card);

                applyPositions();
            }
        });
    });

    applyPositions();

    setInterval(rotateImages, 15000);
});
