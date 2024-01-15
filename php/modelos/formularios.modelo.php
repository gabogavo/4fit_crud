<?php

require_once "conexion.php";

class ModeloFormularios{
    //este es el registro

    static public function modeloRegistro($tabla, $datos){  /* tablas y datos es lo que recibe */
        /* prepare() = prepara sentencia SQL para ser ejecutada por el metodo PDStatement::execute().
        Esta sentencia puede contener 0 o + marcadores de parametros(:name) o con signos de interrogación (?) */
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre_completo, correo, contrasena) VALUES (:nombre, :email, :password)");

          /*bindParama = usar :nombre y asignarle el dato que va a tener dentro VALUES*/
        $stmt->bindParam(":nombre", $datos["nombre_completo"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["correo"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["contrasena"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        } else {
            
            print_r(Conexion::conectar()->errorInfo());

        }
        
        $stmt->close();
        $stmt = null;
    }

    static public function modeloIngreso($tabla, $columna, $valor){

        if($columna == null && $valor == null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY id DESC");
            $stmt->execute();
    
            return $stmt -> fetchAll();  /*muestre todo en la base de datos */

        } else {

            $stmt = Conexion::conectar()->prepare("SELECT *FROM $tabla WHERE $columna = :$columna ORDER BY id DESC");
           
            $stmt->bindParam(":".$columna,$valor, PDO::PARAM_STR);

            $stmt->execute();
    
            return $stmt -> fetch();

        }

       

        $stmt->close(); /*cerrar la conexion para que no quede abierto por la seguridad independientemente si  se hizo mal o bien */
        $stmt = null; /*que el objeto lo deje vacio */
    }

}

