document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector("#searchInput");
    const from = document.querySelector("#fromDate");
    const to = document.querySelector("#toDate");
    const reset = document.querySelector("#resetFilter");

    const container = document.querySelector("#experienceContainer");
    const resultBox = document.querySelector("#resultCountBox");
    const suggestionBox = document.querySelector("#searchSuggestionBox");

    const renderCard = (item) => `
    <div class="experience-card" id="experience-${item.id}">

        <div class="experience-header">
            <h3>${item.position ?? ""}</h3>
            <span>${item.formatted_duration ?? ""}</span>
        </div>

        <div class="experience-body">
            <div class="description-responsibility">
                ${item.description ?? ""}
            </div>
        </div>

        ${
            item.responsibilities
                ? `
            <div class="experience-responsibility">
                <h4>Key Responsibilities</h4>
                ${item.responsibilities}
            </div>
        `
                : ""
        }
    </div>
`;

    function fetchData() {
        const params = new URLSearchParams({
            search: search.value.trim(),
            from_date: from.value,
            to_date: to.value,
        });

        fetch(`/experiences/ajax?${params}`)
            .then((res) => res.json())
            .then((res) => {
                if (!res.success) {
                    throw new Error(res.message);
                }

                resultBox.innerHTML =
                    res.count > 0
                        ? `✅ Found ${res.count} Experience Record(s)`
                        : `❌ No Experience Found`;

                container.innerHTML = "";
                suggestionBox.innerHTML = "";

                if (res.count === 0) {
                    container.innerHTML = `
                <div class="experience-card">
                    No matching experience found.
                </div>
            `;

                    return;
                }

                container.innerHTML = res.data.map(renderCard).join("");

                suggestionBox.innerHTML = res.data
                    .map(
                        (item) => `
                <div class="search-item"
                     data-id="${item.id}">
                    ${item.position}
                </div>
            `,
                    )
                    .join("");
            })
            .catch((error) => {
                console.error("Experience AJAX Error:", error);

                resultBox.innerHTML = "❌ Failed to load data";
            });
    }

    search.addEventListener("input", fetchData);
    from.addEventListener("change", fetchData);
    to.addEventListener("change", fetchData);

    reset.addEventListener("click", (e) => {
        e.preventDefault();

        search.value = "";
        from.value = "";
        to.value = "";

        fetchData();
    });
});
