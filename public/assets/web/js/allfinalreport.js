$(document).ready(function () {
  // Fetch and render event data
  var originalEvents = []; // Variable to store the original event data

  // Make AJAX request to fetch event data
  $.ajax({
    url: "/dashboard/fetchAllEventData",
    method: "GET",
    success: function (response) {
      // Check if the response is an array
      if (response.hasOwnProperty("events")) {
        originalEvents = response.events; // Store original data
        renderEventTable(originalEvents); // Initial rendering of user table
      } else {
        console.error("Response is not an array:", response);
        // Handle error
      }
    },
    error: function (xhr, status, error) {
      console.error("Error fetching event data:", error);
      // Handle error
    },
  });

  // Function to render event table rows
  function renderEventTable(events) {
    var tableBody = $("#eventTableBody");
    tableBody.empty(); // Clear previous content

    // Append new table rows
    $.each(events, function (index, event) {
      var newRow =
        "<tr>" +
        "<td>" +
        event.team_name +
        "</td>" +
        "<td>" +
        event.coding_mem_1 +
        "</td>" +
        "<td>" +
        event.coding_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.coding_mem_2 +
        "</td>" +
        "<td>" +
        event.coding_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.quiz_mem_1 +
        "</td>" +
        "<td>" +
        event.quiz_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.quiz_mem_2 +
        "</td>" +
        "<td>" +
        event.quiz_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.web_mem_1 +
        "</td>" +
        "<td>" +
        event.web_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.web_mem_2 +
        "</td>" +
        "<td>" +
        event.web_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.game_mem_1 +
        "</td>" +
        "<td>" +
        event.game_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.game_mem_2 +
        "</td>" +
        "<td>" +
        event.game_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.game_mem_3 +
        "</td>" +
        "<td>" +
        event.game_mem_contact_3 +
        "</td>" +
        "<td>" +
        event.game_mem_4 +
        "</td>" +
        "<td>" +
        event.game_mem_contact_4 +
        "</td>" +
        "<td>" +
        event.itmanager_mem_1 +
        "</td>" +
        "<td>" +
        event.itmanager_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.photo_mem_1 +
        "</td>" +
        "<td>" +
        event.photo_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.video_mem_1 +
        "</td>" +
        "<td>" +
        event.video_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.video_mem_2 +
        "</td>" +
        "<td>" +
        event.video_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.thunt_mem_1 +
        "</td>" +
        "<td>" +
        event.thunt_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.thunt_mem_2 +
        "</td>" +
        "<td>" +
        event.thunt_mem_contact_2 +
        "</td>" +
        "</tr>";
      tableBody.append(newRow);
    });
  }

  // Search functionality for event table
  $("#eventsearchInput").on("input", function () {
    var searchTerm = $(this).val().toLowerCase();

    // Filter the original event data based on the search term
    var filteredEvents = originalEvents.filter(function (event) {
      return Object.values(event).some(function (value) {
        // Convert value to string and then lowercase before checking inclusion
        return String(value).toLowerCase().includes(searchTerm);
      });
    });

    // If the search input is empty, render the original event table
    if (searchTerm === "") {
      renderEventTable(originalEvents);
    } else {
      // Render the filtered event data
      renderEventTable(filteredEvents);
    }
  });

  // PDF export functionality for event table
  $("#all-event-report-export-pdf-btn").click(function () {
    window.jsPDF = window.jspdf.jsPDF;
    var doc = new jsPDF();
    // Access jsPDF using global scope

    // Add table headers for event table
    var headers = [
      "Team Name",
      "Coding Member 1",
      "Coding Member Contact 1",
      "Coding Member 2",
      "Coding Member Contact 2",
      "Quiz Member 1",
      "Quiz Member Contact 1",
      "Quiz Member 2",
      "Quiz Member Contact 2",
      "Web Member 1",
      "Web Member Contact 1",
      "Web Member 2",
      "Web Member Contact 2",
      "Game Member 1",
      "Game Member Contact 1",
      "Game Member 2",
      "Game Member Contact 2",
      "Game Member 3",
      "Game Member Contact 3",
      "Game Member 4",
      "Game Member Contact 4",
      "IT Manager Member 1",
      "IT Manager Member Contact 1",
      "Photo Member 1",
      "Photo Member Contact 1",
      "Video Member 1",
      "Video Member Contact 1",
      "Video Member 2",
      "Video Member Contact 2",
      "Treasure Hunt Member 1",
      "Treasure Hunt Member Contact 1",
      "Treasure Hunt Member 2",
      "Treasure Hunt Member Contact 2",
    ];
    var data = [];

    // Push headers to the data array
    data.push(headers);

    // Push table rows to the data array for event table
    $("#eventTableBody tr").each(function () {
      var row = [];
      $(this)
        .find("td")
        .each(function () {
          row.push($(this).text());
        });
      data.push(row);
    });

    // Define table title for event table
    var title = "ALL EVENT REPORTS";

    // Add border to PDF outline
    doc.rect(
      5,
      5,
      doc.internal.pageSize.width - 10,
      doc.internal.pageSize.height - 10
    );

    // Add table title for event table
    doc.text(title, 14, 20);

    // Add table data to the PDF document for event table
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

    // Save the PDF document for event table
    doc.save("all_event_report.pdf");
  });
});
