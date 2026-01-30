// BURGER MENU DISPLAY
function toggleMenu() {
  const menu = document.getElementById("menu");
  menu.classList.toggle("active");
}

// Closing the menu when click outside
document.addEventListener("click", function (event) {
  const menu = document.getElementById("menu");
  const menuButton = event.target.closest('[onclick*="toggleMenu"]');

  if (!menu.contains(event.target) && !menuButton) {
    menu.classList.remove("active");
  }
});

// BURGER MENU x ANIMATION
const burger = document.querySelector(".burger");

burger.addEventListener("click", () => {
  burger.classList.toggle("active");
});
