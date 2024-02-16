<?php
$title = "Mi Página";
ob_start(); // Iniciar almacenamiento en búfer de salida
?>
<div class="contenido">
        <h1> Lista de Clientes</h1>
        
        <div class="search-container">
            <form action="/mensajes" class="d-flex">
            <input name="search" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div><br>
        <table class="table" >
            <thead class="thead-dark">
            <tr>
                <th scope="col"> ID</th>
                <th scope="col"> nombre</th>
                <th scope="col"> email</th>
                <th scope="col"> tema</th>
                <th scope="col"> mensaje</th>
                <th scope="col"> action</th>

            </thead>
            <tbody>
            <?php 
            //$messages=[
            // ['id'=>'1','nombre'=>'camilo barral', 'email'=>'c@gmail.com','mensaje'=>'hola1'],
            // ['id'=>'2','nombre'=>'juan carlos', 'email'=>'jauncar@gmail.com','mensaje'=>'hola1'],
            // ['id'=>'3','nombre'=>'pedro arsenal', 'email'=>'pedroar@gmail.com','mensaje'=>'hola1'],
            // ['id'=>'4','nombre'=>'lucas morales', 'email'=>'lucasmor@gmail.com','mensaje'=>'hola1'],
            // ['id'=>'5','nombre'=>'javier salas', 'email'=>'javiersalas@gmail.com','mensaje'=>'hola1'],
        
            // ];?>
            <?php foreach($messages['data'] as $message): ?>
                <tr>
                    <th  scope="row"> <?= $message['id'] ;?></th>
                    <td  scope="row"> <?= $message['nombre'] ;?></td>
                    <td  scope="row"> <?= $message['email'] ;?></td>
                    <td  scope="row"> <?= $message['tema'] ;?></td>
                    <td  scope="row"> <?= $message['mensaje'] ;?></td>
                    <th>
                        <a href="/mensajes/<?= $message['id']?>">show</a>
                        <!-- <a href="#">edit</a> -->
                        <form action="/mensajes/<?=$message['id']?>/delete" method="POST">
                            <button type="submit">delete</button>
                        </form>
                    </th>
                </tr>
            <?php endforeach ?>

            </tbody>
        </table>
        <?php 
        $paginate = 'messages';
        require_once '../resources/views/assets/pagination.php';
        ?> 
        

    </div>


<?php
$content = ob_get_clean(); // Obtener y limpiar el contenido del búfer
require_once('layouts/layoutAdmin.php');; // Incluir el layout
?>

