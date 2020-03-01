<?php
require_once '../model/imagen-home-model.php';
require_once '../entity/imagen-home-entity.php';
require_once '../function/config-function.php';

$imagenHomeModel = new imagenHomeModel();
$imagenHomeEntity = new imagenHomeEntity();
$configFunction = new config_function();

if(isset($_POST["listarImagenHome"])){
    $rpta = "";
    $listarImagenHome = $imagenHomeModel::listarImagenHome();

    $rpta = $configFunction::convertirCadena($listarImagenHome);

    echo $rpta;
}

if(isset($_POST["registrarImagenHome"])){

    $configFunction::validarDirectorio("../imagenes");
    $configFunction::validarDirectorio("../imagenes/imagen-home");

    $tipoLang = $configFunction::validarMetodos("POST","tipoLang");
    $tituloImagen = $configFunction::validarMetodos("POST","tituloImagen");

    $imagenHome = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenHome"]["name"]);
    $tmpImagenHome = $_FILES["imagenHome"]["tmp_name"];
    $carpetaImagen = "../imagenes/imagen-home/".$imagenHome;

    $imagenHomeEntity->setTipoLang($tipoLang);
    $imagenHomeEntity->setTituloImagen($tituloImagen);
    $imagenHomeEntity->setImagen($imagenHome);
    $validar = $imagenHomeModel::registrarImagenHome($imagenHomeEntity);

    if($validar){
        $rpta = "1";
        if(move_uploaded_file($tmpImagenHome,$carpetaImagen)){
            $rpta .= "|1";
        }else{
            $rpta .= "|0";
        }
    }else{
        $rpta = "0";
    }

    echo $rpta;
}

if(isset($_POST["actualizarImagenHome"])){

    $idImagen = $configFunction::validarMetodos("POST","idImagenHome");
    $tituloImagen = $configFunction::validarMetodos("POST","tituloImagenEditar");
    $imagenHomeActualizar = $configFunction::validarMetodos("FILES","imagenHomeActualizar");
    $imagenHomeActual = $configFunction::validarMetodos("POST","imagenHomeActual");

    if($imagenHomeActualizar == "" && $imagenHomeActual != ""){
        $imagenHomeEntity->setImagen($imagenHomeActual);

    }else if($imagenHomeActualizar == true){

        $configFunction::validarDirectorio("../imagenes");
        $configFunction::validarDirectorio("../imagenes/imagen-home");

        $imagenHomeActualizar = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenHomeActualizar"]["name"]);
        $tmpImagenHome = $_FILES["imagenHomeActualizar"]["tmp_name"];
        $carpetaImagen = "../imagenes/imagen-home/".$imagenHomeActualizar;

        $imagenHomeEntity->setImagen($imagenHomeActualizar);
    }
    
    $imagenHomeEntity->setIdImagen($idImagen);
    $imagenHomeEntity->setTituloImagen($tituloImagen);

    $validarConsultaHome = $imagenHomeModel::actuaizarImagenHome($imagenHomeEntity);

    if($validarConsultaHome){
        if($imagenHomeActualizar != ""){
            if(move_uploaded_file($tmpImagenHome,$carpetaImagen)){
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

if(isset($_POST["eliminarImagenHome"])){
    $rpta = "";
    $idImagen = $configFunction::validarMetodos("POST","idImagen");

    $imagenHomeEntity->setIdImagen($idImagen);

    $validarConsulta = $imagenHomeModel::eliminarImagenHome($imagenHomeEntity);

    if($validarConsulta){
        echo "1";
    }else{
        echo "0";
    }
}