function loadTrainingAjax(filters = {}) {
    const queryString = new URLSearchParams(filters).toString();

    fetch(`${window.trainingAjaxUrl}?${queryString}`)
        .then((response) => response.json())

        .then((response) => {
            document.getElementById("trainingContainer").innerHTML =
                response.html;

            document.getElementById("internationalContainer").innerHTML =
                response.international;

            updateTrainingCounts();

            highlightTrainingSearch();

            initializeTrainingCards();
        })

        .catch((error) => {
            console.error("Training AJAX Error:", error);
        });
}
