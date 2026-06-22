document.addEventListener("DOMContentLoaded", function () {
    const params = new URLSearchParams(window.location.search);

    const country = params.get("country");

    const type = params.get("type");

    if (!country) {
        return;
    }

    const searchInput = document.getElementById("searchTraining");


    if (searchInput) {
        searchInput.value = country;
    }

});
