<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Post</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
    <link rel="stylesheet" href="estilos/styleblog.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        main {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .formulario {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
            border-radius: 10px;
            box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 2px 6px 2px;
            width: 100%;
            max-width: 600px;
            margin-bottom: 10%;
        }

        .formulario label {
            margin-bottom: 10px;
            font-weight: bold;
            color: #333;
        }

        .formulario input[type="text"], 
        .formulario textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .formulario button[type="submit"] {
            background-color: #c10039;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        .formulario button[type="submit"]:hover {
            background-color: #9e2e37;
        }

        .error {
            color: red;
            font-size: 14px;
        }
    </style>
</head>
<body>
<header>
    <?php include '../menu.php'; ?>
</header>
<main>
    <h1>Crear Nuevo Post</h1>
    <div class="formulario">
        <?php
        // Procesar el formulario cuando se envía
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verificar y procesar los datos del formulario
            $titulo = $_POST["titulo"];
            $contenido = $_POST["contenido"];

            // Validar los datos si es necesario

            // Conectar a la base de datos
            $servername = "localhost";
            $username = "admin";
            $password = "admin";
            $dbname = "proyecto";

            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                die("Conexión fallida: " . $conn->connect_error);
            }

            // Insertar el nuevo post en la base de datos
            $sql = "INSERT INTO posts (titulo, contenido) VALUES ('$titulo', '$contenido')";

            if ($conn->query($sql) === TRUE) {
                header("Location: nutricion.php");
                exit;
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }

            $conn->close();
        }
        ?>
         
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="titulo">Título del Post:</label>
            <input type="text" id="titulo" name="titulo" required>
            
            <label for="contenido">Contenido del Post:</label>
            <textarea id="contenido" name="contenido" rows="5" required></textarea>
            
            <button type="submit">Crear Post</button>
        </form>
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