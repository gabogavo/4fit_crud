<?php

session_start();  /*se establece como sesion */

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CDN -->
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/423f5e83ae.js" crossorigin="anonymous"></script>
    <title>Modelo Vista Controlador</title>
</head>

<body>
        <div class="container-fluid ">
            <a class="logologin" href="../dashboard.php"><img src="../img/dragon1.png" width="90px"></a>
            <h2 class="text-center">PROGRAMA TUS RUTINAS</h2> <!--py-3 es para que separe-->
        </div>

        

        <div class="container-fluid bg-light">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET['ruta'])): ?>
                    <?php if ($_GET['ruta'] == 'inicio'): ?>
                        <li class="nav-items">
                            <a href="rutinas.php?ruta=inicio" class="nav-link active">Mis notificaciones</a> 
                    <?php else: ?>
                        <li class="nav-items">
                            <a href="rutinas.php?ruta=inicio" class="nav-link">Mis notificaciones</a>
                        </li>
                    <?php endif ?>
                    
                    <?php if ($_GET['ruta'] == 'nueva.notificacion'): ?>
                        <li class="nav-items">
                            <a href="rutinas.php?ruta=nueva.notificacion" class="nav-link active">Crear mi notificación</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-items">
                            <a href="rutinas.php?ruta=nueva.notificacion" class="nav-link">Crear mi notificación</a>
                        </li>
                    <?php endif ?>                   

                    <?php if ($_GET['ruta'] == 'salir'): ?>
                        <li class="nav-items">
                            <a href="../dashboard.php" class="nav-link active">Salir</a> 
                        </li>
                    <?php else: ?>
                        <li class="nav-items">
                            <a href="../dashboard.php" class="nav-link">Salir</a>
                        </li>
                    <?php endif ?>

                <?php else: ?>
                    <li class="nav-items">
                        <a href="rutinas.php?ruta=inicio" class="nav-link active">Mis notificaciones</a>
                    </li>   
                    <li class="nav-items">
                            <a href="rutinas.php?ruta=nueva.notificacion" class="nav-link">Crear mi notificación</a>
                    </li>            
                    <li class="nav-items">
                        <a href="../dashboard.php" class="nav-link">Salir</a>
                    </li>
                    
                <?php endif ?>

                </ul>
            </div>
        </div>
        

        <div class="container-fluid py-5">
            <div class="container">
                <?php
                if(isset($_GET['ruta'])){
                    if($_GET['ruta'] == "nueva.notificacion" || $_GET['ruta'] == "editar" ||$_GET['ruta'] == "inicio"){
                        include $_GET['ruta'].".php";
                    } else{
                        include "404.php";
                    }

                } else{
                    include "inicio.php"; 
                }
                
                ?>

            </div>
        </div>
</body>
</html>