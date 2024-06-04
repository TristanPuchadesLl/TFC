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

// Gestionar el envío de likes y eliminación de posts
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['like'])) {
        if (isset($_SESSION['username'])) {
            // Sanitizar el valor del post_id para prevenir inyección de código
            // Solo se permiten números enteros y se eliminan caracteres especiales
            $post_id = filter_var($_POST['like'], FILTER_SANITIZE_NUMBER_INT);
            $username = $_SESSION['username'];

            // Obtener el ID del usuario a partir del nombre de usuario
            // Consulta preparada para prevenir la inyección de SQL
            $sql = "SELECT id FROM users WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            $user_id = $result->fetch_assoc()['id'];

            // Verificar si el usuario ya ha dado like al post
            // Consulta preparada para prevenir la inyección de SQL
            $sql = "SELECT * FROM likes WHERE post_id = ? AND user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $post_id, $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Si ya ha dado like, eliminar el like
                // Consulta preparada para prevenir la inyección de SQL
                $sql = "DELETE FROM likes WHERE post_id = ? AND user_id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ii", $post_id, $user_id);
                $stmt->execute();
            } else {
                // Si no ha dado like, agregar el like
                // Consulta preparada para prevenir la inyección de SQL
                $sql = "INSERT INTO likes (post_id, user_id) VALUES (?, ?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ii", $post_id, $user_id);
                $stmt->execute();
            }
        } else {
            echo "Necesitas iniciar sesión para dar like.";
        }
    }

    if (isset($_POST['delete'])) {
        if (isset($_SESSION['username']) && $_SESSION['username'] === 'admin') {
            // Sanitizar el valor del post_id para prevenir inyección de código
            // Solo se permiten números enteros y se eliminan caracteres especiales
            $post_id = filter_var($_POST['delete'], FILTER_SANITIZE_NUMBER_INT);

            // Eliminar los likes asociados al post
            // Consulta preparada para prevenir la inyección de SQL
            $sql = "DELETE FROM likes WHERE post_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $post_id);
            $stmt->execute();

            // Eliminar el post
            // Consulta preparada para prevenir la inyección de SQL
            $sql = "DELETE FROM posts WHERE id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $post_id);
            $stmt->execute();
        } else {
            echo "Necesitas ser administrador para eliminar un post.";
        }
    }
}


// Recuperar posts de la base de datos
$sql = "SELECT p.id, p.titulo, p.contenido, COUNT(l.id) AS likes 
        FROM posts p 
        LEFT JOIN likes l ON p.id = l.post_id 
        GROUP BY p.id, p.titulo, p.contenido";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar posts
    while ($row = $result->fetch_assoc()) {
        echo "<div class='post'>";
        echo "<h2>" . $row["titulo"] . "</h2>";
        echo "<p>" . $row["contenido"] . "</p>";
        echo "<div class='like-container'>";
        echo "<span class='like-count'>" . $row["likes"] . " likes</span>";

        // Mostrar botón de like si el usuario ha iniciado sesión
        if (isset($_SESSION['username'])) {
            $post_id = $row['id'];
            $username = $_SESSION['username'];

            // Obtener el ID del usuario a partir del nombre de usuario
            $sql = "SELECT id FROM users WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result_user = $stmt->get_result();
            $user_id = $result_user->fetch_assoc()['id'];

            // Verificar si el usuario ya ha dado like al post
            $sql = "SELECT * FROM likes WHERE post_id = ? AND user_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ii", $post_id, $user_id);
            $stmt->execute();
            $result_like = $stmt->get_result();

            if ($result_like->num_rows > 0) {
                $like_text = "💔 Quitar Like";
            } else {
                $like_text = "❤️ Dar Like";
            }

            echo "<form method='post' action=''>";
            echo "<input type='hidden' name='like' value='" . $row["id"] . "'>";
            echo "<button type='submit' class='like-button'>" . $like_text . "</button>";
            echo "</form>";

            // Mostrar botón de eliminar si el usuario es admin
            if ($_SESSION['username'] === 'admin') {
                echo "<form method='post' action=''>";
                echo "<input type='hidden' name='delete' value='" . $row["id"] . "'>";
                echo "<button type='submit' class='delete-button'>🗑️ Eliminar Post</button>";
                echo "</form>";
            }
        } else {
            echo "<p><a href='../sesion/login.php'>Inicia sesión para dar like</a></p>";
        }

        echo "</div>";
        echo "</div>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();
?>