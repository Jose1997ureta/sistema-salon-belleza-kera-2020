<?php
require_once 'conexion.php';
require_once '../entity/trabajador-entity.php';
require_once '../function/config-function.php';

class trabajadorModel {

    public static function listarTrabajador(trabajadorEntity $trabajador){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_TRABAJADOR_ID('$trabajador->idTrabajador')";

        return $configFunction::obtenerLista($procedure);
    }

    public static function iniciarSesionTrabajador(trabajadorEntity $trabajador){
        $configFunction = new config_function();
        $procedure = "CALL INICIAR_SESSION('$trabajador->correoTrabajador','$trabajador->passwordTrabajador')";

        return $configFunction::obtenerLista($procedure);
    }

    public static function actualizarTrabajador(trabajadorEntity $trabajador){
        $configFunction = new config_function();
        $procedure = "CALL ACTUALIZAR_TRABAJADOR('$trabajador->idTrabajador','$trabajador->nombreTrabajador','$trabajador->apellidoTrabajador','$trabajador->correoTrabajador','$trabajador->passwordTrabajador')";

        return $configFunction::obtenerLista($procedure);
    }
}