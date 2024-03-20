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
    updateAccomodation(0, 0);
  }
}
$("#accomodation-btn").on("click", function (e) {
  e.preventDefault();
  var numOfBoys = $("#no-b").val(); // Get value from number of men input box
  var numOfGirls = $("#no-g").val(); // Get value from number of women input box

  // Call the function to submit accommodation form via AJAX
  submitAccommodationForm(numOfBoys, numOfGirls);
});

// Function to submit the accommodation form via AJAX
function submitAccommodationForm(numOfBoys, numOfGirls) {
  var url = "/admin/accomodation"; // Relative endpoint
  const accommodationData = {
    numofboys: numOfBoys,
    numofgirls: numOfGirls,
  };
  $.ajax({
    type: "POST",
    url: url,
    data: accommodationData, // Send data directly, no need for headers or JSON.stringify
    success: function (response) {
      // Handle success response here
      console.log(response); // For testing purposes
      // Redirect to the response URL
      // window.location.href = response.redirect_url;
    },
    error: function (xhr, status, error) {
      // Handle error
      console.error(error);
    },
  });
}

// $("#accomodation-btn").on("click", function (e) {
//   e.preventDefault();
//   var numOfBoys = $("#no-b").val(); // Get value from number of men input box
//   var numOfGirls = $("#no-g").val(); // Get value from number of women input box
//   var url = "http://localhost:8080/admin/accomodation";
//   // var url = "<?= base_url() ?>/admin/accomodation";
//   // AJAX request
//   const accommodationData = {
//     accommodation: {
//       numofboys: numOfBoys,
//       numofgirls: numOfGirls,
//     },
//   };
//   $.ajax({
//     type: "POST",
//     url: url,
//     headers: {
//       "Content-Type": "application/json",
//     },
//     body: JSON.stringify(accommodationData),

//     success: function (response) {
//       // Handle success response here
//       console.log(response); // For testing purposes
//       // Redirect to the response URL
//       // window.location.href = response.redirect_url;
//     },
//     error: function (xhr, status, error) {
//       // Handle error
//       console.error(error);
//     },
//   });
// });

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
