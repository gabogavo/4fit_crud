<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";

/* <-- Esto es SOLO para probar la conexión, por razones de seguridad no se debe hacer-->
require_once "modelos/conexion.php";

$conexion = Conexion::conectar();

echo var_dump($conexion);
*/

$plantilla = new CargarPlantilla();
$plantilla->cargarPlantilla();