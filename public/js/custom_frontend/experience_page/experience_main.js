document.addEventListener("DOMContentLoaded", () => {
    const search = document.querySelector("#searchInput");
    const from = document.querySelector("#fromDate");
    const to = document.querySelector("#toDate");
    const reset = document.querySelector("#resetFilter");

    const container = document.querySelector("#experienceContainer");
    const resultBox = document.querySelector("#resultCountBox");
    const suggestionBox = document.querySelector("#searchSuggestionBox");

    let hasSearched = false;

    function loadData() {
        const keyword = search.value.trim();

        // If empty search → reset UI (IMPORTANT FIX)
        if (!keyword && !from.value && !to.value) {
            container.innerHTML = originalHTML; // we will store it
            resultBox.innerHTML = "Showing all experience records";
            suggestionBox.innerHTML = "";
            hasSearched = false;
            return;
        }

        const params = new URLSearchParams({
            search: keyword,
            from_date: from.value,
            to_date: to.value,
        });

        fetchExperienceData(params, (err, res) => {
            if (err || !res.success) {
                resultBox.innerHTML = "❌ Failed to load data";
                return;
            }

            hasSearched = true;

            resultBox.innerHTML =
                res.count > 0
                    ? `✅ Found ${res.count} Experience Record(s)`
                    : `❌ No Experience Found`;

            container.innerHTML = "";

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

            suggestionBox.innerHTML = renderSuggestions(res.data, keyword);
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

        container.innerHTML = originalHTML;
        resultBox.innerHTML = "Showing all experience records";
        suggestionBox.innerHTML = "";
    });

    // store original HTML (IMPORTANT)
    const originalHTML = container.innerHTML;
});
