document.addEventListener("DOMContentLoaded", function () {
    function fetchTraining() {
        loadTrainingAjax({
            search: document.getElementById("searchTraining").value,

            type: document.getElementById("trainingType").value,

            location: document.getElementById("trainingLocation").value,

            year: document.getElementById("trainingYear").value,
        });
    }

    document
        .getElementById("searchTraining")
        .addEventListener("keyup", fetchTraining);

    document
        .getElementById("trainingType")
        .addEventListener("change", fetchTraining);

    document
        .getElementById("trainingLocation")
        .addEventListener("change", fetchTraining);

    document
        .getElementById("trainingYear")
        .addEventListener("change", fetchTraining);

    document
        .getElementById("resetFilter")
        .addEventListener("click", function () {
            document.getElementById("searchTraining").value = "";

            document.getElementById("trainingType").value = "";

            document.getElementById("trainingLocation").value = "";

            document.getElementById("trainingYear").value = "";

            fetchTraining();
        });
});
