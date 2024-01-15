<?php

require_once "connection.php";

class ModeloFormularios{

    /*este es para crear nuevas notificaciones*/

    static public function modeloCrearNotificacion($tabla, $datos){  

        $stmt = Connection::connect()->prepare("INSERT INTO $tabla(fecha, hora, tipo_rutina, lugar) VALUES (:fecha, :hora, :rutina, :lugar)"); 

          
        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        $stmt->bindParam(":rutina", $datos["tipo_rutina"], PDO::PARAM_STR);
        $stmt->bindParam(":lugar", $datos["lugar"], PDO::PARAM_STR);

        if($stmt->execute()){ 

            return "ok";

        } else {
            
            print_r(Connection::connect()->errorInfo());
        }
        
        $stmt->close();  
        $stmt = null; 
    }


    /*este es para mostrar notificaciones */

    static public function modeloMostrarNotificaciones($tabla, $columna, $valor){

        if($columna == null && $valor == null){

            $stmt = Connection::connect()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') as fecha, TIME_FORMAT (STR_TO_DATE(hora, '%H:%i:%s'), '%h:%i %p') as hora FROM $tabla ORDER BY fecha DESC");
            $stmt->execute();
    
            return $stmt -> fetchAll(); 

        } else {

            $stmt = Connection::connect()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%y') as fecha, TIME_FORMAT (STR_TO_DATE(hora, '%H:%i:%s'), '%h:%i %p') as hora FROM $tabla WHERE $columna = :$columna ORDER BY fecha DESC");
           
            $stmt->bindParam(":".$columna,$valor, PDO::PARAM_STR);

            $stmt->execute();
    
            return $stmt -> fetch();

        }

       

        $stmt->close(); 
        $stmt = null; 
    }

    //editar

    static public function modeloEditar($tabla, $datos){ 

        $stmt = Connection::connect()->prepare("UPDATE $tabla SET fecha = :fecha, hora = :hora, tipo_rutina = :rutina, lugar = :lugar WHERE id = :id");

        $stmt->bindParam(":fecha", $datos["fecha"], PDO::PARAM_STR);
        $stmt->bindParam(":hora", $datos["hora"], PDO::PARAM_STR);
        $stmt->bindParam(":rutina", $datos["tipo_rutina"], PDO::PARAM_STR);
        $stmt->bindParam(":lugar", $datos["lugar"], PDO::PARAM_STR);
        $stmt->bindParam(":id", $datos["id"], PDO::PARAM_INT);

        if($stmt->execute()){

            return "ok";

        } else {
            
            print_r(Connection::connect()->errorInfo());

        }
        
        $stmt->close();
        $stmt = null;
    }

    /*eliminar notificaciones*/

    static public function modeloEliminar($tabla, $valor){ 

        $stmt = Connection::connect()->prepare("DELETE FROM $tabla WHERE id = :id");
        
        $stmt->bindParam(":id", $valor, PDO::PARAM_INT); 

        if($stmt->execute()){

            return "ok";

        } else {
            
            print_r(Connection::connect()->errorInfo());

        }
        
        $stmt->close();
        $stmt = null;
    }
}