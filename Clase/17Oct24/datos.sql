-- VALIDAR SI EXIUSTE LA BASE DE DATOS
DROP SCHEMA IF EXISTS `fes_aragon`;

--crear la base de datos
CREATE SCHEMA IF NOT EXISTS `fes_aragon` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci; 

-- Nos posicionamos dentro de la base de datos
USE `fes_aragon`;

-- Creamos una tabla
CREATE TABLE `alumno`(
    `nombre` TEXT NOT NULL,
    `carrera` TEXT NOT NULL,
    `n_cuenta` INT(10) NOT NULL,
    `direccion` TEXT NOT NULL,
    `telefono` VARCHAR(18) NOT NULL,
    `email` TEXT NOT NULL,
    `password` VARCHAR(10) NOT NULL,
    `fecha_registro` DATETIME NOT NULL DEFAULT current_timestap,
    `permisos` INT(11) NOT NULL DEFAULT '2'

)

ALTER TABLE `alumno`
