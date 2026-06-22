function highlightTrainingSearch() {
    const searchText = document.getElementById("searchTraining").value.trim();

    if (!searchText.length) {
        return;
    }

    const regex = new RegExp(`(${searchText})`, "gi");

    document
        .querySelectorAll(
            ".training-card h4, \
             .training-card p, \
             .training-card span, \
             .country-card h5, \
             .country-card p",
        )
        .forEach((element) => {
            const text = element.textContent;

            element.innerHTML = text.replace(
                regex,
                '<mark class="training-highlight">$1</mark>',
            );
        });
}
