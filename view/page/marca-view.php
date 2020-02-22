<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>Marca
                    <div class="page-title-subheading">En esta pantalla ingresaremos las marcas que maneja la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Formulario de Registro de la Marca
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="form-registrar-marca" autocomplete="off" novalidate>
                        <div class="form-row form-group">
                            <div class="col-md-12">
                                <label for="nombreMarca">Marca:</label>
                                <input type="text" class="form-control form-control-sm" name="nombreMarca"
                                    id="nombreMarca" placeholder="Nombre de la Marca" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre Marca
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-outline-primary" type="submit">
                            <span class="btn-icon-wrapper pr-2 opacity-7">
                                <i class="fa fa-save fa-w-20"></i>
                            </span>Registrar
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Lista de las Marcas
                </div>
                <div class="card-body">
                    <div id="listarMarca" class="table-responsive">
                        <!-- LISTAR LAS CATEGORIAS -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo SERVER_URL; ?>/script/marca-view.js"></script>