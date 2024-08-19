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
    "The host reserves the right to modify rules if needed.",
  ], //Rules for IT QUiz
  [
    "One participant from each college is mandatory.",
    "Participants must bring their own laptops and a resume(both hard copy and soft copy).",
    "Participants should come in formal attire.",
  ], //Rules for IT manager
  [
    "A team must consist of 4 members.",
    "Participants must bring their own devices.",
    "The use of ipads and triggers are not allowed.",
    "No internet will be provided; participants must use their own connections.",
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
  [["Jeevan"], ["Lolita"]], //Web design
  [["Gokul Baradan"], ["Devpriya Nayak"]], //Coding
  [["Shaaz"], ["Ashwitha"]], //It quiz
  [["Sushan Roy pinto"], ["Bindya"]], //It Manager
  [["Rakesh"], ["Ashwitha"]], //Gaming changes
  [["Charanraj"], ["Shreepadma"]], //Photo &Video
  [["Devkiran Nayak"], ["Niharika"]], //Treasure Hunt
  [["Manish"], ["Envita"]], //Mad Ad
];

const mcaPhone = [
  [["9353459119"], ["8123350889"]], //Web design
  [["9353459119"], ["7019172013"]], //Coding
  [["9880835039"], ["9538581110"]], //It Quiz
  [["9611622784"], ["9148661549"]], //It Manager
  [["8618779013"], ["9538581110"]], //Gaming changes
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

function toggleOverlayMcaRules(eventIndex) {
  var overlay = document.getElementById("readmore-card-overlay");
  overlay.style.display =
    overlay.style.display === "none" || overlay.style.display === ""
      ? "flex"
      : "none";

  mcaRList.innerHTML = "";

  mcaIdx = eventIndex; // Set the current event index

  const currentEvent = mcaEventList[mcaIdx];
  const currentEventIndex = mcaEventList.indexOf(currentEvent);
  const rules = mcaListRules[currentEventIndex] || [
    "No specific rules available",
  ];

  mcaRCard.innerText = mcaEventList[mcaIdx];
  mcaRNCard.innerText = "(" + mcaEventListNorm[mcaIdx] + ")";

  mcaHName1List.innerText = mcaHeads[mcaIdx][0];
  mcaHName2List.innerText = mcaHeads[mcaIdx][1];

  mcaHPhn1List.innerText = mcaPhone[mcaIdx][0];
  mcaHPhn2List.innerText = mcaPhone[mcaIdx][1];

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
