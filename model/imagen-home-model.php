<?php
require_once 'conexion.php';
require_once '../entity/imagen-home-entity.php';
require_once '../function/config-function.php';

class imagenHomeModel {

    public static function listarImagenHome(){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_IMAGEN_HOME";

        return $configFunction::obtenerLista($procedure);
    }

    public static function listarImagenHomeLang(imagenHomeEntity $imagenHome){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_IMAGEN_HOME_LANG('$imagenHome->tipoLang')";

        return $configFunction::obtenerLista($procedure);
    }

    public static function registrarImagenHome(imagenHomeEntity $imagenHome){
        $configFunction = new config_function();
        $procedure = "CALL REGISTRAR_IMAGEN_HOME('$imagenHome->tipoLang','$imagenHome->tituloImagen','$imagenHome->imagen')";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function actuaizarImagenHome(imagenHomeEntity $imagenHome){
        $configFunction = new config_function();
        $procedure = "CALL ACTUALIZAR_IMAGEN_HOME('$imagenHome->idImagen','$imagenHome->tituloImagen','$imagenHome->imagen')";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function eliminarImagenHome(imagenHomeEntity $imagenHome){
        $configFunction = new config_function();
        $procedure = "CALL ELIMINAR_IMAGEN_HOME('$imagenHome->idImagen')";

        return $configFunction::ejecutarConsulta($procedure);
    }
}