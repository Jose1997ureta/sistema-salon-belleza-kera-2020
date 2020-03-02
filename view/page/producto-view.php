<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>PRODUCTO
                    <input type="hidden" id="idProducto" name="idProducto"
                        value="<?php (isset($_GET['id'])) ?  $id = $_GET['id'] : $id = ''; echo $id; ?>">
                    <div class="page-title-subheading">En esta pantalla ingresaremos los productos que tiene la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="justify-content-end mb-3 d-none" id="containerAgregarImagen">
        <button class="btn btn-primary" id="btnAgregarImagen">Agregar Imagen</button>
    </div>

    <form class="needs-validation" id="formRegistrarProducto" autocomplete="off" novalidate>
        <div class="row">
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Registrar Producto Español
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-6 form-group">
                                <label for="tipoProductoES">Tipo Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="tipoProductoES"
                                    id="tipoProductoES" required>
                                <div class="invalid-feedback">
                                    Ingresar Tipo del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreProductoES">Nombre Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreProductoES"
                                    id="nombreProductoES" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionProductoES">Descripcion Producto:</label>
                                <textarea name="descripcionProductoES" id="descripcionProductoES"
                                    class="form-control form-control-sm" rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionItemProductoES">Descripcion Item Producto:</label>
                                <textarea id="descripcionItemProductoES" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloBeneficioES">Título Beneficio:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloBeneficioES"
                                    id="tituloBeneficioES" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Beneficio
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionBeneficiosES">Descripcion Beneficios:</label>
                                <textarea id="descripcionBeneficiosES" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Beneficios
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloPrincipiosActivosES">Título Principios Activos:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloPrincipiosActivosES"
                                    id="tituloPrincipiosActivosES" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Principios Activos
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionPrincipiosActivosES">Descripcion Principios Activos:</label>
                                <textarea id="descripcionPrincipiosActivosES" class="form-control form-control-sm"
                                    rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Principios Activos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Registrar Producto Ingles
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-6 form-group">
                                <label for="tipoProductoEN">Tipo Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="tipoProductoEN"
                                    id="tipoProductoEN" required>
                                <div class="invalid-feedback">
                                    Ingresar Tipo del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreProductoEN">Nombre Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreProductoEN"
                                    id="nombreProductoEN" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionProductoEN">Descripcion Producto:</label>
                                <textarea name="descripcionProductoEN" id="descripcionProductoEN"
                                    class="form-control form-control-sm" rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionItemProductoEN">Descripcion Producto:</label>
                                <textarea id="descripcionItemProductoEN" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloBeneficioEN">Título Beneficio:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloBeneficioEN"
                                    id="tituloBeneficioEN" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Beneficio
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionBeneficiosEN">Descripcion Beneficios:</label>
                                <textarea id="descripcionBeneficiosEN" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Beneficios
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloPrincipiosActivosEN">Título Principios Activos:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloPrincipiosActivosEN"
                                    id="tituloPrincipiosActivosEN" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Principios Activos
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionPrincipiosActivosEN">Descripcion Principios Activos:</label>
                                <textarea id="descripcionPrincipiosActivosEN" class="form-control form-control-sm"
                                    rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Principios Activos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Registrar Producto Ruso
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-6 form-group">
                                <label for="tipoProductoRU">Tipo Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="tipoProductoRU"
                                    id="tipoProductoRU" required>
                                <div class="invalid-feedback">
                                    Ingresar Tipo del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreProductoRU">Nombre Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreProductoRU"
                                    id="nombreProductoRU" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionProductoRU">Descripcion Producto:</label>
                                <textarea name="descripcionProductoRU" id="descripcionProductoRU"
                                    class="form-control form-control-sm" rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionItemProductoRU">Descripcion Producto:</label>
                                <textarea id="descripcionItemProductoRU" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloBeneficioRU">Título Beneficio:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloBeneficioRU"
                                    id="tituloBeneficioRU" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Beneficio
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionBeneficiosRU">Descripcion Beneficios:</label>
                                <textarea id="descripcionBeneficiosRU" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Beneficios
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloPrincipiosActivosRU">Título Principios Activos:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloPrincipiosActivosRU"
                                    id="tituloPrincipiosActivosRU" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Principios Activos
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionPrincipiosActivosRU">Descripcion Principios Activos:</label>
                                <textarea id="descripcionPrincipiosActivosRU" class="form-control form-control-sm"
                                    rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Principios Activos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        Registrar Producto Frances
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-6 form-group">
                                <label for="tipoProductoFR">Tipo Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="tipoProductoFR"
                                    id="tipoProductoFR" required>
                                <div class="invalid-feedback">
                                    Ingresar Tipo del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreProductoFR">Nombre Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreProductoFR"
                                    id="nombreProductoFR" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionProductoFR">Descripcion Producto:</label>
                                <textarea name="descripcionProductoFR" id="descripcionProductoFR"
                                    class="form-control form-control-sm" rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionItemProductoFR">Descripcion Producto:</label>
                                <textarea id="descripcionItemProductoFR" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloBeneficioFR">Título Beneficio:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloBeneficioFR"
                                    id="tituloBeneficioFR" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Beneficio
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionBeneficiosFR">Descripcion Beneficios:</label>
                                <textarea id="descripcionBeneficiosFR" class="form-control form-control-sm" rows="2"
                                    required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Beneficios
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="tituloPrincipiosActivosFR">Título Principios Activos:</label>
                                <input type="text" class="form-control form-control-sm" name="tituloPrincipiosActivosFR"
                                    id="tituloPrincipiosActivosFR" required>
                                <div class="invalid-feedback">
                                    Ingresar Titulo Principios Activos
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="descripcionPrincipiosActivosFR">Descripcion Principios Activos:</label>
                                <textarea id="descripcionPrincipiosActivosFR" class="form-control form-control-sm"
                                    rows="2" required></textarea>
                                <div class="invalid-feedback">
                                    Ingresar Descripcion Principios Activos
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="main-card mb-3 card">
                    <div class="card-header">
                        FORMULARIO DE REGISTRAR IMAGEN PRODUCTO
                    </div>
                    <div class="card-body">
                        <div class="form-row form-group">
                            <div class="col-md-12 form-group">
                                <label for="imagenProductoResultado" class="">Imágen</label>
                                <input name="imagenProductoResultado" id="imagenProductoResultado" type="file"
                                    class="form-control-file" required>
                                <div class="invalid-feedback">
                                    Ingresar una Imagen para el producto
                                </div>
                            </div>
                            <div class="col-md-12 d-none mb-3" id="containerImagenResultado">
                                <img class="rounded" style="width: 300px" id="imgProductoResultado"/>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="rutaProductoVideo">Ruta Video:</label>
                                <input type="text" name="rutaProductoVideo" id="rutaProductoVideo"
                                    class="form-control form-control-sm" required>
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
        </div>
    </form>
</div>

<script src="<?php echo SERVER_URL; ?>/script/producto-view.js"></script>