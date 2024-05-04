$(document).ready(function () {
    var originalAccommodations = []; // Variable to store the original accommodation data

    // Make AJAX request to fetch accommodation data
    $.ajax({
        url: "/admin/getAllAccommodationData",
        method: "GET",
        success: function (response) {
            console.log(response);
            // Check if the response contains the 'accommodations' property
            if (response.hasOwnProperty("accommodations")) {
                originalAccommodations = response.accommodations; // Store original data
                renderAccommodationTable(originalAccommodations); // Initial rendering of accommodation table
            } else {
                console.error("Response does not contain 'accommodations' property:", response);
                // Handle error
            }
        },
        error: function (xhr, status, error) {
            console.error("Error fetching accommodation data:", error);
            // Handle error
        },
    });

    // Function to render accommodation table rows
    function renderAccommodationTable(accommodations) {
        var tableBody = $("#accommodationTableBody");
        tableBody.empty(); // Clear previous content

        // Append new table rows
        $.each(accommodations, function (index, accommodation) {
            var newRow =
                "<tr>" +
                "<td>" + accommodation.team_name + "</td>" +
                "<td>" + accommodation.numofboys + "</td>" +
                "<td>" + accommodation.numofgirls + "</td>" +
             
                "</tr>";
            tableBody.append(newRow);
        });
    }

    // Search functionality for accommodation table
    $("#accommodationSearchInput").on("input", function () {
        var searchTerm = $(this).val().toLowerCase();

        // Filter the original accommodation data based on the search term
        var filteredAccommodations = originalAccommodations.filter(function (accommodation) {
            return Object.values(accommodation).some(function (value) {
                // Convert value to string and then lowercase before checking inclusion
                return String(value).toLowerCase().includes(searchTerm);
            });
        });

        // If the search input is empty, render the original accommodation table
        if (searchTerm === "") {
            renderAccommodationTable(originalAccommodations);
        } else {
            // Render the filtered accommodation data
            renderAccommodationTable(filteredAccommodations);
        }
    });

    // PDF export functionality for accommodation table
    $("#all-accommodation-report-export-pdf-btn").click(function () {
        window.jsPDF = window.jspdf.jsPDF;
        var doc = new jsPDF();
        // Access jsPDF using global scope

        // Add table headers for accommodation table
        var headers = ["Team Name", "Number of Boys", "Number of Girls", "Paid"];
        var data = [];

        // Push headers to the data array
        data.push(headers);

        // Push table rows to the data array for accommodation table
        $("#accommodationTableBody tr").each(function () {
            var row = [];
            $(this).find("td").each(function () {
                row.push($(this).text());
            });
            data.push(row);
        });

        // Define table title for accommodation table
        var title = "ALL ACCOMMODATION REPORTS";

        // Add border to PDF outline
        doc.rect(5, 5, doc.internal.pageSize.width - 10, doc.internal.pageSize.height - 10);

        // Add table title for accommodation table
        doc.text(title, 14, 20);

        // Add table data to the PDF document for accommodation table
        doc.autoTable({
            head: [headers],
            body: data.slice(1), // Exclude headers row
            margin: { top: 30 }, // Adjust margin to accommodate the title
            theme: 'grid', // Add grid theme for borders
            styles: { lineColor: [0, 0, 0] }, // Set border color of content cells to black
            headStyles: { fillColor: [0, 0, 0], textColor: [255, 255, 255], lineColor: [255, 255, 255] }, // Set header background color to black, text color to white, and border color to white
            alternateRowStyles: { fillColor: [255, 255, 255] } // Set alternating row background color to white
        });

        // Save the PDF document for accommodation table
        doc.save("all_accommodation_report.pdf");
    });
});
