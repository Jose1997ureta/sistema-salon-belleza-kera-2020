<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>PRODUCTO                    
                    <div class="page-title-subheading">En esta pantalla ingresaremos los productos que tiene la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Formulario de Registro del Producto
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="form-registrar-producto" autocomplete="off" novalidate>
                        <div class="form-row form-group">
                            <div class="col-md-12 form-group">
                                <label for="categoriaProducto">Categoría:</label>
                                <select class="form-control-sm form-control" required name="categoriaProducto"
                                    id="categoriaProducto">
                                </select>
                                <div class="invalid-feedback">
                                    Ingresar Categoría
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="nombreProducto">Producto:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreProducto"
                                    id="nombreProducto" placeholder="Nombre del Producto" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="modeloProducto">Modelo:</label>
                                <input type="text" class="form-control form-control-sm" name="modeloProducto"
                                    id="modeloProducto" placeholder="Nombre del Modelo" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre del Modelo
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="marcaProducto">Marca:</label>
                                <select class="form-control-sm form-control" required name="marcaProducto"
                                    id="marcaProducto">
                                </select>
                                <div class="invalid-feedback">
                                    Ingresar Marca del Producto
                                </div>
                            </div>
                            <div class="col-md-12 d-block form-group">
                                <label for="precioProducto">Precio:</label>
                                <input type="text" class="form-control form-control-sm col-md-6" name="precioProducto"
                                    id="precioProducto" placeholder="Precio del Producto" required>
                                <div class="invalid-feedback">
                                    Ingresar Precio del Producto
                                </div>
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreCheckboxStock">Stock:</label>
                                <input type="checkbox" class="d-block" name="nombreCheckboxStock"
                                    id="nombreCheckboxStock">
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="nombreCheckboxNuevo">Nuevo:</label>
                                <input type="checkbox" class="d-block" name="nombreCheckboxNuevo"
                                    id="nombreCheckboxNuevo" checked>
                            </div>
                            <div class="col-md-6 form-group d-none" id="contenedorCantidadProducto">
                                <label for="cantidadProducto">Cantidad:</label>
                                <input type="text" class="form-control form-control-sm" name="cantidadProducto"
                                    id="cantidadProducto" placeholder="Cantidad del Producto">
                                <div class="invalid-feedback">
                                    Ingresar Cantidad del Producto
                                </div>
                            </div>
                            <div class="col-md-12 form-group ">
                                <label for="descripcionProducto">Descripcion:</label>
                                <textarea name="descripcionProducto" id="descripcionProducto"
                                    placeholder="Descripcion del Producto" class="form-control form-control-sm"
                                    rows="2"></textarea>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-save fa-w-20"></i>
                            </span>Registrar</span>
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    FORMULARIO DE REGISTRO DE IMAGENES DEL PRODUCTO
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="form-registrar-imagen-producto" autocomplete="off" novalidate>
                        <div class="form-row form-group">
                            <div class="col-md-6 form-group">
                                <label for="idProductoColor">Producto:</label>
                                <input type="text" name="nombreProductoColor" id="nombreProductoColor" class="form-control form-control-sm" required readonly placeholder="Nombre Producto">
                                <!-- < -->
                                <!-- <select class="form-control-sm form-control" required name="idProductoColor"
                                    id="idProductoColor">
                                </select> -->
                                <!-- <div class="invalid-feedback">
                                    Ingresar el Producto
                                </div> -->
                            </div>
                            <div class="col-md-6 form-group">
                                <label for="colorProductoImagen">Color:</label>
                                <select class="form-control-sm form-control" required name="colorProductoImagen"
                                    id="colorProductoImagen">
                                </select>
                                <div class="invalid-feedback">
                                    Ingresar color
                                </div>
                            </div>
                            <div class="col-md-12 form-group">
                                <label for="imagenProductoColor" class="">Imágen</label>
                                <input name="imagenProductoColor" id="imagenProductoColor" type="file" class="form-control-file" required>
                                <div class="invalid-feedback">
                                    Ingresar una Imagen para el producto
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-save fa-w-20"></i>
                            </span>Agregar
                        </button>
                    </form>
                </div>
            </div>
            <div class="main-card mb-3 card">
                <div class="card-header">
                    LISTADO DE LAS IMAGENES DEL PRODUCTO
                </div>
                <div class="card-body">
                    <div id="listarImagenProducto" class="table-responsive">
                        <!-- LISTAR LAS CATEGORIAS -->
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo SERVER_URL; ?>/script/producto-view.js"></script>