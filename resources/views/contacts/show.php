
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>views/show.php</h1>
    <a href="/contacts">volver</a>
    <a href="/contacts/<?= $contact['id']?>/edit">Editar</a>
    <p> nombre: <?= $contact['name'] ?></p>
    <p> email: <?= $contact['email'] ?></p>
    <p> phone: <?= $contact['phone'] ?></p>
    <form action="/contacts/<?= $contact['id']?>/delete" method="POST">
    <button>Eliminar</button>
    </form>

</body>
</html>