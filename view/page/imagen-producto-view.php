<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>IMAGEN PRODUCTO
                    <input type="hidden" id="idProducto" name="idProducto"
                        value="<?php (isset($_GET['id'])) ?  $id = $_GET['id'] : $id = ''; echo $id; ?>">
                    <div class="page-title-subheading">En esta pantalla ingresaremos los productos que tiene la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>

    <form class="needs-validation" id="formRegistrarImagenProducto" autocomplete="off" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        FORMULARIO DE REGISTRAR IMAGEN PRODUCTO
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-12 form-group">
                                <label for="imagenProducto" class="">Imágen</label>
                                <input name="imagenProducto[]" id="imagenProducto" type="file"
                                    class="form-control-file" required>
                                <div class="invalid-feedback">
                                    Ingresar una Imagen para el producto
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
                        Listado de las Imagenes del Producto
                    </div>
                    <div class="card-body">
                        <div id="listarImagenProducto" class="table-responsive"></div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script src="<?php echo SERVER_URL; ?>/script/producto-view.js"></script>