<?php

    if(isset($_GET["id"])){

        $columna = "id";
        $valor = $_GET["id"];

        $notificaciones = ControladorFormularios::ControladorMostrarNotificaciones($columna, $valor);
    };
     
?>
<div class="d-flex justify-content-center text-center">

    <form class="p-3 bg-light" method="POST">
            <label for="tipo_rutina"><h5>Fecha</h5></label>            
            <p>Previa: <?php echo $notificaciones["fecha"] ?></p> <input type="date" class="form-control" value="<?php echo $notificaciones["fecha"] ?>" name="editar_fecha" placeholder="fecha">
            <label for="tipo_rutina"><h5>Hora</h5></label>
            <p>Previa: <?php echo $notificaciones["hora"] ?></p>
            <input type="time" class="form-control" value="<?php echo $notificaciones["hora"] ?>"name="editar_hora" placeholder="hora">
            <label for="tipo_rutina"><h5>Tipo de Rutina</h5></label>
            <p>Previa: <?php echo $notificaciones["tipo_rutina"] ?></p>
            <select class="form-control" value="<?php echo $notificaciones["tipo_rutina"] ?>" name="editar_rutina" id="tipo_rutina">
                <option value="Fuerza">Fuerza</option>
                <option value="Funcional">Funcional</option>
                <option value="Resistencia">Resistencia</option>
            </select>
            <label for="lugar"><h5>Lugar</h5></label>
            <p>Previa: <?php echo $notificaciones["lugar"] ?></p>
            <select class="form-control" value="<?php echo $notificaciones["lugar"] ?>" name="editar_lugar" id="lugar">
                <option value="Casa">En Casa</option>
                <option value="Gimnasio">En el Gimnasio</option>
                <option value="Parque">En el Parque</option>
            </select>
            <input type="hidden" name="id_notificacion" value="<?php echo $notificaciones["id"] ?>">

            <button type="submit" class="btn btn-primary">Actualizar</button>

            <?php 
                $editar = new ControladorFormularios();
                $editar-> controladorEditar();
            ?>
    </form>

</div>