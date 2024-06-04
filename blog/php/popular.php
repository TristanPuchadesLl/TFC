<?php
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

// Consulta para obtener los posts más gustados
$sql_popular = "SELECT post_id, COUNT(*) as like_count FROM likes GROUP BY post_id ORDER BY like_count DESC LIMIT 5";
$result_popular = $conn->query($sql_popular);

// Mostrar los posts populares en la barra lateral
if ($result_popular->num_rows > 0) {
    echo "<div class='popular-posts'>";
    echo "<h2>Posts Populares</h2>";
    echo "<ul>";
    // Mostrar los IDs de los posts más gustados
    while ($row_popular = $result_popular->fetch_assoc()) {
        $post_id = $row_popular["post_id"];
        // Consulta para obtener el título del post
        $post_query = "SELECT titulo FROM posts WHERE id = $post_id";
        $post_result = $conn->query($post_query);
        if ($post_result->num_rows > 0) {
            $post_title = $post_result->fetch_assoc()["titulo"];
            echo "<li>$post_title</a></li>";
        }
    }
    echo "</ul>";
    echo "</div>"; // Cierra div.popular-posts
} else {
    echo "<div class='popular-posts'>";
    echo "No hay posts populares aún.";
    echo "</div>"; // Cierra div.popular-posts
}

// Cerrar conexión
$conn->close();
?>
