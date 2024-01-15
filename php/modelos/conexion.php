<?php

class Conexion{
    //Parametros del PO
    //PDO("Nombre del Servidor; base de datos", "ususario", "contraseña")
    // mysql=driver

    static public function conectar(){

        $link = new PDO("mysql:host=localhost;dbname=dbloginsena", "root", ""); //aca el profe tiene localhost:3310 por el cambio de puerto, lo que se ha hecho con el services.msc para que siga siendo el 3306

        $link->exec("set names utf8");

        return $link;

    }
    

}