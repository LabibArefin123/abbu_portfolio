document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector("#searchInput");

    const container = document.querySelector("#projectContainer");

    function loadData() {
        const params = new URLSearchParams({
            search: search.value,
        });

        fetch(`/projects/ajax?${params}`)
            .then((res) => res.json())

            .then((res) => {
                container.innerHTML = res.data.map(renderProject).join("");
            });
    }

    search.addEventListener("input", loadData);
});
