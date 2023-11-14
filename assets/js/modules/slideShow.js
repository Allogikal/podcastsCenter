let slideIndex = 0;
let indicators = document.querySelectorAll(".indicator");

function updateIndicators() {
    indicators.forEach((indicator, index) => {
        indicator.classList.toggle("active", index === slideIndex);
    });
}

showSlide(slideIndex);

function showSlide(index) {
    let slides = document.getElementsByClassName("about_first");
    Array.from(slides).forEach(slide => slide.style.display = "none");
    slideIndex = (index + slides.length) % slides.length;
    slides[slideIndex].style.display = "flex";
    updateIndicators();
}

function nextSlide() {
    showSlide(slideIndex + 1);
}

function prevSlide() {
    showSlide(slideIndex - 1);
}

let nextButton = document.querySelector(".nextSlide");
let prevButton = document.querySelector(".prevSlide");

nextButton.addEventListener("click", nextSlide);
prevButton.addEventListener("click", prevSlide);

indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", () => showSlide(index));
});

indicators[0].classList.add("active");