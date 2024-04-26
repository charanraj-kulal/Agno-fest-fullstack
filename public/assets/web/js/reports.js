// JavaScript
$(document).ready(function () {
  var originalUsers = []; // Variable to store the original user data

  // Make AJAX request to fetch user data
  $.ajax({
    url: "/admin/fetchAllUserData", // Update the URL to match your route
    method: "GET",
    success: function (response) {
      console.log(response);
      // Check if the response contains the 'users' property
      if (response.hasOwnProperty("users")) {
        originalUsers = response.users; // Store original data
        renderTable(originalUsers); // Initial rendering of table
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

  // Function to render table rows
  function renderTable(users) {
    var tableBody = $("#userTableBody");
    tableBody.empty(); // Clear previous content

    // Append new table rows
    $.each(users, function (index, user) {
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
      tableBody.append(newRow);
    });
  }

  // Search functionality
  $("#searchInput").on("input", function () {
    var searchTerm = $(this).val().toLowerCase();

    // Filter the original user data based on the search term
    var filteredUsers = originalUsers.filter(function (user) {
      return Object.values(user).some(function (value) {
        // Convert value to string and then lowercase before checking inclusion
        return String(value).toLowerCase().includes(searchTerm);
      });
    });

    // If the search input is empty, render the original table
    if (searchTerm === "") {
      renderTable(originalUsers);
    } else {
      // Render the filtered data
      renderTable(filteredUsers);
    }
  });

  // PDF export functionality
  $("#export-pdf-btn").click(function () {
    // Log the HTML content of the table body
    // console.log($("#userTableBody").html());

    // // Log the originalUsers array
    // console.log(originalUsers);

    var tableData = $("#userTableBody").tableHTMLExport().data;
    console.log(tableData);
    var doc = new jsPDF();
    // Access jsPDF using global scope

    // Add table data to the PDF document
    doc.autoTable({
      html: "#userTableBody",
    });

    // Save the PDF document
    doc.save("user_data.pdf");
  });
});
