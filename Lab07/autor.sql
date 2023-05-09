-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 09-05-2023 a las 17:09:30
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
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `autor_id` int(11) NOT NULL,
  `nombres` varchar(60) COLLATE latin1_spanish_ci NOT NULL,
  `ape_paterno` varchar(40) COLLATE latin1_spanish_ci NOT NULL,
  `ape_materno` varchar(40) COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`autor_id`, `nombres`, `ape_paterno`, `ape_materno`) VALUES
(1, 'Rael', 'Rivero', ''),
(2, 'Gabriel', 'Reyes', 'Barrientos'),
(3, 'Mario', 'Vargas-Llosa', ''),
(4, 'Ciro', 'Alegria', ''),
(5, 'Cesar', 'Vallejo', ''),
(6, 'Julio', 'Verne', ''),
(7, 'Gabriel', 'Garcia', 'Marquez'),
(8, 'Gabriela', 'Mistral', ''),
(9, 'NicolÃ¡s', 'Maquiavelo', ''),
(10, 'Daniel', 'Boubeta', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`autor_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `autor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
