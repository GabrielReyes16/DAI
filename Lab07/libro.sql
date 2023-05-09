-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2023 a las 17:09:45
-- Versión del servidor: 5.6.34
-- Versión de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lab07`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

CREATE TABLE `libro` (
  `libro_id` int(11) NOT NULL,
  `titulo` varchar(150) COLLATE latin1_spanish_ci NOT NULL,
  `autor_id` int(11) NOT NULL,
  `anio` int(11) NOT NULL,
  `especialidad` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `editorial` varchar(60) COLLATE latin1_spanish_ci DEFAULT NULL,
  `link` varchar(250) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`libro_id`, `titulo`, `autor_id`, `anio`, `especialidad`, `editorial`, `link`) VALUES
(3, 'Dejando atrÃ¡s', 2, 2022, 'Suspenso', 'Uva Editorial', 'https://www.wattpad.com/story/322896140-dejando-atr%C3%A1s'),
(4, 'Letras de un Marginado', 2, 2023, 'Poemas', 'Uva Editorial', 'https://www.wattpad.com/story/331209361-letras-de-un-marginado'),
(5, 'CompleXMind', 2, 2018, 'AcciÃ³n', 'Uva Editorial', 'https://www.wattpad.com/story/170069609-complexmind'),
(6, 'El PrÃ­ncipe', 9, 1532, 'FilosofÃ­a', 'Piensa Editorial', 'https://infolibros.org/pdfview/11922-el-principe-nicolas-maquiavelo/');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `libro`
--
ALTER TABLE `libro`
  ADD PRIMARY KEY (`libro_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `libro`
--
ALTER TABLE `libro`
  MODIFY `libro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
