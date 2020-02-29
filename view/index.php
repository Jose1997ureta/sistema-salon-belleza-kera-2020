<?php 
    session_start();
    require_once '../core/configuration-router.php';

    if(!isset($_SESSION["idTrabajador"])){
        header("Location: sign-in");
    }
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Analytics Dashboard - This is an example dashboard created using build-in elements and components.</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    <link href="<?php echo SERVER_URL; ?>/assets/style/main.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo SERVER_URL; ?>/function/config-function.js"></script>
    <script type="text/javascript" src="<?php echo SERVER_URL; ?>/ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- APLICATION HEADER -->
        <?php include_once './module/cabecera.php'; ?>
        <!-- ================= -->
        <div class="app-main">
            <!-- APLICATION MENU-->
            <?php include_once './module/menu_principal.php'; ?>
            <!-- APLICATION MENU -->
            <div class="app-main__outer">
                <!-- CONTENT MAIN -->
                <?php
                // Preguntamos si la variable $view existe
                    if(isset($_GET["view"])){
                        // sacamos la primero posición de la url que se mandan como parámetro
                        $view = explode("/",$_GET["view"]);
                        // esto devuelve un array, asi que lo mostramos por posicion
                        // esto nos ayuda a que si mandamos otro paramentro en la url, nos mostrar el valor sin afectar a la pagina
                        if(is_file('./page/'.$view[0].'-view.php')){
                            include_once './page/'.$view[0].'-view.php';
                        }else{
                            include_once './page/home-view.php';
                        }
                    }else{
                        include_once './page/sign-in.php';
                    }
                ?>
                <!--  -->
            </div>
            
            <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        </div>
    </div>

    <div id="contenedor-modal">
        <!-- MODAL -->
    </div>
    
    <script type="text/javascript" src="<?php echo SERVER_URL; ?>/assets/scripts/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</body>

</html>