export function navigateToSection() {
    const headerLinks = document.querySelectorAll("header a");
    headerLinks.forEach((link) => {
        link.addEventListener("click", (event) => {
            event.preventDefault();
            const targetId = link.getAttribute("href").substring(1);
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
                window.scrollTo({
                    behavior: "smooth",
                    top: targetSection.offsetTop
                });
            }
        });
    });
}