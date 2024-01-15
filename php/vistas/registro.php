<h3>Registro</h3>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="POST">

        <div class="mb-3 mt-3">
            <label for="nombre" class="form-label">Nombre:</label> <!--for igual al ID del input-->
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-regular fa-user"></i></span>         
                </div> 
                <input type="text" class="form-control" id="nombre" name="registro_nombre" required>        
            </div>        
        </div>

        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>         
                </div> 
                <input type="email" class="form-control" id="email" name="registro_email" required>     
            </div>        
        </div>

        <div class="mb-3 mt-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>         
                </div> 
                <input type="password" class="form-control" id="pwd" name="registro_password" required>  
            </div>        
        </div>
    
        <button type="submit" class="btn btn-primary">Enviar</button>

        <?php
      
            $registro = ControladorFormularios::ctrRegistro(); /* estático*/
                if($registro == "ok"){

                    echo '<script>
                        if (window.history.replaceState){
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';
                    echo '<div class="alert alert-success">Registro Exitoso</div>';
                }

              /* instanciar para no estático 
            $registro = new ControladorFormularios();
            $registro-> ctrRegistro();*/
        ?>

    </form>

</div>