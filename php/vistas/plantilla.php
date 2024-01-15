<?php

session_start();

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
    <title>Ingresa a 4FIT</title>
    <link rel="icon" href="../../img/icono.ico">
</head>

<body>
        <div class="container-fluid">
            <a  href="../index.html"><img width="7%" src="../img/dragon1.png" hspace="45%" vspace="1%"></a>            
        </div>

        <div class="container-fluid bg-light">
            <div class="container">
                <ul class="nav nav-justified py-2 nav-pills">

                <?php if (isset($_GET['ruta'])): ?>
                    

                    <?php if ($_GET['ruta'] == 'registro'): ?>
                        <li class="nav-items">
                            <a href="index.php?ruta=registro" class="nav-link active">Registro</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-items">
                            <a href="index.php?ruta=registro" class="nav-link">Registro</a>
                        </li>
                    <?php endif ?>
                    <?php if ($_GET['ruta'] == 'ingreso'): ?>
                        <li class="nav-items">
                            <a href="index.php?ruta=ingreso" class="nav-link active">Ingresar</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-items">
                            <a href="index.php?ruta=ingreso" class="nav-link">Ingresar</a>
                        </li>
                    <?php endif ?>

                    

                    
                <?php else: ?>
                    
                    <li class="nav-items">
                            <a href="index.php?ruta=registro" class="nav-link">Registro</a>
                    </li>
                    <li class="nav-items">
                            <a href="index.php?ruta=ingreso" class="nav-link active">Ingresar</a>
                    </li> 
                    
                    
                <?php endif ?>

                </ul>
            </div>
        </div>

        <div class="container-fluid py-5">
            <div class="container">
                <?php
                if(isset($_GET['ruta'])){
                    if($_GET['ruta'] == "ingreso" || $_GET['ruta'] == "registro" || $_GET['ruta'] == "salir"){
                        include $_GET['ruta'].".php";
                    } else{
                        echo '<script>
                        window.location="../404.html"
                        </script>';
                    }

                } else{
                    include "ingreso.php";
                }
                
                ?>

            </div>
        </div>
</body>
</html>