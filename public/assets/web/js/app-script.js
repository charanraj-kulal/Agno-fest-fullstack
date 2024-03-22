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
  });

  $(function () {
    $('[data-toggle="popover"]').popover();
  });

  $(function () {
    $('[data-toggle="tooltip"]').tooltip();
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

  $(document).ready(function () {
    // Update user role
    $(document).on("click", ".update-user-btn", function () {
      var userId = $(this).data("user-id");
      var userRole = $(this).siblings(".update-user-role").val();
      updateUserRole(userId, userRole);
    });

    // Delete user
    $(document).on("click", ".delete-user-btn", function () {
      var userId = $(this).data("user-id");
      deleteUser(userId);
    });

    function updateUserRole(userId, userRole) {
      $.ajax({
        url: "<?php echo base_url('admin/updateUserRole'); ?>/" + userId,
        type: "POST",
        data: { user_id: userId, user_role: userRole },
        success: function (response) {
          // Handle success response
          console.log(response);
          updateTable(); // Update the table after successful update
        },
        error: function (xhr, status, error) {
          // Handle error
          console.error(error);
        },
      });
    }

    function deleteUser(userId) {
      $.ajax({
        url: "<?php echo base_url('admin/deleteUser'); ?>/" + userId,
        type: "GET",
        success: function (response) {
          // Handle success response
          console.log(response);
          updateTable(); // Update the table after successful delete
        },
        error: function (xhr, status, error) {
          // Handle error
          console.error(error);
        },
      });
    }

    function updateTable() {
      // Fetch updated data and update the table
      $.ajax({
        url: "<?php echo base_url('admin/fetchUsers'); ?>",
        type: "GET",
        success: function (response) {
          // Replace the existing table with the updated one
          $("#userTable").html(response);
        },
        error: function (xhr, status, error) {
          // Handle error
          console.error(error);
        },
      });
    }
  });
});
