<?php

require_once "controlador/notificacion.controlador.php";
require_once "controlador/formularios.controlador.php";
require_once "modelo/formularios.modelo.php";

/* <-- Esto es SOLO para probar la conexión, por razones de seguridad no se debe hacer-->
require_once "modelos/conexion.php";

$conexion = Conexion::conectar();

echo var_dump($conexion);
*/

$plantilla = new CargarNotificacion();
$plantilla->cargarNotificacion();