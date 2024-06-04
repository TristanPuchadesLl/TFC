<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <header>
        <?php include '../menu.php'; ?>
    </header>
    <main>
        <h1>¿Qué quieres hacer?</h1>
        <div class="contenedor">
            <a href="../ejercicios/ejercicios.php" class="section-box">
                <h2>EJERCICIOS DE REHABILITACIÓN</h2>
                <p>Descubre una serie de ejercicios recomendados para pacientes con cardiopatía en fase 3. Lorem ipsum
                    dolor sit amet consectetur adipisicing elit. Eveniet, voluptatum deleniti minima earum assumenda
                    nostrum voluptatem porro? Nisi nobis, eius, reiciendis nostrum optio, delectus dolore aliquid
                    doloremque ipsum laboriosam fugiat?</p>
            </a>
            <a href="../informacion/informacion.php" class="section-box">
                <h2>INFORMACIÓN SOBRE LA ENFERMEDAD</h2>
                <p>Obtén información detallada sobre la cardiopatía en fase 3 y su tratamiento. Lorem ipsum dolor sit,
                    amet consectetur adipisicing elit. Libero, neque dicta odit facere sequi doloribus nesciunt
                    dignissimos et officiis voluptatibus quis nobis dolorem! Expedita, veritatis accusantium reiciendis
                    illum cumque maxime?</p>
            </a>
            <a href="../blog/nutricion.php" class="section-box">
                <h2>CONSEJOS DE NUTRICIÓN</h2>
                <p>Consulta consejos de alimentación saludable para pacientes con cardiopatía. Lorem ipsum dolor sit
                    amet consectetur, adipisicing elit. Facilis quo voluptatem alias doloremque incidunt eligendi nihil
                    nemo, deserunt, minus quidem officiis. Ipsum autem asperiores deleniti perferendis dolores voluptate
                    fugit sapiente.</p>
            </a>
            <a href="../conocenos/conocenos.php" class="section-box">
                <h2>CONÓCENOS</h2>
                <p>Descubre quiénes somos y nuestro compromiso con la salud de los pacientes. Lorem, ipsum dolor sit
                    amet consectetur adipisicing elit. Laudantium quis quae non. Doloribus vel, laudantium facere culpa
                    odio blanditiis rerum sequi accusamus consequatur mayores odit eum perspiciatis tenetur soluta
                    voluptas!</p>
            </a>
        </div>
    </main>
    <footer>
        <div class="footer-cont">
            <a href="index.php">Derechos de Autor © 2024 - Mi Sitio Web</a>
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