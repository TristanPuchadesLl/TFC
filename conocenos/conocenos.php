<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conócenos</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <header>
        <?php include '../menu.php'; ?>
    </header>
    <main>
        <div class="container">
            <section class="about-section">
                <h1>Sobre Mí</h1>
                <p>Hola, soy Tristán Puchades, tengo 20 años y soy de Valencia. Soy estudiante del instituto Campus Cámara FP y este es mi proyecto web de mi Trabajo de Fin de Ciclo (TFC).</p>
                <h2>Mi Proyecto</h2>
                <p>El desarrollo de esta página web ha sido un camino de aprendizaje autodidacta y un esfuerzo considerable. He aplicado los conocimientos adquiridos en el campus y documentación encontrada en internet con ayuda de mi tutor Alberto Sanchís, quien me ha proporcionado valiosa documentación.</p>
                <h2>Contacto</h2>
                <p>Si te ha gustado mi trabajo o quieres contactar conmigo, puedes hacerlo a través de la sección de <a href="#" onclick="mostrarContacto()">Contacto</a>.</p>
                <h2>Agradecimientos</h2>
                <p>Quiero agradecer estos dos años a todos los profesores que han formado parte de mi formación en Desarrollo de Aplicaciones Multiplataforma. Guardare un buen recuerdo de este centro.</p>
                <p>Gracias</p>   
            </section>
            <section class="map-section">
                <h2>Ubicación</h2>
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3076.5427830777994!2d-0.4617310235798403!3d39.547367208091785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd605bc401aec5b3%3A0x8968665575dd9e1a!2sC%C3%A1mara%20FP!5e0!3m2!1sen!2ses!4v1717434145778!5m2!1sen!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>
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
