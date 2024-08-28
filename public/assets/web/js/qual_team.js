$(document).ready(function () {
  function initializeSelect2() {
    $(".qual-select").select2({
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
        error: function (xhr, status, error) {
          console.error("Error fetching registered teams:", error);
          showAlert(
            "Failed to load registered teams. Please try again.",
            false
          );
        },
      },
    });
  }

  function loadQualifiedTeams() {
    $.ajax({
      url: "dashboard/fetchQualData", // Update 'controller-name' with your actual controller name
      type: "GET",
      dataType: "json",
      success: function (response) {
        if (response) {
          Object.keys(response).forEach(function (key) {
            if (key.startsWith("qual_")) {
              var selectElement = $(
                "#" + key.replace("qual_", "") + "-qualTeams"
              );
              var teams = response[key] ? response[key].split(",") : [];
              teams.forEach(function (team) {
                var option = new Option(team, team, true, true);
                selectElement.append(option);
              });
              selectElement.trigger("change");

              // Update the text display
              var displayElement = $("#set-" + key);
              displayElement.text(
                ": " + response[key] || ": Not Yet Disclosed..!"
              );
            }
          });
        }
      },
      error: function (xhr, status, error) {
        console.error("Error loading qualified teams:", error);
        alert(
          "An error occurred while loading qualified teams. Please try again."
        );
      },
    });
  }

  initializeSelect2();
  loadQualifiedTeams();

  $("#qualTeamsForm").on("submit", function (e) {
    e.preventDefault();
    var formData = {};

    $(".qual-select").each(function () {
      formData[$(this).attr("name").replace("[]", "")] = $(this).val() || [];
    });

    $.ajax({
      url: "dashboard/save-qualified-teams",
      method: "POST",
      data: JSON.stringify(formData),
      contentType: "application/json",
      success: function (response) {
        if (response.success) {
          showAlert(response.message, true);
          // loadQualifiedTeams(); // Reload the data after saving
        } else {
          showAlert(response.message, false);
        }
      },
      error: function () {
        showAlert("An error occurred while saving qualified teams", false);
      },
    });
  });
});
function showAlert(message, isSuccess) {
  var alertBox = $(".info");
  var alertTitle = $("#alert-title");

  alertTitle.text(message);

  alertBox.removeClass("success error");

  if (isSuccess) {
    alertBox.addClass("success");
  } else {
    alertBox.addClass("error");
  }

  alertBox.addClass("show-flex");
  alertBox.show();

  setTimeout(function () {
    alertBox.hide();
    alertBox.removeClass("show-flex");
  }, 3000);
}

$(document).on("click", "#closeAlert", function () {
  $(".info").hide();
  $(".info").removeClass("show-flex");
});
