<?php
    $mostrarNotificacion = ControladorFormularios::ControladorMostrarNotificaciones(null, null);
?>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Fecha</th>
        <th>Hora</th>
        <th>Tipo de Rutina</th>
        <th>Lugar</th>
        <th>Acciones</th>
    </tr>
    </thead>

    <tbody>

        <?php foreach ($mostrarNotificacion as $key => $value): ?> 

            <tr>                
                <td><?php echo $value["fecha"]; ?></td>
                <td><?php echo $value["hora"]; ?></td>
                <td><?php echo $value["tipo_rutina"]; ?></td>
                <td><?php echo $value["lugar"]; ?></td> 
                <td>
                    <div class="btn-group"> 
                        <a href="rutinas.php?ruta=editar&id=<?php echo $value["id"]; ?>" class="btn btn-primary"><i class="fa-solid fa-pencil"></i></a>
                        <form method="POST">
                            <input type="hidden" value="<?php echo $value["id"]; ?>" name="eliminar_registro">
                            <button class="btn btn-danger" type="submit"><i class="fa-regular fa-trash-can"></i></button>

                            <?php 
                                $eliminar = new ControladorFormularios();
                                $eliminar-> controladorEliminar();
                            ?>
                        </form>
                        
                    </div>
                </td>
            </tr>

        <?php endforeach ?>


    </tbody>
</table>