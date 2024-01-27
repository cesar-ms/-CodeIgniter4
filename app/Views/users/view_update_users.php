    <?php
    $id = $datos[0]['id'];
    $usuario = $datos[0]['usuario'];
    $password = $datos[0]['password'];
    $tipo = $datos[0]['tipo'];
    $nombre = $datos[0]['nombre'];
    $ap_paterno = $datos[0]['ap_paterno'];
    $ap_materno = $datos[0]['ap_materno'];
    $sexo = $datos[0]['sexo'];
    $email = $datos[0]['email'];
    $telefono = $datos[0]['telefono'];
    $codigo_postal = $datos[0]['codigo_postal'];
    $colonia = $datos[0]['colonia'];
    $delegacion = $datos[0]['delegacion'];
    $estado = $datos[0]['estado'];
    $status = $datos[0]['status'];
    $fecha_registro = $datos[0]['fecha_registro'];
    ?>

    <div class="container pt-5 pb-5">
        <div class="mb-5">
            <h1>Actualizar usuario</h1>
        </div>

        <form class="row g-3 " action="<?php echo base_url('/actualizar') ?>" method="POST">
            <input type="text" hidden class="form-control" name="id" id="id" value="<?php echo $id ?>" required>
            <div class="col-md-4">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" value="<?php echo $nombre ?>" required>
                <p class="text-danger"> <?= session('errors.nombre') ?></p>
            </div>
            <div class="col-md-4">
                <label for="ap_paterno" class="form-label">Apellido Paterno</label>
                <input type="text" class="form-control" name="ap_paterno" id="ap_paterno" value="<?php echo $ap_paterno ?>" required>
                <p class="text-danger"> <?= session('errors.ap_paterno') ?></p>

            </div>
            <div class="col-md-4">
                <label for="ap_materno" class="form-label">Apellido Materno</label>
                <input type="text" class="form-control" name="ap_materno" id="ap_materno" value="<?php echo $ap_materno ?>" required>
                <p class="text-danger"> <?= session('errors.ap_materno') ?></p>

            </div>
            <div class="col-md-3">
                <label for="sexo" class="form-label">Sexo</label>
                <select class="form-select" name="sexo" id="sexo" value="<?php echo $sexo ?>" required>
                    <option selected disabled value="">Selecciona una opción</option>
                    <?php if ($sexo == 'Femenino') :    ?>
                        <option selected>Femenino</option>
                        <option>Masculino</option>
                    <?php else :    ?>
                        <option>Femenino</option>
                        <option selected>Masculino</option>
                    <?php endif    ?>
                </select>
                <p class="text-danger"> <?= session('errors.sexo') ?></p>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email ?>" required>
                <p class="text-danger"> <?= session('errors.email') ?></p>

            </div>

            <div class="col-md-4">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="tel" class="form-control" name="telefono" id="telefono" value="<?php echo $telefono ?>" required>
                <p class="text-danger"> <?= session('errors.telefono') ?></p>
            </div>

            <div class="mt-5 mb-2">
                <h3>Dirección</h3>
            </div>

            <div class="col-md-4">
                <label for="codigo_postal" class="form-label">Código postal</label>
                <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" value="<?php echo $codigo_postal ?>" required>
                <p class="text-danger"> <?= session('errors.codigo_postal') ?></p>

            </div>

            <div class="col-md-4">
                <label for="colonia" class="form-label">Colonia</label>
                <input type="text" class="form-control" name="colonia" id="colonia" value="<?php echo $colonia ?>" required>
                <p class="text-danger"> <?= session('errors.colonia') ?></p>

            </div>

            <div class="col-md-4">
                <label for="delegacion" class="form-label">Delegación o Municipio</label>
                <input type="text" class="form-control" name="delegacion" id="delegacion" value="<?php echo $delegacion ?>" required>
                <p class="text-danger"> <?= session('errors.delegacion') ?></p>

            </div>

            <div class="col-md-4">
                <label for="estado" class="form-label">Estado</label>
                <input type="text" class="form-control" name="estado" id="estado" value="<?php echo $estado ?>" required>
                <p class="text-danger"> <?= session('errors.estado') ?></p>

            </div>

            <div class="mt-5 mb-2">
                <h3>Perfil</h3>
            </div>

            <div class="col-md-4">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" name="usuario" id="usuario" value="<?php echo $usuario ?>" required>
                <p class="text-danger"> <?= session('errors.usuario') ?></p>
            </div>

            <input type="password" hidden="form-control" name="password" id="password" value="<?php echo $password ?>" required>

            <input type="datetime" hidden="form-control" name="fecha_registro" id="fecha_registro" value="<?php echo $fecha_registro ?>" required>

            <div class="col-md-4">
                <label for="status" class="form-label">Estatus</label>
                <select class="form-select" name="status" id="status" required>
                    <option selected disabled value="<?php echo $status ?>">Selecciona una opción</option>
                    <?php if ($status == 'Activo') :    ?>
                        <option selected>Activo</option>
                        <option>Inactivo</option>
                    <?php else :    ?>
                        <option>Activo</option>
                        <option selected>Inactivo</option>
                    <?php endif    ?>
                </select>
                <p class="text-danger"> <?= session('errors.status') ?></p>
            </div>

            <div class="col-md-4">
                <label for="tipo" class="form-label">Tipo De Usuario</label>
                <select class="form-select" name="tipo" id="tipo" required>
                    <option selected disabled value="<?php echo $tipo ?>">Selecciona una opción</option>
                    <?php if ($tipo == 'Administrativo') : ?>
                        <option selected>Administrativo</option>
                        <option>Administrativo-Operativo</option>
                        <option>Operativo</option>
                    <?php elseif ($tipo == 'Administrativo-Operativo') :    ?>
                        <option>Administrativo</option>
                        <option selected>Administrativo-Operativo</option>
                        <option>Operativo</option>
                    <?php else :    ?>
                        <option>Administrativo</option>
                        <option>Administrativo-Operativo</option>
                        <option selected>Operativo</option>
                    <?php endif    ?>
                </select>
                <p class="text-danger"> <?= session('errors.tipo') ?></p>

            </div>

            <div class="row justify-content-end">
                <div class="col-1">
                    <button class="btn btn-primary justify-content-right" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </div>