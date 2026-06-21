function fetchExperienceData(params, callback) {
    fetch(`/experiences/ajax?${params}`)
        .then((res) => res.json())
        .then((res) => callback(null, res))
        .catch((err) => callback(err, null));
}
