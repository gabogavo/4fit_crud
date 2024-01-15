<h3>Ingreso</h3>

<div class="d-flex justify-content-center text-center">

    <form class="p-5 bg-light" method="POST">

        
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Correo electrónico:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-at"></i></span>         
                </div> 
                <input type="email" class="form-control" id="email" name="ingreso_email" required>     
            </div>        
        </div>

        <div class="mb-3 mt-3">
            <label for="pwd" class="form-label">Contraseña:</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text"><i class="fa-solid fa-lock"></i></span>         
                </div> 
                <input type="password" class="form-control" id="pwd" name="ingreso_password" required>  
            </div>        
        </div>
    
        <button type="submit" class="btn btn-primary">Ingresar</button>

        <?php
      
            $ingresar = new ControladorFormularios();  /* como no necesitamos respuesta lo ponemos sin :: (no es estatico) */
            $ingresar->ControladorIngreso();          
             /* instanciar para no estático 
            $registro = new ControladorFormularios();
            $registro-> ctrRegistro();*/
        ?> 

    </form>

</div>