function showToast(message) { const el = document.getElementById('toast'); el.textContent = message; el.classList.add('show'); setTimeout(() => el.classList.remove('show'), 2600); }
function like(button) { button.classList.toggle('liked'); const count = button.querySelector('span'); if (count) count.textContent = Number(count.textContent) + (button.classList.contains('liked') ? 1 : -1); }
function openModal(html) {
    const modal = document.getElementById('modal');
    const content = document.getElementById('modal-content');
    if (!modal || !content) return;
    content.innerHTML = html;
    modal.hidden = false;
}
function closeModal() {
    const modal = document.getElementById('modal');
    if (!modal) return;
    modal.hidden = true;
}
function prototypeAction(message = 'Tai tik prototipas – duomenys neišsaugomi.') { showToast(message); }
document.addEventListener('submit', e => { e.preventDefault(); prototypeAction(); });
document.addEventListener('DOMContentLoaded', () => {
    const modal = document.getElementById('modal');
    if (modal) modal.hidden = true;
});
document.addEventListener('click', e => { if (e.target.id === 'modal') closeModal(); });
document.addEventListener('keydown', e => { if (e.key === 'Escape') closeModal(); });
window.openModal = openModal;
window.closeModal = closeModal;
