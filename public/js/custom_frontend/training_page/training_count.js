function updateTrainingCounts() {
    const localCount = document.querySelectorAll(
        "#trainingContainer .training-card",
    ).length;

    const internationalCount = document.querySelectorAll(
        "#internationalContainer .country-card",
    ).length;

    const totalCount = localCount + internationalCount;

    const localCounter = document.getElementById("localTrainingCount");

    const internationalCounter = document.getElementById(
        "internationalTrainingCount",
    );

    const totalCounter = document.getElementById("totalTrainingCount");

    if (localCounter) {
        localCounter.innerHTML = `${localCount} Trainings`;
    }

    if (internationalCounter) {
        internationalCounter.innerHTML = `${internationalCount} Trainings`;
    }

    if (totalCounter) {
        totalCounter.innerHTML = `Total Trainings: ${totalCount}`;
    }

    const localSection = document.getElementById("localTrainingSection");

    const internationalSection = document.getElementById(
        "internationalTrainingSection",
    );

    if (localSection) {
        localSection.style.display = localCount > 0 ? "block" : "none";
    }

    if (internationalSection) {
        internationalSection.style.display =
            internationalCount > 0 ? "block" : "none";
    }
}
