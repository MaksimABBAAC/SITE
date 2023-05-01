const slides = document.querySelectorAll(".slides img");
let currentSlide = 0;

function showSlide() {
  slides.forEach((slide) => {
    slide.style.display = "none";
  });

  slides[currentSlide].style.display = "block";
}

showSlide();

const prevButton = document.querySelector(".prev");
const nextButton = document.querySelector(".next");

prevButton.addEventListener("click", () => {
  currentSlide--;
  if (currentSlide < 0) {
    currentSlide = slides.length - 1;
  }
  showSlide();
});

nextButton.addEventListener("click", () => {
  currentSlide++;
  if (currentSlide >= slides.length) {
    currentSlide = 0;
  }
  showSlide();
});

function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}