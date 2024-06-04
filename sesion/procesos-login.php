<?php
// Iniciar sesión
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "proyecto";

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Consulta para obtener el usuario
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Usuario encontrado
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            // Contraseña correcta
            $_SESSION['username'] = $username;
            header("Location: ../index/index.php");
            exit;
        } else {
            // Contraseña incorrecta
            echo "Contraseña incorrecta.";
        }
    } else {
        // Usuario no encontrado
        echo "Usuario no encontrado.";
    }

    $stmt->close();
}

// Cerrar conexión
$conn->close();
?>