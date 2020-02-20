DROP DATABASE IF EXISTS SISTEMA_SALON_BELLEZA_KERA;
CREATE DATABASE SISTEMA_SALON_BELLEZA_KERA;
USE SISTEMA_SALON_BELLEZA_KERA;

-- =============================== TABLAS ==========================
CREATE TABLE IF NOT EXISTS PRODUCTO_KERA (
	id_producto INT PRIMARY KEY NOT NULL,
    imagen_resultado TEXT NULL,
    ruta_video TEXT NULL,
    flag_estado TINYINT DEFAULT 1
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_ESPANOL (
	id_producto INT NOT NULL,
	tipo_producto VARCHAR(40) NOT NULL,
	nombre_producto VARCHAR(40) NOT NULL,
	descripcion_producto TEXT NULL, 	 
	descripcion_item_producto TEXT NULL,
	titulo_beneficio VARCHAR(20) NULL,
	descripcion_beneficios TEXT NULL,
	titulo_principios_activos VARCHAR(40) NULL,
	descripcion_principios_activos TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_INGLES (
	id_producto INT NOT NULL,
	tipo_producto VARCHAR(40) NOT NULL,
	nombre_producto VARCHAR(40) NOT NULL,
	descripcion_producto TEXT NULL, 	 
	descripcion_item_producto TEXT NULL,
	titulo_beneficio VARCHAR(20) NULL,
	descripcion_beneficios TEXT NULL,
	titulo_principios_activos VARCHAR(40) NULL,
	descripcion_principios_activos TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_RUSO (
	id_producto INT NOT NULL,
	tipo_producto VARCHAR(40) NOT NULL,
	nombre_producto VARCHAR(40) NOT NULL,
	descripcion_producto TEXT NULL, 	 
	descripcion_item_producto TEXT NULL,
	titulo_beneficio VARCHAR(20) NULL,
	descripcion_beneficios TEXT NULL,
	titulo_principios_activos VARCHAR(40) NULL,
	descripcion_principios_activos TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_FRANCES (
	id_producto INT NOT NULL,
	tipo_producto VARCHAR(40) NOT NULL,
	nombre_producto VARCHAR(40) NOT NULL,
	descripcion_producto TEXT NULL, 	 
	descripcion_item_producto TEXT NULL,
	titulo_beneficio VARCHAR(20) NULL,
	descripcion_beneficios TEXT NULL,
	titulo_principios_activos VARCHAR(40) NULL,
	descripcion_principios_activos TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS IMAGEN_PRODUCTO(
	id_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_producto INT NOT NULL,
    imagen TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET= UTF8;

CREATE TABLE IF NOT EXISTS IMAGEN_HOME(
	id_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titulo_imagen VARCHAR(40) NOT NULL,
    imagen TEXT NULL,
    flag_estado TINYINT DEFAULT 1
)ENGINE = INNODB DEFAULT CHAR SET= UTF8;

-- CLAVES FORANEAS
ALTER TABLE PRODUCTO_KERA_ESPANOL 
	ADD CONSTRAINT producto_producto_espanol FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_INGLES 
	ADD CONSTRAINT producto_producto_ingles FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_FRANCES 
	ADD CONSTRAINT producto_producto_frances FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_RUSO
	ADD CONSTRAINT producto_producto_ruso FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE;

ALTER TABLE IMAGEN_PRODUCTO
	ADD CONSTRAINT producto_imagen_producto FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE;
