-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-02-2025 a las 19:36:06
-- Versión del servidor: 8.2.0
-- Versión de PHP: 8.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acogida`
--

create database acogida;

use acogida;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `id_centro` varchar(5) NOT NULL,
  `deno` varchar(30) DEFAULT NULL,
  `localidad` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `centros`
--

INSERT INTO `centros` (`id_centro`, `deno`, `localidad`) VALUES
('01BUR', 'Burgos mascotas', 'Burgos'),
('01SAL', 'Río Tormes acoge', 'Salamanca'),
('01VAL', 'Mascotas La Antigua', 'Valladolid'),
('02BUR', 'Mascotas El Cid', 'Burgos'),
('02SAL', 'La mejor compañía', 'Salamanca'),
('03BUR', 'El papamoscas', 'Burgos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `id_mascota` int NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `especie` char(1) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `estado` char(1) DEFAULT NULL,
  `id_centro` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`id_mascota`, `nombre`, `especie`, `sexo`, `estado`, `id_centro`) VALUES
(1, 'Budy', 'P', 'M', 'B', '01BUR'),
(2, 'Pipo', 'P', 'M', 'B', '01SAL'),
(3, 'Nuna', 'P', 'H', 'A', '01VAL'),
(4, 'Bruts', 'P', 'M', 'A', '02BUR'),
(5, 'Americo', 'G', 'M', 'A', '01SAL'),
(6, 'Sombra', 'P', 'H', 'A', '01VAL'),
(7, 'Amaya', 'G', 'H', 'A', '01BUR'),
(8, 'Talia', 'G', 'H', 'B', '01BUR'),
(9, 'Trabis', 'P', 'M', 'A', '02BUR'),
(10, 'Tesa', 'G', 'H', 'A', '02SAL'),
(11, 'Titito', 'G', 'M', 'B', '01VAL'),
(12, 'Truca', 'P', 'H', 'A', '01BUR'),
(13, 'Zalay', 'P', 'H', 'A', '01VAL'),
(14, 'Dandi', 'G', 'M', 'A', '01BUR'),
(15, 'Ras', 'G', 'M', 'A', '02SAL'),
(16, 'Canela', 'P', 'H', 'A', '03BUR');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`id_centro`);

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`id_mascota`),
  ADD KEY `fk_mascotas_centros` (`id_centro`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD CONSTRAINT `fk_mascotas_centros` FOREIGN KEY (`id_centro`) REFERENCES `centros` (`id_centro`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
