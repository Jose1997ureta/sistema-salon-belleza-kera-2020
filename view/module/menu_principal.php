<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div class="logo-src"></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                <li class="app-sidebar__heading">Producto</li>
                <li>
                    <a href="<?php echo SERVER_URL; ?>/view/listar-producto">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        listar Producto
                    </a>
                </li>
                <li>
                    <a href="<?php echo SERVER_URL; ?>/view/producto">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Nuevo Producto
                    </a>
                </li>
                <li class="app-sidebar__heading">Imagen Home</li>
                <li>
                    <a href="<?php echo SERVER_URL; ?>/view/imagen-home">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Nueva Imagen
                    </a>
                </li>
                <li class="app-sidebar__heading">Perfil</li>
                <li>
                    <a href="<?php echo SERVER_URL; ?>/view/perfil">
                        <i class="metismenu-icon pe-7s-rocket"></i>
                        Perfil
                    </a>
                <li>
                <a href="#" id="cerrarSession">
                        <i class="metismenu-icon pe-7s-eyedropper">
                        </i>Cerrar Sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>