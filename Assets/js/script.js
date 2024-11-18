document.addEventListener("DOMContentLoaded", function () {
  const wrapper = document.querySelector('.wrapper');
  const btnPopup = document.querySelector('#btnLogin-popup');
  const formContainer = document.querySelector('#formContainer');

  // HTML del formulario de registro
  const formHTML = `
      <div class="form-box register">
          <h2>Regístrate</h2>
          <form action="#">
              <div class="input-box">
                  <span class="icon"><ion-icon name="person"></ion-icon></span>
                  <input type="text" required>
                  <label>Usuario</label>
              </div>
              <div class="input-box">
                  <span class="icon"><ion-icon name="mail"></ion-icon></span>
                  <input type="email" required>
                  <label>Email</label>
              </div>
              <button type="submit" class="btn-login">Regístrate</button>
          </form>
      </div>
  `;

  // Al hacer clic en "Registrarse", mostrar el formulario
  btnPopup.addEventListener('click', () => {
      formContainer.innerHTML = formHTML; // Cargar el formulario de registro
      wrapper.classList.add('active'); // Mostrar el formulario
  });
});
