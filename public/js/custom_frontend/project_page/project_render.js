function renderProject(item) {
    return `

    <div class="project-card">

        <span class="project-type">
            ${item.project_type ?? ""}
        </span>

        <h3>
            ${item.project_name ?? ""}
        </h3>

        <div class="project-meta">
            📍 ${item.location ?? ""}
        </div>

        <div class="project-meta">
            👷 ${item.position ?? ""}
        </div>

        <div class="project-meta">
            📅 ${item.project_year ?? ""}
        </div>

        <div class="project-description">
            ${item.description ?? ""}
        </div>

    </div>

    `;
}
