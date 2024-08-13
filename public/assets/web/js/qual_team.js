$(document).ready(function () {
  $("#code-qualTeams").select2({
    placeholder: "Select qualified teams",
    ajax: {
      url: "dashboard/get-registered-teams",
      dataType: "json",
      delay: 250,
      processResults: function (data) {
        return {
          results: $.map(data, function (item) {
            return {
              text: item.team_name,
              id: item.team_name,
            };
          }),
        };
      },
      cache: true,
    },
  });

  $("#qualTeamsForm").on("submit", function (e) {
    e.preventDefault();
    var selectedTeams = $("#qualTeams").val();

    $.ajax({
      url: "dashboard/save-qualified-teams",
      method: "POST",
      data: JSON.stringify({
        qual_code: selectedTeams,
        // Add other event types as needed
      }),
      contentType: "application/json",
      success: function (response) {
        if (response.success) {
          alert(response.message);
        } else {
          alert("Error: " + response.message);
        }
      },
      error: function () {
        alert("An error occurred while saving qualified teams");
      },
    });
  });
});
