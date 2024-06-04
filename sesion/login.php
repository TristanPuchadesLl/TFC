<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../index/estilos/style.css">
</head>
<style>
    form {
    max-width: 400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #C1C7E7;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-weight: bold;
}

form input {
    width: calc(100% - 20px);
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
}

form button {
    width: 100%;
    padding: 10px;
    background-color: #c10039;
    color: white;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
}

form button:hover {
    background-color: #9e2e37;
}
</style>

<body>
    <header>
    <?php include '../menu.php'; ?>
    </header>
    <main>
        <h2>Iniciar Sesión</h2>
        <form action="procesos-login.php" method="post">
            <label for="username">Nombre de usuario:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Iniciar sesión</button>
        </form>

    </main>
    <footer>
        <div class="footer-cont">
            <a href="../index/index.php">Derechos de Autor © 2024 - CardioWeb</a>
            <a href="contacto.html">Contacto</a>
        </div>
    </footer>
</body>

</html>