export function openModal(target) {
    const modal = document.getElementById(target);
    const backgroundModal = document.getElementById('modalBackground');
    if (modal) {
        modal.style.opacity = '0';
        modal.style.transition = 'opacity 0.3s ease';
        backgroundModal.style.opacity = '0';
        backgroundModal.style.transition = 'opacity 0.3s ease';
        modal.style.display = 'block';
        backgroundModal.style.display = 'flex';
        setTimeout(() => {
            modal.style.opacity = '1';
            backgroundModal.style.opacity = '1';
        }, 0);
        modal.classList.remove('modal_inactive');
    } else { console.log('%cFAILED!', 'color: red;'); }
}

export function closeModal(target) {
    const modal = document.getElementById(target);
    const backgroundModal = document.getElementById('modalBackground');
    if (modal) {
        modal.style.opacity = '0';
        modal.style.transition = 'opacity 0.3s ease';
        backgroundModal.style.opacity = '0';
        backgroundModal.style.transition = 'opacity 0.3s ease';
        setTimeout(() => {
            modal.style.display = 'none';
            backgroundModal.style.display = 'none';
        }, 300);
        modal.classList.add('modal_inactive');
    } else { console.log('%cFAILED!', 'color: red;'); }
}
