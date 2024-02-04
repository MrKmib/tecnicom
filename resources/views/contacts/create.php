<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de creacion</h1>
    
    <form action="/contacts" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="name" required>

        <label for="email">Correo electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">phone:</label>
        <input type="number" id="phone" name="phone" required>


        <button type="submit">Enviar</button>
    </form>
</body>
</html>