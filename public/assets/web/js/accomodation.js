// Accommodation
const boyDisplay = document.getElementById("no-b");
const girlDisplay = document.getElementById("no-g");
const decBoys = document.getElementById("dec-boys");
const incBoys = document.getElementById("inc-boys");
const decGirls = document.getElementById("dec-girls");
const incGirls = document.getElementById("inc-girls");
const accomodationBtn = document.getElementById("accomodation-btn");

function updateAccommodationNumbers() {
  const numOfBoys = parseInt(boyDisplay.textContent);
  const numOfGirls = parseInt(girlDisplay.textContent);

  decBoys.classList.toggle("disabled", numOfBoys === 0);
  incBoys.classList.toggle("disabled", numOfBoys === 99);
  decGirls.classList.toggle("disabled", numOfGirls === 0);
  incGirls.classList.toggle("disabled", numOfGirls === 99);

  if (numOfBoys === 0 && numOfGirls === 0) {
    showAlert("Accommodation is not required.", false);
  }
}

incBoys.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  boyDisplay.textContent = Math.min(parseInt(boyDisplay.textContent) + 1, 99);
  updateAccommodationNumbers();
});

decBoys.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  boyDisplay.textContent = Math.max(parseInt(boyDisplay.textContent) - 1, 0);
  updateAccommodationNumbers();
});

incGirls.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  girlDisplay.textContent = Math.min(parseInt(girlDisplay.textContent) + 1, 99);
  updateAccommodationNumbers();
});

decGirls.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  girlDisplay.textContent = Math.max(parseInt(girlDisplay.textContent) - 1, 0);
  updateAccommodationNumbers();
});

accomodationBtn.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  var numOfBoys = parseInt(boyDisplay.textContent);
  var numOfGirls = parseInt(girlDisplay.textContent);
  var totalMembers = numOfBoys + numOfGirls;

  if (totalMembers > 15) {
    showAlert("The total number of boys and girls cannot exceed 15.", false);
    return;
  }

  if ((numOfBoys > 0 && numOfGirls < 0) || (numOfGirls > 0 && numOfBoys < 0)) {
    showAlert(
      "Both the number of boys and girls should be positive or zero.",
      false
    );
    return;
  }

  if (
    !(numOfBoys > 0 && numOfGirls >= 0) &&
    !(numOfGirls > 0 && numOfBoys >= 0)
  ) {
    showAlert("Please enter the number of boys or girls.", false);
    return;
  }

  // Call the function to submit accommodation form via AJAX
  submitAccommodationForm(numOfBoys, numOfGirls);
});

// Function to submit the accommodation form via AJAX
function submitAccommodationForm(numOfBoys, numOfGirls) {
  var url = "/dashboard/accomodation"; // Relative endpoint
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
