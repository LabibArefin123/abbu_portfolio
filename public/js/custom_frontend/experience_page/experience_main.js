document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector("#searchInput");
    const from = document.querySelector("#fromDate");
    const to = document.querySelector("#toDate");
    const reset = document.querySelector("#resetFilter");

    const container = document.querySelector("#experienceContainer");
    const resultBox = document.querySelector("#resultCountBox");
    const suggestionBox = document.querySelector("#searchSuggestionBox");

    function loadData() {
        const params = new URLSearchParams({
            search: search.value.trim(),
            from_date: from.value,
            to_date: to.value,
        });

        fetchExperienceData(params, (err, res) => {
            if (err || !res.success) {
                console.error(err || res.message);
                resultBox.innerHTML = "❌ Failed to load data";
                return;
            }

            const keyword = search.value.trim();

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

            container.innerHTML = res.data
                .map((item) => renderExperienceCard(item, keyword))
                .join("");

            suggestionBox.innerHTML = renderSuggestions(res.data);
        });
    }

    search.addEventListener("input", loadData);
    from.addEventListener("change", loadData);
    to.addEventListener("change", loadData);

    reset.addEventListener("click", (e) => {
        e.preventDefault();
        search.value = "";
        from.value = "";
        to.value = "";
        loadData();
    });

    loadData();
});
