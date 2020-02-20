USE SISTEMA_VENTA_CASE_CELULARES_2019;

-- ==================================== PROCEDURES ===================================
DROP PROCEDURE IF EXISTS REGISTRAR_PRODUCTO;
DELIMITER $
CREATE PROCEDURE REGISTRAR_PRODUCTO(
	IN 
		_ID_PRODUCTO INT,
        _IMAGEN_RESULTADO TEXT,
        _RUTA_VIDEO TEXT,
        
        -- PRODUCTO ESPANOL
        _TIPO_PRODUCTO_ES VARCHAR(40),
        _NOMBRE_PRODUCTO_ES VARCHAR(40),
        _DESCRIPCION_PRODUCTO_ES TEXT,
        _DESCRIPCION_ITEM_PRODUCTO_ES TEXT,
        _TITULO_BENEFICIO_ES VARCHAR(20),
        _DESCRIPCION_BENEFICIOS_ES TEXT,
        _TITULO_PRINCIPIOS_ACTIVOS_ES VARCHAR(40),
        _DESCRIPCION_PRINCIPIOS_ACTIVOS_ES TEXT,
        
        -- PRODUCTO INGLES
        _TIPO_PRODUCTO_EN VARCHAR(40),
        _NOMBRE_PRODUCTO_EN VARCHAR(40),
        _DESCRIPCION_PRODUCTO_EN TEXT,
        _DESCRIPCION_ITEM_PRODUCTO_EN TEXT,
        _TITULO_BENEFICIO_EN VARCHAR(20),
        _DESCRIPCION_BENEFICIOS_EN TEXT,
        _TITULO_PRINCIPIOS_ACTIVOS_EN VARCHAR(40),
        _DESCRIPCION_PRINCIPIOS_ACTIVOS_EN TEXT,
        
        -- PRODUCTO FRANCES
        _TIPO_PRODUCTO_FR VARCHAR(40),
        _NOMBRE_PRODUCTO_FR VARCHAR(40),
        _DESCRIPCION_PRODUCTO_FR TEXT,
        _DESCRIPCION_ITEM_PRODUCTO_FR TEXT,
        _TITULO_BENEFICIO_FR VARCHAR(20),
        _DESCRIPCION_BENEFICIOS_FR TEXT,
        _TITULO_PRINCIPIOS_ACTIVOS_FR VARCHAR(40),
        _DESCRIPCION_PRINCIPIOS_ACTIVOS_FR TEXT,
        
        -- PRODUCTO RUSO
        _TIPO_PRODUCTO_RU VARCHAR(40),
        _NOMBRE_PRODUCTO_RU VARCHAR(40),
        _DESCRIPCION_PRODUCTO_RU TEXT,
        _DESCRIPCION_ITEM_PRODUCTO_RU TEXT,
        _TITULO_BENEFICIO_RU VARCHAR(20),
        _DESCRIPCION_BENEFICIOS_RU TEXT,
        _TITULO_PRINCIPIOS_ACTIVOS_RU VARCHAR(40),
        _DESCRIPCION_PRINCIPIOS_ACTIVOS_RU TEXT
)
	BEGIN 
		INSERT INTO PRODUCTO_KERA(ID_PRODUCTO,IMAGEN_RESULTADO,RUTA_VIDEO) VALUES (_ID_PRODUCTO,_IMAGEN_RESULTADO,_RUTA_VIDEO);
        -- INSERT INTO PRODUCTO_KERA_ESPANOL() VALUES();
    END;
$

DESCRIBE producto_kera_espanol;