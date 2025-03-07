-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-03-2025 a las 19:46:51
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
-- Base de datos: `general`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `poject_10_alumnos`
--

CREATE TABLE `poject_10_alumnos` (
  `CodAlumno` int(5) NOT NULL DEFAULT 0,
  `NomAlumno` varchar(50) NOT NULL DEFAULT '',
  `ApeAlumno` varchar(50) NOT NULL DEFAULT '',
  `AulaAlumno` char(1) NOT NULL DEFAULT '',
  `NotaP1` int(2) NOT NULL DEFAULT 0,
  `NotaP2` int(2) NOT NULL DEFAULT 0,
  `NotaP3` int(2) NOT NULL DEFAULT 0,
  `NotaEP` int(2) NOT NULL DEFAULT 0,
  `NotaEF` int(2) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `poject_10_alumnos`
--

INSERT INTO `poject_10_alumnos` (`CodAlumno`, `NomAlumno`, `ApeAlumno`, `AulaAlumno`, `NotaP1`, `NotaP2`, `NotaP3`, `NotaEP`, `NotaEF`) VALUES
(12451, 'Alumno1', 'Alumno1', 'A', 10, 12, 8, 15, 18),
(12452, 'Alumno2', 'Alumno2', 'B', 8, 12, 4, 14, 20),
(12453, 'Alumno3', 'Alumno3', 'C', 15, 14, 5, 13, 17),
(12454, 'Alumno4', 'Alumno4', 'A', 12, 17, 5, 11, 14),
(12455, 'Alumno5', 'Alumno5', 'E', 13, 19, 8, 10, 10),
(12456, 'Alumno6', 'Alumno6', 'B', 18, 9, 8, 13, 16),
(12457, 'Alumno7', 'Alumno7', 'D', 17, 17, 6, 14, 20),
(12458, 'Alumno8', 'Alumno8', 'B', 19, 13, 5, 15, 19),
(12459, 'Alumno9', 'Alumno9', 'A', 20, 5, 10, 16, 17),
(12460, 'Alumno10', 'Alumno10', 'C', 18, 4, 19, 9, 12);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `poject_10_alumnos`
--
ALTER TABLE `poject_10_alumnos`
  ADD PRIMARY KEY (`CodAlumno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
