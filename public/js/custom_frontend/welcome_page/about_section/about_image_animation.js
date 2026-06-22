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
        const image = card.querySelector(".magnify-img");

        const viewBtn = card.querySelector(".image-view-btn");

        const infoBtn = card.querySelector(".image-info-btn");

        // Open magnify modal
        viewBtn?.addEventListener("click", (e) => {
            e.stopPropagation();

            image?.click();
        });

        // Open magnify modal
        infoBtn?.addEventListener("click", (e) => {
            e.stopPropagation();

            image?.click();
        });

        // Bring image to front
        card.addEventListener("click", () => {
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
