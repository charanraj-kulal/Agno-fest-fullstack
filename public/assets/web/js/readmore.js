const mcaEventList = [
  "RACHANA SUTRA",
  "DRUDAVISTI",
  "GYANVEDHA",
  "SHRESTA NIRVAHAK",
  "KURUKSHETRA",
  "TATVA CHITRAM",
  "ANVESHAN",
  "SRUJANATMAK VIGNAPAN",
];

const mcaEventListNorm = [
  "WEB DESIGNING",
  "CODING",

  "IT QUIZ",
  "IT MANAGER",

  "GAMING",
  "PHOTOGRAPHY & VIDEOGRAPHY",

  "TREASURE HUNT",
  "MAD ADS",
];

const mcaListRules = [
  [
    "A team must consist of 2 members.",
    "Knowledge of HTML, CSS, and JavaScript is necessary.",
    "No electronic gadgets are allowed.",
  ], // Rules for web designing
  [
    "A team must consist of 2 members.",
    "Knowledge of C,  C++, and Java is necessary.",
    "No electronic gadgets are allowed.",
  ], //Rules for coding
  [
    "Teams of 2 members.",
    "Topics will include IT and general knowledge.",
    "Mobile phones and electronic devices are not allowed during the quiz.",
  ], //Rules for IT QUiz
  [
    "One participant from each college is mandatory.",
    "Participants must bring their own laptops and a resume(both hard copy and soft copy).",
    "Participants should come in formal attire.",
  ], //Rules for IT manager
  [
    "A team must consist of 4 members.",
    "Participants must bring their own devices.",
    "The use of ipads and triggers are not allowed and no internet will be provided.",
  ], //Rules for Gaming
  [
    "A team must consist of 2 members.",
    "Participants must bring their own laptops and DSLR/mobile phones with the necessary gadgets and software for editing",
    "The use of drones is not allowed",
  ], //Rules for Photo and Video
  [
    " A team of consist 2 members.",
    "No electronic gadgets are allowed.",
    "Skipping the clue or damage to property leads to disqualification of the team.",
  ], //Rules for Treasure hunt
  [
    "Teams must have 4 to 6 members.",
    "The topic will be given on the spot, with materials provided accordingly.",
    "Time will be allotted for ad preparation.",
  ], //Rules for Mad ad
];

const mcaHeads = [
  [["Mr. Jeevan"], ["Ms. Lolita Serrao"]], //Web design
  [["Mr. Gokul Baradan"], ["Ms. Devpriya Nayak"]], //Coding
  [["Mr. Mohammed Shaaz"], ["Ms. Ashwitha Shetty"]], //It quiz
  [["Mr. Sushan Roy pinto"], ["Ms. Bindiya Kulal"]], //It Manager
  [["Mr. Rakesh"], ["Ms. Hithashree N"]], //Gaming
  [["Mr. Charanraj"], ["Ms. Shri Padma"]], //Photo &Video
  [["Mr. Devkiran Nayak"], ["Ms. Niharika K"]], //Treasure Hunt
  [["Mr. Manish Raj"], ["Ms. Envita Albuquerque"]], //Mad Ad
];

const mcaPhone = [
  [["9353459119"], ["9567919865"]], //Web design
  [["8606086464"], ["7019172013"]], //Coding
  [["9880835039"], ["9538581110"]], //It Quiz
  [["9611622784"], ["9148661549"]], //It Manager
  [["8618779013"], ["6363098288"]], //Gaming
  [["9353649294"], ["6366048729"]], //Photo & Video
  [["8921185809"], ["7795392418"]], //Treasure Hunt
  [["8431657008"], ["6363769284"]], //Mad ad
];

const mcaRCard = document.querySelector(".title-text-readmore #title-readmore");
const mcaRNCard = document.querySelector(
  ".title-text-readmore #title-readmore-norm"
);

const mcaRList = document.querySelector(".title-text-readmore #mca-list");

const mcaHName1List = document.querySelector(
  ".event-head1-container #event-head1-name"
);
const mcaHName2List = document.querySelector(
  ".event-head2-container #event-head2-name"
);

const mcaHPhn1List = document.querySelector(
  ".event-head1-container #event-head1-phn-number"
);
const mcaHPhn2List = document.querySelector(
  ".event-head2-container #event-head2-phn-number"
);

function toggleOverlayMcaRules(eventIndex = null) {
  var overlay = document.getElementById("readmore-card-overlay");

  // Toggle the overlay visibility
  overlay.style.display =
    overlay.style.display === "none" || overlay.style.display === ""
      ? "flex"
      : "none";

  // If no eventIndex is passed, do nothing else (likely closing the overlay)
  if (eventIndex === null) {
    return;
  }

  mcaRList.innerHTML = "";

  const currentEvent = mcaEventList[eventIndex];

  // Check if the event exists
  if (!currentEvent) {
    console.error("Invalid event index:", eventIndex);
    return;
  }

  const rules = mcaListRules[eventIndex] || ["No specific rules available"];

  mcaRCard.innerText = currentEvent;
  mcaRNCard.innerText = "(" + mcaEventListNorm[eventIndex] + ")";

  mcaHName1List.innerText = mcaHeads[eventIndex][0];
  mcaHName2List.innerText = mcaHeads[eventIndex][1];

  mcaHPhn1List.innerText = mcaPhone[eventIndex][0];
  mcaHPhn2List.innerText = mcaPhone[eventIndex][1];

  rules.forEach((rule) => {
    const li = document.createElement("li");
    li.textContent = rule;
    mcaRList.appendChild(li);
  });
}

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
