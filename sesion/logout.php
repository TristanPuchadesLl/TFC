<?php
// Iniciar sesión
session_start();

// Destruir todas las sesiones
session_unset();
session_destroy();

// Redirigir al inicio
header("Location: ../index/index.php");
exit();
?>
