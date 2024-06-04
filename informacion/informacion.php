<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información sobre la Cardiopatía</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
    <link rel="stylesheet" href="estilos/style.css">
</head>

<body>
    <header>
        <?php include '../menu.php'; ?>
    </header>
    <main>
        <div class="container">
        <section class="info-section">
            <h1>Información sobre la Cardiopatía</h1>
            <p>La cardiopatía es una condición que afecta el corazón y puede manifestarse de diversas maneras. Entre las formas más comunes de cardiopatía se encuentran la enfermedad coronaria, la insuficiencia cardíaca, y las arritmias.</p>

            <h2>Enfermedad Coronaria</h2>
            <p>La enfermedad coronaria es causada por la acumulación de placa en las arterias coronarias, lo que puede reducir el flujo de sangre al corazón. Esto puede llevar a angina (dolor en el pecho) o a un ataque al corazón.</p>

            <h2>Insuficiencia Cardíaca</h2>
            <p>La insuficiencia cardíaca ocurre cuando el corazón no puede bombear sangre de manera efectiva para satisfacer las necesidades del cuerpo. Esto puede causar fatiga, dificultad para respirar y acumulación de líquidos en los pulmones y otras partes del cuerpo.</p>

            <h2>Arritmias</h2>
            <p>Las arritmias son ritmos cardíacos irregulares que pueden causar el corazón lata demasiado rápido, demasiado lento o de manera irregular. Algunas arritmias pueden ser inofensivas, pero otras pueden ser graves y requerir tratamiento médico.</p>

            <h2>Factores de Riesgo</h2>
            <ul>
                <li>Hipertensión arterial</li>
                <li>Colesterol alto</li>
                <li>Tabaquismo</li>
                <li>Diabetes</li>
                <li>Obesidad</li>
                <li>Falta de actividad física</li>
                <li>Estrés</li>
            </ul>

            <h2>Prevención y Cuidado</h2>
            <p>La prevención y el cuidado de la cardiopatía incluyen cambios en el estilo de vida, como una dieta saludable, ejercicio regular, y la eliminación de hábitos nocivos como fumar. También es importante seguir las recomendaciones médicas y tomar los medicamentos prescritos.</p>

            <h2>Tratamiento</h2>
            <p>El tratamiento de la cardiopatía puede variar según el tipo y la gravedad de la enfermedad. Puede incluir cambios en el estilo de vida, medicamentos, procedimientos médicos o cirugía. Es fundamental seguir las indicaciones del equipo médico y asistir a todas las citas de seguimiento.</p>
        </section>
        <aside class="reference-section">
                <h2>Páginas de Referencia</h2>
                <ul>
                    <li><a href="https://www.who.int" target="_blank">Página web de la Organización Mundial de la Salud</a></li>
                    <li><a href="https://enfermeriaencardiologia.com/wp-content/uploads/cap_04.pdf" target="_blank">Documentacion de Asociación española de Enfermería en Cardiología</a></li>
                    <li><a href="https://www.insvacor.es/" target="_blank">Insvacor, página con documentación sobre la enfermedad</a></li>
                    <li><a href="https://fundaciondelcorazon.com/informacion-para-pacientes/tratamientos/rehabilitacion-cardiaca.html" target="_blank">Fundación española del corazón</a></li>
                </ul>
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
