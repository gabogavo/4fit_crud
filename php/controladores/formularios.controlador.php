<?php
/*registro */
class ControladorFormularios{
    static public function ctrRegistro(){  /*se utiliza static por el return */
        if(isset($_POST['registro_nombre'])){
            
            $tabla = "usuarios";
            $datos = array(
                "nombre_completo" => $_POST['registro_nombre'],
                "correo" => $_POST['registro_email'],
                "contrasena" => $_POST['registro_password']);

            $respuesta = ModeloFormularios::modeloRegistro($tabla, $datos);

            return $respuesta;
            
        }
    }
    

    /*ingreso */

    public function ControladorIngreso(){
        if(isset($_POST['ingreso_email'])){

            $tabla = "usuarios";
            $columna = "correo";
            $valor = $_POST['ingreso_email'];

            $respuesta = ModeloFormularios::modeloIngreso($tabla, $columna, $valor);

            if($respuesta["correo"]== $_POST['ingreso_email'] && $respuesta["contrasena"] == $_POST['ingreso_password']){

                $_SESSION["autorizarIngreso"] = "ok";

                echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }

                        window.location="../dashboard.php"
                    </script>';
                   

            } else {

                echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';
                    echo '<div class="alert alert-danger">Error, email o contraseña incorrecta</div>';

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