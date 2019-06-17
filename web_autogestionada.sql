-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 10:14:40
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web_autogestionada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre`, `precio`) VALUES
(1, 'agua ', 1.50),
(2, 'refrescos ', 2.00),
(3, 'vino blanco', 9.99),
(4, 'vino tinto ', 9.99),
(5, 'cerveza ', 2.50),
(6, 'cerveza sin alcohol ', 1.20),
(7, 'zumo', 1.80),
(8, 'sangria ', 7.50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombre_platos`
--

CREATE TABLE `nombre_platos` (
  `id` int(8) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(3,2) NOT NULL,
  `orden_plato` enum('primeros','segundos','postres') CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `menu_activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombre_platos`
--

INSERT INTO `nombre_platos` (`id`, `nombre`, `precio`, `orden_plato`, `menu_activo`) VALUES
(1, 'Berenjenas Rellenas', 15.00, 'primeros', 0),
(2, 'Gazpacho ', 3.00, 'primeros', 1),
(3, 'Lasaña Boloñesa', 5.00, 'primeros', 1),
(4, 'Pollo al Horno ', 12.90, 'segundos', 1),
(5, 'Salmon ', 10.90, 'segundos', 1),
(6, 'Chuletillas', 14.00, 'segundos', 1),
(7, 'Arroz con Leche ', 6.00, 'postres', 1),
(8, 'Tarta 3 Chocolates ', 6.90, 'postres', 1),
(10, 'patatas bravas ', 7.00, 'primeros', 1),
(11, 'Tarta al whiski', 6.00, 'postres', 1),
(12, 'Cordero al horno ', 9.99, 'segundos', 1),
(15, 'sopa castellana', 4.50, 'primeros', 1),
(16, 'natillas', 3.00, 'postres', 1),
(17, 'hamburguesa ', 7.00, 'primeros', 1),
(18, 'chocolate', 6.00, 'postres', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nombre_platos`
--
ALTER TABLE `nombre_platos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `nombre_platos`
--
ALTER TABLE `nombre_platos`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
