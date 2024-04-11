$(document).ready(function () {
  // Make AJAX request to fetch user data
  $.ajax({
    url: "/admin/fetchAllUserData", // Update the URL to match your route
    method: "GET",
    success: function (response) {
      console.log(response);
      // Check if the response contains the 'users' property
      if (response.hasOwnProperty("allusers")) {
        // Clear previous content
        $("#userTableBody").empty();
        // Append new table rows
        $.each(response.allusers, function (index, user) {
          var userType = user.user_type == 2 ? "Admin" : "Student";
          var enrolled = user.isenrolled == 1 ? "Yes" : "No";
          var accommodationNeeded = user.accommodation_needed ? "Yes" : "No";
          var newRow =
            "<tr>" +
            "<td>" +
            user.name +
            "</td>" +
            "<td>" +
            user.college_name +
            "</td>" +
            "<td>" +
            user.email +
            "</td>" +
            "<td>" +
            user.team_name +
            "</td>" +
            "<td>" +
            user.phone_number +
            "</td>" +
            "<td>" +
            userType +
            "</td>" +
            "<td>" +
            enrolled +
            "</td>" +
            "<td>" +
            accommodationNeeded +
            "</td>" +
            "</tr>";
          $("#userTableBody").append(newRow);
        });
      } else {
        console.error("Response does not contain 'users' property:", response);
        // Handle error
      }
    },
    error: function (xhr, status, error) {
      console.error("Error fetching user data:", error);
      // Handle error
    },
  });
});
