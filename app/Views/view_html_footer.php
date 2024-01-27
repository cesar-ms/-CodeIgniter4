<footer class="pt-4 border-top container">
    <div class="row">
        <div class="col-12 col-md text-center">
            <img class="mb-2" src="<?php echo base_url('/img/logo.png'); ?>" alt="" width="40" height="40">
            <p class="mb-3 text-muted">Telat © 2021 Todos los derechos reservados.</p>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php echo base_url('/js/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/js/bootstrap.bundle.min.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('/js/popper.min.js'); ?>"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script type="text/javascript">
    
    let mensaje = <?php echo $mensaje ?>;

    if (mensaje == 1) {
        swal(':D Esta es tu contraseña:', '¡El usuario se registró con éxito!', 'success');
    } else if (mensaje == 0) {
        swal(':(', '¡Fallo al registrar!', 'error');
    } else if (mensaje == 2) {
        swal(':D', '¡El usuario se actualizó con éxito!', 'success');
    } else if (mensaje == 3) {
        swal(':(', '¡Fallo al actualizar!', 'error');
    } else if (mensaje == 4) {
        swal(':D', '¡El usuario se actualizó con éxito!', 'success');
    } else if (mensaje == 5) {
        swal(':(', '¡Fallo al actualizar!', 'error');
    } else if (mensaje == 6) {
        swal(':(', '¡Este correo ya se encuentra registrado!, Intente con otro', 'error');
    } else if (mensaje == 7) {
        swal(':(', '¡El numero de telefono ya se encuentra registrado!,Intente con otro', 'error');
    } else if (mensaje == 8) {
        swal(':(', '¡Este usuario no esta disponible! Intente con otro', 'error');
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var input = document.getElementById('codigo_postal');

        input.addEventListener('keypress', function(e) {
            if (e.key === 'Enter') {
                $(document).on('ready', function() {
                    var url = "datos_login.php";
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: $("#formulario").serialize(),
                        success: function(data) {
                            $('#resp').html(data);
                        }
                    });
                });
            }
        });
    });
</script>

</body>

</html>