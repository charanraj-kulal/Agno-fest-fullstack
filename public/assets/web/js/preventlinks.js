document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll("nav a");

  links.forEach(function (link) {
    link.addEventListener("click", function (event) {
      let targetId = link.getAttribute("href");
      // console.log(targetId);
      if (isURL(targetId)) {
        // console.log("valid url");
        return;
      }
      targetId = targetId.substring(1);
      event.preventDefault();
      document.getElementById(targetId).scrollIntoView({
        behavior: "smooth",
      });
    });
  });
});

function isURL(url) {
  const urlPattern =
    /^(https?:\/\/)?([\w-]+(\.[\w-]+)+\/?)(:\d{1,5})?(\/\S*)?$/;

  return urlPattern.test(url);
}
