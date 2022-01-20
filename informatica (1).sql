-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-11-2020 a las 12:52:50
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `informatica`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `evaluar` (IN `USUARIO` VARCHAR(100), IN `PASS` VARCHAR(100), OUT `VALORA` INT)  BEGIN
	if EXISTS(SELECT A.NOMBRE from director_carrera A WHERE A.NOMBRE=USUARIO AND PASS=A.CI) THEN
    	SET VALORA=1;
    ELSE
    	SET VALORA=2;
     END IF;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director_carrera`
--

CREATE TABLE `director_carrera` (
  `CI` varchar(10) NOT NULL,
  `NOMBRE` varchar(500) NOT NULL,
  `APELLIDO` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `director_carrera`
--

INSERT INTO `director_carrera` (`CI`, `NOMBRE`, `APELLIDO`) VALUES
('123456789', 'Juan', 'Mamani Porcel');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `director_carrera`
--
ALTER TABLE `director_carrera`
  ADD PRIMARY KEY (`CI`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
