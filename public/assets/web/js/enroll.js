// fetching data from enroll section
// declaring variables
// const enrollbtn = document.getElementById("enroll-save-btn");
// coding
const codingMem1 = document.getElementById("coding-mem1");
const codingMemCon1 = document.getElementById("coding-mem1-con1");
const codingMem1err = document.getElementById("coding-tmem1-err");
const codingMemCon1err = document.getElementById("coding-con1-err");

const codingMem2 = document.getElementById("coding-mem2");
const codingMemCon2 = document.getElementById("coding-mem2-con2");
const codingMem2err = document.getElementById("coding-tmem2-err");
const codingMemCon2err = document.getElementById("coding-con2-err");

// web desinging
const webMem1 = document.getElementById("web-mem1");
const webMemCon1 = document.getElementById("web-mem1-con1");
const webMem1err = document.getElementById("web-tmem1-err");
const webMemCon1err = document.getElementById("web-con1-err");

const webMem2 = document.getElementById("web-mem2");
const webMemCon2 = document.getElementById("web-mem2-con2");
const webMem2err = document.getElementById("web-tmem2-err");
const webMemCon2err = document.getElementById("web-con2-err");

// quiz
const quizMem1 = document.getElementById("quiz-mem1");
const quizMemCon1 = document.getElementById("quiz-mem1-con1");
const quizMem1err = document.getElementById("quiz-tmem1-err");
const quizMemCon1err = document.getElementById("quiz-con1-err");

const quizMem2 = document.getElementById("quiz-mem2");
const quizMemCon2 = document.getElementById("quiz-mem2-con2");
const quizMem2err = document.getElementById("quiz-tmem2-err");
const quizMemCon2err = document.getElementById("quiz-con2-err");

// photography
const photographyMem1 = document.getElementById("photo-mem1");
const photographyMemCon1 = document.getElementById("photo-mem1-con1");
const photoMem1err = document.getElementById("photo-tmem1-err");
const photoMemCon1err = document.getElementById("photo-con1-err");

// gaming
const gamingMem1 = document.getElementById("gaming-mem1");
const gamingMemCon1 = document.getElementById("gaming-mem1-con1");
const gameMem1err = document.getElementById("game-tmem1-err");
const gameMemCon1err = document.getElementById("game-con1-err");

const gamingMem2 = document.getElementById("gaming-mem2");
const gamingMemCon2 = document.getElementById("gaming-mem2-con2");
const gameMem2err = document.getElementById("game-tmem2-err");
const gameMemCon2err = document.getElementById("game-con2-err");

const gamingMem3 = document.getElementById("gaming-mem3");
const gamingMemCon3 = document.getElementById("gaming-mem2-con3");
const gameMem3err = document.getElementById("game-tmem3-err");
const gameMemCon3err = document.getElementById("game-con3-err");

const gamingMem4 = document.getElementById("gaming-mem4");
const gamingMemCon4 = document.getElementById("gaming-me42-con2");
const gameMem4err = document.getElementById("game-tmem4-err");
const gameMemCon4err = document.getElementById("game-con4-err");

// treasure hunt
const treasureMem1 = document.getElementById("treasure-mem1");
const treasureMemCon1 = document.getElementById("treasure-mem1-con1");
const treasureMem1err = document.getElementById("thunt-tmem1-err");
const treasureMemCon1err = document.getElementById("tres-con1-err");

const treasureMem2 = document.getElementById("treasure-mem2");
const treasureMemCon2 = document.getElementById("treasure-mem2-con2");
const treasureMem2err = document.getElementById("thunt-tmem2-err");
const treasureMemCon2err = document.getElementById("tres-con2-err");

// product launch
const productMem1 = document.getElementById("product-mem1");
const productMemCon1 = document.getElementById("product-mem1-con1");
const productMem1err = document.getElementById("product-tmem1-err");
const productMemCon1err = document.getElementById("product-con1-err");

// dumb charades
const dumbchMem1 = document.getElementById("dumbch-mem1");
const dumbchMemCon1 = document.getElementById("dumbch-mem1-con1");
const dumbchMem1err = document.getElementById("dumb-tmem1-err");
const dumbchMemCon1err = document.getElementById("dumb-con1-err");

const dumbchMem2 = document.getElementById("dumbch-mem2");
const dumbchMemCon2 = document.getElementById("dumbch-mem2-con2");
const dumbchMem2err = document.getElementById("dumb-tmem2-err");
const dumbchMemCon2err = document.getElementById("dumb-con2-err");

// it manager
const itManagerMem1 = document.getElementById("itmng-mem1");
const itManagerMemCon1 = document.getElementById("itmng-mem1-con1");
const itManagerMem1err = document.getElementById("itman-tmem1-err");
const itManagerMemCon1err = document.getElementById("itman-con1-err");

// designing
const designingMem1 = document.getElementById("design-mem1");
const designingMemCon1 = document.getElementById("design-mem1-con1");
const designingMem1err = document.getElementById("desig-tmem1-err");
const designingCon1err = document.getElementById("desig-con1-err");

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

  getDebate() {
    return this.data.events && this.data.events.debate
      ? this.data.events.debate
      : { name: "N/A", phone: "N/A" };
  }

  getDance() {
    return this.data.events &&
      this.data.events.dance &&
      this.data.events.dance.length > 1
      ? this.data.events.dance
      : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 7);
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

  getDumbCharades() {
    return this.data.events &&
      this.data.events.dumbCharades &&
      this.data.events.dumbCharades.length == 2
      ? this.data.events.dumbCharades
      : EventData.repeatObject({ name: "N/A", phone: "N/A" }, 2);
  }
}

const updateUITextFields = (eventData) => {
  // codingMemCon1.value = 'N/A'
  // codingMem1.placeholder = 'input placeholder'

  let codingData = eventData.getCoding();

  if (codingData && codingData.length == 2) {
    codingMem1.value = codingData[0].name;
    codingMemCon1.value = codingData[0].phone;

    codingMem2.value = codingData[1].name;
    codingMemCon2.value = codingData[1].phone;
  }

  let webData = eventData.getWeb();
  if (webData && webData.length == 2) {
    webMem1.value = eventData.getWeb()[0].name;
    webMemCon1.value = eventData.getWeb()[0].phone;

    webMem2.value = eventData.getWeb()[1].name;
    webMemCon2.value = eventData.getWeb()[1].phone;
  }

  let quizData = eventData.getQuiz();
  if (quizData && quizData.length == 2) {
    quizMem1.value = eventData.getQuiz()[0].name;
    quizMemCon1.value = eventData.getQuiz()[0].phone;

    quizMem2.value = eventData.getQuiz()[1].name;
    quizMemCon2.value = eventData.getQuiz()[1].phone;
  }

  let debateData = eventData.getDebate();
  if (debateData) {
    debateMem1.value = eventData.getDebate().name;
    debateMemCon1.value = eventData.getDebate().phone;
  }

  let danceData = eventData.getDance();

  if (danceData && danceData.length > 1) {
    danceMem1.value = "N/A";
    danceMemCon1.value = "N/A";

    danceMem2.value = "N/A";
    danceMemCon2.value = "N/A";

    danceMem3.value = "N/A";
    danceMemCon3.value = "N/A";

    danceMem4.value = "N/A";
    danceMemCon4.value = "N/A";

    danceMem5.value = "N/A";
    danceMemCon5.value = "N/A";

    danceMem6.value = "N/A";
    danceMemCon6.value = "N/A";

    danceMem7.value = "N/A";
    danceMemCon7.value = "N/A";

    const danceMembers = [
      { name: danceMem1, phone: danceMemCon1 },
      { name: danceMem2, phone: danceMemCon2 },
      { name: danceMem3, phone: danceMemCon3 },
      { name: danceMem4, phone: danceMemCon4 },
      { name: danceMem5, phone: danceMemCon5 },
      { name: danceMem6, phone: danceMemCon6 },
      { name: danceMem7, phone: danceMemCon7 },
    ];

    const danceData = eventData.getDance();

    danceMembers.forEach((member, index) => {
      if (danceData[index]) {
        member.name.value = danceData[index].name;
        member.phone.value = danceData[index].phone;
      }
    });
  }

  let photographyData = eventData.getPhotography();
  if (photographyData) {
    photographyMem1.value = eventData.getPhotography().name;
    photographyMemCon1.value = eventData.getPhotography().phone;
  }

  let gamingData = eventData.getGaming();
  if (gamingData && gamingData.length == 2) {
    gamingMem1.value = eventData.getGaming()[0].name;
    gamingMemCon1.value = eventData.getGaming()[0].phone;

    gamingMem2.value = eventData.getGaming()[1].name;
    gamingMemCon2.value = eventData.getGaming()[1].phone;
  }

  let treasureData = eventData.getTreasure();
  if (treasureData && treasureData.length == 2) {
    treasureMem1.value = eventData.getTreasure()[0].name;
    treasureMemCon1.value = eventData.getTreasure()[0].phone;

    treasureMem2.value = eventData.getTreasure()[1].name;
    treasureMemCon2.value = eventData.getTreasure()[1].phone;
  }

  let productData = eventData.getProductLaunch();
  if (productData) {
    productMem1.value = eventData.getProductLaunch().name;
    productMemCon1.value = eventData.getProductLaunch().phone;
  }

  let dumbCharadesData = eventData.getDumbCharades();
  if (dumbCharadesData && dumbCharadesData.length == 2) {
    dumbchMem1.value = eventData.getDumbCharades()[0].name;
    dumbchMemCon1.value = eventData.getDumbCharades()[0].phone;

    dumbchMem2.value = eventData.getDumbCharades()[1].name;
    dumbchMemCon2.value = eventData.getDumbCharades()[1].phone;
  }

  let itManagerData = eventData.getITManager();

  if (itManagerData) {
    itManagerMem1.value = eventData.getITManager().name;
    itManagerMemCon1.value = eventData.getITManager().phone;
  }

  let designingData = eventData.getDesigning();
  if (designingData) {
    designingMem1.value = eventData.getDesigning().name;
    designingMemCon1.value = eventData.getDesigning().phone;
  }
};

const dumbCharadesSection = document.querySelector(".ug-hide");
const itManagerSection = document.querySelector(".pg-hide1");
const designSection = document.querySelector(".pg-hide2");

const displayUGFields = () => {
  dumbCharadesSection.classList.remove("hide");
  itManagerSection.classList.add("hide");
  designSection.classList.add("hide");
};

const displayPGFields = () => {
  dumbCharadesSection.classList.add("hide");
  itManagerSection.classList.remove("hide");
  designSection.classList.remove("hide");
};

const fetchData = async () => {
  try {
    const response = await fetch(`${API_URL}/team/${teamId}`);
    const data = await response.json();
    return data;
  } catch (error) {
    console.error("Error fetching data:", error);
  }
};

const fetchDataAndUpdateUI = async () => {
  const data = await fetchData();
  const eventData = new EventData(data);

  const isUG = data.isUG;

  if (isUG) {
    displayUGFields();
  } else {
    displayPGFields();
  }

  updateUITextFields(eventData);
};

fetchDataAndUpdateUI();

const getEventData = () => {
  const codingData = [
    { name: codingMem1.value, phone: codingMemCon1.value },
    { name: codingMem2.value, phone: codingMemCon2.value },
  ];

  const webData = [
    { name: webMem1.value, phone: webMemCon1.value },
    { name: webMem2.value, phone: webMemCon2.value },
  ];

  const quizData = [
    { name: quizMem1.value, phone: quizMemCon1.value },
    { name: quizMem2.value, phone: quizMemCon2.value },
  ];

  const danceData = [
    { name: danceMem1.value, phone: danceMemCon1.value },
    { name: danceMem2.value, phone: danceMemCon2.value },
    { name: danceMem3.value, phone: danceMemCon3.value },
    { name: danceMem4.value, phone: danceMemCon4.value },
    { name: danceMem5.value, phone: danceMemCon5.value },
    { name: danceMem6.value, phone: danceMemCon6.value },
    { name: danceMem7.value, phone: danceMemCon7.value },
  ];

  const gamingData = [
    { name: gamingMem1.value, phone: gamingMemCon1.value },
    { name: gamingMem2.value, phone: gamingMemCon2.value },
  ];

  const treasureData = [
    { name: treasureMem1.value, phone: treasureMemCon1.value },
    { name: treasureMem2.value, phone: treasureMemCon2.value },
  ];

  const dumbCharadesData = [
    { name: dumbchMem1.value, phone: dumbchMemCon1.value },
    { name: dumbchMem2.value, phone: dumbchMemCon2.value },
  ];

  const eventData = {
    events: {
      coding: codingData,
      web: webData,
      quiz: quizData,
      dance: danceData,
      gaming: gamingData,
      treasure: treasureData,
      dumbCharades: dumbCharadesData,
      itManager: { name: itManagerMem1.value, phone: itManagerMemCon1.value },
      photography: {
        name: photographyMem1.value,
        phone: photographyMemCon1.value,
      },
      productLaunch: { name: productMem1.value, phone: productMemCon1.value },
      designing: { name: designingMem1.value, phone: designingMemCon1.value },
      debate: { name: debateMem1.value, phone: debateMemCon1.value },
    },
  };

  return eventData;
};

// const saveBtn = document.querySelector("#enroll-save-btn");

// saveBtn.onclick = async () => {
//   enrollSave();
// };
//Ctrl+S
// document.addEventListener("keydown", function (event) {
//   if (event.ctrlKey && event.key === "s") {
//     event.preventDefault();
//     enrollSave();
//   }
// });
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

// Function to display error messages
function displayErrorMessages(errors) {
  // Loop through the errors object and display error messages
  for (var key in errors) {
    if (errors.hasOwnProperty(key)) {
      var errorMessage = errors[key];
      $("#" + key + "-err").text(errorMessage); // Assuming your error message elements have IDs like 'fieldName-err'
    }
  }
}

// Function to clear error messages
function clearErrorMessages() {
  $(".error-msg").text(""); // Clear all error messages
}

// Event listener for form submission
$("#enroll-save-btn").click(function (e) {
  if (checkValidation() == true) {
    e.preventDefault(); // Prevent the default form submission
    clearErrorMessages(); // Clear previous error messages

    // Get form data
    var formData = getFormData();

    // Perform AJAX request
    submitEnrollForm(formData);
  }
});

// Function to submit the enroll form via AJAX
function submitEnrollForm(formData) {
  $.ajax({
    url: form.attr("action"), // URL to your controller method
    method: "POST",
    dataType: "json",
    data: formData,
    success: function (response) {
      if (response.status === "success") {
        // Show success alert
        showAlert("success", response.message);
      } else {
        // Show error alert
        showAlert("error", response.message);
        if (response.errors) {
          // Display error messages
          displayErrorMessages(response.errors);
        }
      }
    },
    error: function (xhr, status, error) {
      // Show error alert
      showAlert("error", "An error occurred while processing your request.");
    },
  });
}

// Function to display alerts
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

// async function enrollSave() {
//   $("#enroll-save-btn").on("click", function () {
//     if (checkValidation() == true) {
//       loader.style.display = "block";

//       // Redirect to admin/event-register route
//       window.location.href = "<?php echo base_url('admin/event-register'); ?>";
//     }
//   });
// }

/* Nav active border */

function handleClick(linkId) {
  var clickedElement = document.getElementById(linkId).closest(".enroll");
  clickedElement.classList.toggle("enroll-clicked");

  var enrollElements = document.querySelectorAll(".enroll");
  enrollElements.forEach(function (element) {
    if (element !== clickedElement) {
      element.classList.remove("enroll-clicked");
    }
  });
}

/* ALERT */
// function openAlert(text) {
//   const alertBox = document.querySelector(".info");
//   const alertTitle = document.getElementById("alert-title");
//   const closeButton = document.querySelector(".info__close");

//   // Check if text is provided
//   if (text) {
//     // Set the alert title dynamically
//     alertTitle.textContent = text;

//     // Display the alert box
//     alertBox.style.display = "flex";

//     // Close the alert box after 3 seconds
//     setTimeout(closeAlert, 3000);
//     closeButton.addEventListener("click", closeAlert);
//   }
// }

function closeAlert() {
  const alertBox = document.querySelector(".info");
  alertBox.style.display = "none";
}
//To close using close button
document.querySelector(".info__close").addEventListener("click", function () {
  closeAlert();
});

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
    (debateMem1.value === "" || debateMem1.value === "N/A") &&
    (debateMemCon1.value === "" || debateMemCon1.value === "N/A") &&
    (danceMem1.value === "" || danceMem1.value === "N/A") &&
    (danceMemCon1.value === "" || danceMemCon1.value === "N/A") &&
    (danceMem2.value === "" || danceMem2.value === "N/A") &&
    (danceMemCon2.value === "" || danceMemCon2.value === "N/A") &&
    (danceMem3.value === "" || danceMem3.value === "N/A") &&
    (danceMemCon3.value === "" || danceMemCon3.value === "N/A") &&
    (danceMem4.value === "" || danceMem4.value === "N/A") &&
    (danceMemCon4.value === "" || danceMemCon4.value === "N/A") &&
    (danceMem5.value === "" || danceMem5.value === "N/A") &&
    (danceMemCon5.value === "" || danceMemCon5.value === "N/A") &&
    (danceMem6.value === "" || danceMem6.value === "N/A") &&
    (danceMemCon6.value === "" || danceMemCon6.value === "N/A") &&
    (danceMem7.value === "" || danceMem7.value === "N/A") &&
    (danceMemCon7.value === "" || danceMemCon7.value === "N/A") &&
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
    (productMem1.value === "" || productMem1.value === "N/A") &&
    (productMemCon1.value === "" || productMemCon1.value === "N/A") &&
    (itManagerMem1.value === "" || itManagerMem1.value === "N/A") &&
    (itManagerMemCon1.value === "" || itManagerMemCon1.value === "N/A") &&
    (designingMem1.value === "" || designingMem1.value === "N/A") &&
    (designingMemCon1.value === "" || designingMemCon1.value === "N/A")
  ) {
    openAlert("Please fill all the details!");
    return false;
  }

  // To remove existing "displayErr" classes
  const errorElements = document.querySelectorAll(".displayErr");
  errorElements.forEach((element) => {
    element.classList.remove("displayErr");
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

  //Debate
  if (
    (debateMem1.value === "" || debateMem1.value === "N/A") &&
    (debateMemCon1.value === "" || debateMemCon1.value === "N/A")
  ) {
    // All are empty, don't return anything
  } else {
    if (debateMem1.value === "" || debateMem1.value === "N/A") {
      debateMem1err.classList.add("displayErr");
      scrollToElement(debateMem1);
      return false;
    }
    if (
      debateMemCon1.value === "" ||
      debateMemCon1.value === "N/A" ||
      debateMemCon1.value.length < 10
    ) {
      debateMemCon1err.classList.add("displayErr");
      scrollToElement(debateMem1);
      return false;
    }
  }

  //Dance
  if (
    (danceMem1.value === "" || danceMem1.value === "N/A") &&
    (danceMemCon1.value === "" || danceMemCon1.value === "N/A") &&
    (danceMem2.value === "" || danceMem2.value === "N/A") &&
    (danceMemCon2.value === "" || danceMemCon2.value === "N/A") &&
    (danceMem3.value === "" || danceMem3.value === "N/A") &&
    (danceMemCon3.value === "" || danceMemCon3.value === "N/A") &&
    (danceMem4.value === "" || danceMem4.value === "N/A") &&
    (danceMemCon4.value === "" || danceMemCon4.value === "N/A") &&
    (danceMem5.value === "" || danceMem5.value === "N/A") &&
    (danceMemCon5.value === "" || danceMemCon5.value === "N/A") &&
    (danceMem6.value === "" || danceMem6.value === "N/A") &&
    (danceMemCon6.value === "" || danceMemCon6.value === "N/A") &&
    (danceMem7.value === "" || danceMem7.value === "N/A") &&
    (danceMemCon7.value === "" || danceMemCon7.value === "N/A")
  ) {
    // All are empty, don't return anything
  } else {
    if (danceMem1.value === "" || danceMem1.value === "N/A") {
      danceMem1err.classList.add("displayErr");
      scrollToElement(danceMem1);
      return false;
    }
    if (
      danceMemCon1.value === "" ||
      danceMemCon1.value === "N/A" ||
      danceMemCon1.value.length < 10
    ) {
      danceMemCon1err.classList.add("displayErr");
      scrollToElement(danceMem1);
      return false;
    }
    if (danceMem2.value === "" || danceMem2.value === "N/A") {
      danceMem2err.classList.add("displayErr");
      scrollToElement(danceMem2);
      return false;
    }
    if (
      danceMemCon2.value === "" ||
      danceMemCon2.value === "N/A" ||
      danceMemCon2.value.length < 10
    ) {
      danceMemCon2err.classList.add("displayErr");
      scrollToElement(danceMem2);
      return false;
    }
    if (danceMem3.value === "" || danceMem3.value === "N/A") {
      danceMem3err.classList.add("displayErr");
      scrollToElement(danceMem3);
      return false;
    }
    if (
      danceMemCon3.value === "" ||
      danceMemCon3.value === "N/A" ||
      danceMemCon3.value.length < 10
    ) {
      danceMemCon3err.classList.add("displayErr");
      scrollToElement(danceMem3);
      return false;
    }
    if (danceMem4.value === "" || danceMem4.value === "N/A") {
      danceMem4err.classList.add("displayErr");
      scrollToElement(danceMem4);
      return false;
    }
    if (
      danceMemCon4.value === "" ||
      danceMemCon4.value === "N/A" ||
      danceMemCon4.value.length < 10
    ) {
      danceMemCon4err.classList.add("displayErr");
      scrollToElement(danceMem4);
      return false;
    }
    if (danceMem5.value === "" || danceMem5.value === "N/A") {
      danceMem5err.classList.add("displayErr");
      openAlert("Minimum 5 participants!");
      scrollToElement(danceMem5);
      return false;
    }
    if (
      danceMemCon5.value === "" ||
      danceMemCon5.value === "N/A" ||
      danceMemCon5.value.length < 10
    ) {
      danceMemCon5err.classList.add("displayErr");
      scrollToElement(danceMem5);
      return false;
    }
    if (danceMem6.value !== "" && danceMem6.value !== "N/A") {
      if (
        danceMemCon6.value === "" ||
        danceMemCon6.value === "N/A" ||
        danceMemCon6.value.length < 10
      ) {
        danceMemCon6err.classList.add("displayErr");
        scrollToElement(danceMem6);
        return false;
      }
    }
    if (danceMem7.value !== "" && danceMem7.value !== "N/A") {
      if (
        danceMemCon7.value === "" ||
        danceMemCon7.value === "N/A" ||
        danceMemCon7.value.length < 10
      ) {
        danceMemCon7err.classList.add("displayErr");
        scrollToElement(danceMem7);
        return false;
      }
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

  //Product Launch
  if (
    (productMem1.value === "" || productMem1.value === "N/A") &&
    (productMemCon1.value === "" || productMemCon1.value === "N/A")
  ) {
    // All are empty, don't return anything
  } else {
    if (productMem1.value === "" || productMem1.value === "N/A") {
      productMem1err.classList.add("displayErr");
      scrollToElement(productMem1);
      return false;
    }
    if (
      productMemCon1.value === "" ||
      productMemCon1.value === "N/A" ||
      productMemCon1.value.length < 10
    ) {
      productMemCon1err.classList.add("displayErr");
      scrollToElement(productMem1);
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

  //Designing
  if (
    (designingMem1.value === "" || designingMem1.value === "N/A") &&
    (designingMemCon1.value === "" || designingMemCon1.value === "N/A")
  ) {
    // All are empty, don't return anything
  } else {
    if (designingMem1.value === "" || designingMem1.value === "N/A") {
      designingMem1err.classList.add("displayErr");
      scrollToElement(designingMem1);
      return false;
    }
    if (
      designingMemCon1.value === "" ||
      designingMemCon1.value === "N/A" ||
      designingMemCon1.value.length < 10
    ) {
      designingCon1err.classList.add("displayErr");
      scrollToElement(designingMem1);
      return false;
    }
  }

  // Dumb Charades
  if (
    (dumbchMem1.value === "" || dumbchMem1.value === "N/A") &&
    (dumbchMem2.value === "" || dumbchMem2.value === "N/A") &&
    (dumbchMemCon1.value === "" || dumbchMemCon1.value === "N/A") &&
    (dumbchMemCon2.value === "" || dumbchMemCon2.value === "N/A")
  ) {
    // All are empty, don't return anything
  } else {
    if (dumbchMem1.value === "" || dumbchMem1.value === "N/A") {
      dumbchMem1err.classList.add("displayErr");
      scrollToElement(dumbchMem1);
      return false;
    }
    if (
      dumbchMemCon1.value === "" ||
      dumbchMemCon1.value === "N/A" ||
      dumbchMemCon1.value.length < 10
    ) {
      dumbchMemCon1err.classList.add("displayErr");
      scrollToElement(dumbchMem1);
      return false;
    }

    if (dumbchMem2.value === "" || dumbchMem2.value === "N/A") {
      dumbchMem2err.classList.add("displayErr");
      scrollToElement(dumbchMem2);
      return false;
    }
    if (
      dumbchMemCon2.value === "" ||
      dumbchMemCon2.value === "N/A" ||
      dumbchMemCon2.value.length < 10
    ) {
      dumbchMemCon2err.classList.add("displayErr");
      scrollToElement(dumbchMem2);
      return false;
    }
  }

  return true;
}

function scrollToElement(element) {
  element.scrollIntoView({ behavior: "smooth", block: "center" });
}
