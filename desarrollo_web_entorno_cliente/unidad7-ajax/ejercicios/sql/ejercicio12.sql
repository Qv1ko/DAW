-- Crear el usuario
CREATE USER 'ajaxUser'@'localhost' IDENTIFIED BY 'dwec';

-- Conceder permisos de uso
GRANT USAGE ON *.* TO 'ajaxUser'@'localhost' WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS `ajax`;

-- Conceder todos los privilegios en la base de datos `ajax`
GRANT ALL PRIVILEGES ON `ajax`.* TO 'ajaxUser'@'localhost';

-- Seleccionar la base de datos
USE `ajax`;

-- Crear la tabla `viajescomprados`
CREATE TABLE IF NOT EXISTS `viajescomprados` (
    `id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
    `nombre` VARCHAR(150) NOT NULL,
    `descripcion` VARCHAR(150) NOT NULL,
    `email` VARCHAR(50) NOT NULL,
    `num` INT(3) UNSIGNED NOT NULL,
    `precio` INT(10) UNSIGNED NOT NULL,
    `numerotarjeta` BIGINT UNSIGNED NOT NULL,
    `csv` INT(3) UNSIGNED NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=11;

-- Insertar datos en la tabla `viajescomprados`
INSERT INTO `viajescomprados` (`id`, `nombre`, `descripcion`, `email`, `num`, `precio`, `numerotarjeta`, `csv`) VALUES
    (1, 'Lara Rodriguez', 'Viaje en globo', 'jesus@hotmail.com', 3, 900, 1234123412341234, 942),
    (2, 'Mario García', 'Spa fin de semana', 'sandra@hotmail.com', 2, 250, 2222333344445555, 333),
    (3, 'Andres Sanchez', 'Viaje en globo', 'cristina@hotmail.com', 1, 300, 2222333355551111, 933),
    (4, 'Marta Campos', 'Marrakech 3 dias', 'jose@hotmail.com', 3, 600, 4444555566668888, 882),
    (5, 'Gadea Gil', 'Spa fin de semana', 'santos@gmail.com', 1, 125, 4569785423145698, 345),
    (6, 'Jorge Izquierdo', 'Marrakech 3 dias', 'martita@hotmail.com', 2, 400, 1111116666555333, 230),
    (7, 'Marta Castro', 'Roma puente carnaval', 'santos@gmail.com', 2, 700, 4569785423145698, 345),
    (8, 'Alejandro Ugalde', 'Marrakech 3 dias', 'alejandro@hotmail.com', 3, 600, 5555666644443333, 555),
    (9, 'Jorge Pascual', 'Roma puente carnaval', 'jpascual@hotmail.com ', 1, 350, 5555666699997777, 733);
