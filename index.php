<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinoteca La Parra</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma/css/bulma.min.css"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="Assets/Css/Style.css">
</head>
<body>
    <header>
        <div class="div_prin">
            <div class="div_nav">
                <?php include('Assets/Components/navbar.php'); ?>
            </div>
        </div>
    </header>
    <main>
        <?php include('Assets/Components/inicio.php'); ?>

        <!-- Contenedor para el formulario -->
        <div id="formContainer" class="wrapper"></div>
    </main>
    
    <span class="icon-close">
        <ion-icon name="close"></ion-icon>
    </span>
    <div class="form-box login active">
        <h2>Login</h2>
        <form action="#">
            <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" required>
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn-login">Iniciar</button>
        </form>
    </div>

    
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
</div>
    
    <footer style="background-color: #161616; color: white; padding: 20px 0; text-align: center;">
        <div class="footer-content">
            <div class="contact-info">
                <p><strong>Dirección:</strong> Thiele 86, Gutiérrez, Maipú</p>
                <p><strong>Teléfono:</strong> 2615101285</p>
                <p><strong>Correo:</strong> vinotecalaparra@gmail.com</p>
            </div>

            <div class="social-media">
                <a href="https://instagram.com/vinoteca_laparra/" target="_blank" style="text-decoration: none;">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 40px; height: 40px; border-radius: 50%; margin-top: 10px;">
                </a>
            </div>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <!-- Script JS para la funcionalidad -->
    <script src="Assets/js/script.js"></script>
</body>
</html>


