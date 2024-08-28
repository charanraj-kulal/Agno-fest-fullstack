// Accommodation
const accomodationBtn = document.getElementById("accomodation-btn");
const agreeCheckbox = document.getElementById("user-checkbox2");
const foodCheckbox = document.getElementById("user-checkbox1");
// loader
const loader = document.querySelector(".loader");

// Enable/disable save button based on T&C checkbox
agreeCheckbox.addEventListener("change", function () {
  accomodationBtn.disabled = !this.checked;
});

accomodationBtn.addEventListener("click", (e) => {
  e.preventDefault(); // Prevent default button behavior
  loader.style.display = "block"; // Show loader

  const boyDisplay = document.getElementById("no-b").value;
  const girlDisplay = document.getElementById("no-g").value;
  const emg_contact_data = document.getElementById("emg-contact").value;

  var numOfBoys = parseInt(boyDisplay);
  var numOfGirls = parseInt(girlDisplay);
  var totalMembers = numOfBoys + numOfGirls;

  if (isNaN(numOfBoys) || isNaN(numOfGirls)) {
    loader.style.display = "none"; // Hide loader
    showAlert("Please enter valid numbers for boys and girls.", false);
    return;
  }

  if (totalMembers > 15) {
    loader.style.display = "none"; // Hide loader
    showAlert("The total number of boys and girls cannot exceed 15.", false);
    return;
  }

  if (numOfBoys < 0 || numOfGirls < 0) {
    loader.style.display = "none"; // Hide loader
    showAlert(
      "Both the number of boys and girls should be positive or zero.",
      false
    );
    return;
  }

  if (totalMembers === 0) {
    loader.style.display = "none"; // Hide loader
    showAlert("Please enter the number of boys or girls.", false);
    return;
  }

  // Call the function to submit accommodation form via AJAX
  submitAccommodationForm(numOfBoys, numOfGirls, emg_contact_data);
});

// Function to submit the accommodation form via AJAX
function submitAccommodationForm(numOfBoys, numOfGirls, emg_contact_data) {
  var url = "/dashboard/accomodation"; // Relative endpoint
  const accommodationData = {
    numofboys: numOfBoys,
    numofgirls: numOfGirls,
    emg_contact: emg_contact_data,
    req_food: foodCheckbox.checked ? 1 : 0,
    agree_tandm: agreeCheckbox.checked ? 1 : 0,
  };
  $.ajax({
    type: "POST",
    url: url,
    data: accommodationData,
    dataType: "json",
    success: function (response) {
      loader.style.display = "none"; // Hide loader
      if (response.success) {
        showAlert(response.message, true);
        updateUIAfterPayment();
      } else {
        showAlert(response.message, false);
      }
    },
    error: function (xhr, status, error) {
      loader.style.display = "none"; // Hide loader
      console.error(error);
      showAlert("An error occurred while processing your request.", false);
    },
  });
}

function updateUIAfterPayment() {
  $("#accomodation-btn").text("UPDATE");
}

// Perform AJAX request to fetch data
function fetchData() {
  $.ajax({
    url: "dashboard/fetchAccomData", // Update 'controller-name' with your actual controller name
    type: "GET",
    dataType: "json",
    success: function (response) {
      if (response.success) {
        // Populate text boxes with data
        var data = response.data;

        $("#no-b").val(data.numofboys);
        $("#no-g").val(data.numofgirls);
        $("#emg-contact").val(data.emg_contact);
        $("#user-checkbox1").prop("checked", data.req_food == 1);
        $("#user-checkbox2").prop("checked", data.agree_tandm == 1);
        const isSubmitted = parseInt(data.agree_tandm);
        if (isSubmitted === 1) {
          $("#accomodation-btn").text("UPDATE");
          accomodationBtn.disabled = false;
        } else {
          // If isenrolled is not 1, set registration status to "Not Completed"
          $("#accomodation-btn").text("SAVE");
          accomodationBtn.disabled = true;
        }
      } else {
        accomodationBtn.disabled = true;
      }
    },
    error: function (xhr, status, error) {
      showAlert("An error occurred while processing your request.", false);
    },
  });
}

fetchData();

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
