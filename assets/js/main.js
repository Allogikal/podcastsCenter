// IMPORTS MODULES_JS
import { openModal, closeModal } from './modules/modalWindows.js';
import { navigateToSection } from './modules/navigateToSection.js';

// ADD_EVENT_LISTENERS

// Обработчик события для открытия модального окна

document.getElementById('openModalForm').addEventListener('click', () => { openModal('modalForm') });
const openModalButtons = document.querySelectorAll('.openModalInfo');
openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modalId');
        openModal(modalId);
    });
});
document.getElementById('openModalAccess').addEventListener('click', () => { openModal('modalAccess') });

// Обработчик события для закрытия модального окна

const closeModalButtons = document.querySelectorAll('.closeModalInfo');
closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
        const modalId = button.getAttribute('data-modalId');
        closeModal(modalId);
    });
});
document.getElementById('closeModalForm').addEventListener('click', () => { closeModal('modalForm') });
document.getElementById('closeModalAccess').addEventListener('click', () => { closeModal('modalAccess') });

// Обработчик события для навигации по секциям сайта
document.addEventListener("DOMContentLoaded", () => { navigateToSection(); });
document.addEventListener("keydown", (event) => {
    if (event.ctrlKey && event.key === "f") {
        const targetSection = document.getElementById('section4');

        if (targetSection) {
            window.scrollTo({
                behavior: "smooth",
                top: targetSection.offsetTop
            });
        }
    }
});

// MESSAGE OF REPORT ABOUT WORK MAIN_SCRIPT_JS
console.log('%cMain Script Init Success...', 'color: green;');