-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `ajax`;

-- Seleccionar la base de datos
USE `ajax`;

-- Crear la tabla `tareas`
CREATE TABLE IF NOT EXISTS `tareas` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `descripcion` VARCHAR(150) NOT NULL,
    `estado` VARCHAR(9) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
