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
// function uploadAccommo() {
//   if (chkAccomodation.checked) {
//     openAlert(
//       "Details Updated! Contact officials for details about Accommodation!"
//     );
//     const totalCount = parseInt(num_boys.value) + parseInt(num_girls.value);

//     if (num_boys.value === "") {
//       openAlert("Specify number of Men! (0-if none)");
//     } else if (num_girls.value === "") {
//       openAlert("Specify number of Women! (0-if none)");
//     } else if (num_boys.value == 0 && num_girls.value == 0) {
//       openAlert("Please specify proper counts!");
//     } else if (totalCount > 15) {
//       openAlert("Please specify proper counts!");
//     } else if (
//       num_boys.value < 0 ||
//       num_boys.value > 15 ||
//       num_girls.value < 0 ||
//       num_girls.value > 15 ||
//       totalCount <= 0
//     ) {
//       openAlert("Please specify proper counts!");
//     } else {
//       updateAccomodation(num_boys.value, num_girls.value);
//     }
//   } else {
//     openAlert("Accommodation is not required!");
//   }
// }

// const getAccommodationData = async () => {
//   try {
//     const res = await fetch(`${API_URL}/team/${teamId}`);
//     const data = await res.json();
//     if (data.accommodation) {
//       if (
//         data.accommodation.countOfBoys > 0 ||
//         data.accommodation.countOfGirls > 0
//       ) {
//         chkAccomodation.checked = true;
//         toggleAccNumsDiv();
//         num_boys.value = data.accommodation.countOfBoys;
//         num_girls.value = data.accommodation.countOfGirls;
//       }
//     }
//   } catch (err) {
//     console.error(err);
//   }
// };
// getAccommodationData();

// const updateAccomodation = async (countOfBoys, countOfGirls) => {
//   if (!teamId) {
//     console.error("Team ID is missing.");
//     return;
//   }

//   const accommodationData = {
//     accommodation: {
//       countOfBoys: countOfBoys,
//       countOfGirls: countOfGirls,
//     },
//   };
//   try {
//     const res = await fetch(`${API_URL}/team/${teamId}`, {
//       method: "PUT",
//       headers: {
//         "Content-Type": "application/json",
//       },
//       body: JSON.stringify(accommodationData),
//     });
//     const data = await res.json();
//     // console.log(data.accommodation);
//   } catch (err) {
//     console.error(err);
//   }
// };

// ACCOUNT SETTINGS
const college = document.getElementById("set-clg-name");
const teamName = document.getElementById("set-team-name");
const registrationStatus = document.getElementById("set-reg-status");

const getAccountData = async () => {
  try {
    const res = await fetch(`${API_URL}/team/${teamId}`);
    const data = await res.json();
    if (data) {
      college.innerText = data.collegeName;
      teamName.innerText = data.teamName;
      const verificationStatus = data.paymentStatus.verificationStatus;
      if (verificationStatus) {
        registrationStatus.innerText = "Completed";
        registrationStatus.style.color = "green";
      } else {
        registrationStatus.innerText = "Not Completed";
        registrationStatus.style.color = "red";
      }
    }
  } catch (err) {
    console.error(err);
  }
};

getAccountData();
