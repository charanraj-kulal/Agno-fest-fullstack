// fetching data from enroll section
// declaring variables
// const enrollbtn = document.getElementById("enroll-save-btn");
$(document).ready(function () {
  // coding
  const codingMem1 = document.getElementById("coding-mem1");
  const codingMemCon1 = document.getElementById("coding-mem1-con1");
  const codingMem1err = document.getElementById("coding-tmem1-err");
  const codingMemCon1err = document.getElementById("coding-con1-err");

  const codingMem2 = document.getElementById("coding-mem2");
  const codingMemCon2 = document.getElementById("coding-mem2-con2");
  const codingMem2err = document.getElementById("coding-tmem2-err");
  const codingMemCon2err = document.getElementById("coding-con2-err");

  // gaming
  const gamingMem1 = document.getElementById("gaming-mem1");
  const gamingMemCon1 = document.getElementById("gaming-mem1-con1");
  const gameMem1err = document.getElementById("gaming-tmem1-err");
  const gameMemCon1err = document.getElementById("gaming-con1-err");

  const gamingMem2 = document.getElementById("gaming-mem2");
  const gamingMemCon2 = document.getElementById("gaming-mem2-con2");
  const gameMem2err = document.getElementById("gaming-tmem2-err");
  const gameMemCon2err = document.getElementById("gaming-con2-err");

  const gamingMem3 = document.getElementById("gaming-mem3");
  const gamingMemCon3 = document.getElementById("gaming-mem2-con3");
  const gameMem3err = document.getElementById("gaming-tmem3-err");
  const gameMemCon3err = document.getElementById("gaming-con3-err");

  const gamingMem4 = document.getElementById("gaming-mem4");
  const gamingMemCon4 = document.getElementById("gaming-me42-con2");
  const gameMem4err = document.getElementById("gaming-tmem4-err");
  const gameMemCon4err = document.getElementById("gaming-con4-err");

  // it manager
  const itManagerMem1 = document.getElementById("it-mem1");
  const itManagerMemCon1 = document.getElementById("it-mem1-con1");
  const itManagerMem1err = document.getElementById("it-tmem1-err");
  const itManagerMemCon1err = document.getElementById("it-con1-err");

  // photography
  const photographyMem1 = document.getElementById("photo-mem1");
  const photographyMemCon1 = document.getElementById("photo-mem1-con1");
  const photoMem1err = document.getElementById("photo-tmem1-err");
  const photoMemCon1err = document.getElementById("photo-con1-err");

  // videography
  const videoMem1 = document.getElementById("video-mem1");
  const videoMemCon1 = document.getElementById("video-mem1-con1");
  const videoMem1err = document.getElementById("video-tmem1-err");
  const videoMemCon1err = document.getElementById("video-con1-err");

  const videoMem2 = document.getElementById("video-mem2");
  const videoMemCon2 = document.getElementById("video-mem2-con2");
  const videoMem2err = document.getElementById("video-tmem2-err");
  const videoMemCon2err = document.getElementById("video-con2-err");

  // quiz
  const quizMem1 = document.getElementById("quiz-mem1");
  const quizMemCon1 = document.getElementById("quiz-mem1-con1");
  const quizMem1err = document.getElementById("quiz-tmem1-err");
  const quizMemCon1err = document.getElementById("quiz-con1-err");

  const quizMem2 = document.getElementById("quiz-mem2");
  const quizMemCon2 = document.getElementById("quiz-mem2-con2");
  const quizMem2err = document.getElementById("quiz-tmem2-err");
  const quizMemCon2err = document.getElementById("quiz-con2-err");

  // web desinging
  const webMem1 = document.getElementById("web-mem1");
  const webMemCon1 = document.getElementById("web-mem1-con1");
  const webMem1err = document.getElementById("web-tmem1-err");
  const webMemCon1err = document.getElementById("web-con1-err");

  const webMem2 = document.getElementById("web-mem2");
  const webMemCon2 = document.getElementById("web-mem2-con2");
  const webMem2err = document.getElementById("web-tmem2-err");
  const webMemCon2err = document.getElementById("web-con2-err");

  // treasure hunt
  const treasureMem1 = document.getElementById("hunt-mem1");
  const treasureMemCon1 = document.getElementById("hunt-mem1-con1");
  const treasureMem1err = document.getElementById("hunt-tmem1-err");
  const treasureMemCon1err = document.getElementById("hunt-con1-err");

  const treasureMem2 = document.getElementById("hunt-mem2");
  const treasureMemCon2 = document.getElementById("hunt-mem2-con2");
  const treasureMem2err = document.getElementById("hunt-tmem2-err");
  const treasureMemCon2err = document.getElementById("hunt-con2-err");

  class EventData {
    constructor(data) {
      this.data = data || {};
    }

    static repeatObject(object, size) {
      return Array.from({ length: size }, () => ({ ...object }));
    }

    getITManager() {
      return this.data.events && this.data.events.itManager
        ? this.data.events.itManager
        : { name: "N/A", phone: "N/A" };
    }

    getPhotography() {
      return this.data.events && this.data.events.photography
        ? this.data.events.photography
        : { name: "N/A", phone: "N/A" };
    }

    getProductLaunch() {
      return this.data.events && this.data.events.productLaunch
        ? this.data.events.productLaunch
        : { name: "N/A", phone: "N/A" };
    }

    getDesigning() {
      return this.data.events && this.data.events.designing
        ? this.data.events.designing
        : { name: "N/A", phone: "N/A" };
    }

    getCoding() {
      return this.data.events &&
        this.data.events.coding &&
        this.data.events.coding.length == 2
        ? this.data.events.coding
        : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
    }

    getWeb() {
      return this.data.events &&
        this.data.events.web &&
        this.data.events.web.length == 2
        ? this.data.events.web
        : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
    }

    getQuiz() {
      return this.data.events &&
        this.data.events.quiz &&
        this.data.events.quiz.length == 2
        ? this.data.events.quiz
        : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
    }

    getGaming() {
      return this.data.events &&
        this.data.events.gaming &&
        this.data.events.gaming.length == 2
        ? this.data.events.gaming
        : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
    }

    getTreasure() {
      return this.data.events &&
        this.data.events.treasure &&
        this.data.events.treasure.length == 2
        ? this.data.events.treasure
        : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
    }
  }

  // Function to gather form data
  function getFormData() {
    var formData = {};
    $("#eventForm")
      .find("input, select, textarea")
      .each(function (index, element) {
        var fieldName = $(element).attr("name");
        var fieldValue = $(element).val();
        formData[fieldName] = fieldValue;
      });

    return formData;
  }

  //payment integration
  function initiateRazorpayPayment() {
    $.ajax({
      url: "/razorpay/initiate",
      type: "POST",
      dataType: "json",
      success: function (response) {
        var options = response;
        options.handler = function (response) {
          verifyPayment(response);
        };
        var rzp = new Razorpay(options);
        rzp.open();
      },
      error: function (xhr, status, error) {
        console.error(error);
        alert("Failed to initiate payment. Please try again.");
      },
    });
  }

  function verifyPayment(response) {
    $.ajax({
      url: "/razorpay/verify",
      type: "POST",
      data: response,
      success: function (result) {
        if (result.success) {
          alert(result.message);
          // Redirect or update UI as needed
        } else {
          alert("Payment verification failed: " + result.message);
        }
      },
      error: function (xhr, status, error) {
        console.error(error);
        alert("Payment verification failed. Please contact support.");
      },
    });
  }

  // Event listener for form submission
  // $("#enroll-save-btn").click(function (e) {
  //   e.preventDefault(); // Prevent the default form submission

  //   // Get form data
  //   var formData = getFormData();

  //   // Perform validation
  //   if (checkValidation(formData)) {
  //     // Perform AJAX request
  //     submitEnrollForm(formData);
  //   }
  // });

  $("#enroll-save-btn").click(function (e) {
    e.preventDefault();
    var formData = getFormData();
    if (checkValidation(formData)) {
      initiateRazorpayPayment();
    }
  });

  // Function to submit the enroll form via AJAX
  function submitEnrollForm(formData) {
    console.log(formData);

    var url = "admin/event-register"; // Relative endpoint
    $.ajax({
      url: url, // URL to your controller method
      type: "POST",
      dataType: "json",
      data: formData,
      success: function (response) {
        // Handle success response here
        if (response.success) {
          showAlert(response.message, true);
          setTimeout(function () {
            fetchData();
          }, 1000); // 1 seconds delay// Show success message
        } else {
          showAlert(response.message, false); // Show error message
        }
      },
      error: function (xhr, status, error) {
        console.log("XHR object:", xhr);
        console.log("Status:", status);
        console.log("Error:", error);
        // Show error alert
        showAlert("An error occurred while processing your request.", false);
      },
    });
  }

  function checkValidation() {
    //If nothing is entered
    if (
      (codingMem1.value === "" || codingMem1.value === "N/A") &&
      (codingMem2.value === "" || codingMem2.value === "N/A") &&
      (codingMemCon1.value === "" || codingMemCon1.value === "N/A") &&
      (codingMemCon2.value === "" || codingMemCon2.value === "N/A") &&
      (webMem1.value === "" || webMem1.value === "N/A") &&
      (webMem2.value === "" || webMem2.value === "N/A") &&
      (webMemCon1.value === "" || webMemCon1.value === "N/A") &&
      (webMemCon2.value === "" || webMemCon2.value === "N/A") &&
      (quizMem1.value === "" || quizMem1.value === "N/A") &&
      (quizMem2.value === "" || quizMem2.value === "N/A") &&
      (quizMemCon1.value === "" || quizMemCon1.value === "N/A") &&
      (quizMemCon2.value === "" || quizMemCon2.value === "N/A") &&
      // (danceMem1.value === "" || danceMem1.value === "N/A") &&
      // (danceMemCon1.value === "" || danceMemCon1.value === "N/A") &&
      // (danceMem2.value === "" || danceMem2.value === "N/A") &&
      // (danceMemCon2.value === "" || danceMemCon2.value === "N/A") &&
      // (danceMem3.value === "" || danceMem3.value === "N/A") &&
      // (danceMemCon3.value === "" || danceMemCon3.value === "N/A") &&
      // (danceMem4.value === "" || danceMem4.value === "N/A") &&
      // (danceMemCon4.value === "" || danceMemCon4.value === "N/A") &&
      // (danceMem5.value === "" || danceMem5.value === "N/A") &&
      // (danceMemCon5.value === "" || danceMemCon5.value === "N/A") &&
      // (danceMem6.value === "" || danceMem6.value === "N/A") &&
      // (danceMemCon6.value === "" || danceMemCon6.value === "N/A") &&
      // (danceMem7.value === "" || danceMem7.value === "N/A") &&
      // (danceMemCon7.value === "" || danceMemCon7.value === "N/A") &&
      (photographyMem1.value === "" || photographyMem1.value === "N/A") &&
      (photographyMemCon1.value === "" || photographyMemCon1.value === "N/A") &&
      (gamingMem1.value === "" || gamingMem1.value === "N/A") &&
      (gamingMem2.value === "" || gamingMem2.value === "N/A") &&
      (gamingMemCon1.value === "" || gamingMemCon1.value === "N/A") &&
      (gamingMemCon2.value === "" || gamingMemCon2.value === "N/A") &&
      (treasureMem1.value === "" || treasureMem1.value === "N/A") &&
      (treasureMem2.value === "" || treasureMem2.value === "N/A") &&
      (treasureMemCon1.value === "" || treasureMemCon1.value === "N/A") &&
      (treasureMemCon2.value === "" || treasureMemCon2.value === "N/A") &&
      // (productMem1.value === "" || productMem1.value === "N/A") &&
      // (productMemCon1.value === "" || productMemCon1.value === "N/A") &&
      (itManagerMem1.value === "" || itManagerMem1.value === "N/A") &&
      (itManagerMemCon1.value === "" || itManagerMemCon1.value === "N/A") &&
      (videoMem1.value === "" || itManagerMem1.value === "N/A") &&
      (videoMemCon1.value === "" || itManagerMemCon1.value === "N/A") &&
      (videoMem2.value === "" || itManagerMem1.value === "N/A") &&
      (videoMemCon2.value === "" || itManagerMemCon1.value === "N/A")
      // (designingMem1.value === "" || designingMem1.value === "N/A") &&
      // (designingMemCon1.value === "" || designingMemCon1.value === "N/A")
    ) {
      showAlert("Please fill atleast one event details!", false);
      return false;
    }

    // To remove existing "displayErr" classes
    const errorElements = document.querySelectorAll(".displayErr");
    errorElements.forEach((element) => {
      element.classList.remove("displayErr");
    });

    function showAlert(message, isSuccess) {
      var alertBox = $(".info");
      var alertTitle = $("#alert-title");

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

    // Coding
    if (
      (codingMem1.value === "" || codingMem1.value === "N/A") &&
      (codingMem2.value === "" || codingMem2.value === "N/A") &&
      (codingMemCon1.value === "" || codingMemCon1.value === "N/A") &&
      (codingMemCon2.value === "" || codingMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (codingMem1.value === "" || codingMem1.value === "N/A") {
        codingMem1err.classList.add("displayErr");
        scrollToElement(codingMem1);
        return false;
      }
      if (
        codingMemCon1.value === "" ||
        codingMemCon1.value === "N/A" ||
        codingMemCon1.value.length < 10
      ) {
        codingMemCon1err.classList.add("displayErr");
        scrollToElement(codingMem1);
        return false;
      }
      if (codingMem2.value === "" || codingMem2.value === "N/A") {
        codingMem2err.classList.add("displayErr");
        scrollToElement(codingMem2);
        return false;
      }
      if (
        codingMemCon2.value === "" ||
        codingMemCon2.value === "N/A" ||
        codingMemCon2.value.length < 10
      ) {
        codingMemCon2err.classList.add("displayErr");
        scrollToElement(codingMem2);
        return false;
      }
    }

    //Web Designing
    if (
      (webMem1.value === "" || webMem1.value === "N/A") &&
      (webMem2.value === "" || webMem2.value === "N/A") &&
      (webMemCon1.value === "" || webMemCon1.value === "N/A") &&
      (webMemCon2.value === "" || webMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (webMem1.value === "" || webMem1.value === "N/A") {
        webMem1err.classList.add("displayErr");
        scrollToElement(webMem1);
        return false;
      }
      if (
        webMemCon1.value === "" ||
        webMemCon1.value === "N/A" ||
        webMemCon1.value.length < 10
      ) {
        webMemCon1err.classList.add("displayErr");
        scrollToElement(webMem1);
        return false;
      }
      if (webMem2.value === "" || webMem2.value === "N/A") {
        webMem2err.classList.add("displayErr");
        scrollToElement(webMem2);
        return false;
      }
      if (
        webMemCon2.value === "" ||
        webMemCon2.value === "N/A" ||
        webMemCon2.value.length < 10
      ) {
        webMemCon2err.classList.add("displayErr");
        scrollToElement(webMem2);
        return false;
      }
    }

    //IT Quiz
    if (
      (quizMem1.value === "" || quizMem1.value === "N/A") &&
      (quizMem2.value === "" || quizMem2.value === "N/A") &&
      (quizMemCon1.value === "" || quizMemCon1.value === "N/A") &&
      (quizMemCon2.value === "" || quizMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (quizMem1.value === "" || quizMem1.value === "N/A") {
        quizMem1err.classList.add("displayErr");
        scrollToElement(quizMem1);
        return false;
      }
      if (
        quizMemCon1.value === "" ||
        quizMemCon1.value === "N/A" ||
        quizMemCon1.value.length < 10
      ) {
        quizMemCon1err.classList.add("displayErr");
        scrollToElement(quizMem1);
        return false;
      }
      if (quizMem2.value === "" || quizMem2.value === "N/A") {
        quizMem2err.classList.add("displayErr");
        scrollToElement(quizMem2);
        return false;
      }
      if (
        quizMemCon2.value === "" ||
        quizMemCon2.value === "N/A" ||
        quizMemCon2.value.length < 10
      ) {
        quizMemCon2err.classList.add("displayErr");
        scrollToElement(quizMem2);
        return false;
      }
    }

    //Photography
    if (
      (photographyMem1.value === "" || photographyMem1.value === "N/A") &&
      (photographyMemCon1.value === "" || photographyMemCon1.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (photographyMem1.value === "" || photographyMem1.value === "N/A") {
        photoMem1err.classList.add("displayErr");
        scrollToElement(photographyMem1);
        return false;
      }
      if (
        photographyMemCon1.value === "" ||
        photographyMemCon1.value === "N/A" ||
        photographyMemCon1.value.length < 10
      ) {
        photoMemCon1err.classList.add("displayErr");
        scrollToElement(photographyMem1);
        return false;
      }
    }

    //Gaming
    if (
      (gamingMem1.value === "" || gamingMem1.value === "N/A") &&
      (gamingMem2.value === "" || gamingMem2.value === "N/A") &&
      (gamingMemCon1.value === "" || gamingMemCon1.value === "N/A") &&
      (gamingMemCon2.value === "" || gamingMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (gamingMem1.value === "" || gamingMem1.value === "N/A") {
        gameMem1err.classList.add("displayErr");
        scrollToElement(gamingMem1);
        return false;
      }
      if (
        gamingMemCon1.value === "" ||
        gamingMemCon1.value === "N/A" ||
        gamingMemCon1.value.length < 10
      ) {
        gameMemCon1err.classList.add("displayErr");
        scrollToElement(gamingMem1);
        return false;
      }
      if (gamingMem2.value === "" || gamingMem2.value === "N/A") {
        gameMem2err.classList.add("displayErr");
        scrollToElement(gamingMem2);
        return false;
      }
      if (
        gamingMemCon2.value === "" ||
        gamingMemCon2.value === "N/A" ||
        gamingMemCon2.value.length < 10
      ) {
        gameMemCon2err.classList.add("displayErr");
        scrollToElement(gamingMem2);
        return false;
      }
    }

    //Treasure Hunt
    if (
      (treasureMem1.value === "" || treasureMem1.value === "N/A") &&
      (treasureMem2.value === "" || treasureMem2.value === "N/A") &&
      (treasureMemCon1.value === "" || treasureMemCon1.value === "N/A") &&
      (treasureMemCon2.value === "" || treasureMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (treasureMem1.value === "" || treasureMem1.value === "N/A") {
        treasureMem1err.classList.add("displayErr");
        scrollToElement(treasureMem1);
        return false;
      }
      if (
        treasureMemCon1.value === "" ||
        treasureMemCon1.value === "N/A" ||
        treasureMemCon1.value.length < 10
      ) {
        treasureMemCon1err.classList.add("displayErr");
        scrollToElement(treasureMem1);
        return false;
      }
      if (treasureMem2.value === "" || treasureMem2.value === "N/A") {
        treasureMem2err.classList.add("displayErr");
        scrollToElement(treasureMem1);
        return false;
      }
      if (
        treasureMemCon2.value === "" ||
        treasureMemCon2.value === "N/A" ||
        treasureMemCon2.value.length < 10
      ) {
        treasureMemCon2err.classList.add("displayErr");
        scrollToElement(treasureMem1);
        return false;
      }
    }

    //Videography
    if (
      (videoMem1.value === "" || videoMem1.value === "N/A") &&
      (videoMem2.value === "" || videoMem2.value === "N/A") &&
      (videoMemCon1.value === "" || videoMemCon1.value === "N/A") &&
      (videoMemCon2.value === "" || videoMemCon2.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (videoMem1.value === "" || videoMem1.value === "N/A") {
        videoMem1err.classList.add("displayErr");
        scrollToElement(videoMem1);
        return false;
      }
      if (
        videoMemCon1.value === "" ||
        videoMemCon1.value === "N/A" ||
        videoMemCon1.value.length < 10
      ) {
        videoMemCon1err.classList.add("displayErr");
        scrollToElement(videoMem1);
        return false;
      }
      if (videoMem2.value === "" || videoMem2.value === "N/A") {
        videoMem2err.classList.add("displayErr");
        scrollToElement(videoMem1);
        return false;
      }
      if (
        videoMemCon2.value === "" ||
        videoMemCon2.value === "N/A" ||
        videoMemCon2.value.length < 10
      ) {
        videoMemCon2err.classList.add("displayErr");
        scrollToElement(videoMem1);
        return false;
      }
    }

    //IT Manager
    if (
      (itManagerMem1.value === "" || itManagerMem1.value === "N/A") &&
      (itManagerMemCon1.value === "" || itManagerMemCon1.value === "N/A")
    ) {
      // All are empty, don't return anything
    } else {
      if (itManagerMem1.value === "" || itManagerMem1.value === "N/A") {
        itManagerMem1err.classList.add("displayErr");
        scrollToElement(itManagerMem1);
        return false;
      }
      if (
        itManagerMemCon1.value === "" ||
        itManagerMemCon1.value === "N/A" ||
        itManagerMemCon1.value.length < 10
      ) {
        itManagerMemCon1err.classList.add("displayErr");
        scrollToElement(itManagerMem1);
        return false;
      }
    }

    return true;
  }

  function scrollToElement(element) {
    element.scrollIntoView({ behavior: "smooth", block: "center" });
  }

  // function to fetch the populated data

  // Perform AJAX request to fetch data
  function fetchData() {
    $.ajax({
      url: "admin/fetchData", // Update 'controller-name' with your actual controller name
      type: "GET",
      dataType: "json",
      success: function (response) {
        if (response.success) {
          // Populate text boxes with data
          var data = response.data;
          $("#coding-mem1").val(data.coding_mem_1);
          $("#coding-mem1-con1").val(data.coding_mem_contact_1);
          $("#coding-mem2").val(data.coding_mem_2);
          $("#coding-mem2-con2").val(data.coding_mem_contact_2);
          $("#gaming-mem1").val(data.game_mem_1);
          $("#gaming-mem1-con1").val(data.game_mem_contact_1);
          $("#gaming-mem2").val(data.game_mem_2);
          $("#gaming-mem2-con2").val(data.game_mem_contact_2);
          $("#gaming-mem3").val(data.game_mem_3);
          $("#gaming-mem3-con3").val(data.game_mem_contact_3);
          $("#gaming-mem4").val(data.game_mem_4);
          $("#gaming-mem4-con4").val(data.game_mem_contact_4);
          $("#it-mem1").val(data.itmanager_mem_1);
          $("#it-mem1-con1").val(data.itmanager_mem_contact_1);
          $("#photo-mem1").val(data.photo_mem_1);
          $("#photo-mem1-con1").val(data.photo_mem_contact_1);
          $("#video-mem1").val(data.video_mem_1);
          $("#video-mem1-con1").val(data.video_mem_contact_1);
          $("#video-mem2").val(data.video_mem_2);
          $("#video-mem2-con2").val(data.video_mem_contact_2);
          $("#quiz-mem1").val(data.quiz_mem_1);
          $("#quiz-mem1-con1").val(data.quiz_mem_contact_1);
          $("#quiz-mem2").val(data.quiz_mem_2);
          $("#quiz-mem2-con2").val(data.quiz_mem_contact_2);
          $("#web-mem1").val(data.web_mem_1);
          $("#web-mem1-con1").val(data.web_mem_contact_1);
          $("#web-mem2").val(data.web_mem_2);
          $("#web-mem2-con2").val(data.web_mem_contact_2);
          $("#hunt-mem1").val(data.thunt_mem_1);
          $("#hunt-mem1-con1").val(data.thunt_mem_contact_1);
          $("#hunt-mem2").val(data.thunt_mem_2);
          $("#hunt-mem2-con2").val(data.thunt_mem_contact_2);

          const isEnrolled = parseInt(data.isenrolled);
          if (isEnrolled === 1) {
            // If isenrolled is 1, set registration status to "Completed"
            $("#set-reg-status").text("Completed").css({
              color: "white",
              "text-shadow":
                "0 0 5px green, 0 0 10px green, 0 0 20px green, 0 0 30px green, 0 0 40px green, 0 0 55px green, 0 0 70px green",
              "font-weight": "bold",
            });
          } else {
            // If isenrolled is not 1, set registration status to "Not Completed"
            $("#set-reg-status").text("Not Completed").css({
              color: "red",
              "text-shadow": "0 0 15px black",
              "font-weight": "bold",
            });
          }

          // Repeat for other text boxes

          // Show success message or perform other actions if needed
        } else {
          // Show error message or perform other actions if needed
        }
      },
      error: function (xhr, status, error) {
        showAlert("An error occurred while processing your request.", false);
      },
    });
  }
  fetchData();
});
