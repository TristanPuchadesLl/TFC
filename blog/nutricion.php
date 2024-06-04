<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Blog</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
    <link rel="stylesheet" href="estilos/styleblog.css">
</head>
<body>
    <header>
        <?php include '../menu.php'; ?>
    </header>
    <main>
        <h1>Blog</h1>
        <div class="button-container">
            <a href="formulario.php">Crear Nuevo Post</a>
        </div>
        <div class="main-container">
            <div class="post-container">
                <?php
                // Incluir archivo que muestra los posts
                include './php/archivo.php';
                ?>
                <div class="contenedor"></div>
            </div>
            <div class="sidebar">
                <!-- Mostrar los posts más populares -->
                <?php include './php/popular.php'; ?>
            </div>
        </div>
    </main>
    <footer>
        <div class="footer-cont">
        <a href="../index/index.php">Derechos de Autor © 2024 - Mi Sitio Web</a>
            <!-- Enlace para mostrar la tarjeta de contacto -->
            <a href="#" onclick="mostrarContacto()">Contacto</a>
        </div>
    </footer>
    <!-- Tarjeta de contacto -->
    <div id="contacto" class="contacto-tarjeta">
        <div class="contacto-contenido">
            <button onclick="cerrarContacto()" class="cerrar-btn">X</button>
            <h2>Información de Contacto</h2>
            <p>Puedes contactarme a través de:</p>
            <ul>
                <li>Nombre: Tristán Puchades Llinares </li>
                <li>Email: tpuchades@campuscamarafp.com/tristanpuchades@gmail.com</li>
                <li>Teléfono: +34 665 327 354</li>
                <li>Residencia: España</li>
            </ul>
        </div>
    </div>

    <!-- Script para mostrar la tarjeta de contacto -->
    <script>
        function mostrarContacto() {
            var contacto = document.getElementById("contacto");
            if (contacto.style.display === "none" || contacto.style.display === "") {
                contacto.style.display = "block";
            } else {
                contacto.style.display = "none";
            }
        }
        function cerrarContacto() {
            var contacto = document.getElementById("contacto");
            contacto.style.display = "none";
        }

    </script>

</body>

</html>