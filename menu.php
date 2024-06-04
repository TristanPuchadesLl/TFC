<?php
// Iniciar sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si el usuario ha iniciado sesión
if (isset($_SESSION['username'])) {
    $mensaje_sesion = "Sesión iniciada como " . $_SESSION['username'];
    $link_sesion = '<a href="../sesion/logout.php">Cerrar Sesión</a>';
} else {
    $mensaje_sesion = '';
    $link_sesion = '<a href="../sesion/login.php">Iniciar Sesión</a>';
}
?>
<style>
    .mensaje-sesion {
        font-size: 14px;
        color: white;
    }

    .nombre a {
        font-size: 200%;
        color: white;
        text-decoration: none;
        /* Evitar subrayado */
    }

    .nombre a:hover {
        color: #FDEBD0;
        /* Color al pasar el mouse por encima */
    }

    .session-container {
        display: flex;
        align-items: center;
        gap: 10px;
        /* Espacio entre "Sesión iniciada como" y "Cerrar Sesión" */
        margin-left: 10px;
    }

    .session-container a {
        color: white;
        /* Color del enlace "Cerrar Sesión" */
    }
</style>

<nav class="navbar">
    <div class="logo">
        <img src="../img/logo.png" alt="Logo">
    </div>
    <div class="nombre">
        <a href="../index/index.php">CardioWeb</a>
    </div>
    <div class="session-container">
        <?php if (!isset($_SESSION['username'])): ?>
            <a href="../sesion/register.php">Registrarse</a>
        <?php endif; ?>
        <?php if (isset($_SESSION['username'])): ?>
            <span class="mensaje-sesion"><?php echo $mensaje_sesion; ?></span>
            <?php echo $link_sesion; ?>
        <?php else: ?>
            <?php echo $link_sesion; ?>
        <?php endif; ?>
    </div>
</nav>