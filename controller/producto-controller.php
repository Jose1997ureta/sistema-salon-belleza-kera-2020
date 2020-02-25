<?php
require_once '../model/producto-model.php';
require_once '../entity/producto-entity.php';
require_once '../function/config-function.php';

$productoModel = new productoModel();
$productoEntity = new productoEntity();
$configFunction = new config_function();

session_start();

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
    $configFunction::validarDirectorio("../images");
    $configFunction::validarDirectorio("../images/producto");
    
    $imagenProductoResultado = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenProductoResultado"]["name"]);
    $tmpImagenProductoResultado = $_FILES["imagenProductoResultado"]["tmp_name"];
    $carpetaImagen = "../images/producto/".$imagenProductoResultado;
    
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

    if($imagenProductoResultado != true && $imgProductoResultado != ""){
        $productoEntity->setImagenProducto($imgProductoResultado);

    }else if($imagenProductoResultado == true)

        $configFunction::validarDirectorio("../images");
        $configFunction::validarDirectorio("../images/producto");

        $imagenProductoResultado = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenProductoResultado"]["name"]);
        $tmpImagenProductoResultado = $_FILES["imagenProductoResultado"]["tmp_name"];
        $carpetaImagen = "../images/producto/".$imagenProductoResultado;

        $productoEntity->setImagenProducto($imagenProductoResultado);
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

if(isset($_POST["agregarImagenProductoCarrito"])){
    $find = false;
    $position = 0;
    $rpta = "";

    $idProducto = $configFunction::validarMetodos("POST","idProductoColor");
    $nombreProducto = $configFunction::validarMetodos("POST","nombreProductoColor");
    $idColor = $configFunction::validarMetodos("POST","colorProductoImagen");
    $nombreColor = $configFunction::validarMetodos("POST","colorProducto");

    // VALIDAR CARPETA DONDE SE VA A GUARDAR LA IMAGEN
    $configFunction::validarDirectorio("../images");
    $configFunction::validarDirectorio("../images/producto");

    $imagenProductoColor = "dataCell-".$idProducto."-".$configFunction::generarUrlDinamico("",$_FILES["imagenProductoColor"]["name"]);
    $tmpImagenProductoColor = $_FILES["imagenProductoColor"]["tmp_name"];
    $carpetaImagen = "../images/producto/".$imagenProductoColor;

    
    if($configFunction::validarMetodos("SESSION","carritoImagenProducto")){
        $carritoImagenProducto = $_SESSION["carritoImagenProducto"];

        for($i = 0; $i < count($carritoImagenProducto); $i++){
            $carrito = explode("|",$carritoImagenProducto[$i]);
            if($carrito[0] == $idProducto && $carrito[2] == $idColor && $carrito[4] == $imagenProductoColor){
                $find = true;
                $position = $i;
            }
        }

        if($find === true){
            $rpta .= "1|";
        }else{
            $newArray = $idProducto."|".$nombreProducto."|".$idColor."|".$nombreColor."|".$imagenProductoColor;

            array_push($carritoImagenProducto,$newArray);
            $_SESSION["carritoImagenProducto"] = $carritoImagenProducto;

            $rpta .="0|";
        }

    }else{
        $carritoImagenProducto = array($idProducto."|".$nombreProducto."|".$idColor."|".$nombreColor."|".$imagenProductoColor);

        $_SESSION["carritoImagenProducto"] = $carritoImagenProducto;

        $rpta .="0|";
    }

    if(move_uploaded_file($tmpImagenProductoColor,$carpetaImagen)){
        $rpta .= "1";
    }else{
        $rpta .= "0";
        $delete = array_pop($carritoImagenProducto);

        $_SESSION["carritoImagenProducto"] = $carritoImagenProducto;
    }

    echo $rpta;
}

if(isset($_POST["listarImagenProductoCarrito"])){

    $rpta = "";

    if($configFunction::validarMetodos("SESSION","carritoImagenProducto")){

        $carritoImagenProducto = $_SESSION["carritoImagenProducto"];

        $rpta = implode("~", $carritoImagenProducto);
    }
    
    echo $rpta;
}

if(isset($_POST["eliminarImagenProductoCarrito"])){
    $rpta = "";
    if($configFunction::validarMetodos("SESSION","carritoImagenProducto")){
        $carritoImagenProducto = $_SESSION["carritoImagenProducto"];
        $id = $configFunction::validarMetodos("POST","id");
        $parametro = explode("|",$id);

        $idProducto = $parametro[0];
        $idColor = $parametro[1];
        $Imagen = $parametro[2];

        $rpta = "";

        for($i = 0; $i < count($carritoImagenProducto); $i++){
            $carrito = explode("|",$carritoImagenProducto[$i]);

            if($carrito[0] == $idProducto && $carrito[2] == $idColor && $carrito[4] == $Imagen){
                unset($carritoImagenProducto[$i]);

                $rpta .="1|";

                if(is_file("../images/producto/".$carrito[4])){
                    unlink("../images/producto/".$carrito[4]);
                    $rpta .= "1";
                }else{
                    $rpta .= "0";
                }
            }
        }
        $_SESSION["carritoImagenProducto"] = array_values($carritoImagenProducto);
    }
    echo $rpta;
}

// if(isset($_POST["registrarDatosImagenes"])){
//     $rpta = "";
//     if($configFunction::validarMetodos("SESSION","carritoImagenProducto")){

//         $eliminarImagen = $configFunction::validarMetodos("POST","eliminarImagen");
//         $carritoImagenProducto = $_SESSION["carritoImagenProducto"];

//         if($eliminarImagen !== ""){
//             $productoEntity->setIdProducto($eliminarImagen);
//             $validarEliminarImagen = $productoModel::eliminarImagenProducto($productoEntity);
//         }

//         if($validarEliminarImagen){
//             for($i = 0; $i < count($carritoImagenProducto); $i++){
//                 $data = explode("|",$carritoImagenProducto[$i]);
//                 $idProducto = $data[0];
//                 $idColor = $data[2];
//                 $nombreImagen = $data[4];
    
//                 $productoEntity->setIdProducto($idProducto);
//                 $productoEntity->setIdColor($idColor);
//                 $productoEntity->setImagenProducto($nombreImagen);

//                 $validarRegistroDetalle = $productoModel::registrarImagenDetalle($productoEntity);

//                 if($validarRegistroDetalle){
//                     $rpta = "1";
//                 }else {
//                     $rpta = "0";
//                 }
//             }

//         }
//     }
//     echo $rpta;
// }

// if(isset($_POST["actualizarDatosImagenes"])){
//     $rpta = "";
//     if($configFunction::validarMetodos("SESSION","carritoImagenProducto")){

//         // $listaIdImagen = $productoModel::obtenerSiguienteIdImagen();
//         // $idImagen = $configFunction::convertirCadena($listaIdImagen);

//         $carritoImagenProducto = $_SESSION["carritoImagenProducto"];
//         for($i = 0; $i < count($carritoImagenProducto); $i++){
//             $data = explode("|",$carritoImagenProducto[$i]);
//             $idProducto = $data[0];
//             $idColor = $data[2];
//             $nombreImagen = $data[4];

//             $productoEntity->setIdProducto($idProducto);
//             $productoEntity->setIdColor($idColor);
//             // $productoEntity->setIdImagen($idImagen);
//             $productoEntity->setImagenProducto($nombreImagen);

//             // $idImagen++;

//             // $validarEditar = $productoModel::actualizarImagen($productoEntity);
//             // $validarEditarDetalle = $productoModel::actualizarImagenDetalle($productoEntity);

//             if($validarRegistro){
//                 if($validarRegistroDetalle){
//                     $rpta = "1";
//                 }else {
                   
//                 }
//             }else{
//                 $rpta = "0";
//             }
//         }

//         if($rpta == "1"){
//             unset($_SESSION["carritoImagenProducto"]);
//         }

//         echo $rpta;
//     }
// }