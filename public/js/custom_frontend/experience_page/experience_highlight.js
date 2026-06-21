document.addEventListener("click", function (e) {
    const item = e.target.closest(".search-item");

    if (!item) return;

    const id = item.dataset.id;
    const card = document.getElementById("experience-" + id);

    if (!card) return;

    document
        .querySelectorAll(".experience-card")
        .forEach((c) => c.classList.remove("highlight-card"));

    card.classList.add("highlight-card");

    card.scrollIntoView({
        behavior: "smooth",
        block: "center",
    });
});
