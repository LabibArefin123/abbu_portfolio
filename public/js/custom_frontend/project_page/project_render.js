function renderProject(item) {
    return `

    <div class="project-card">

        <h3>${item.project_name}</h3>

        <p>${item.project_type}</p>

        <p>${item.location ?? ""}</p>

    </div>

    `;
}
