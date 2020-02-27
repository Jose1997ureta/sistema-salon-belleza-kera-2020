<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>IMAGEN HOME
                    <div class="page-title-subheading">En esta pantalla ingresaremos las Imagenes que se mostrarán el la Pantalla Principal
                    </div>
                </div>
            </div>

        </div>
    </div>

    <form class="needs-validation" id="formRegistrarImagenHome" autocomplete="off" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        FORMULARIO DE REGISTRAR IMAGEN HOME
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-12 form-group ">
                                <label for="descripcionProducto">Título Imagen:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloImagen"
                                    id="tituloImagen">
                                <div class="invalid-feedback">
                                    Ingresar Titulo de la Imágen
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="imagenHome" class="">Imágen</label>
                                <input name="imagenHome" id="imagenHome" type="file"
                                    class="form-control-file" required>
                                <div class="invalid-feedback">
                                    Ingresar una Imagen para el Home
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-save fa-w-20"></i>
                            </span>Grabar
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Listado de las Imagenes del Home
                    </div>
                    <div class="card-body">
                        <div id="listarImagenHome" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo SERVER_URL; ?>/script/imagen-home-view.js"></script>