<?php
require_once '../model/producto-model.php';
require_once '../entity/producto-entity.php';
require_once '../function/config-function.php';

$productoModel = new productoModel();
$productoEntity = new productoEntity();
$configFunction = new config_function();

if(isset($_POST["listarProducto"])){
    $data = "";
    $listarProducto = $productoModel::listarProducto();

    $data = $configFunction::convertirCadena($listarProducto);
    echo $data;
}

if(isset($_POST["listarProductoId"])){
    $rpta = "";
    $idProducto = $configFunction::validarMetodos("POST","idProducto");
    $productoEntity->setIdProducto($idProducto);
    $listarProductoId = $productoModel::listarProductoDetalle($productoEntity);

    $rpta = $configFunction::convertirCadena($listarProductoId);

    echo $rpta;
}

if(isset($_POST["listarProductoLang"])){
    $rpta = "";
    $lang = $configFunction::validarMetodos("POST","lang");
    if($lang == "es"){
        $procedure = "SELECT P.ID_PRODUCTO,P.TIPO_LANG_ES,P.TIPO_PRODUCTO_ES,P.NOMBRE_PRODUCTO_ES,I.IMAGEN FROM PRODUCTO_KERA_ESPANOL P LEFT JOIN IMAGEN_PRODUCTO_KERA I ON P.ID_PRODUCTO=I.ID_PRODUCTO GROUP BY P.ID_PRODUCTO";
    }else if($lang == "en"){
        $procedure = "SELECT P.ID_PRODUCTO,P.TIPO_LANG_EN,P.TIPO_PRODUCTO_EN,P.NOMBRE_PRODUCTO_EN,I.IMAGEN FROM PRODUCTO_KERA_INGLES P LEFT JOIN IMAGEN_PRODUCTO_KERA I ON P.ID_PRODUCTO=I.ID_PRODUCTO GROUP BY P.ID_PRODUCTO";
    }else if($lang == "ru"){
        $procedure = "SELECT P.ID_PRODUCTO,P.TIPO_LANG_RU,P.TIPO_PRODUCTO_RU,P.NOMBRE_PRODUCTO_RU,I.IMAGEN FROM PRODUCTO_KERA_RUSO P LEFT JOIN IMAGEN_PRODUCTO_KERA I ON P.ID_PRODUCTO=I.ID_PRODUCTO GROUP BY P.ID_PRODUCTO";
    }else{
        $procedure = "SELECT P.ID_PRODUCTO,P.TIPO_LANG_FR,P.TIPO_PRODUCTO_FR,P.NOMBRE_PRODUCTO_FR,I.IMAGEN FROM PRODUCTO_KERA_FRANCES P LEFT JOIN IMAGEN_PRODUCTO_KERA I ON P.ID_PRODUCTO=I.ID_PRODUCTO GROUP BY P.ID_PRODUCTO";
    }
    
    $consulta = $configFunction::obtenerLista($procedure);

    $rpta = $configFunction::convertirCadena($consulta);

    echo $rpta;
}

if(isset($_POST["listarProductoDetalleLang"])){
    $rpta = "";
    $lang = $configFunction::validarMetodos("POST","lang");
    $idProducto = $configFunction::validarMetodos("POST","idProducto");
    
    if($lang == "es"){
        $procedure = "SELECT PE.*,P.IMAGEN_RESULTADO,P.RUTA_VIDEO FROM PRODUCTO_KERA_ESPANOL PE INNER JOIN PRODUCTO_KERA P ON P.ID_PRODUCTO = PE.ID_PRODUCTO WHERE P.ID_PRODUCTO = ".$idProducto." GROUP BY P.ID_PRODUCTO";
    }else if($lang == "en"){
        $procedure = "SELECT PE.*,P.IMAGEN_RESULTADO,P.RUTA_VIDEO FROM PRODUCTO_KERA_INGLES PE INNER JOIN PRODUCTO_KERA P ON P.ID_PRODUCTO = PE.ID_PRODUCTO WHERE P.ID_PRODUCTO = ".$idProducto." GROUP BY P.ID_PRODUCTO";
    }else if($lang == "ru"){
        $procedure = "SELECT PE.*,P.IMAGEN_RESULTADO,P.RUTA_VIDEO FROM PRODUCTO_KERA_RUSO PE INNER JOIN PRODUCTO_KERA P ON P.ID_PRODUCTO = PE.ID_PRODUCTO WHERE P.ID_PRODUCTO = ".$idProducto." GROUP BY P.ID_PRODUCTO";
    }else{
        $procedure = "SELECT PE.*,P.IMAGEN_RESULTADO,P.RUTA_VIDEO FROM PRODUCTO_KERA_FRANCES PE INNER JOIN PRODUCTO_KERA P ON P.ID_PRODUCTO = PE.ID_PRODUCTO WHERE P.ID_PRODUCTO = ".$idProducto." GROUP BY P.ID_PRODUCTO";
    }

    $procedureImagen = "SELECT ID_IMAGEN,IMAGEN FROM IMAGEN_PRODUCTO_KERA WHERE ID_PRODUCTO = ". $idProducto;
    
    $consultaProducto = $configFunction::obtenerLista($procedure);
    $consultaProductoImagen = $configFunction::obtenerLista($procedureImagen);

    $rpta = $configFunction::convertirCadena($consultaProducto) ."^". $configFunction::convertirCadena($consultaProductoImagen);

    echo $rpta;
}

if(isset($_POST["registrarProducto"])){

    $tipoProductoES = $configFunction::validarMetodos("POST","tipoProductoES");
    $nombreProductoES = $configFunction::validarMetodos("POST","nombreProductoES");
    $descripcionProductoES = $configFunction::validarMetodos("POST","descripcionProductoES");
    $desItemProductoES = $configFunction::validarMetodos("POST","desItemProductoES");
    $tituloBeneficioES = $configFunction::validarMetodos("POST","tituloBeneficioES");
    $desBeneficiosES = $configFunction::validarMetodos("POST","desBeneficiosES");
    $tituloPrincipiosActivosES = $configFunction::validarMetodos("POST","tituloPrincipiosActivosES");
    $desPrincipiosActivosES = $configFunction::validarMetodos("POST","desPrincipiosActivosES");

    $tipoProductoEN = $configFunction::validarMetodos("POST","tipoProductoEN");
    $nombreProductoEN = $configFunction::validarMetodos("POST","nombreProductoEN");
    $descripcionProductoEN = $configFunction::validarMetodos("POST","descripcionProductoEN");
    $desItemProductoEN = $configFunction::validarMetodos("POST","desItemProductoEN");
    $tituloBeneficioEN = $configFunction::validarMetodos("POST","tituloBeneficioEN");
    $desBeneficiosEN = $configFunction::validarMetodos("POST","desBeneficiosEN");
    $tituloPrincipiosActivosEN = $configFunction::validarMetodos("POST","tituloPrincipiosActivosEN");
    $desPrincipiosActivosEN = $configFunction::validarMetodos("POST","desPrincipiosActivosEN");

    $tipoProductoRU = $configFunction::validarMetodos("POST","tipoProductoRU");
    $nombreProductoRU = $configFunction::validarMetodos("POST","nombreProductoRU");
    $descripcionProductoRU = $configFunction::validarMetodos("POST","descripcionProductoRU");
    $desItemProductoRU = $configFunction::validarMetodos("POST","desItemProductoRU");
    $tituloBeneficioRU = $configFunction::validarMetodos("POST","tituloBeneficioRU");
    $desBeneficiosRU = $configFunction::validarMetodos("POST","desBeneficiosRU");
    $tituloPrincipiosActivosRU = $configFunction::validarMetodos("POST","tituloPrincipiosActivosRU");
    $desPrincipiosActivosRU = $configFunction::validarMetodos("POST","desPrincipiosActivosRU");

    $tipoProductoFR = $configFunction::validarMetodos("POST","tipoProductoFR");
    $nombreProductoFR = $configFunction::validarMetodos("POST","nombreProductoFR");
    $descripcionProductoFR = $configFunction::validarMetodos("POST","descripcionProductoFR");
    $desItemProductoFR = $configFunction::validarMetodos("POST","desItemProductoFR");
    $tituloBeneficioFR = $configFunction::validarMetodos("POST","tituloBeneficioFR");
    $desBeneficiosFR = $configFunction::validarMetodos("POST","desBeneficiosFR");
    $tituloPrincipiosActivosFR = $configFunction::validarMetodos("POST","tituloPrincipiosActivosFR");
    $desPrincipiosActivosFR = $configFunction::validarMetodos("POST","desPrincipiosActivosFR");

    $rutaProductoVideo = $configFunction::validarMetodos("POST","rutaProductoVideo");
    
    // VALIDAR CARPETA DONDE SE VA A GUARDAR LA IMAGEN
    $configFunction::validarDirectorio("../imagenes");
    $configFunction::validarDirectorio("../imagenes/producto");
    
    $imagenProductoResultado = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenProductoResultado"]["name"]);
    $tmpImagenProductoResultado = $_FILES["imagenProductoResultado"]["tmp_name"];
    $carpetaImagen = "../imagenes/producto/".$imagenProductoResultado;
    
    $productoEntity->setTipoProductoES($tipoProductoES);
    $productoEntity->setnombreProductoES($nombreProductoES);
    $productoEntity->setDescripcionProductoES($descripcionProductoES);
    $productoEntity->setDescripcionItemProductoES($desItemProductoES);
    $productoEntity->setTituloBeneficioES($tituloBeneficioES);
    $productoEntity->setDescripcionBeneficioES($desBeneficiosES);
    $productoEntity->setTituloPrincipiosActivosES($tituloPrincipiosActivosES);
    $productoEntity->setDescripcionPrincipiosActivosES($desPrincipiosActivosES);

    $productoEntity->setTipoProductoEN($tipoProductoEN);
    $productoEntity->setnombreProductoEN($nombreProductoEN);
    $productoEntity->setDescripcionProductoEN($descripcionProductoEN);
    $productoEntity->setDescripcionItemProductoEN($desItemProductoEN);
    $productoEntity->setTituloBeneficioEN($tituloBeneficioEN);
    $productoEntity->setDescripcionBeneficioEN($desBeneficiosEN);
    $productoEntity->setTituloPrincipiosActivosEN($tituloPrincipiosActivosEN);
    $productoEntity->setDescripcionPrincipiosActivosEN($desPrincipiosActivosEN);

    $productoEntity->setTipoProductoRU($tipoProductoRU);
    $productoEntity->setnombreProductoRU($nombreProductoRU);
    $productoEntity->setDescripcionProductoRU($descripcionProductoRU);
    $productoEntity->setDescripcionItemProductoRU($desItemProductoRU);
    $productoEntity->setTituloBeneficioRU($tituloBeneficioRU);
    $productoEntity->setDescripcionBeneficioRU($desBeneficiosRU);
    $productoEntity->setTituloPrincipiosActivosRU($tituloPrincipiosActivosRU);
    $productoEntity->setDescripcionPrincipiosActivosRU($desPrincipiosActivosRU);

    $productoEntity->setTipoProductoFR($tipoProductoFR);
    $productoEntity->setnombreProductoFR($nombreProductoFR);
    $productoEntity->setDescripcionProductoFR($descripcionProductoFR);
    $productoEntity->setDescripcionItemProductoFR($desItemProductoFR);
    $productoEntity->setTituloBeneficioFR($tituloBeneficioFR);
    $productoEntity->setDescripcionBeneficioFR($desBeneficiosFR);
    $productoEntity->setTituloPrincipiosActivosFR($tituloPrincipiosActivosFR);
    $productoEntity->setDescripcionPrincipiosActivosFR($desPrincipiosActivosFR);

    $productoEntity->setImagenResultadoProducto($imagenProductoResultado);
    $productoEntity->setRutaVideoProducto($rutaProductoVideo);

    $validarConsultaProducto = $productoModel::registrarProducto($productoEntity);

    if($validarConsultaProducto){
        if(move_uploaded_file($tmpImagenProductoResultado,$carpetaImagen)){
            $rpta = "1";
        }else{
            $rpta = "0";
        }
        echo "1|".$rpta;
    }else{
        echo "0";
    }

}

if(isset($_POST["actualizarProducto"])){

    $idProducto = $configFunction::validarMetodos("POST","idProducto");

    $tipoProductoES = $configFunction::validarMetodos("POST","tipoProductoES");
    $nombreProductoES = $configFunction::validarMetodos("POST","nombreProductoES");
    $descripcionProductoES = $configFunction::validarMetodos("POST","descripcionProductoES");
    $desItemProductoES = $configFunction::validarMetodos("POST","desItemProductoES");
    $tituloBeneficioES = $configFunction::validarMetodos("POST","tituloBeneficioES");
    $desBeneficiosES = $configFunction::validarMetodos("POST","desBeneficiosES");
    $tituloPrincipiosActivosES = $configFunction::validarMetodos("POST","tituloPrincipiosActivosES");
    $desPrincipiosActivosES = $configFunction::validarMetodos("POST","desPrincipiosActivosES");

    $tipoProductoEN = $configFunction::validarMetodos("POST","tipoProductoEN");
    $nombreProductoEN = $configFunction::validarMetodos("POST","nombreProductoEN");
    $descripcionProductoEN = $configFunction::validarMetodos("POST","descripcionProductoEN");
    $desItemProductoEN = $configFunction::validarMetodos("POST","desItemProductoEN");
    $tituloBeneficioEN = $configFunction::validarMetodos("POST","tituloBeneficioEN");
    $desBeneficiosEN = $configFunction::validarMetodos("POST","desBeneficiosEN");
    $tituloPrincipiosActivosEN = $configFunction::validarMetodos("POST","tituloPrincipiosActivosEN");
    $desPrincipiosActivosEN = $configFunction::validarMetodos("POST","desPrincipiosActivosEN");

    $tipoProductoRU = $configFunction::validarMetodos("POST","tipoProductoRU");
    $nombreProductoRU = $configFunction::validarMetodos("POST","nombreProductoRU");
    $descripcionProductoRU = $configFunction::validarMetodos("POST","descripcionProductoRU");
    $desItemProductoRU = $configFunction::validarMetodos("POST","desItemProductoRU");
    $tituloBeneficioRU = $configFunction::validarMetodos("POST","tituloBeneficioRU");
    $desBeneficiosRU = $configFunction::validarMetodos("POST","desBeneficiosRU");
    $tituloPrincipiosActivosRU = $configFunction::validarMetodos("POST","tituloPrincipiosActivosRU");
    $desPrincipiosActivosRU = $configFunction::validarMetodos("POST","desPrincipiosActivosRU");

    $tipoProductoFR = $configFunction::validarMetodos("POST","tipoProductoFR");
    $nombreProductoFR = $configFunction::validarMetodos("POST","nombreProductoFR");
    $descripcionProductoFR = $configFunction::validarMetodos("POST","descripcionProductoFR");
    $desItemProductoFR = $configFunction::validarMetodos("POST","desItemProductoFR");
    $tituloBeneficioFR = $configFunction::validarMetodos("POST","tituloBeneficioFR");
    $desBeneficiosFR = $configFunction::validarMetodos("POST","desBeneficiosFR");
    $tituloPrincipiosActivosFR = $configFunction::validarMetodos("POST","tituloPrincipiosActivosFR");
    $desPrincipiosActivosFR = $configFunction::validarMetodos("POST","desPrincipiosActivosFR");

    $rutaProductoVideo = $configFunction::validarMetodos("POST","rutaProductoVideo");
    $imagenProductoResultado = $configFunction::validarMetodos("FILES","imagenProductoResultado");
    $imgProductoResultado = $configFunction::validarMetodos("POST","imgProductoResultado");

    if($imagenProductoResultado == "" && $imgProductoResultado != ""){
        $productoEntity->setImagenResultadoProducto($imgProductoResultado);

    }else if($imagenProductoResultado == true){

        $configFunction::validarDirectorio("../imagenes");
        $configFunction::validarDirectorio("../imagenes/producto");

        $imagenProductoResultado = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenProductoResultado"]["name"]);
        $tmpImagenProductoResultado = $_FILES["imagenProductoResultado"]["tmp_name"];
        $carpetaImagen = "../imagenes/producto/".$imagenProductoResultado;

        $productoEntity->setImagenResultadoProducto($imagenProductoResultado);
    }

    $productoEntity->setIdProducto($idProducto);

    $productoEntity->setTipoProductoES($tipoProductoES);
    $productoEntity->setnombreProductoES($nombreProductoES);
    $productoEntity->setDescripcionProductoES($descripcionProductoES);
    $productoEntity->setDescripcionItemProductoES($desItemProductoES);
    $productoEntity->setTituloBeneficioES($tituloBeneficioES);
    $productoEntity->setDescripcionBeneficioES($desBeneficiosES);
    $productoEntity->setTituloPrincipiosActivosES($tituloPrincipiosActivosES);
    $productoEntity->setDescripcionPrincipiosActivosES($desPrincipiosActivosES);

    $productoEntity->setTipoProductoEN($tipoProductoEN);
    $productoEntity->setnombreProductoEN($nombreProductoEN);
    $productoEntity->setDescripcionProductoEN($descripcionProductoEN);
    $productoEntity->setDescripcionItemProductoEN($desItemProductoEN);
    $productoEntity->setTituloBeneficioEN($tituloBeneficioEN);
    $productoEntity->setDescripcionBeneficioEN($desBeneficiosEN);
    $productoEntity->setTituloPrincipiosActivosEN($tituloPrincipiosActivosEN);
    $productoEntity->setDescripcionPrincipiosActivosEN($desPrincipiosActivosEN);

    $productoEntity->setTipoProductoRU($tipoProductoRU);
    $productoEntity->setnombreProductoRU($nombreProductoRU);
    $productoEntity->setDescripcionProductoRU($descripcionProductoRU);
    $productoEntity->setDescripcionItemProductoRU($desItemProductoRU);
    $productoEntity->setTituloBeneficioRU($tituloBeneficioRU);
    $productoEntity->setDescripcionBeneficioRU($desBeneficiosRU);
    $productoEntity->setTituloPrincipiosActivosRU($tituloPrincipiosActivosRU);
    $productoEntity->setDescripcionPrincipiosActivosRU($desPrincipiosActivosRU);

    $productoEntity->setTipoProductoFR($tipoProductoFR);
    $productoEntity->setnombreProductoFR($nombreProductoFR);
    $productoEntity->setDescripcionProductoFR($descripcionProductoFR);
    $productoEntity->setDescripcionItemProductoFR($desItemProductoFR);
    $productoEntity->setTituloBeneficioFR($tituloBeneficioFR);
    $productoEntity->setDescripcionBeneficioFR($desBeneficiosFR);
    $productoEntity->setTituloPrincipiosActivosFR($tituloPrincipiosActivosFR);
    $productoEntity->setDescripcionPrincipiosActivosFR($desPrincipiosActivosFR);

    // $productoEntity->setImagenResultadoProducto($imagenProductoResultado);
    $productoEntity->setRutaVideoProducto($rutaProductoVideo);

    $validarConsultaProducto = $productoModel::actualizarProducto($productoEntity);

    if($validarConsultaProducto){
        if($imagenProductoResultado != ""){
            if(move_uploaded_file($tmpImagenProductoResultado,$carpetaImagen)){
                $rpta = "1";
            }else{
                $rpta = "0";
            }
        }else{
            $rpta = "1";
        }
        echo "1|".$rpta;
    }else{
        echo "0";
    }

}

if(isset($_POST["eliminarProducto"])){
    $rpta = "";
    $idProducto = $configFunction::validarMetodos("POST","idProducto");

    $productoEntity->setIdProducto($idProducto);

    $validarConsulta = $productoModel::eliminarProducto($productoEntity);

    if($validarConsulta){
        echo "1";
    }else{
        echo "0";
    }
}

// IMAGEN PRODUCTO
if(isset($_POST["listarImagenProducto"])){
    $rpta = "";
    $idProducto = $configFunction::validarMetodos("POST","idProducto");
    $productoEntity->setIdProducto($idProducto);
    $listarImagenProductoId = $productoModel::listarImagenProducto($productoEntity);

    $rpta = $configFunction::convertirCadena($listarImagenProductoId);

    echo $rpta;
}

if(isset($_POST["registrarImagenProducto"])){

    $idProducto = $configFunction::validarMetodos("POST","idProducto");
    
    $configFunction::validarDirectorio("../imagenes");
    $configFunction::validarDirectorio("../imagenes/producto");
    
    $imagenProducto = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenProducto"]["name"]);
    $tmpImagenProducto = $_FILES["imagenProducto"]["tmp_name"];
    $carpetaImagen = "../imagenes/producto/".$imagenProducto;
    
    $productoEntity->setIdProducto($idProducto);
    $productoEntity->setImagenProducto($imagenProducto);

    $validarConsultaProducto = $productoModel::registrarImagenProducto($productoEntity);

    if($validarConsultaProducto){
        if(move_uploaded_file($tmpImagenProducto,$carpetaImagen)){
            $rpta = "1";
        }else{
            $rpta = "0";
        }
        echo "1|".$rpta;
    }else{
        echo "0";
    }
}

if(isset($_POST["eliminarImagenProducto"])){
    $rpta = "";
    $idImagen = $configFunction::validarMetodos("POST","idImagen");

    $productoEntity->setIdImagen($idImagen);

    $validarConsulta = $productoModel::eliminarImagenProducto($productoEntity);

    if($validarConsulta){
        echo "1";
    }else{
        echo "0";
    }
}