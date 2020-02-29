<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>PERFIL
                    <div class="page-title-subheading">En esta pantalla ingresaremos los productos que tiene la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <div class="justify-content-end mb-3 d-none" id="containerAgregarImagen">
        <button class="btn btn-primary" id="btnAgregarImagen">Agregar Imagen</button>
    </div> -->

    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Registrar del Trabajador
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="formActualizarTrabajador" autocomplete="off" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="nombreTrabajador">NOMBRE:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreTrabajador"
                                    id="nombreTrabajador" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Trabajador
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="apellidoTrabajador">APELLIDO:</label>
                                <input type="text" class="form-control form-control-sm" name="apellidoTrabajador"
                                    id="apellidoTrabajador" required>
                                <div class="invalid-feedback">
                                    Ingresar Apellido del Trabajador
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="emailTrabajador">CORREO ELECTRÓNICO:</label>
                                <input type="email" class="form-control form-control-sm" name="emailTrabajador"
                                    id="emailTrabajador" required>
                                <div class="invalid-feedback">
                                    Ingresar Correo Electrónico del Trabajador
                                </div>
                            </div>
                            <button class="btn btn-outline-success" type="submit">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-save fa-w-20"></i>
                                </span>Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    FORMULARIO PARA ACTUALIZAR CONTRASEÑA
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="formActualizarPassword" autocomplete="off" novalidate>
                        <div class="form-row">
                            <div class="col-md-6 form-group">
                                <label for="passwordTrabajador1">Ingresar Contraseña:</label>
                                <input type="password" class="form-control form-control-sm" name="passwordTrabajador1"
                                    id="passwordTrabajador1" required>
                                <div class="invalid-feedback">
                                    Ingresar la contraseña
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="passwordTrabajador2">Confirmar Contraseña:</label>
                                <input type="password" class="form-control form-control-sm" name="passwordTrabajador2"
                                    id="passwordTrabajador2" required>
                                <div class="invalid-feedback">
                                    Repita la contraseña
                                </div>
                            </div>
                            <button class="btn btn-outline-success" type="submit">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-save fa-w-20"></i>
                                </span>Actualizar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="<?php echo SERVER_URL; ?>/script/perfil-view.js"></script>