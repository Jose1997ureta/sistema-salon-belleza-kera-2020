<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-diamond icon-gradient bg-warm-flame">
                    </i>
                </div>
                <div>Categoria
                    <div class="page-title-subheading">En esta pantalla ingresaremos las categorias que
                        maneja la empresa
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <div class="main-card mb-3 card">
                <div class="card-header">
                    Formulario de Registro de la Categoría
                </div>
                <div class="card-body">
                    <form class="needs-validation" id="form-registrar-categoria" autocomplete="off" novalidate>
                        <div class="form-row form-group">
                            <div class="col-md-12">
                                <label for="namecategory">Categoria:</label>
                                <input type="text" class="form-control form-control-sm" name="nombre-categoria"
                                    id="namecategory" placeholder="Nombre de la Categoría" required>
                                <div class="invalid-feedback">
                                    Ingresar Nombre Categoría
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
                    Lista de las Categorías
                </div>
                <div class="card-body">
                    <div id="listar_categoria" class="table-responsive">
                        <!-- LISTAR LAS CATEGORIAS -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo SERVER_URL; ?>/script/categoria-view.js"></script>