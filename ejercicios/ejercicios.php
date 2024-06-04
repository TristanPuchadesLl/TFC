<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicios de Rehabilitación</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
    <link rel="stylesheet" href="../estilos/styleblog.css">
    <style>
        main{
            background-color: #C1C7E7;
        }
        .main-container {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            justify-content: space-between;
            padding: 20px;
        }

        .video-container {
            flex: 2;
        }

        .details-containerd {
            flex: 1;
            margin-left: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-width: 50%;
            min-height: 400px;
        }
        .details-containeri {
            flex: 1;
            margin-right: 20px;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            min-width: 50%;
            min-height: 400px;
        }

        .details-container h2 {
            margin-top: 0;
        }
    </style>
</head>

<body>
    <header>
        <?php include '../menu.php'; ?>
    </header>
    <main>
        <div class="main-container">
            <div class="video-container">
            <iframe  width="100%" height="400" src="https://www.youtube.com/embed/lQLsQK_M0Dw" title="INSVALATIDO 6  Calentamiento" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="details-containerd">
                <h2>Calentamiento</h2>
                <hr>
                <p>Este video está diseñado específicamente para pacientes con cardiopatía que se encuentran en la fase 3 de su recuperación. La fase 3 se centra en ejercicios de baja a moderada intensidad que ayudan a mejorar la capacidad cardiovascular sin sobrecargar el corazón. El calentamiento es una parte crucial de cualquier rutina de ejercicio, ya que prepara el cuerpo para la actividad física, reduce el riesgo de lesiones y mejora el rendimiento general.</p>
            </div>
        </div>
        <div class="main-container">
            <div class="details-containeri">
                <h2>Movilidad y estiramientos</h2>
                <hr>
                <p>Este video se centra en mejorar la movilidad y la flexibilidad mediante ejercicios de baja a moderada intensidad. Los estiramientos y ejercicios de movilidad ayudan a mantener las articulaciones y los músculos saludables, mejorar la circulación y reducir el riesgo de lesiones.</p>
            </div>
            <div class="video-container">
            <iframe  width="100%" height="400" src="https://www.youtube.com/embed/7Z5JDKEXZBM" title="Movilidad y estiramientos" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
        <div class="main-container">
            <div class="video-container">
            <iframe  width="100%" height="400" src="https://www.youtube.com/embed/syUQT4qf5vA" title="ICircuito de fuerza" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <div class="details-containerd">
                <h2>Circuito de fuerza</h2>
                <hr>
                <p>Este video esta enfocado en ejercicios de fuerza de baja a moderada intensidad. El objetivo principal es mejorar la resistencia muscular, aumentar la fuerza general y promover la salud cardiovascular de manera segura. Los ejercicios seleccionados están adaptados para minimizar el estrés cardiovascular y son apropiados para personas con restricciones físicas.</p>
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
