<?php
require_once '../model/trabajador-model.php';
require_once '../entity/trabajador-entity.php';
require_once '../function/config-function.php';

$trabajadorModel = new trabajadorModel();
$trabajadorEntity = new trabajadorEntity();
$configFunction = new config_function();

session_start();

if(isset($_POST["listarTrabajadorId"])){
    $rpta = "";
    $idTrabajador = $configFunction::validarMetodos("SESSION","idTrabajador");
    $trabajadorEntity->setIdTrabajador($idTrabajador);
    $listarTrabajadorId = $trabajadorModel::listarTrabajadorId($trabajadorEntity);

    $rpta = $configFunction::convertirCadena($listarTrabajadorId);

    echo $rpta;
}

if(isset($_POST["IniciarSession"])){
    $rpta = "";
    $correoTrabajador = $configFunction::validarMetodos("POST","correoTrabajador");
    $passwordTrabajador = $configFunction::validarMetodos("POST","passwordTrabajador");

    $trabajadorEntity->setIdTrabajador($idTrabajador);
    $validarSession = $trabajadorModel::iniciarSesionTrabajador($trabajadorEntity);

    if($validarSession!== ""){
        $_SESSION["Idtrabajador"] = $validarSession[0][0];
        $_SESSION["nombreCompleto"] = $validarSession[0][1]." ".$validarSession[0][2];

        echo "1";
    }else{
        echo "0";
    }
}

if(isset($_POST["actualizarTrabajador"])){

    $idTrabajador = $configFunction::validarMetodos("SESSION","idTrabajador");
    $nombreTrabajador = $configFunction::validarMetodos("POST","nombreTrabajador");
    $apellidoTrabajador = $configFunction::validarMetodos("POST","apellidoTrabajador");
    $emailTrabajador = $configFunction::validarMetodos("POST","emailTrabajador");

    $trabajadorEntity->setIdTrabajador($idTrabajador);
    $trabajadorEntity->setNombreTrabajador($nombreTrabajador);
    $trabajadorEntity->setApellidoTrabajador($apellidoTrabajador);
    $trabajadorEntity->setCorreoTrabajador($emailTrabajador);

    $validarConsultaTrabajador = $trabajadorModel::actualizarTrabajador($trabajadorEntity);

    if($validarConsultaTrabajador){
        echo "1";
    }else{
        echo "0";
    }
}

if(isset($_POST["actualizarPasswordTrabajador"])){
    $rpta = "0";
    $idTrabajador = $configFunction::validarMetodos("SESSION","idTrabajador");
    $passwordTrabajador1 = $configFunction::validarMetodos("POST","passwordTrabajador1");
    $passwordTrabajador2 = $configFunction::validarMetodos("POST","passwordTrabajador2");

    if($passwordTrabajador1 === $passwordTrabajador2){
        $trabajadorEntity->setIdTrabajador($idTrabajador);
        $trabajadorEntity->setPasswordTrabajador($passwordTrabajador1);
    
        $validarConsultaTrabajador = $trabajadorModel::actualizarPasswordTrabajador($trabajadorEntity);

        if($validarConsultaTrabajador){
            echo "1";
        }else{
            echo "0";
        }
    }else{
        echo "0";
    }
}