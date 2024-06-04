<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

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
$post_id = $_POST['post_id'];
$user_id = $_SESSION['user_id'];

// Verificar si el usuario ya dio like
$sql_check = "SELECT * FROM likes WHERE post_id = $post_id AND user_id = $user_id";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    // El usuario ya dio like, así que se quita el like
    $sql_delete = "DELETE FROM likes WHERE post_id = $post_id AND user_id = $user_id";
    $conn->query($sql_delete);
} else {
    // El usuario no ha dado like, así que se agrega el like
    $sql_insert = "INSERT INTO likes (post_id, user_id) VALUES ($post_id, $user_id)";
    $conn->query($sql_insert);
}

// Redirigir de vuelta a la página del blog
header("Location: ../nutricion.php");
exit;
?>