(function ($) {
  "use strict";

  /*==================================================================
    [ Focus input ]*/
  $(".input100").each(function () {
    $(this).on("blur", function () {
      if ($(this).val().trim() != "") {
        $(this).addClass("has-val");
      } else {
        $(this).removeClass("has-val");
      }
    });
  });

  /*==================================================================
    [ Validate ]*/
  var input = $(".validate-input .input100");

  $(".validate-form").on("submit", function (e) {
    e.preventDefault(); // Prevent form submission

    var check = true;

    // Validate each input field
    for (var i = 0; i < input.length; i++) {
      if (!validate(input[i])) {
        showValidate(input[i]);
        check = false;
      }
    }

    // If form is valid and not empty, proceed with AJAX submission
    if (check && !isFormEmpty()) {
      submitRegForm($(this));
    }
  });

  $(".validate-form .input100").each(function () {
    $(this).focus(function () {
      hideValidate(this);
    });
  });

  function validate(input) {
    if ($(input).attr("type") == "email" || $(input).attr("name") == "email") {
      return (
        $(input)
          .val()
          .trim()
          .match(
            /^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/
          ) != null
      );
    } else {
      return $(input).val().trim() != "";
    }
  }

  function showValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).addClass("alert-validate");
  }

  function hideValidate(input) {
    var thisAlert = $(input).parent();
    $(thisAlert).removeClass("alert-validate");
  }

  // AJAX form submission
  function submitRegForm(form) {
    $.ajax({
      url: form.attr("action"),
      type: "POST",
      data: form.serialize(),
      dataType: "json",
      success: function (response) {
        if (response.success) {
          showAlert(response.message, true);
          // Redirect to login page after a delay
          setTimeout(function () {
            window.location.href = "/verify-email";
          }, 3000); // 3 seconds delay
        } else {
          showAlert(response.message, false);
        }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        showAlert("An error occurred while processing your request.", false);
      },
    });
  }

  // Check if form is empty
  function isFormEmpty() {
    var empty = true;
    input.each(function () {
      if ($(this).val().trim() !== "") {
        empty = false;
        return false; // Exit the loop early
      }
    });
    return empty;
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

    alertClose.click(function () {
      alertBox.hide(); // Hide the alert box when close button is clicked
    });
  }

  /*==================================================================
    [ Show pass ]*/
  var showPass = 0;
  $(".btn-show-pass").on("click", function () {
    if (showPass == 0) {
      $(this).next("input").attr("type", "text");
      $(this).find("i").removeClass("zmdi-eye");
      $(this).find("i").addClass("zmdi-eye-off");
      showPass = 1;
    } else {
      $(this).next("input").attr("type", "password");
      $(this).find("i").addClass("zmdi-eye");
      $(this).find("i").removeClass("zmdi-eye-off");
      showPass = 0;
    }
  });
})(jQuery);

// venilla js
// (function () {
//   "use strict";

//   /*==================================================================
//     [ Focus input ]*/
//   var inputs = document.querySelectorAll(".input100");
//   inputs.forEach(function (input) {
//     input.addEventListener("blur", function () {
//       if (this.value.trim() !== "") {
//         this.classList.add("has-val");
//       } else {
//         this.classList.remove("has-val");
//       }
//     });
//   });

//   /*==================================================================
//     [ Validate ]*/
//   var validateForms = document.querySelectorAll(".validate-form");
//   validateForms.forEach(function (form) {
//     form.addEventListener("submit", function (event) {
//       var inputs = this.querySelectorAll(".input100");
//       var check = true;
//       inputs.forEach(function (input) {
//         if (!validate(input)) {
//           showValidate(input);
//           check = false;
//         }
//       });
//       if (!check) {
//         event.preventDefault();
//         // } else {
//         //   // Validation succeeded, redirect to the desired page
//         //   window.location.href = '<?= site_url("login/authenticate") ?>';
//         // }
//       }
//     });
//   });

//   var inputFields = document.querySelectorAll(".validate-form .input100");
//   inputFields.forEach(function (input) {
//     input.addEventListener("focus", function () {
//       hideValidate(this);
//     });
//   });

//   function validate(input) {
//     if (
//       input.getAttribute("type") === "email" ||
//       input.getAttribute("name") === "email"
//     ) {
//       if (
//         !/^[a-zA-Z0-9_\-\.]+@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/.test(
//           input.value.trim()
//         )
//       ) {
//         return false;
//       }
//     } else {
//       if (input.value.trim() === "") {
//         return false;
//       }
//     }
//     return true;
//   }

//   function showValidate(input) {
//     var thisAlert = input.parentElement;
//     thisAlert.classList.add("alert-validate");
//   }

//   function hideValidate(input) {
//     var thisAlert = input.parentElement;
//     thisAlert.classList.remove("alert-validate");
//   }

//   /*==================================================================
//     [ Show pass ]*/
//   var showPass = 0;
//   var showPassButtons = document.querySelectorAll(".btn-show-pass");
//   showPassButtons.forEach(function (button) {
//     button.addEventListener("click", function () {
//       var inputField = this.nextElementSibling;
//       if (showPass === 0) {
//         inputField.setAttribute("type", "text");
//         this.querySelector("i").classList.remove("zmdi-eye");
//         this.querySelector("i").classList.add("zmdi-eye-off");
//         showPass = 1;
//       } else {
//         inputField.setAttribute("type", "password");
//         this.querySelector("i").classList.add("zmdi-eye");
//         this.querySelector("i").classList.remove("zmdi-eye-off");
//         showPass = 0;
//       }
//     });
//   });
// })();
