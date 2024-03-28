$(function () {
  "use strict";

  //sidebar menu js
  $.sidebarMenu($(".sidebar-menu"));

  // === toggle-menu js
  $(".toggle-menu").on("click", function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });

  // === sidebar menu activation js

  // $(function () {
  //   for (
  //     var i = window.location,
  //       o = $(".sidebar-menu a")
  //         .filter(function () {
  //           return this.href == i;
  //         })
  //         .addClass("active")
  //         .parent()
  //         .addClass("active");
  //     ;

  //   ) {
  //     if (!o.is("li")) break;
  //     o = o.parent().addClass("in").parent().addClass("active");
  //   }
  // });
  function handleClick(event, navId) {
    // Add your existing logic here

    // Remove the 'active' class from all nav items
    $(".sidebar-menu a").removeClass("active");
    // Add the 'active' class to the clicked nav item
    $("#" + navId).addClass("active");
  }

  // Attach click event handlers to each navigation item
  $("#enroll-nav").click(function (event) {
    handleClick(event, "enroll-nav");
  });

  $("#manage_user_nav").click(function (event) {
    handleClick(event, "manage_user_nav");
  });

  $("#accomodation_nav").click(function (event) {
    handleClick(event, "accomodation_nav");
  });

  $("#rules_nav").click(function (event) {
    handleClick(event, "rules_nav");
  });

  /* Top Header */

  $(document).ready(function () {
    var navbar = $(".topbar-nav .navbar"); // Corrected selector

    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 60) {
        navbar.addClass("shadow-black");
      } else {
        navbar.removeClass("shadow-black");
      }
    });
  });

  /* Back To Top */

  $(document).ready(function () {
    $(window).on("scroll", function () {
      if ($(this).scrollTop() > 300) {
        $(".back-to-top").fadeIn();
      } else {
        $(".back-to-top").fadeOut();
      }
    });

    $(".back-to-top").on("click", function () {
      $("html, body").animate({ scrollTop: 0 }, 600);
      return false;
    });

    // Call fetchUsers() when the page loads
    fetchUsers();
    // call deleteUser to delete user
    $(document).on("click", ".delete-user-btn", function () {
      var userId = $(this).data("user-id");
      deleteUser(userId);
    });

    //show data in modal
    $(document).on("click", ".edit-user-btn", function () {
      var userId = $(this).data("user-id");

      // Fetch user data by userId via AJAX and populate the modal
      fetchUserDetails(userId);
    });
    $(document).on("click", "#updateUser", function () {
      // Fetch user data by userId via AJAX and populate the modal
      updateUserDetails();
    });
  });
  var userIdToUpdate;
  //update user
  // AJAX function to update user details
  function updateUserDetails() {
    // Get the updated user details from the form
    var name = $("#editUserName").val();
    var collegeName = $("#editCollegeName").val();
    var email = $("#editEmail").val();
    var userType = $("#editUserRole").val();

    // Send AJAX request to update user details
    $.ajax({
      url: "/admin/updateUser/" + userIdToUpdate,
      type: "POST",
      dataType: "json",
      data: {
        id: userIdToUpdate,
        name: name,
        college_name: collegeName,
        email: email,
        user_type: userType,
      },
      success: function (response) {
        if (response.success) {
          // If update successful, reload user data

          showAlert(response.message, true);
          fetchUsers();
          // Close the dialog box
          $("#dialog_state").prop("checked", false);
        } else {
          // Handle error
          showAlert(response.message, false);
        }
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error(error);
      },
    });
  }

  //fetch user details of user
  function fetchUserDetails(userId) {
    $.ajax({
      url: "/admin/getUserDetails/" + userId, // Assuming you have a route for fetching user details by ID
      type: "POST",
      dataType: "json",
      data: {
        "user-id": userId,
      },
      success: function (response) {
        if (response.users) {
          var user = response.users;
          userIdToUpdate = user.id; // Assuming user data is returned directly
          // Populate modal with user details
          $("#editUserName").val(user["name"]);
          $("#editCollegeName").val(user["college_name"]);
          $("#editEmail").val(user["email"]);
          $("#editUserRole").val(user["user_type"]);
          // Show the dialog
          // $("#dialog_state").prop("checked", true);
        } else {
          console.error("No user data found.");
        }
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error(error);
      },
    });
  }
  //delete user function
  function deleteUser(userId) {
    $.ajax({
      url: "/admin/deleteUser/" + userId,
      type: "GET",
      success: function (response) {
        if (response.success) {
          // Handle success response
          showAlert(response.message, true);
          // Redirect to dashboard page after a delay
          setTimeout(function () {
            fetchUsers();
          }, 1000); // 1 seconds delay
        } else {
          showAlert(response.message, false);
        }

        // Reload the table after successful deletion
      },
      error: function (xhr, status, error) {
        // Handle error
        console.error(error);
      },
    });
  }
  // Function to fetch users and populate the table
  function fetchUsers() {
    $.ajax({
      url: "/admin/getusers", // Route to the controller method
      type: "GET",
      dataType: "json",
      success: function (response) {
        if (response.users && response.users.length > 0) {
          // Clear existing table rows
          $("#userTable tbody").empty();
          // Iterate over each user and append a new row to the table
          $.each(response.users, function (index, user) {
            // Check if college_name property exists in user object
            if (user.hasOwnProperty("college_name")) {
              var userType = user.user_type == 2 ? "Admin" : "Student";
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
                userType +
                "</td>" +
                "<td>" +
                '<label class="btn btn-light edit-user-btn" for="dialog_state"  data-user-id="' +
                user.id +
                '"><i class="fas fa-edit"></i></label>' +
                '<span style="margin: 0 8px;"></span>' + //space
                '<button class="btn btn-light delete-user-btn" data-user-id="' +
                user.id +
                '"><i class="fas fa-trash-alt"></i></button>' +
                "</td>" +
                "</tr>";
              $("#userTable tbody").append(newRow);
            }
          });
        } else {
          // If no users are returned, display a message
          $("#userTable tbody").html(
            '<tr><td colspan="4">No data available</td></tr>'
          );
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
      },
    });
  }

  function showAlert(message, isSuccess) {
    var alertBox = $(".info");
    var alertTitle = $("#alert-title");
    var alertClose = $("#closeAlert");

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
  // theme setting
  $(".switcher-icon").on("click", function (e) {
    e.preventDefault();
    $(".right-sidebar").toggleClass("right-toggled");
  });

  $("#theme1").click(theme6);
  $("#theme2").click(theme2);
  $("#theme3").click(theme3);
  $("#theme4").click(theme4);
  $("#theme5").click(theme5);
  $("#theme6").click(theme1);
  $("#theme7").click(theme7);
  $("#theme8").click(theme8);
  $("#theme9").click(theme9);
  $("#theme10").click(theme10);
  $("#theme11").click(theme11);
  $("#theme12").click(theme12);
  $("#theme13").click(theme13);
  $("#theme14").click(theme14);
  $("#theme15").click(theme15);

  function theme6() {
    $("body").attr("class", "bg-theme bg-theme6");
  }

  function theme2() {
    $("body").attr("class", "bg-theme bg-theme2");
  }

  function theme3() {
    $("body").attr("class", "bg-theme bg-theme3");
  }

  function theme4() {
    $("body").attr("class", "bg-theme bg-theme4");
  }

  function theme5() {
    $("body").attr("class", "bg-theme bg-theme5");
  }

  function theme1() {
    $("body").attr("class", "bg-theme bg-theme1");
  }

  function theme7() {
    $("body").attr("class", "bg-theme bg-theme7");
  }

  function theme8() {
    $("body").attr("class", "bg-theme bg-theme8");
  }

  function theme9() {
    $("body").attr("class", "bg-theme bg-theme9");
  }

  function theme10() {
    $("body").attr("class", "bg-theme bg-theme10");
  }

  function theme11() {
    $("body").attr("class", "bg-theme bg-theme11");
  }

  function theme12() {
    $("body").attr("class", "bg-theme bg-theme12");
  }

  function theme13() {
    $("body").attr("class", "bg-theme bg-theme13");
  }

  function theme14() {
    $("body").attr("class", "bg-theme bg-theme14");
  }

  function theme15() {
    $("body").attr("class", "bg-theme bg-theme15");
  }

  // sidebar sections
  const navLinks = document.querySelector(".left-fixed-nav");
  const manuIcon = document.querySelector(".menu-icon");
  const overlay = document.querySelector(".overlay");

  const enrollSec = document.querySelector("#enroll-section-id");
  const manageuserSec = document.querySelector("#manageuser-section-id");
  const accomodationSec = document.querySelector("#accomodation-section-id");
  const rulesSec = document.querySelector("#rules-section-id");
  const settingSec = document.querySelector("#settings-section-id");
  const contactSec = document.querySelector("#contactus-section-id");

  const enrollBtn = document.querySelector("#enroll-nav");
  const manageuserBtn = document.querySelector("#manage_user_nav");
  const accomodationBtn = document.querySelector("#accomodation_nav");
  const rulesBtn = document.querySelector("#rules_nav");
  const settingBtn = document.querySelector("#settings-nav");
  const contactBtn = document.querySelector("#contactus-nav");

  const showSection = (section) => {
    const sections = [
      enrollSec,
      manageuserSec,
      accomodationSec,
      rulesSec,
      settingSec,
      contactSec,
    ];

    sections.forEach((sec) => {
      if (sec) {
        sec.classList.add("hide");
      }
    });

    if (section) {
      section.classList.remove("hide");
    }
  };

  const hideHambergerMenu = () => {
    navLinks.classList.toggle("show");
    manuIcon.checked = false;
    overlay.classList.toggle("hide");
  };

  enrollBtn.onclick = () => {
    showSection(enrollSec);
    hideHambergerMenu();
  };

  manageuserBtn.onclick = () => {
    showSection(manageuserSec);
    hideHambergerMenu();
  };

  accomodationBtn.onclick = () => {
    showSection(accomodationSec);
    hideHambergerMenu();
  };

  rulesBtn.onclick = () => {
    showSection(rulesSec);
    hideHambergerMenu();
  };

  settingBtn.onclick = () => {
    showSection(settingSec);
    hideHambergerMenu();
  };

  contactBtn.onclick = () => {
    showSection(contactSec);
    hideHambergerMenu();
  };

  // update user
});
