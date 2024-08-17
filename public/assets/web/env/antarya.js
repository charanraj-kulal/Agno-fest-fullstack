// const API_URL = "http://localhost:3000";
// const API_URL = "https://mca-fest.up.railway.app";
const API_URL = "https://mca-fest-v1.onrender.com";

const token = localStorage.getItem("jwtToken");
const teamId = localStorage.getItem("teamId");

const burgerMenu = document.querySelector(".burger-click");
const navLinks = document.querySelector(".left-fixed-nav");
const burgerCheck = document.getElementById("check");
const overlay = document.querySelector(".overlay");
// const marquee = document.getElementById("marqueeElement");

//to clear and replace the backstack state
// window.history.pushState({}, document.title, "/");

//to default mobile nav displaying for enhanced accessibility
navLinks.classList.toggle("show");
burgerMenu.checked = true;

burgerMenu.onclick = () => {
  navLinks.classList.toggle("show");
  overlay.classList.toggle("hide");
};

function validateNumericInput(inputElement) {
  inputElement.value = inputElement.value.replace(/\D/g, "");
}

document.addEventListener("click", function () {
  const activeElement = document.activeElement;

  if (
    activeElement &&
    activeElement.tagName === "INPUT" &&
    activeElement.type === "text" &&
    activeElement.value === "N/A"
  ) {
    activeElement.value = "";
  }

  if (
    activeElement &&
    activeElement.tagName === "INPUT" &&
    activeElement.type === "tel" &&
    activeElement.value === "N/A"
  ) {
    activeElement.value = "";
  }
});

const checkTokenExist = () => {
  const token = localStorage.getItem("jwtToken");
  if (!token) {
    window.location.href = "/pages/login.html";
  }
};

checkTokenExist();

const removeToken = () => {
  localStorage.removeItem("jwtToken");
  localStorage.removeItem("teamId");
};

const loader = document.querySelector(".loader");

const logOutBtn = document.querySelector("#logoutBtn");

logOutBtn.onclick = () => {
  removeToken();
  if (history.replaceState) {
    history.replaceState(null, null, window.location.href);
  }
  window.location.href = "/";
};

const enrollSec = document.querySelector("#enroll-section-id");
const paymentSec = document.querySelector("#payment-section-id");
const accomodationSec = document.querySelector("#accomodation-section-id");
const settingSec = document.querySelector("#settings-section-id");
const contactSec = document.querySelector("#contactus-section-id");

const enrollBtn = document.querySelector("#enroll-nav");
const paymentBtn = document.querySelector("#payment-nav");
const accomodationBtn = document.querySelector("#accomodation-nav");
const settingBtn = document.querySelector("#settings-nav");
const contactBtn = document.querySelector("#contactus-nav");

const showSection = (section) => {
  const sections = [
    enrollSec,
    paymentSec,
    accomodationSec,
    settingSec,
    contactSec,
  ];
  sections.forEach((sec) => sec.classList.add("hide"));
  section.classList.remove("hide");
};

const hideHambergerMenu = () => {
  navLinks.classList.toggle("show");
  burgerMenu.checked = false;
  overlay.classList.toggle("hide");
};

enrollBtn.onclick = () => {
  showSection(enrollSec);
  hideHambergerMenu();
};

paymentBtn.onclick = () => {
  showSection(paymentSec);
  hideHambergerMenu();
};

accomodationBtn.onclick = () => {
  showSection(accomodationSec);
  hideHambergerMenu();
};

settingBtn.onclick = () => {
  showSection(settingSec);
  hideHambergerMenu();
};

contactBtn.onclick = () => {
  //showSection(contactSec);
  window.location.href = "/index.html#events-section-id";
  // console.log("contact us button");
  hideHambergerMenu();
};

const countDownDate = new Date("February 24, 2024 23:59:00").getTime();

function calculateTimeDifference() {
  const now = new Date().getTime();
  return countDownDate - now;
}

function formatTime(distance) {
  const days = Math.floor(distance / (1000 * 60 * 60 * 24));
  const hours = Math.floor(
    (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
  );
  const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  const seconds = Math.floor((distance % (1000 * 60)) / 1000);

  return `${days}d ${hours}h ${minutes}m ${seconds}s`;
}

const countdown = setInterval(() => {
  const distance = calculateTimeDifference();

  if (distance < 0) {
    clearInterval(countdown);
    document.getElementById("demo").innerHTML = "EXPIRED";
  } else {
    document.getElementById("demo").innerHTML = formatTime(distance);
  }
}, 100);

const assignedTeamName = document.querySelector("#team-name-here");

const getTeamName = async () => {
  try {
    const res = await fetch(`${API_URL}/team/${teamId}`);
    const data = await res.json();
    // console.log(data.teamName);
    assignedTeamName.innerText = data.teamName;
  } catch (err) {
    console.error(err);
  }
};
getTeamName();

// event cards
// const API_URL = "https://mca-fest.up.railway.app";

let ugIdx = 0;
let pgIdx = 0;

let ugNIdx = 0;
let pgNIdx = 0;

const ugList = [
  "MOOK SAMVAD",
  "LIPTH LEKHAN",
  "Jaalika",
  "Pranshnothar",
  "Vadah",
  "Nrityam",
  "Chayachitr",
  "Khelan",
  "Nidhisangrah",
  "Pracharan",
];

const ugListNorm = [
  "DUMB CHARADES",
  "CODING",
  "WEB DESIGNING",
  "IT QUIZ",
  "DEBATE",
  "DANCE",
  "PHOTOGRAPHY",
  "GAMING",
  "TREASURE HUNT",
  "PRODUCT LAUNCH",
];

const pgList = [
  "IT Pramukh",
  "LIPTH LEKHAN",
  "Jaalika",
  "Pranshnothar",
  "Vadah",
  "Chayachitr",
  "Nrityam",
  "Khelan",
  "Nidhisangrah",
  "Pracharan",
  "Chitr",
];

const pgListNorm = [
  "IT MANAGER",
  "CODING",
  "WEB DESIGNING",
  "IT QUIZ",
  "DEBATE",
  "PHOTOGRAPHY",
  "DANCE",
  "GAMING",
  "TREASURE HUNT",
  "PRODUCT LAUNCH",
  "DESIGNING",
];

const ugCard = document.querySelector("#ug-card .inside-card-h3");
const ugNCard = document.querySelector("#ug-card .inside-card-normal-h3");

const pgCard = document.querySelector("#pg-card .inside-card-h3");
const pgNCard = document.querySelector("#pg-card .inside-card-normal-h3");

function showNextCard() {
  ugIdx = (ugIdx - 1 + ugList.length) % ugList.length;
  ugNIdx = (ugNIdx - 1 + ugListNorm.length) % ugListNorm.length;

  ugCard.style.opacity = 0;
  ugNCard.style.opacity = 0;

  setTimeout(() => {
    ugCard.innerText = ugList[ugIdx];
    ugNCard.innerText = ugListNorm[ugNIdx];
    ugCard.style.opacity = 1;
    ugNCard.style.opacity = 1;
  }, 200);
}

function showPreviousCard() {
  ugIdx = (ugIdx + 1) % ugList.length;
  ugNIdx = (ugNIdx + 1) % ugListNorm.length;

  ugCard.style.opacity = 0;
  ugNCard.style.opacity = 0;

  setTimeout(() => {
    ugCard.innerText = ugList[ugIdx];
    ugNCard.innerText = ugListNorm[ugNIdx];
    ugCard.style.opacity = 1;
    ugNCard.style.opacity = 1;
  }, 200);
}

const ugRegisterButton = document.querySelector("#ug-card");

ugRegisterButton.addEventListener("click", () => {
  // console.log(ugList[ugIdx]);
  // console.log(ugListNorm[ugNIdx]);

  window.location.href.replace("readmore.html");
});
// const ugList = [
//   "MOOK SAMVAD",
//   "LIPTH LEKHAN",
//   "Jaalika",
//   "Pranshnothar",
//   "Vadah",
//   "Nrityam",
//   "Chayachitr",
//   "Khelan",
//   "Nidhisangrah",
//   "Pracharan",
// ];

const ugListRules = [
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Knowledge of series, movies of various languages, and expertise in IT is required.",
  ], // Rules for Mook Samvad
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Electronic gadgets are not allowed.",
    "Permissible programming languages: C, C++, Java.",
    "Systems will be provided.",
  ], //Rules for Lipth Lekhan
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Knowledge in HTML, CSS, and JavaScript is neccessary.",
    "The details of each round are disclosed on the spot.",
    "Systems will be provided.",
  ], //Rules for Jaalika
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "The Quiz master's verdict is ultimate in the final round.",
    "Electronic gadgets are not allowed.",
  ], //Rules for Pranshnothar
  [
    "Number of participants: 1",
    "Number of rounds: 2",
    "Topics will be disclosed 5 minutes prior.",
    "Avoid offensive language and derogatery words.",
    "Electronic gadgets are not allowed.",
  ], //Rules for Vadah
  [
    "Number of participants: 5 to 7",
    "Each team is given 4+1 minutes.",
    "Participants are informed to perform semi fusion dance form.",
    "Submit the music 30 minutes before the event starts.",
    "Maintain decency in costumes.",
    "No use of fire, flammable materials.",
  ], //Rules for Nrityam
  [
    "Number of participants: 1",
    "Number of rounds: 3",
    "Participants must have their personal camera and laptop.",
    "Drones, GoPro, and Gimbals are strictly forbidden.",
    "Participants cannot participate in any other events.",
  ], //Rules for ChayaChitr
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Hacking or foul play incidents will lead to disqualification.",
    "Keep all maps downloaded in BGMI.",
    "No iPads, triggers are allowed.",
  ], //Rules for Khelan
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Skipping clues or tampering with another team's clues will lead to disqualification.",
  ], //Rules for Nidhisangrah
  [
    "Number of participants: 1",
    "Number of rounds: 2",
    "Participants must submit their product report on or before 11AM on the day of event.",
    "Original and novel ideas related to the IT field are encouraged.",
    "Participants are advised to bring along a laptop.",
  ], //Rules for Pracharan
];

const ugHeads = [
  [["Reshma A"], ["M Ashwini"]], //Mook Samvad
  [["P M Venugopala"], ["Shodhan P G"]], //LIPTH LEKHAN
  [["Mahammad Afnan M"], ["Akshatha S"]], //Jaalika
  [["K Madhusudha"], ["Rashmitha"]], //Pranshnothar
  [["Sharanya"], ["Vaishali"]], //Vadah
  [["Varsha A"], ["Shalmali P V"]], //Nrityam
  [["Akash C Bhat"], ["Shodhan B C"]], //Chayachitr
  [["Sharath Holla"], ["Gahan V S"]], //Khelan
  [["Keerthan"], ["Chidananda"]], //Nidhisangrah
  [["Anirudha Somayaji"], ["Ankith Kumar"]], //Pracharan
];

const ugPhone = [
  [["9741925562"], ["9902524679"]], //Mook Samvad
  [["8088611744"], ["8281222814"]], //LIPTH LEKHAN
  [["8970129113"], ["9902292869"]], //Jaalika
  [["8088148566"], ["6366466038"]], //Pranshnothar
  [["9148952471"], ["7259622080"]], //Vadah
  [["9778708191"], ["9074202726"]], //Nrityam
  [["9164662854"], ["9611296484"]], //Chayachitr
  [["6282581299"], ["7349212372"]], //Khelan
  [["6362441958"], ["9353959843"]], //Nidhisangrah
  [["8867035467"], ["8861513800"]], //Pracharan
];

//pg cards
function showNextCard2() {
  pgIdx = (pgIdx - 1 + pgList.length) % pgList.length;
  pgNIdx = (pgNIdx - 1 + pgListNorm.length) % pgListNorm.length;

  pgCard.style.opacity = 0;
  pgNCard.style.opacity = 0;

  setTimeout(() => {
    pgCard.innerText = pgList[pgIdx];
    pgNCard.innerText = pgListNorm[pgNIdx];
    pgCard.style.opacity = 1;
    pgNCard.style.opacity = 1;
  }, 200);
}

function showPreviousCard2() {
  pgIdx = (pgIdx + 1) % pgList.length;
  pgNIdx = (pgNIdx + 1) % pgListNorm.length;

  pgCard.style.opacity = 0;
  pgNCard.style.opacity = 0;

  setTimeout(() => {
    pgCard.innerText = pgList[pgIdx];
    pgNCard.innerText = pgListNorm[pgNIdx];
    pgCard.style.opacity = 1;
    pgNCard.style.opacity = 1;
  }, 200);
}

const pgRegisterButton = document.querySelector("#pg-card");
// console.log(pgRegisterButton);

pgRegisterButton.addEventListener("click", () => {
  // console.log(pgList[pgIdx]);
  // console.log(pgListNorm[pgNIdx]);
});

//pg overlay
const pgListRules = [
  [
    "Number of participants: 1",
    "The details of each round are disclosed on the spot.",
    "Participants are requested to carry a laptop",
    "Participants cannot participate in any other events.",
  ], // Rules for IT Pramukh
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Electronic gadgets are not allowed.",
    "Permissible programming languages: C, C++, Java.",
    "Systems will be provided.",
  ], //Rules for Lipth Lekhan
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Knowledge in HTML, CSS, and JavaScript is neccessary.",
    "The details of each round are disclosed on the spot.",
    "Systems will be provided.",
  ], //Rules for Jaalika
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "The Quiz master's verdict is ultimate in the final round.",
    "Electronic gadgets are not allowed.",
  ], //Rules for Pranshnothar
  [
    "Number of participants: 1",
    "Number of rounds: 2",
    "Topics will be disclosed 5 minutes prior.",
    "Avoid offensive language and derogatery words.",
    "Electronic gadgets are not allowed.",
  ], //Rules for Vadah
  [
    "Number of participants: 1",
    "Number of rounds: 3",
    "Participants must have their personal camera and laptop.",
    "Drones, GoPro, and Gimbals are strictly forbidden.",
    "Participants cannot participate in any other events.",
  ], //Rules for ChayaChitr
  [
    "Number of participants: 5 to 7",
    "Each team is given 4+1 minutes.",
    "Participants are informed to perform semi fusion dance form.",
    "Submit the music 30 minutes before the event starts.",
    "Maintain decency in costumes.",
    "No use of fire, flammable materials.",
  ], //Rules for Nrityam
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Hacking or foul play incidents will lead to disqualification.",
    "Keep all maps downloaded in BGMI.",
    "No iPads, triggers are allowed.",
  ], //Rules for Khelan
  [
    "Number of participants: 2",
    "Number of rounds: 3",
    "Skipping clues or tampering with another team's clues will lead to disqualification.",
  ], //Rules for Nidhisangrah
  [
    "Number of participants: 1",
    "Number of rounds: 2",
    "Participants must submit their product report on or before 11AM on the day of event.",
    "Original and novel ideas related to the IT field are encouraged.",
    "Participants are advised to bring along a laptop.",
  ], //Rules for Pracharan
  [
    "Number of participants: 1",
    "Number of rounds: 3",
    "Participants are advised to bring along a laptop.",
    "Knowledge of Figma is must.",
  ], // Rules for Chitr
];

const pgHeads = [
  [["Sanket M Teggihalli"], ["Tejashre Kumari"]], //IT Pramukh
  [["P M Venugopala"], ["Shodhan P G"]], //LIPTH LEKHAN
  [["Mahammad Afnan M"], ["Akshatha S"]], //Jaalika
  [["K Madhusudha"], ["Rashmitha"]], //Pranshnothar
  [["Sharanya"], ["Vaishali"]], //Vadah
  [["Akash C Bhat"], ["Shodhan B C"]], //Chayachitr
  [["Varsha A"], ["Shalmali P V"]], //Nrityam
  [["Sharath Holla"], ["Gahan V S"]], //Khelan
  [["Keerthan"], ["Chidananda"]], //Nidhisangrah
  [["Anirudha Somayaji"], ["Ankith Kumar"]], //Pracharan
  [["Mahammad Mubassir"], ["Varsha K"]], //Chitr
];

const pgPhone = [
  [["9353835597"], ["8296879660"]], //IT Pramukh
  [["8088611744"], ["8281222814"]], //LIPTH LEKHAN
  [["8970129113"], ["9902292869"]], //Jaalika
  [["8088148566"], ["6366466038"]], //Pranshnothar
  [["9148952471"], ["7259622080"]], //Vadah
  [["9164662854"], ["9611296484"]], //Chayachitr
  [["9778708191"], ["9074202726"]], //Nrityam
  [["6282581299"], ["7349212372"]], //Khelan
  [["6362441958"], ["9353959843"]], //Nidhisangrah
  [["8867035467"], ["8861513800"]], //Pracharan
  [["9945132091"], ["9148527937"]], //Chitr
];

const pgRCard = document.querySelector(".title-text-readmore #title-readmore");
const pgRNCard = document.querySelector(
  ".title-text-readmore #title-readmore-norm"
);

const pgRList = document.querySelector(".title-text-readmore #pg-list");

const pgHName1List = document.querySelector(
  ".event-head1-container #event-head1-name"
);
const pgHName2List = document.querySelector(
  ".event-head2-container #event-head2-name"
);

const pgHPhn1List = document.querySelector(
  ".event-head1-container #event-head1-phn-number"
);
const pgHPhn2List = document.querySelector(
  ".event-head2-container #event-head2-phn-number"
);

function toggleOverlayPg() {
  var overlay = document.getElementById("readmore-card-overlay");
  overlay.style.display =
    overlay.style.display === "none" || overlay.style.display === ""
      ? "flex"
      : "none";

  pgRList.innerHTML = "";

  const currentEvent = pgList[pgIdx];
  const currentEventIndex = pgList.indexOf(currentEvent);
  const rules = pgListRules[currentEventIndex] || [
    "No specific rules available",
  ];

  pgRCard.innerText = pgList[pgIdx];
  pgRNCard.innerText = "(" + pgListNorm[pgIdx] + ")";

  pgHName1List.innerText = pgHeads[pgIdx][0];
  pgHName2List.innerText = pgHeads[pgIdx][1];

  pgHPhn1List.innerText = pgPhone[pgIdx][0];
  pgHPhn2List.innerText = pgPhone[pgIdx][1];

  rules.forEach((rule) => {
    const li = document.createElement("li");
    li.textContent = rule;
    pgRList.appendChild(li);
  });
}

const ugRCard = document.querySelector(".title-text-readmore #title-readmore");
const ugRNCard = document.querySelector(
  ".title-text-readmore #title-readmore-norm"
);

const ugRList = document.querySelector(".title-text-readmore #pg-list");

const ugHName1List = document.querySelector(
  ".event-head1-container #event-head1-name"
);
const ugHName2List = document.querySelector(
  ".event-head2-container #event-head2-name"
);

const ugHPhn1List = document.querySelector(
  ".event-head1-container #event-head1-phn-number"
);
const ugHPhn2List = document.querySelector(
  ".event-head2-container #event-head2-phn-number"
);

function toggleOverlayUg() {
  var overlay = document.getElementById("readmore-card-overlay");
  overlay.style.display =
    overlay.style.display === "none" || overlay.style.display === ""
      ? "flex"
      : "none";

  pgRList.innerHTML = "";

  const currentEvent = ugList[ugIdx];
  const currentEventIndex = ugList.indexOf(currentEvent);
  const rules = ugListRules[currentEventIndex] || [
    "No specific rules available",
  ];

  ugRCard.innerText = ugList[ugIdx];
  ugRNCard.innerText = "(" + ugListNorm[ugIdx] + ")";

  ugHName1List.innerText = ugHeads[ugIdx][0];
  ugHName2List.innerText = ugHeads[ugIdx][1];

  ugHPhn1List.innerText = ugPhone[ugIdx][0];
  ugHPhn2List.innerText = ugPhone[ugIdx][1];

  rules.forEach((rule) => {
    const li = document.createElement("li");
    li.textContent = rule;
    ugRList.appendChild(li);
  });
}

const dateDisplay = document.getElementById("date-display");
window.addEventListener("scroll", () => {
  let scale = 0.5 + (window.scrollY / window.innerHeight) * 0.5;
  scale = scale < 1 ? scale : 1;

  dateDisplay.style.transform = `scale(${scale})`;
});

//FOR REGISTRATION POPUP
const overlayPopUp = document.querySelector(".overlay-popup");
const popupContainer = document.querySelector(".popup-container-main");

function showPopup() {
  const delay = 12000;

  setTimeout(() => {
    popupContainer.classList.remove("hide");
    overlayPopUp.classList.remove("hide");
  }, delay);
}
closePopup();
showPopup();

function closePopup() {
  popupContainer.classList.add("hide");
  overlayPopUp.classList.add("hide");
}

// //go to top button

const button = document.querySelector(".buttonTop");

button.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Register Now text changing
const regNowBtn = document.getElementById("register-now-button");
const regNowa = document.getElementById("reg-now-a");

const checkTokenExist = () => {
  const token = localStorage.getItem("jwtToken");
  if (token) {
    regNowBtn.innerText = "EDIT INFO";
  }
};

const handleRegNowClick = () => {
  const token = localStorage.getItem("jwtToken");
  if (token) {
    window.location.href = "pages/dashboard.html";
  } else {
    window.location.href = "pages/login.html";
  }
};

regNowa.onclick = async () => {
  handleRegNowClick();
};

checkTokenExist();
