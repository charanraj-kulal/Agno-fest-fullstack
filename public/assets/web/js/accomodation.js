//ACCOMMODATION
const chkAccomodation = document.getElementById("cbx");
var numOfBoys = $("#no-b").val(); // Get value from number of men input box
var numOfGirls = $("#no-g").val(); // Get value from number of women input box
// const accBtn = document.getElementById('accomodation-btn');

/* Accomodation toggle */
function toggleAccNumsDiv() {
  var accNumsDiv = document.querySelector(".acc-nums-div");
  if (chkAccomodation.checked) {
    accNumsDiv.classList.add("show");
  } else {
    accNumsDiv.classList.remove("show");
    numOfBoys.value = 0;
    numOfGirls.value = 0;
  }
}
$("#accomodation-btn").on("click", function (e) {
  e.preventDefault();
  var numOfBoys = parseInt($("#no-b").val()); // Parse value to integer
  var numOfGirls = parseInt($("#no-g").val()); // Parse value to integer
  var totalMembers = numOfBoys + numOfGirls;
  var chkAccomodation = document.getElementById("cbx");
  if (!chkAccomodation.checked) {
    showAlert("Accommodation is not required.", false); // Show alert if checkbox is not checked
    return;
  }

  if (totalMembers > 15) {
    showAlert("The total number of boys and girls cannot exceed 15.", false);
    return;
  }

  // Validate input boxes
  if ((numOfBoys > 0 && numOfGirls < 0) || (numOfGirls > 0 && numOfBoys < 0)) {
    showAlert(
      "Both the number of boys and girls should be positive or zero.",
      false
    );
    return;
  }

  // If one input box is filled with a positive number and the other with zero or positive number, no validation error
  if (
    !(numOfBoys > 0 && numOfGirls >= 0) &&
    !(numOfGirls > 0 && numOfBoys >= 0)
  ) {
    showAlert("Please enter the number of boys or girls.", false);
    return;
  }

  // Check if input boxes are filled with zero

  // Call the function to submit accommodation form via AJAX
  submitAccommodationForm(numOfBoys, numOfGirls);
});

// Function to submit the accommodation form via AJAX
function submitAccommodationForm(numOfBoys, numOfGirls) {
  var url = "admin/accomodation"; // Relative endpoint
  const accommodationData = {
    numofboys: numOfBoys,
    numofgirls: numOfGirls,
  };
  $.ajax({
    type: "POST",
    url: url,
    data: accommodationData, // Send data directly, no need for headers or JSON.stringify
    dataType: "json", // Set the expected data type
    success: function (response) {
      // Handle success response here
      if (response.success) {
        showAlert(response.message, true); // Show success message
      } else {
        showAlert(response.message, false); // Show error message
      }
    },
    error: function (xhr, status, error) {
      // Handle error
      console.error(error);
      showAlert("An error occurred while processing your request.", false); // Show error message
    },
  });
}

function showAlert(message, isSuccess) {
  var alertBox = $(".info");
  var alertTitle = $("#alert-title");

  alertTitle.text(message);

  // Remove existing classes to prevent color conflicts
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
  }, 3000); // 3 seconds delay before hiding
}
$(document).on("click", "#closeAlert", function () {
  $(".info").hide();
  $(".info").removeClass("show-flex"); // Hide the alert box when close button is clicked
});
