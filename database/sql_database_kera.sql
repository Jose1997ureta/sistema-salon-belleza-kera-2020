DROP DATABASE IF EXISTS SISTEMA_SALON_BELLEZA_KERA;
CREATE DATABASE SISTEMA_SALON_BELLEZA_KERA;
USE SISTEMA_SALON_BELLEZA_KERA;

-- =============================== TABLAS ==========================
CREATE TABLE IF NOT EXISTS TRABAJADOR_KERA (
	ID_TRABAJADOR INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
	NOMBRE_TRABAJADOR VARCHAR(100),
	APELLIDO_TRABAJADOR VARCHAR(100),
	CORREO_TRABAJADOR VARCHAR(100),
	PASSWORD_TRABAJADOR VARCHAR(40),
	TIPO_TRABAJADOR TINYINT DEFAULT 0
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA (
	id_producto INT PRIMARY KEY NOT NULL,
    imagen_resultado TEXT NULL,
    ruta_video TEXT NULL,
    flag_producto VARCHAR(10) DEFAULT 'Activo'
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_ESPANOL (
	id_producto INT NOT NULL,
	tipo_producto_es VARCHAR(40) NOT NULL,
	nombre_producto_es VARCHAR(40) NOT NULL,
	descripcion_producto_es TEXT NULL, 	 
	descripcion_item_producto_es TEXT NULL,
	titulo_beneficio_es VARCHAR(20) NULL,
	descripcion_beneficios_es TEXT NULL,
	titulo_principios_activos_es VARCHAR(40) NULL,
	descripcion_principios_activos_es TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_INGLES (
	id_producto INT NOT NULL,
	tipo_producto_en VARCHAR(40) NOT NULL,
	nombre_producto_en VARCHAR(40) NOT NULL,
	descripcion_producto_en TEXT NULL, 	 
	descripcion_item_producto_en TEXT NULL,
	titulo_beneficio_en VARCHAR(20) NULL,
	descripcion_beneficios_en TEXT NULL,
	titulo_principios_activos_en VARCHAR(40) NULL,
	descripcion_principios_activos_en TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_RUSO (
	id_producto INT NOT NULL,
	tipo_producto_ru VARCHAR(40) NOT NULL,
	nombre_producto_ru VARCHAR(40) NOT NULL,
	descripcion_producto_ru TEXT NULL, 	 
	descripcion_item_producto_ru TEXT NULL,
	titulo_beneficio_ru VARCHAR(20) NULL,
	descripcion_beneficios_ru TEXT NULL,
	titulo_principios_activos_ru VARCHAR(40) NULL,
	descripcion_principios_activos_ru TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS PRODUCTO_KERA_FRANCES (
	id_producto INT NOT NULL,
	tipo_producto_fr VARCHAR(40) NOT NULL,
	nombre_producto_fr VARCHAR(40) NOT NULL,
	descripcion_producto_fr TEXT NULL, 	 
	descripcion_item_producto_fr TEXT NULL,
	titulo_beneficio_fr VARCHAR(20) NULL,
	descripcion_beneficios_fr TEXT NULL,
	titulo_principios_activos_fr VARCHAR(40) NULL,
	descripcion_principios_activos_fr TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET = UTF8;

CREATE TABLE IF NOT EXISTS IMAGEN_PRODUCTO_KERA(
	id_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    id_producto INT NOT NULL,
    imagen TEXT NULL
)ENGINE = INNODB DEFAULT CHAR SET= UTF8;

CREATE TABLE IF NOT EXISTS IMAGEN_HOME_KERA(
	id_imagen INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    titulo_imagen VARCHAR(40) NOT NULL,
    imagen TEXT NULL,
    flag_imagen VARCHAR(10) DEFAULT 'Activo'
)ENGINE = INNODB DEFAULT CHAR SET= UTF8;

-- CLAVES FORANEAS
ALTER TABLE PRODUCTO_KERA_ESPANOL 
	ADD CONSTRAINT producto_producto_espanol FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE ON DELETE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_INGLES 
	ADD CONSTRAINT producto_producto_ingles FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE ON DELETE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_FRANCES 
	ADD CONSTRAINT producto_producto_frances FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE ON DELETE CASCADE;
    
ALTER TABLE PRODUCTO_KERA_RUSO
	ADD CONSTRAINT producto_producto_ruso FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE ON DELETE CASCADE;

ALTER TABLE IMAGEN_PRODUCTO_KERA
	ADD CONSTRAINT producto_imagen_producto FOREIGN KEY (id_producto) REFERENCES PRODUCTO_KERA (id_producto) ON UPDATE CASCADE ON DELETE CASCADE;
