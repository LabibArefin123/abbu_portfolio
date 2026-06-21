document.addEventListener("click", function (e) {
    if (!e.target.classList.contains("search-item")) {
        return;
    }

    let id = e.target.dataset.id;

    let card = document.getElementById("experience-" + id);

    if (!card) {
        return;
    }

    document.querySelectorAll(".experience-card").forEach((c) => {
        c.classList.remove("highlight-card");
    });

    card.classList.add("highlight-card");

    card.scrollIntoView({
        behavior: "smooth",
        block: "center",
    });
});
