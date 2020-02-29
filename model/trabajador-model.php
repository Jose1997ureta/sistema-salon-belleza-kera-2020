<?php
require_once 'conexion.php';
require_once '../entity/trabajador-entity.php';
require_once '../function/config-function.php';

class trabajadorModel {

    public static function listarTrabajadorId(trabajadorEntity $trabajador){
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
        $procedure = "CALL ACTUALIZAR_TRABAJADOR('$trabajador->idTrabajador','$trabajador->nombreTrabajador','$trabajador->apellidoTrabajador','$trabajador->correoTrabajador')";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function actualizarPasswordTrabajador(trabajadorEntity $trabajador){
        $configFunction = new config_function();
        $procedure = "CALL ACTUALIZAR_PASSWORD_TRABAJADOR('$trabajador->idTrabajador','$trabajador->passwordTrabajador')";

        return $configFunction::ejecutarConsulta($procedure);
    }
}