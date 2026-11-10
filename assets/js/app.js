function showToast(message) { const el = document.getElementById('toast'); el.textContent = message; el.classList.add('show'); setTimeout(() => el.classList.remove('show'), 2600); }
function like(button) { button.classList.toggle('liked'); const count = button.querySelector('span'); if (count) count.textContent = Number(count.textContent) + (button.classList.contains('liked') ? 1 : -1); }
function openModal(html) { document.getElementById('modal-content').innerHTML = html; document.getElementById('modal').hidden = false; }
function closeModal() { document.getElementById('modal').hidden = true; }
function prototypeAction(message = 'Tai tik prototipas – duomenys neišsaugomi.') { showToast(message); }
document.addEventListener('submit', e => { e.preventDefault(); prototypeAction(); });
document.addEventListener('click', e => { if (e.target.id === 'modal') closeModal(); });
