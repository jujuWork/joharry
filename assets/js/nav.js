// BURGER MENU DISPLAY
function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("active");
}

// BURGER MENU x ANIMATION
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
});

// burger.addEventListener("click", () => {
//   burger.classList.toggle("active");

//   const mainContent = document.querySelector("body");

//   if (burger.classList.contains("active")) {
//     mainContent.style.filter = "blur(10px)";
//     mainContent.style.transition = "filter 0.3s ease";
//   } else {
//     mainContent.style.filter = "none";
//   }
// });
