function loadTrainingAjax(filters = {}) {
    $.ajax({
        url: "/training/ajax",

        type: "GET",

        data: filters,

        success: function (response) {
            $("#trainingContainer").html(response);
        },
    });
}
