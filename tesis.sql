-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2025 a las 18:59:57
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tesis1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tesis`
--

CREATE TABLE `tesis` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `linea_investigacion` varchar(150) NOT NULL,
  `resumen` varchar(250) NOT NULL,
  `objetivos` varchar(200) NOT NULL,
  `fecha_inicio` timestamp NOT NULL DEFAULT current_timestamp(),
  `fecha_fin` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` tinyint(4) NOT NULL,
  `id_tesista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tesis`
--

INSERT INTO `tesis` (`id`, `titulo`, `linea_investigacion`, `resumen`, `objetivos`, `fecha_inicio`, `fecha_fin`, `estado`, `id_tesista`) VALUES
(1, 'TITULO 1', 'TITULO 1', 'RESUMEN 1', 'OBJETIVO 1', '2025-06-11 16:17:08', '2025-06-11 16:17:08', 0, 1),
(2, 'TITULO 2', 'LINEA 2', 'RESUMEN 2', 'OBJETIVO 2', '2025-06-11 16:50:33', '2025-06-11 16:50:33', 0, 2),
(3, 'TITULO 3', 'LINEA 3 ', 'RESUMEN 3', 'OBJETIVO 3', '2025-06-11 16:51:11', '2025-06-11 16:51:11', 0, 3),
(4, 'TITULO 4', 'LINEA 4', 'RESUMEN 4', 'OBJETIVO 4', '2025-06-11 16:51:39', '2025-06-11 16:51:39', 0, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_tesista_Tesista` (`id_tesista`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tesis`
--
ALTER TABLE `tesis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tesis`
--
ALTER TABLE `tesis`
  ADD CONSTRAINT `FK_tesista_Tesista` FOREIGN KEY (`id_tesista`) REFERENCES `tesista` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
