<?php

/* crear notificaciones */  

class ControladorFormularios{

    static public function crearRutina(){  
        
        if(isset($_POST['crear_fecha'])){ 
            
            $tabla = "notificaciones"; 
            $datos = array(
                "fecha" => $_POST['crear_fecha'],
                "hora" => $_POST['crear_hora'],
                "tipo_rutina" => $_POST['crear_rutina'],
                "lugar" => $_POST['crear_lugar']);
            
            $respuesta = ModeloFormularios::modeloCrearNotificacion($tabla, $datos); 

            return $respuesta; 
            
        }
    }
    
    /*mostrar registros de la tabla en la vista*/

    static public function ControladorMostrarNotificaciones($columna, $valor){

        $tabla = "notificaciones"; 

        $respuesta = ModeloFormularios::modeloMostrarNotificaciones($tabla, $columna, $valor);  
        return $respuesta; 
        
    }

    

    /*Editar notificacion  */
    public function controladorEditar() {

        if(isset($_POST['editar_fecha'])){
            

            $tabla = "notificaciones";
            $datos = array(
                "id" => $_POST['id_notificacion'],
                "fecha" => $_POST['editar_fecha'],
                "hora" => $_POST['editar_hora'],
                "tipo_rutina" => $_POST['editar_rutina'],
                "lugar" => $_POST['editar_lugar']);

            $respuesta = ModeloFormularios::modeloEditar($tabla, $datos);

            if($respuesta == "ok"){

                echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';
                    echo '<div class="alert alert-success">El usuario se ha actualizado correctamente</div>';

            }
            
        }
    }

    /* eliminar notificaciones */

    public function controladorEliminar(){

        if(isset($_POST['eliminar_registro'])){

            $tabla = "notificaciones";
            $valor = $_POST['eliminar_registro'];
            
            $respuesta = ModeloFormularios::modeloEliminar($tabla, $valor);

            if($respuesta == "ok"){

                echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }

                        window.location = "rutinas.php?ruta=inicio";
                    </script>';
                    

            }
        }
    }

}


/* método no estático
    public function ctrRegistro(){
        if(isset($_POST['nombre'])){
            echo $_POST['nombre'];
        }
    }
    */