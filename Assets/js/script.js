
const btnLoginPopup = document.getElementById('btnLogin-popup');
const loginModal = document.getElementById('loginModal');
const loginContent = document.getElementById('loginContent');
const modalClose = document.querySelector('.modal-close');

// Evento para abrir el modal y cargar el contenido dinámico
btnLoginPopup.addEventListener('click', function () {
  // Mostrar el modal
  loginModal.style.display = 'block';

  // Cargar el formulario desde login.php usando fetch
  fetch('login.php')
    .then(response => {
      if (!response.ok) throw new Error('Error al cargar el formulario');
      return response.text();
    })
    .then(data => {
      loginContent.innerHTML = data;
    })
    .catch(error => {
      console.error('Error:', error);
      loginContent.innerHTML = '<p>Error al cargar el formulario. Intente nuevamente.</p>';
    });
});

// Evento para cerrar el modal
modalClose.addEventListener('click', function () {
  loginModal.style.display = 'none';
});

