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
</div>
    
<footer class="footer">
    <div class="footer-content">
        <div class="contact-info">
            <h3>CONTACTO</h3>
            <strong>Dirección:</strong> 
            <P>Thiele 86, Gutiérrez, Maipú</P>
            <strong>Teléfono:</strong> 
            <P>2615101285</P>
            <strong>Correo:</strong> 
            <P>vinotecalaparra@gmail.com</P>
            <strong>Nuestra redes:</strong>
            <br>
            <a href="https://instagram.com/vinoteca_laparra/" target="_blank" style="text-decoration: none;">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram" style="width: 40px; height: 40px; border-radius: 50%; margin-top: 10px;">
            </a>
        </div>
        <div class="ubicacion">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d836.96888140243!2d-68.78859711819868!3d-32.954295606133876!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x967e0c60c2a6b455%3A0xad2ca06b1af6c76e!2sThiele%2086%2C%20M5513%20Maip%C3%BA%2C%20Mendoza!5e0!3m2!1ses!2sar!4v1733264131080!5m2!1ses!2sar"
            width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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


