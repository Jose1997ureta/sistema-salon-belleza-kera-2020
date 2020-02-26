<?php
require_once 'conexion.php';
require_once '../entity/producto-entity.php';
require_once '../function/config-function.php';

class productoModel{

    public static function listarProducto(){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_PRODUCTO";

        return $configFunction::obtenerLista($procedure);
    }

    public static function listarProductoDetalle(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_PRODUCTO_DETALLE('$producto->idProducto')";

        return $configFunction::obtenerLista($procedure);
    }

    public static function listarImagenProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL LISTAR_IMAGEN_PRODUCTO('$producto->idProducto')";

        return $configFunction::obtenerLista($procedure);
    }


    public static function registrarProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL REGISTRAR_PRODUCTO('$producto->imagenResultadoProducto','$producto->rutaVideoProducto',";
        // PRODUCTO ESPAÑOL
        $procedure .= "'$producto->tipoProductoES','$producto->nombreProductoES','$producto->descripcionProductoES','$producto->descripcionItemProductoES','$producto->tituloBeneficioES','$producto->descripcionBeneficioES','$producto->tituloPrincipiosActivosES','$producto->descripcionPrincipiosActivosES',";

        // PRODUCTO INGLES
        $procedure .= "'$producto->tipoProductoEN','$producto->nombreProductoEN','$producto->descripcionProductoEN','$producto->descripcionItemProductoEN','$producto->tituloBeneficioEN','$producto->descripcionBeneficioEN','$producto->tituloPrincipiosActivosEN','$producto->descripcionPrincipiosActivosEN',";
        
        // PRODUCTO FRANCES
        $procedure .= "'$producto->tipoProductoFR','$producto->nombreProductoFR','$producto->descripcionProductoFR','$producto->descripcionItemProductoFR','$producto->tituloBeneficioFR','$producto->descripcionBeneficioFR','$producto->tituloPrincipiosActivosFR','$producto->descripcionPrincipiosActivosFR',";

        // PRODUCTO RUSO
        $procedure .= "'$producto->tipoProductoRU','$producto->nombreProductoRU','$producto->descripcionProductoRU','$producto->descripcionItemProductoRU','$producto->tituloBeneficioRU','$producto->descripcionBeneficioRU','$producto->tituloPrincipiosActivosRU','$producto->descripcionPrincipiosActivosRU'";

        $procedure .= ")";

        return $configFunction::ejecutarConsulta($procedure);
    }


    public static function actualizarProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL ACTUALIZAR_PRODUCTO('$producto->idProducto','$producto->imagenResultadoProducto','$producto->rutaVideoProducto',";
        // PRODUCTO ESPAÑOL
        $procedure .= "'$producto->tipoProductoES','$producto->nombreProductoES','$producto->descripcionProductoES','$producto->descripcionItemProductoES','$producto->tituloBeneficioES','$producto->descripcionBeneficioES','$producto->tituloPrincipiosActivosES','$producto->descripcionPrincipiosActivosES',";

        // PRODUCTO INGLES
        $procedure .= "'$producto->tipoProductoEN','$producto->nombreProductoEN','$producto->descripcionProductoEN','$producto->descripcionItemProductoEN','$producto->tituloBeneficioEN','$producto->descripcionBeneficioEN','$producto->tituloPrincipiosActivosEN','$producto->descripcionPrincipiosActivosEN',";
        
        // PRODUCTO FRANCES
        $procedure .= "'$producto->tipoProductoFR','$producto->nombreProductoFR','$producto->descripcionProductoFR','$producto->descripcionItemProductoFR','$producto->tituloBeneficioFR','$producto->descripcionBeneficioFR','$producto->tituloPrincipiosActivosFR','$producto->descripcionPrincipiosActivosFR',";

        // PRODUCTO RUSO
        $procedure .= "'$producto->tipoProductoRU','$producto->nombreProductoRU','$producto->descripcionProductoRU','$producto->descripcionItemProductoRU','$producto->tituloBeneficioRU','$producto->descripcionBeneficioRU','$producto->tituloPrincipiosActivosRU','$producto->descripcionPrincipiosActivosRU'";

        $procedure .= ")";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function registrarImagenProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL REGISTRAR_IMAGEN_PRODUCTO('$producto->idProducto','$producto->imagenProducto')";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function eliminarProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL ELIMINAR_PRODUCTO('$producto->idProducto')";

        return $configFunction::ejecutarConsulta($procedure);
    }

    public static function eliminarImagenProducto(productoEntity $producto){
        $configFunction = new config_function();
        $procedure = "CALL ELIMINAR_IMAGEN_PRODUCTO('$producto->idImagen')";

        return $configFunction::ejecutarConsulta($procedure);
    }

}