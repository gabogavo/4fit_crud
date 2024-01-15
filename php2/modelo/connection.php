<?php  /* archivo para crear la conexion a la base de datos*/

class Connection{
    //Parametros del PO
    //PDO("Nombre del Servidor; base de datos", "ususario", "contraseña")
    // mysql=driver

    static public function connect(){
 /*static porque va a returnar */
        $link = new PDO("mysql:host=localhost;dbname=dbloginsena", "root", ""); //aca el profe tiene host=localhost:3310 por el cambio de puerto, lo que se ha hecho con el services.msc para que siga siendo el 3306

        $link->exec("set names utf8"); /* objeto $link exec metodo utf8 latino */

        return $link;  /*retorna el objeto $link (static) */

    }
    

}