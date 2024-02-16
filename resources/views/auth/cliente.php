<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['usuario'] !== 'user') {
    header("Location: /login");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="container">
        <h1>Cerrar sesión</h1>
        <form action="/logout" method="post">
            <button type="submit" class="logout-button" value="logout">Cerrar sesión</button>
        </form>
    </div>
</head>
<body>
    <h1> hola Clientes</h1>
</body>
</html>



