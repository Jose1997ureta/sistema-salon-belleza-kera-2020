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

    $tituloImagen = $configFunction::validarMetodos("POST","tituloImagen");
    
    $configFunction::validarDirectorio("../images");
    $configFunction::validarDirectorio("../images/imagen-home");
    
    $imagenHome = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenHome"]["name"]);
    $tmpImagenHome = $_FILES["imagenHome"]["tmp_name"];
    $carpetaImagen = "../images/imagen-home/".$imagenHome;
    
    $imagenHomeEntity->setTituloImagen($tituloImagen);
    $imagenHomeEntity->setImagen($imagenHome);

    $validarConsultaHome = $imagenHomeModel::registrarImagenHome($imagenHomeEntity);

    if($validarConsultaHome){
        if(move_uploaded_file($tmpImagenHome,$carpetaImagen)){
            $rpta = "1";
        }else{
            $rpta = "0";
        }
        echo "1|".$rpta;
    }else{
        echo "0";
    }
}

if(isset($_POST["actualizarImagenHome"])){

    $tituloImagen = $configFunction::validarMetodos("POST","tituloImagen");
    
    $configFunction::validarDirectorio("../images");
    $configFunction::validarDirectorio("../images/imagen-home");
    
    $imagenHome = "kera-".$configFunction::generarUrlDinamico("",$_FILES["imagenHome"]["name"]);
    $tmpImagenHome = $_FILES["imagenHome"]["tmp_name"];
    $carpetaImagen = "../images/imagen-home/".$imagenHome;
    
    $imagenHomeEntity->setTituloImagen($tituloImagen);
    $imagenHomeEntity->setImagen($imagenHome);

    $validarConsultaHome = $imagenHomeModel::registrarImagenHome($imagenHomeEntity);

    if($validarConsultaHome){
        if(move_uploaded_file($tmpImagenHome,$carpetaImagen)){
            $rpta = "1";
        }else{
            $rpta = "0";
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