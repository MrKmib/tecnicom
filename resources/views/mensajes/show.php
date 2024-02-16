
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
     body {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
        background: #f3c9f3;
    }
    
    .card {
        width: 300px;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
        display: flex;
        flex-direction: column;
    }
    
    .card img {
        width: 100%;
        border-radius: 50%;
    }
    
    .card h2 {
        margin-top: 10px;
        font-size: 1.5rem;
        color: #333;
    }
    
    .card p {
        margin-top: 10px;
        font-size: 1rem;
        color: #666;
    }
    button{
        padding: 2px;
        background: blue;
        color: azure;
        cursor: pointer;
    }
    button:hover{
        background: red;
    }
</style>
<body>
    
    
    <div class="card">
        <img src="https://i.pinimg.com/564x/5f/03/10/5f0310152c8429dfbc441e99d5a8e33e.jpg" alt="Avatar">
        <h1>Mensaje de <?= $mensaje['nombre'] ?> </h1>
        <p> nombre: <?= $mensaje['nombre'] ?></p>
        <p> email: <?= $mensaje['email'] ?></p>
        <p> tema: <?= $mensaje['tema'] ?></p>
        <p> mensaje: <?= $mensaje['mensaje'] ?></p>
        <form action="/mensajes/<?=$mensaje['id']?>/delete" method="POST">
            <button type="submit">delete</button>
        </form>
        <a href="/mensajes">volver</a>
    </div>
</body>
</html>