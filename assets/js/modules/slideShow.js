// SLIDER - SLIDESHOW_JS

let slideIndex = 0;
let indicators = document.querySelectorAll(".indicator");

function updateIndicators() {
    for (let i = 0; i < indicators.length; i++) {
        indicators[i].classList.remove("active");
    }
    indicators[slideIndex - 1].classList.add("active");
}

showSlides();

function showSlides() {
    let i;
    let slides = document.getElementsByClassName("about_first");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "flex";
    updateIndicators();
    setTimeout(showSlides, 5000);
}

let nextButton = document.querySelector(".nextSlide");
let prevButton = document.querySelector(".prevSlide");

nextButton.addEventListener("click", () => {
    slideIndex++;
    showSlides();
});

prevButton.addEventListener("click", () => {
    slideIndex--;
    showSlides();
});

indicators[0].classList.add("active");
