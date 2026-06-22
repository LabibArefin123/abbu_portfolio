document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);

    const country = params.get("country");

    if (!country) {
        return;
    }

    const searchInput = document.getElementById("searchTraining");

    if (searchInput) {
        searchInput.value = country;

        loadTrainingAjax({
            search: country,
        });
    }
});
