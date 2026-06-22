function updateProjectCounts(projects) {
    const total = projects.length;

    const bridge = projects.filter((p) => p.project_type === "Bridge").length;

    const flyover = projects.filter((p) => p.project_type === "Flyover").length;

    const infra = projects.filter(
        (p) => p.project_type === "Infrastructure",
    ).length;

    document.querySelector(".total-card .count-number").textContent = total;

    document.querySelector("#bridgeCount").textContent = bridge;

    document.querySelector("#flyoverCount").textContent = flyover;

    document.querySelector("#infraCount").textContent = infra;
}
