<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario de Actualizacion</h1>
    
    <form action="/contacts/<?= $contact['id'] ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input value="<?= $contact['name']?>" type="text" id="nombre" name="name" required >

        <label for="email">Correo electrónico:</label>
        <input value="<?= $contact['email']?>" type="email" id="email" name="email" required>

        <label for="phone">phone:</label>
        <input value="<?= $contact['phone']?>" type="number" id="phone" name="phone" required>


        <button type="submit">actualizar</button>
    </form>
</body>
</html>