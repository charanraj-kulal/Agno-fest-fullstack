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
      // Show Pace loader
      Pace.restart();

      // Disable submit button to prevent multiple submissions
      $(this).find(".login100-form-btn").prop("disabled", true);

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
    } else if ($(input).attr("name") == "password") {
      return $(input).val().trim().length >= 8; // Minimum length check
    } else if ($(input).attr("name") == "phone_number") {
      return (
        $(input)
          .val()
          .trim()
          .match(/^\d{10}$/) != null
      ); // Exactly 10 numbers check for phone number
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
      complete: function () {
        // Hide Pace loader after AJAX request is complete
        Pace.stop();

        // Enable submit button
        form.find(".login100-form-btn").prop("disabled", false);
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
  }
  $(document).on("click", "#closeAlert", function () {
    $(".info").hide();
    $(".info").removeClass("show-flex"); // Hide the alert box when close button is clicked
  });

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
