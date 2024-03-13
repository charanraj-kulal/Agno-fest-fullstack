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
  //enroll
  function validateNumericInput(inputElement) {
    inputElement.value = inputElement.value.replace(/\D/g, "");
  }

  // sidebar section end

  // accomodation
  //ACCOMMODATION
  const chkAccomodation = document.getElementById("cbx");
  const num_boys = document.getElementById("no-b");
  const num_girls = document.getElementById("no-g");
  // const accBtn = document.getElementById('accomodation-btn');

  /* Accomodation toggle */
  function toggleAccNumsDiv() {
    var accNumsDiv = document.querySelector(".acc-nums-div");
    if (chkAccomodation.checked) {
      accNumsDiv.classList.add("show");
    } else {
      accNumsDiv.classList.remove("show");
      num_boys.value = 0;
      num_girls.value = 0;
      updateAccomodation(0, 0);
    }
  }

  function uploadAccommo() {
    if (chkAccomodation.checked) {
      openAlert(
        "Details Updated! Contact officials for details about Accommodation!"
      );
      const totalCount = parseInt(num_boys.value) + parseInt(num_girls.value);

      if (num_boys.value === "") {
        openAlert("Specify number of Men! (0-if none)");
      } else if (num_girls.value === "") {
        openAlert("Specify number of Women! (0-if none)");
      } else if (num_boys.value == 0 && num_girls.value == 0) {
        openAlert("Please specify proper counts!");
      } else if (totalCount > 15) {
        openAlert("Please specify proper counts!");
      } else if (
        num_boys.value < 0 ||
        num_boys.value > 15 ||
        num_girls.value < 0 ||
        num_girls.value > 15 ||
        totalCount <= 0
      ) {
        openAlert("Please specify proper counts!");
      } else {
        updateAccomodation(num_boys.value, num_girls.value);
      }
    } else {
      openAlert("Accommodation is not required!");
    }
  }

  const getAccommodationData = async () => {
    try {
      const res = await fetch(`${API_URL}/team/${teamId}`);
      const data = await res.json();
      if (data.accommodation) {
        if (
          data.accommodation.countOfBoys > 0 ||
          data.accommodation.countOfGirls > 0
        ) {
          chkAccomodation.checked = true;
          toggleAccNumsDiv();
          num_boys.value = data.accommodation.countOfBoys;
          num_girls.value = data.accommodation.countOfGirls;
        }
      }
    } catch (err) {
      console.error(err);
    }
  };
  getAccommodationData();

  const updateAccomodation = async (countOfBoys, countOfGirls) => {
    if (!teamId) {
      console.error("Team ID is missing.");
      return;
    }

    const accommodationData = {
      accommodation: {
        countOfBoys: countOfBoys,
        countOfGirls: countOfGirls,
      },
    };
    try {
      const res = await fetch(`${API_URL}/team/${teamId}`, {
        method: "PUT",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify(accommodationData),
      });
      const data = await res.json();
      // console.log(data.accommodation);
    } catch (err) {
      console.error(err);
    }
  };

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
});
