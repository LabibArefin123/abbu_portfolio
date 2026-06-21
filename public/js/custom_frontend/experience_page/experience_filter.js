document.addEventListener("DOMContentLoaded", function () {
    let searchInput = document.getElementById("searchInput");
    let fromDate = document.getElementById("fromDate");
    let toDate = document.getElementById("toDate");
    let resetBtn = document.getElementById("resetFilter");
    let container = document.getElementById("experienceContainer");

    function renderCard(item) {
        let fromTo = item.duration.split(" to ");

        let from = fromTo[0] ?? "";
        let to = fromTo[1] ?? "";

        return `
        <div class="experience-card">

            <div class="experience-header">
                <h3 class="position-title">${item.position}</h3>

                <span class="duration-badge">
                    ${from} - ${to}
                </span>
            </div>

            <div class="experience-body">
                ${item.description ?? ""}
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

        </div>`;
    }

    function fetchData() {
        fetch(
            `/experience?search=${searchInput.value}&from_date=${fromDate.value}&to_date=${toDate.value}`,
            {
                headers: {
                    "X-Requested-With": "XMLHttpRequest",
                },
            },
        )
            .then((res) => res.json())
            .then((res) => {
                container.innerHTML = "";

                if (!res.data.length) {
                    container.innerHTML = `<p style="text-align:center;">No experience found</p>`;
                    return;
                }

                res.data.forEach((item) => {
                    container.innerHTML += renderCard(item);
                });
            });
    }

    searchInput.addEventListener("keyup", fetchData);
    fromDate.addEventListener("change", fetchData);
    toDate.addEventListener("change", fetchData);

    resetBtn.addEventListener("click", function () {
        searchInput.value = "";
        fromDate.value = "";
        toDate.value = "";
        fetchData();
    });
});
