SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de datos: `oposiciones`
--

CREATE DATABASE IF NOT EXISTS oposiciones;
USE oposiciones;

--
-- Estructura de tabla para la tabla `resultados`
--
CREATE TABLE IF NOT EXISTS `resultados` (
    `cod_op` varchar(5) NOT NULL,
    `notap` decimal(4,2) DEFAULT NULL,
    `notat` decimal(4,2) DEFAULT NULL,
    PRIMARY KEY (`cod_op`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `resultados`
--
INSERT INTO `resultados` (`cod_op`, `notap`, `notat`) VALUES
    ('11111', '5.60', '7.20'),
    ('22222', '5.00', '5.00'),
    ('33333', '4.25', '3.25'),
    ('44444', '2.00', '6.50'),
    ('55555', '8.60', '9.10'),
    ('66666', '6.00', '9.00'),
    ('77777', '7.50', '3.25'),
    ('88888', '2.00', '2.50'),
    ('99999', '7.00', '7.00');
