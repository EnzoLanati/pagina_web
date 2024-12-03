<header>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <div class="logo_compañia">
        <a class="navbar-item" href="index.php">
          <img src="Assets/Images/logo.png" alt="logo de la compañia" class="logo-img">
        </a>
      </div>
      <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item">
          Inicio
        </a>

        <a class="navbar-item">
          Categorías
        </a>

        <div class="navbar-item has-dropdown is-hoverable">
          <a class="navbar-link">
            Más
          </a>

          <div class="navbar-dropdown">
            <a class="navbar-item">
              Licores
            </a>
            <a class="navbar-item is-selected">
              Vinos
            </a>
            <a class="navbar-item">
              Contacto
            </a>
            <hr class="navbar-divider">
          </div>
        </div>
      </div>
      <div>
        <input type="search" aria-label="Buscador">
        <button type="submit"><ion-icon name="search-outline"></ion-icon></button>
      </div>
      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a id="btnLogin-popup" class="button is-light">
            <ion-icon name="person-outline"></ion-icon>
            </a>
          </div>
          <div class="carrito_compra">
            <button><ion-icon name="cart-outline"></ion-icon></button>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!-- Modal para mostrar el formulario -->
<div id="loginModal" class="modal" style="display: none;">
  <div class="modal-background"></div>
  <div class="modal-content">
    <div id="loginContent" class="box">
      <!-- Aquí se cargará el contenido de login.php -->
    </div>
  </div>
  <button class="modal-close is-large" aria-label="close"></button>
</div>

<script src="Assets/js/script.js"></script>
