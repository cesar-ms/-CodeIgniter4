<div class="container pt-5 table table-responsive">
    <div class="mt-1 mb-5">
        <h1>Reporte estadístico</h1>
    </div>
    <div class="mb-3">
        <a href="<?php echo base_url('/descargar-reporte') ?>" type="button" class="btn btn-success">Descargar reporte</a>
    </div>
    <table class="table table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Usuario</th>
                <th>Nombre de usuario</th>
                <th>Correo</th>
                <th>Tipo</th>
                <th>Estatus</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($datos)) : ?>
                <?php foreach ($datos as $dato) : ?>
                    <tr>
                        <td><?php echo $dato->id ?></td>
                        <td><?php echo $dato->usuario ?></td>
                        <td><?php echo $dato->nombre . ' ' . $dato->ap_paterno ?></td>
                        <td><?php echo $dato->email ?></td>
                        <td><?php echo $dato->tipo ?></td>
                        <td><?php echo $dato->status ?></td>
                        <td class="center">
                            <a href="<?php echo base_url('/detalles' . '/' . $dato->id) ?>" type="button" class="btn btn-primary">Ver más</a>
                            <a href="<?php echo base_url('/editar' . '/' . $dato->id) ?>" type="button" class="btn btn-warning">Editar</a>
                            <a href="<?php echo base_url('/eliminar' . '/' . $dato->id) ?>" type="button" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php else : ?>
                <tr> <strong>No se han registrado usuarios.</strong> </tr>
            <?php endif ?>
        </tbody>
    </table>

</div>