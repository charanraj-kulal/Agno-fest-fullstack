// const API_URL = "http://localhost:8080/";

// const token = localStorage.getItem("jwtToken");
// const teamId = localStorage.getItem("teamId");

// const burgerMenu = document.querySelector(".burger-click");
// const navLinks = document.querySelector(".left-fixed-nav");
// const burgerCheck = document.getElementById("check");
// const overlay = document.querySelector(".overlay");
// // const marquee = document.getElementById("marqueeElement");

// //to clear and replace the backstack state
// // window.history.pushState({}, document.title, "/");

// //to default mobile nav displaying for enhanced accessibility
// navLinks.classList.toggle("show");
// burgerMenu.checked = true;

// burgerMenu.onclick = () => {
//   navLinks.classList.toggle("show");
//   overlay.classList.toggle("hide");
// };

// function validateNumericInput(inputElement) {
//   inputElement.value = inputElement.value.replace(/\D/g, "");
// }

// document.addEventListener("click", function () {
//   const activeElement = document.activeElement;

//   if (
//     activeElement &&
//     activeElement.tagName === "INPUT" &&
//     activeElement.type === "text" &&
//     activeElement.value === "N/A"
//   ) {
//     activeElement.value = "";
//   }

//   if (
//     activeElement &&
//     activeElement.tagName === "INPUT" &&
//     activeElement.type === "tel" &&
//     activeElement.value === "N/A"
//   ) {
//     activeElement.value = "";
//   }
// });

// const checkTokenExist = () => {
//   const token = localStorage.getItem("jwtToken");
//   if (!token) {
//     window.location.href = "/pages/login.html";
//   }
// };

// checkTokenExist();

// const removeToken = () => {
//   localStorage.removeItem("jwtToken");
//   localStorage.removeItem("teamId");
// };

// const loader = document.querySelector(".loader");

// const logOutBtn = document.querySelector("#logoutBtn");

// logOutBtn.onclick = () => {
//   removeToken();
//   if (history.replaceState) {
//     history.replaceState(null, null, window.location.href);
//   }
//   window.location.href = "/";
// };

// const enrollSec = document.querySelector("#enroll-section-id");
// const paymentSec = document.querySelector("#payment-section-id");
// const accomodationSec = document.querySelector("#accomodation-section-id");
// const settingSec = document.querySelector("#settings-section-id");
// const contactSec = document.querySelector("#contactus-section-id");

// const enrollBtn = document.querySelector("#enroll-nav");
// const paymentBtn = document.querySelector("#payment-nav");
// const accomodationBtn = document.querySelector("#accomodation-nav");
// const settingBtn = document.querySelector("#settings-nav");
// const contactBtn = document.querySelector("#contactus-nav");

// const showSection = (section) => {
//   const sections = [
//     enrollSec,
//     paymentSec,
//     accomodationSec,
//     settingSec,
//     contactSec,
//   ];
//   sections.forEach((sec) => sec.classList.add("hide"));
//   section.classList.remove("hide");
// };

// const hideHambergerMenu = () => {
//   navLinks.classList.toggle("show");
//   burgerMenu.checked = false;
//   overlay.classList.toggle("hide");
// };

// enrollBtn.onclick = () => {
//   showSection(enrollSec);
//   hideHambergerMenu();
// };

// paymentBtn.onclick = () => {
//   showSection(paymentSec);
//   hideHambergerMenu();
// };

// accomodationBtn.onclick = () => {
//   showSection(accomodationSec);
//   hideHambergerMenu();
// };

// settingBtn.onclick = () => {
//   showSection(settingSec);
//   hideHambergerMenu();
// };

// contactBtn.onclick = () => {
//   //showSection(contactSec);
//   window.location.href = "/index.html#events-section-id";
//   // console.log("contact us button");
//   hideHambergerMenu();
// };

// const countDownDate = new Date("February 24, 2024 23:59:00").getTime();

// function calculateTimeDifference() {
//   const now = new Date().getTime();
//   return countDownDate - now;
// }

// function formatTime(distance) {
//   const days = Math.floor(distance / (1000 * 60 * 60 * 24));
//   const hours = Math.floor(
//     (distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)
//   );
//   const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
//   const seconds = Math.floor((distance % (1000 * 60)) / 1000);

//   return `${days}d ${hours}h ${minutes}m ${seconds}s`;
// }

// const countdown = setInterval(() => {
//   const distance = calculateTimeDifference();

//   if (distance < 0) {
//     clearInterval(countdown);
//     document.getElementById("demo").innerHTML = "EXPIRED";
//   } else {
//     document.getElementById("demo").innerHTML = formatTime(distance);
//   }
// }, 100);

// const assignedTeamName = document.querySelector("#team-name-here");

// const getTeamName = async () => {
//   try {
//     const res = await fetch(`${API_URL}/team/${teamId}`);
//     const data = await res.json();
//     // console.log(data.teamName);
//     assignedTeamName.innerText = data.teamName;
//   } catch (err) {
//     console.error(err);
//   }
// };
// getTeamName();
