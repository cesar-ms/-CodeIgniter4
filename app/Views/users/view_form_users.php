<?php include('api_sepomex.php'); ?>

<div class="container pt-5 pb-5">
    <div class="mb-5">
        <h1>Registrar usuario</h1>
    </div>

    <form class="row g-3 " action="<?php echo base_url('/registrar') ?>" method="POST">
        <div class="col-md-4">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="<?= old('nombre') ?>">
            <p class="text-danger"> <?= session('errors.nombre') ?></p>
        </div>
        <div class="col-md-4">
            <label for="ap_paterno" class="form-label">Apellido Paterno</label>
            <input type="text" class="form-control" name="ap_paterno" id="ap_paterno" value="<?= old('ap_paterno') ?>">
            <p class="text-danger"> <?= session('errors.ap_paterno') ?></p>
        </div>
        <div class="col-md-4">
            <label for="ap_materno" class="form-label">Apellido Materno</label>
            <input type="text" class="form-control" name="ap_materno" id="ap_materno" value="<?= old('ap_materno') ?>">
            <p class="text-danger"> <?= session('errors.ap_materno') ?></p>
        </div>
        <div class="col-md-3">
            <label for="sexo" class="form-label">Sexo</label>
            <select class="form-select" name="sexo" id="sexo" value="<?= old('sexo') ?>">
                <option selected disabled value="">Selecciona una opción</option>
                <option>Femenino</option>
                <option>Masculino</option>
            </select>
            <p class="text-danger"> <?= session('errors.sexo') ?></p>
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= old('email') ?>">
            <p class="text-danger"> <?= session('errors.email') ?></p>
        </div>

        <div class="col-md-4">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" name="telefono" id="telefono" value="<?= old('telefono') ?>">
            <span><?= isset($validation) ? $validation->getError('telefono') : '' ?></span>
            <p class="text-danger"> <?= session('errors.telefono') ?></p>
        </div>

        <div class="mt-5 mb-2">
            <h3>Dirección</h3>
        </div>

        <div class="col-md-4">
            <label for="codigo_postal" class="form-label">Código postal</label>
            <input type="text" class="form-control" name="codigo_postal" id="codigo_postal" value="<?= old('codigo_postal') ?>">
            <p class="text-danger"> <?= session('errors.codigo_postal') ?></p>
        </div>

        <div class="col-md-4">
            <label for="colonia" class="form-label">Colonia</label>
            <input type="text" class="form-control" name="colonia" id="colonia" value="<?= old('colonia') ?>">
            <p class="text-danger"> <?= session('errors.colonia') ?></p>
        </div>

        <div class="col-md-4">
            <label for="delegacion" class="form-label">Delegación o Municipio</label>
            <input type="text" class="form-control" name="delegacion" id="delegacion" value="<?= old('delegacion') ?>">
            <p class="text-danger"> <?= session('errors.delegacion') ?></p>
        </div>

        <div class="col-md-4">
            <label for="estado" class="form-label">Estado</label>
            <input type="text" class="form-control" name="estado" id="estado" value="<?= old('estado') ?>">
            <p class="text-danger"> <?= session('errors.estado') ?></p>
        </div>

        <div class="mt-5 mb-2">
            <h3>Perfil</h3>
        </div>

        <div class="col-md-4">
            <label for="usuario" class="form-label">Nombre de usuario</label>
            <input type="text" class="form-control" name="usuario" id="usuario" value="<?= old('usuario') ?>">
            <p class="text-danger"> <?= session('errors.usuario') ?></p>
        </div>

        <div class="col-md-4">
            <label for="tipo" class="form-label">Tipo de usuario</label>
            <select class="form-select" name="tipo" id="tipo" value="<?= old('tipo') ?>">
                <option selected disabled value="">Selecciona una opción</option>
                <option>Administrativo</option>
                <option>Administrativo-Operativo</option>
                <option>Operativo</option>
            </select>
            <p class="text-danger"> <?= session('errors.tipo') ?></p>
        </div>

        <div class="row justify-content-end">
            <div class="col-1">
                <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
        </div>
    </form>
</div>