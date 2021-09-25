<?php
    include_once '../estructura/cabecera.php';
?>


<form class="row g-3 needs-validation" novalidate action='../accion/accionCambioDuenio.php' method="POST">
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Ingrese Nro Dni</label>
            <input type="text" class="form-control" id="nroDni" name="nroDni" placeholder="AAA 123" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Ingrese Patente</label>
            <input type="text" class="form-control" id="patente" name="patente" placeholder="AAA 123" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col md-12">
            <button class="btn btn-primary" type="submit">Enviar</button>
        </div>
    </form>

<script src="../js/validarform.js"></script>    


<?php
include_once '../estructura/footer.php';
?>