export function openModal(target) {
    const modal = document.getElementById(target);
    const backgroundModal = document.getElementById('modalBackground');
    if (modal) {
        modal.style.display = 'block';
        modal.style.opacity = 1;
        backgroundModal.style.display = 'block';
        backgroundModal.style.opacity = 1;
        modal.classList.remove('modal_inactive');
    } else { console.log('%cFAILED!', 'color: red;'); }
}

export function closeModal(target) {
    const modal = document.getElementById(target);
    const backgroundModal = document.getElementById('modalBackground');
    if (modal) {
        modal.style.display = 'none';
        modal.style.opacity = 0;
        backgroundModal.style.display = 'none';
        backgroundModal.style.opacity = 0;
        modal.classList.add('modal_inactive');
    } else { console.log('%cFAILED!', 'color: red;'); }
}
