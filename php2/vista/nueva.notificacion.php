<div class="d-flex justify-content-center text-center">
        
        <form class="p-3 bg-light" method="POST">
            <label for="tipo_rutina">Fecha</label><br>
            <input type="date" name="crear_fecha" placeholder="fecha"required><br>
            <label for="tipo_rutina">Hora</label><br>
            <input type="time" name="crear_hora" placeholder="hora" required><br>
            <label for="tipo_rutina">Tipo de Rutina</label><br>
            <select name="crear_rutina" id="tipo_rutina" required><br>
                <option value="Fuerza">Fuerza</option>
                <option value="Funcional">Funcional</option>
                <option value="Resistencia">Resistencia</option>
            </select><br>
            <label for="lugar">Lugar</label><br>
            <select name="crear_lugar" id="lugar" required><br>
                <option value="Casa">En Casa</option>
                <option value="Gimnasio">En el Gimnasio</option>
                <option value="Parque">En el Parque</option>
            </select><br>
            <br>
            <button type="submit" class="btn btn-primary">Crear</button>

            <?php
      
            $nueva = ControladorFormularios::crearRutina(); 
                if($nueva == "ok"){ 

                    echo '<script>
                        if (window.history.replaceState){ 
                            window.history.replaceState(null, null, window.location.href)
                        }
                    </script>';
                    echo '<div class="alert alert-success">Notificación creada correctamente</div>';
                }

            ?>
        </form>

</div>