$(document).ready(function () {
  var originalUsers = []; // Variable to store the original user data

  // Make AJAX request to fetch user data
  $.ajax({
    url: "/dashboard/fetchAllUserData",
    method: "GET",
    success: function (response) {
      // Check if the response contains the 'users' property
      if (response.hasOwnProperty("users")) {
        originalUsers = response.users; // Store original data
        renderUserTable(originalUsers); // Initial rendering of user table
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

  // Function to render user table rows
  function renderUserTable(users) {
    var tableBody = $("#userTableBody");
    tableBody.empty(); // Clear previous content

    // Append new table rows
    $.each(users, function (index, user) {
      var userType = user.user_type == 2 ? "Admin" : "Student";
      var enrolled = user.isenrolled == 1 ? "Yes" : "No";
      var present = user.isPresent == 1 ? "Yes" : "No";
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
        "<td>" +
        present +
        "</td>" +
        "</tr>";
      tableBody.append(newRow);
    });
  }

  // Search functionality for user table
  $("#searchInput").on("input", function () {
    var searchTerm = $(this).val().toLowerCase();

    // Filter the original user data based on the search term
    var filteredUsers = originalUsers.filter(function (user) {
      return Object.values(user).some(function (value) {
        // Convert value to string and then lowercase before checking inclusion
        return String(value).toLowerCase().includes(searchTerm);
      });
    });

    // If the search input is empty, render the original user table
    if (searchTerm === "") {
      renderUserTable(originalUsers);
    } else {
      // Render the filtered user data
      renderUserTable(filteredUsers);
    }
  });

  // PDF export functionality for user table
  $("#all-user-report-export-pdf-btn").click(function () {
    window.jsPDF = window.jspdf.jsPDF;
    var doc = new jsPDF();
    // Access jsPDF using global scope

    // Add table headers for user table
    var headers = [
      "Name",
      "College Name",
      "Email",
      "Team Name",
      "Phone No",
      "User Role",
      "Enrolled",
      "Accommodation Needed",
      "Present",
    ];
    var data = [];

    // Push headers to the data array
    data.push(headers);

    // Push table rows to the data array for user table
    $("#userTableBody tr").each(function () {
      var row = [];
      $(this)
        .find("td")
        .each(function () {
          row.push($(this).text());
        });
      data.push(row);
    });

    // Define table title for user table
    var title = "ALL USER REPORTS";

    // Add border to PDF outline
    doc.rect(
      5,
      5,
      doc.internal.pageSize.width - 10,
      doc.internal.pageSize.height - 10
    );

    // Add table title for user table
    doc.text(title, 14, 20);

    // Add table data to the PDF document for user table
    doc.autoTable({
      head: [headers],
      body: data.slice(1), // Exclude headers row
      margin: { top: 30 }, // Adjust margin to accommodate the title
      theme: "grid", // Add grid theme for borders
      styles: { lineColor: [0, 0, 0] }, // Set border color of content cells to black
      headStyles: {
        fillColor: [0, 0, 0],
        textColor: [255, 255, 255],
        lineColor: [255, 255, 255],
      }, // Set header background color to black, text color to white, and border color to white
      alternateRowStyles: { fillColor: [255, 255, 255] }, // Set alternating row background color to white
    });

    // Save the PDF document for user table
    doc.save("all_user_report.pdf");
  });
});
