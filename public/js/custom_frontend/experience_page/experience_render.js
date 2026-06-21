function renderExperienceCard(item, keyword = "") {
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

        <div class="word-count">
            🧮 Words: ${
                countWords(item.description) + countWords(item.responsibilities)
            }
        </div>

    </div>
    `;
}

function renderSuggestions(data) {
    return data
        .map((item) => {
            const words = countWords(item.position + " " + item.description);

            return `
            <div class="search-item" data-id="${item.id}">
                <div class="suggestion-title">
                    ${item.position}
                </div>

                <div class="suggestion-meta">
                    🧮 ${words} words
                </div>
            </div>
        `;
        })
        .join("");
}
