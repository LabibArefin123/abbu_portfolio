document.addEventListener("DOMContentLoaded", () => {
    const searchInput = document.querySelector("#searchInput");
    const projectType = document.querySelector("#projectType");
    const position = document.querySelector("#position");
    const projectYear = document.querySelector("#projectYear");
    const projectLocation = document.querySelector("#projectLocation");
    const resetBtn = document.querySelector("#resetFilter");

    const container = document.querySelector("#projectContainer");

    function loadProjects() {
        const params = new URLSearchParams({
            search: searchInput.value,

            project_type: projectType.value,

            position: position.value,

            project_year: projectYear.value,

            location: projectLocation.value,
        });

        fetch(`/projects/ajax?${params}`)
            .then((res) => res.json())

            .then((res) => {
                if (!res.success) {
                    return;
                }

                updateProjectCounts(res.data);

                if (res.data.length === 0) {
                    container.innerHTML = `

            <div class="col-12 text-center">

                <h4>
                    No Project Found
                </h4>

            </div>

        `;

                    return;
                }

                container.innerHTML = res.data.map(renderProject).join("");
            });
    }

    searchInput.addEventListener("keyup", loadProjects);

    projectType.addEventListener("change", loadProjects);

    position.addEventListener("change", loadProjects);

    projectYear.addEventListener("change", loadProjects);

    projectLocation.addEventListener("change", loadProjects);

    resetBtn.addEventListener("click", () => {
        searchInput.value = "";
        projectType.value = "";
        position.value = "";
        projectYear.value = "";
        projectLocation.value = "";

        loadProjects();
    });
});
