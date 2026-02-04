const images = document.querySelectorAll(".header__image-wrapper img");
let currentIndex = 0;

images[currentIndex].classList.add("active");

function nextSlide() {
  //Fade Out
  images[currentIndex].classList.remove("active");

  // Increment Index
  currentIndex = (currentIndex + 1) % images.length;

  //Fade In
  images[currentIndex].classList.add("active");
}

// Fade every 2 secs + 0.5s transition
setInterval(nextSlide, 4000);
