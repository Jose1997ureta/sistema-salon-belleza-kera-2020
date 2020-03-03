USE SISTEMA_SALON_BELLEZA_KERA;

-- ==================================== PROCEDURES ===================================
DROP PROCEDURE IF EXISTS LISTAR_TRABAJADOR_ID;
DELIMITER $
CREATE PROCEDURE LISTAR_TRABAJADOR_ID(
    IN
        _ID_TRABAJADOR INT
)
    BEGIN
        SELECT * FROM TRABAJADOR_KERA WHERE ID_TRABAJADOR = _ID_TRABAJADOR;
    END;
$

DROP PROCEDURE IF EXISTS INICIAR_SESSION;
DELIMITER $
CREATE PROCEDURE INICIAR_SESSION(
    IN
        _CORREO_TRABAJADOR VARCHAR(100),
        _PASSWORD_TRABAJADOR VARCHAR(40)
)
    BEGIN
        SELECT * FROM TRABAJADOR_KERA WHERE CORREO_TRABAJADOR = _CORREO_TRABAJADOR AND PASSWORD_TRABAJADOR=_PASSWORD_TRABAJADOR;
    END;
$

-- CALL INICIAR_SESSION('qwrqwrq@sdv.co','1245')

DROP PROCEDURE IF EXISTS ACTUALIZAR_TRABAJADOR;
DELIMITER $
CREATE PROCEDURE ACTUALIZAR_TRABAJADOR(
    IN
        _ID_TRABAJADOR INT,
        _NOMBRE_TRABAJADOR VARCHAR(100),
        _APELLIDO_TRABAJADOR VARCHAR(100),
        _CORREO_TRABAJADOR VARCHAR(100)
)
    BEGIN
        UPDATE TRABAJADOR_KERA SET NOMBRE_TRABAJADOR = _NOMBRE_TRABAJADOR, APELLIDO_TRABAJADOR=_APELLIDO_TRABAJADOR, CORREO_TRABAJADOR=_CORREO_TRABAJADOR WHERE ID_TRABAJADOR=_ID_TRABAJADOR;
    END;
$

DROP PROCEDURE IF EXISTS ACTUALIZAR_PASSWORD_TRABAJADOR;
DELIMITER $
CREATE PROCEDURE ACTUALIZAR_PASSWORD_TRABAJADOR(
    IN
        _ID_TRABAJADOR INT,
        _PASSWORD_TRABAJADOR VARCHAR(40)
)
    BEGIN
        UPDATE TRABAJADOR_KERA SET PASSWORD_TRABAJADOR = _PASSWORD_TRABAJADOR WHERE ID_TRABAJADOR=_ID_TRABAJADOR;
    END;
$

-- DROP PROCEDURE IF EXISTS ELIMINAR_TRABAJADOR;
-- DELIMITER $
-- CREATE PROCEDURE ELIMINAR_TRABAJADOR(
--     IN
--         _ID_TRABAJADOR INT
-- )
--     BEGIN
--         DELETE FROM TRABAJADOR_KERA WHERE ID_TRABAJADOR=_ID_TRABAJADOR;
--     END;
-- $;

DROP PROCEDURE IF EXISTS LISTAR_PRODUCTO;
DELIMITER $
CREATE PROCEDURE LISTAR_PRODUCTO()
    BEGIN
        SELECT P.ID_PRODUCTO,PE.TIPO_PRODUCTO_ES,PE.NOMBRE_PRODUCTO_ES,P.RUTA_VIDEO FROM PRODUCTO_KERA P INNER JOIN PRODUCTO_KERA_ESPANOL PE ON P.ID_PRODUCTO=PE.ID_PRODUCTO GROUP BY P.ID_PRODUCTO ORDER BY P.ID_PRODUCTO DESC;
    END;
$

DROP PROCEDURE IF EXISTS LISTAR_PRODUCTO_DETALLE;
DELIMITER $
CREATE PROCEDURE LISTAR_PRODUCTO_DETALLE(
    IN
        _ID_PRODUCTO INT
)
    BEGIN
        SELECT P.ID_PRODUCTO,P.IMAGEN_RESULTADO,P.RUTA_VIDEO,P.FLAG_PRODUCTO,PES.TIPO_PRODUCTO_ES,PES.NOMBRE_PRODUCTO_ES,PES.DESCRIPCION_PRODUCTO_ES,PES.DESCRIPCION_ITEM_PRODUCTO_ES,PES.TITULO_BENEFICIO_ES,PES.DESCRIPCION_BENEFICIOS_ES,PES.TITULO_PRINCIPIOS_ACTIVOS_ES,PES.DESCRIPCION_PRINCIPIOS_ACTIVOS_ES,PEN.TIPO_PRODUCTO_EN,PEN.NOMBRE_PRODUCTO_EN,PEN.DESCRIPCION_PRODUCTO_EN,PEN.DESCRIPCION_ITEM_PRODUCTO_EN,PEN.TITULO_BENEFICIO_EN,PEN.DESCRIPCION_BENEFICIOS_EN,PEN.TITULO_PRINCIPIOS_ACTIVOS_EN,PEN.DESCRIPCION_PRINCIPIOS_ACTIVOS_EN,PRU.TIPO_PRODUCTO_RU,PRU.NOMBRE_PRODUCTO_RU,PRU.DESCRIPCION_PRODUCTO_RU,PRU.DESCRIPCION_ITEM_PRODUCTO_RU,PRU.TITULO_BENEFICIO_RU,PRU.DESCRIPCION_BENEFICIOS_RU,PRU.TITULO_PRINCIPIOS_ACTIVOS_RU,PRU.DESCRIPCION_PRINCIPIOS_ACTIVOS_RU, PFR.TIPO_PRODUCTO_FR,PFR.NOMBRE_PRODUCTO_FR,PFR.DESCRIPCION_PRODUCTO_FR,PFR.DESCRIPCION_ITEM_PRODUCTO_FR,PFR.TITULO_BENEFICIO_FR,PFR.DESCRIPCION_BENEFICIOS_FR,PFR.TITULO_PRINCIPIOS_ACTIVOS_FR,PFR.DESCRIPCION_PRINCIPIOS_ACTIVOS_FR FROM PRODUCTO_KERA P INNER JOIN PRODUCTO_KERA_ESPANOL PES ON P.ID_PRODUCTO=PES.ID_PRODUCTO INNER JOIN PRODUCTO_KERA_INGLES PEN ON P.ID_PRODUCTO=PEN.ID_PRODUCTO INNER JOIN PRODUCTO_KERA_RUSO PRU ON P.ID_PRODUCTO=PRU.ID_PRODUCTO INNER JOIN PRODUCTO_KERA_FRANCES PFR ON P.ID_PRODUCTO=PFR.ID_PRODUCTO WHERE P.ID_PRODUCTO = _ID_PRODUCTO GROUP BY P.ID_PRODUCTO ORDER BY P.ID_PRODUCTO DESC;
    END;
$
-- SELECT PE.*,P.IMAGEN_RESULTADO,P.RUTA_VIDEO FROM PRODUCTO_KERA_ESPANOL PE INNER JOIN PRODUCTO_KERA P ON P.ID_PRODUCTO = PE.ID_PRODUCTO WHERE P.ID_PRODUCTO = 2 GROUP BY P.ID_PRODUCTO;
-- SELECT ID_IMAGEN,IMAGEN FROM IMAGEN_PRODUCTO_KERA WHERE ID_PRODUCTO = 2;

DROP PROCEDURE IF EXISTS REGISTRAR_PRODUCTO;
DELIMITER $
CREATE PROCEDURE REGISTRAR_PRODUCTO(
	IN 
		-- _ID_PRODUCTO INT,
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
		DECLARE _ID_PRODUCTO INT;
        DECLARE _ID INT DEFAULT (SELECT MAX(ID_PRODUCTO) FROM PRODUCTO_KERA);
        if(_ID > 0) THEN
			SET _ID_PRODUCTO := _ID + 1;
		ELSE
			SET _ID_PRODUCTO := 1;
		END IF;
    
		INSERT INTO PRODUCTO_KERA(ID_PRODUCTO,IMAGEN_RESULTADO,RUTA_VIDEO) VALUES (_ID_PRODUCTO,_IMAGEN_RESULTADO,_RUTA_VIDEO);
        
        INSERT INTO PRODUCTO_KERA_ESPANOL(ID_PRODUCTO,TIPO_PRODUCTO_ES,NOMBRE_PRODUCTO_ES,DESCRIPCION_PRODUCTO_ES,DESCRIPCION_ITEM_PRODUCTO_ES,TITULO_BENEFICIO_ES,DESCRIPCION_BENEFICIOS_ES,TITULO_PRINCIPIOS_ACTIVOS_ES,DESCRIPCION_PRINCIPIOS_ACTIVOS_ES) VALUES(_ID_PRODUCTO,_TIPO_PRODUCTO_ES,_NOMBRE_PRODUCTO_ES,_DESCRIPCION_PRODUCTO_ES,_DESCRIPCION_ITEM_PRODUCTO_ES,_TITULO_BENEFICIO_ES,_DESCRIPCION_BENEFICIOS_ES,_TITULO_PRINCIPIOS_ACTIVOS_ES,_DESCRIPCION_PRINCIPIOS_ACTIVOS_ES);

        INSERT INTO PRODUCTO_KERA_INGLES(ID_PRODUCTO,TIPO_PRODUCTO_EN,NOMBRE_PRODUCTO_EN,DESCRIPCION_PRODUCTO_EN,DESCRIPCION_ITEM_PRODUCTO_EN,TITULO_BENEFICIO_EN,DESCRIPCION_BENEFICIOS_EN,TITULO_PRINCIPIOS_ACTIVOS_EN,DESCRIPCION_PRINCIPIOS_ACTIVOS_EN) VALUES(_ID_PRODUCTO,_TIPO_PRODUCTO_EN,_NOMBRE_PRODUCTO_EN,_DESCRIPCION_PRODUCTO_EN,_DESCRIPCION_ITEM_PRODUCTO_EN,_TITULO_BENEFICIO_EN,_DESCRIPCION_BENEFICIOS_EN,_TITULO_PRINCIPIOS_ACTIVOS_EN,_DESCRIPCION_PRINCIPIOS_ACTIVOS_EN);

        INSERT INTO PRODUCTO_KERA_RUSO(ID_PRODUCTO,TIPO_PRODUCTO_RU,NOMBRE_PRODUCTO_RU,DESCRIPCION_PRODUCTO_RU,DESCRIPCION_ITEM_PRODUCTO_RU,TITULO_BENEFICIO_RU,DESCRIPCION_BENEFICIOS_RU,TITULO_PRINCIPIOS_ACTIVOS_RU,DESCRIPCION_PRINCIPIOS_ACTIVOS_RU) VALUES(_ID_PRODUCTO,_TIPO_PRODUCTO_RU,_NOMBRE_PRODUCTO_RU,_DESCRIPCION_PRODUCTO_RU,_DESCRIPCION_ITEM_PRODUCTO_RU,_TITULO_BENEFICIO_RU,_DESCRIPCION_BENEFICIOS_RU,_TITULO_PRINCIPIOS_ACTIVOS_RU,_DESCRIPCION_PRINCIPIOS_ACTIVOS_RU);
        
        INSERT INTO PRODUCTO_KERA_FRANCES(ID_PRODUCTO,TIPO_PRODUCTO_FR,NOMBRE_PRODUCTO_FR,DESCRIPCION_PRODUCTO_FR,DESCRIPCION_ITEM_PRODUCTO_FR,TITULO_BENEFICIO_FR,DESCRIPCION_BENEFICIOS_FR,TITULO_PRINCIPIOS_ACTIVOS_FR,DESCRIPCION_PRINCIPIOS_ACTIVOS_FR) VALUES(_ID_PRODUCTO,_TIPO_PRODUCTO_FR,_NOMBRE_PRODUCTO_FR,_DESCRIPCION_PRODUCTO_FR,_DESCRIPCION_ITEM_PRODUCTO_FR,_TITULO_BENEFICIO_FR,_DESCRIPCION_BENEFICIOS_FR,_TITULO_PRINCIPIOS_ACTIVOS_FR,_DESCRIPCION_PRINCIPIOS_ACTIVOS_FR);
    END;
$


DROP PROCEDURE IF EXISTS ACTUALIZAR_PRODUCTO;
DELIMITER $
CREATE PROCEDURE ACTUALIZAR_PRODUCTO(
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
        UPDATE PRODUCTO_KERA SET 
        IMAGEN_RESULTADO = _IMAGEN_RESULTADO,
        RUTA_VIDEO = _RUTA_VIDEO WHERE ID_PRODUCTO = _ID_PRODUCTO;

        UPDATE PRODUCTO_KERA_ESPANOL SET
        TIPO_PRODUCTO_ES = _TIPO_PRODUCTO_ES,
        NOMBRE_PRODUCTO_ES = _NOMBRE_PRODUCTO_ES,
        DESCRIPCION_PRODUCTO_ES = _DESCRIPCION_PRODUCTO_ES,
        DESCRIPCION_ITEM_PRODUCTO_ES = _DESCRIPCION_ITEM_PRODUCTO_ES,
        TITULO_BENEFICIO_ES = _TITULO_BENEFICIO_ES,
        DESCRIPCION_BENEFICIOS_ES = _DESCRIPCION_BENEFICIOS_ES,
        TITULO_PRINCIPIOS_ACTIVOS_ES = _TITULO_PRINCIPIOS_ACTIVOS_ES,
        DESCRIPCION_PRINCIPIOS_ACTIVOS_ES = _DESCRIPCION_PRINCIPIOS_ACTIVOS_ES
        WHERE ID_PRODUCTO = _ID_PRODUCTO;

        UPDATE PRODUCTO_KERA_INGLES SET
        TIPO_PRODUCTO_EN = _TIPO_PRODUCTO_EN,
        NOMBRE_PRODUCTO_EN = _NOMBRE_PRODUCTO_EN,
        DESCRIPCION_PRODUCTO_EN = _DESCRIPCION_PRODUCTO_EN,
        DESCRIPCION_ITEM_PRODUCTO_EN = _DESCRIPCION_ITEM_PRODUCTO_EN,
        TITULO_BENEFICIO_EN = _TITULO_BENEFICIO_EN,
        DESCRIPCION_BENEFICIOS_EN = _DESCRIPCION_BENEFICIOS_EN,
        TITULO_PRINCIPIOS_ACTIVOS_EN = _TITULO_PRINCIPIOS_ACTIVOS_EN,
        DESCRIPCION_PRINCIPIOS_ACTIVOS_EN = _DESCRIPCION_PRINCIPIOS_ACTIVOS_EN
        WHERE ID_PRODUCTO = _ID_PRODUCTO;

        UPDATE PRODUCTO_KERA_RUSO SET
        TIPO_PRODUCTO_RU = _TIPO_PRODUCTO_RU,
        NOMBRE_PRODUCTO_RU = _NOMBRE_PRODUCTO_RU,
        DESCRIPCION_PRODUCTO_RU = _DESCRIPCION_PRODUCTO_RU,
        DESCRIPCION_ITEM_PRODUCTO_RU = _DESCRIPCION_ITEM_PRODUCTO_RU,
        TITULO_BENEFICIO_RU = _TITULO_BENEFICIO_RU,
        DESCRIPCION_BENEFICIOS_RU = _DESCRIPCION_BENEFICIOS_RU,
        TITULO_PRINCIPIOS_ACTIVOS_RU = _TITULO_PRINCIPIOS_ACTIVOS_RU,
        DESCRIPCION_PRINCIPIOS_ACTIVOS_RU = _DESCRIPCION_PRINCIPIOS_ACTIVOS_RU
        WHERE ID_PRODUCTO = _ID_PRODUCTO;

        UPDATE PRODUCTO_KERA_FRANCES SET
        TIPO_PRODUCTO_FR = _TIPO_PRODUCTO_FR,
        NOMBRE_PRODUCTO_FR = _NOMBRE_PRODUCTO_FR,
        DESCRIPCION_PRODUCTO_FR = _DESCRIPCION_PRODUCTO_FR,
        DESCRIPCION_ITEM_PRODUCTO_FR = _DESCRIPCION_ITEM_PRODUCTO_FR,
        TITULO_BENEFICIO_FR = _TITULO_BENEFICIO_FR,
        DESCRIPCION_BENEFICIOS_FR = _DESCRIPCION_BENEFICIOS_FR,
        TITULO_PRINCIPIOS_ACTIVOS_FR = _TITULO_PRINCIPIOS_ACTIVOS_FR,
        DESCRIPCION_PRINCIPIOS_ACTIVOS_FR = _DESCRIPCION_PRINCIPIOS_ACTIVOS_FR
        WHERE ID_PRODUCTO = _ID_PRODUCTO;
    END;
$

DROP PROCEDURE IF EXISTS ELIMINAR_PRODUCTO;
DELIMITER $
CREATE PROCEDURE ELIMINAR_PRODUCTO(
    IN 
        _ID_PRODUCTO INT
)
    BEGIN
        DELETE FROM PRODUCTO_KERA WHERE ID_PRODUCTO = _ID_PRODUCTO;
    END;
$


DROP PROCEDURE IF EXISTS LISTAR_IMAGEN_PRODUCTO;
DELIMITER $
CREATE PROCEDURE LISTAR_IMAGEN_PRODUCTO(
    IN
        _ID_PRODUCTO INT
)
    BEGIN
        SELECT I.ID_IMAGEN,PES.NOMBRE_PRODUCTO_ES,I.IMAGEN FROM IMAGEN_PRODUCTO_KERA I INNER JOIN PRODUCTO_KERA_ESPANOL PES ON PES.ID_PRODUCTO = I.ID_PRODUCTO WHERE PES.ID_PRODUCTO = _ID_PRODUCTO;
    END;
$

DROP PROCEDURE IF EXISTS REGISTRAR_IMAGEN_PRODUCTO;
DELIMITER $
CREATE PROCEDURE REGISTRAR_IMAGEN_PRODUCTO(
	IN 
        _ID_PRODUCTO INT,
        _IMAGEN TEXT
)
    BEGIN
        INSERT INTO IMAGEN_PRODUCTO_KERA(ID_PRODUCTO,IMAGEN) VALUES(_ID_PRODUCTO,_IMAGEN);
    END;
$

-- DROP PROCEDURE IF EXISTS ACTUALIZAR_IMAGEN_PRODUCTO;
-- DELIMITER $
-- CREATE PROCEDURE ACTUALIZAR_IMAGEN_PRODUCTO(
-- 	IN 
--         _ID_PRODUCTO INT,
--         _IMAGEN TEXT
-- )
--     BEGIN
--         UPDATE IMAGEN_PRODUCTO SET IMAGEN = _IMAGEN WHERE ID_PRODUCTO = _ID_PRODUCTO;
--     END;
-- $

DROP PROCEDURE IF EXISTS ELIMINAR_IMAGEN_PRODUCTO;
DELIMITER $
CREATE PROCEDURE ELIMINAR_IMAGEN_PRODUCTO(
    IN 
        _ID_IMAGEN INT
)
    BEGIN
        DELETE FROM IMAGEN_PRODUCTO_KERA WHERE ID_IMAGEN = _ID_IMAGEN;
    END;
$

DROP PROCEDURE IF EXISTS LISTAR_IMAGEN_HOME;
DELIMITER $
CREATE PROCEDURE LISTAR_IMAGEN_HOME()
    BEGIN
        SELECT * FROM IMAGEN_HOME_KERA;
    END;
$

DROP PROCEDURE IF EXISTS LISTAR_IMAGEN_HOME_LANG;
DELIMITER $
CREATE PROCEDURE LISTAR_IMAGEN_HOME_LANG(
	IN
		_TIPO_LANG CHAR(2)
)
    BEGIN
        SELECT TIPO_LANG,TITULO_IMAGEN,IMAGEN FROM IMAGEN_HOME_KERA WHERE TIPO_LANG = _TIPO_LANG;
    END;
$

DROP PROCEDURE IF EXISTS REGISTRAR_IMAGEN_HOME;
DELIMITER $
CREATE PROCEDURE REGISTRAR_IMAGEN_HOME(
    IN 
		_TIPO_LANG CHAR(2),
        _TITULO_IMAGEN TEXT,
        _IMAGEN TEXT
)
    BEGIN
        INSERT INTO IMAGEN_HOME_KERA(TIPO_LANG,TITULO_IMAGEN,IMAGEN) VALUES(_TIPO_LANG,_TITULO_IMAGEN,_IMAGEN);   
    END;
$

DROP PROCEDURE IF EXISTS ACTUALIZAR_IMAGEN_HOME;
DELIMITER $
CREATE PROCEDURE ACTUALIZAR_IMAGEN_HOME(
    IN 
		_ID_IMAGEN INT,
        _TITULO_IMAGEN TEXT,
        _IMAGEN TEXT
)
    BEGIN
        UPDATE IMAGEN_HOME_KERA SET TITULO_IMAGEN = _TITULO_IMAGEN, IMAGEN =_IMAGEN WHERE ID_IMAGEN = _ID_IMAGEN;
    END;
$


DROP PROCEDURE IF EXISTS ELIMINAR_IMAGEN_HOME;
DELIMITER $
CREATE PROCEDURE ELIMINAR_IMAGEN_HOME(
	IN 
		_ID_IMAGEN INT
)
    BEGIN
        DELETE FROM IMAGEN_HOME_KERA WHERE ID_IMAGEN = _ID_IMAGEN;
    END;
$