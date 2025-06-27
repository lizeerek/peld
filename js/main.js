function openModal(images) {
  const modal = document.getElementById('modal');
  const modalContent = document.getElementById('modal-content');
  modalContent.innerHTML = ''; // clear before append
  images.forEach(src => {
    const img = document.createElement('img');
    img.src = src;
    modalContent.appendChild(img);
  });
  modal.style.display = 'flex';
}

function closeModal() {
  document.getElementById('modal').style.display = 'none';
}

function openTextModal() {
  document.getElementById('textModal').style.display = 'flex';
}

function closeTextModal() {
  document.getElementById('textModal').style.display = 'none';
}

