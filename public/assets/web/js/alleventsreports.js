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
        event.ticket_number +
        "</td>" +
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
        event.photo_mem_2 +
        "</td>" +
        "<td>" +
        event.photo_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.mad_mem_1 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_1 +
        "</td>" +
        "<td>" +
        event.mad_mem_2 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_2 +
        "</td>" +
        "<td>" +
        event.mad_mem_3 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_3 +
        "</td>" +
        "<td>" +
        event.mad_mem_4 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_4 +
        "</td>" +
        "<td>" +
        event.mad_mem_5 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_5 +
        "</td>" +
        "<td>" +
        event.mad_mem_6 +
        "</td>" +
        "<td>" +
        event.mad_mem_contact_6 +
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
    var doc = new jsPDF("p", "pt", "a4"); // Define PDF orientation as portrait ('p')

    // Add table headers for event table
    var headers = [
      "Ticket Number",
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
      "Photo Member 2",
      "Photo Member Contact 2",
      "Mad Member 1",
      "Mad Member Contact 1",
      "Mad Member 2",
      "Mad Member Contact 2",
      "Mad Member 3",
      "Mad Member Contact 3",
      "Mad Member 4",
      "Mad Member Contact 4",
      "Mad Member 5",
      "Mad Member Contact 5",
      "Mad Member 6",
      "Mad Member Contact 6",
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

    // Insert two empty rows at the end of each table for Day 1 and Day 2
    data.push([
      "Day 1",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
    ]);
    data.push([
      "Day 2",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
      "",
    ]);

    // Transpose the table data (convert rows to columns)
    var transposedData = data[0].map((_, colIndex) =>
      data.map((row) => row[colIndex])
    );

    // Define table title for event table
    var title = "ALL EVENT REPORTS";

    // Add table data to the PDF document for event table
    doc.autoTable({
      head: [transposedData[0]], // Transposed headers
      body: transposedData.slice(1), // Exclude transposed headers row
      margin: { top: 40 }, // Adjust margin to accommodate the title
      theme: "grid", // Add grid theme for borders
      styles: { lineColor: [0, 0, 0] }, // Set border color of content cells to black
      headStyles: {
        fillColor: [0, 0, 0],
        textColor: [255, 255, 255],
        lineColor: [255, 255, 255],
      }, // Set header background color to black, text color to white, and border color to white
      alternateRowStyles: { fillColor: [255, 255, 255] }, // Set alternating row background color to white
      didDrawPage: function (data) {
        doc.text(title, 14, 20); // Add table title (adjust position as needed)

        // // Merge cells for Day 1 and Day 2 vertically in two columns each
        // var pageCount = doc.internal.getNumberOfPages();
        // var pageHeight = doc.internal.pageSize.height;
        // for (var i = 1; i <= pageCount; i++) {
        //     doc.setPage(i);
        //     var xOffset = 50; // Adjust horizontal position as needed
        //     var yOffset = 20; // Adjust vertical position as needed
        //     var cellWidth = 80; // Adjust cell width as needed
        //     var cellHeight = 40; // Adjust cell height as needed
        //     doc.rect(xOffset, yOffset, cellWidth, cellHeight); // Day 1
        //     doc.rect(xOffset + cellWidth, yOffset, cellWidth, cellHeight); // Day 2
        // }
      },
    });

    // Save the PDF document for event table
    doc.save("all_event_report.pdf");
  });
});
