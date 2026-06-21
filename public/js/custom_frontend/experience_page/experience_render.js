function renderExperienceCard(item, keyword = "") {
    const showStats = keyword && keyword.trim() !== "";

    const matchCount = showStats
        ? countMatches(item.description + " " + item.responsibilities, keyword)
        : 0;

    return `
    <div class="experience-card" id="experience-${item.id}">

        <div class="experience-header">
            <h3>${highlightText(item.position, keyword)}</h3>
            <span>${item.formatted_duration ?? ""}</span>
        </div>

        <div class="experience-body">
            <div class="description-responsibility">
                ${highlightText(item.description, keyword)}
            </div>
        </div>

        ${
            item.responsibilities
                ? `
            <div class="experience-responsibility">
                <h4>Key Responsibilities</h4>
                ${highlightText(item.responsibilities, keyword)}
            </div>
        `
                : ""
        }

        ${
            showStats
                ? `
        <div class="word-count">
            🔍 Matches: ${matchCount}
        </div>
        `
                : ""
        }

    </div>
    `;
}

function renderSuggestions(data, keyword = "") {
    if (!keyword) return "";

    return data
        .map((item) => {
            const text = (item.position + " " + item.description).toLowerCase();

            const matchCount = (
                text.match(new RegExp(keyword.toLowerCase(), "g")) || []
            ).length;

            return `
            <div class="search-item" data-id="${item.id}">
                <div class="suggestion-title">
                    ${highlightText(item.position, keyword)}
                </div>

                <div class="suggestion-meta">
                    🔍 ${matchCount} matches
                </div>
            </div>
        `;
        })
        .join("");
}
