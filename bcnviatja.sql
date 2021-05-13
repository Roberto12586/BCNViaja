-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2019 a las 14:10:54
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bcnviatja`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Apellidos` varchar(60) NOT NULL,
  `Fecha_nac` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Telefono` int(20) NOT NULL,
  `nom_usuario` varchar(50) NOT NULL,
  `Contrasenya` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `Nombre`, `Apellidos`, `Fecha_nac`, `Email`, `Telefono`, `nom_usuario`, `Contrasenya`) VALUES
(1, 'sofia', 'salgado', '2019-01-14', 'sofia.eoy.sp@hotmail.com', 345234123, 'sofia_laguay', 'dorsal'),
(2, 'pepe', 'lopez', '1998-03-12', 'pepe.lopez@hotmail.com', 2147483647, 'pepe_lo.pez', 'so1234'),
(7, 'Octavio', 'Salgado Capucho', '1991-12-17', 'octavio.salgado@hotmail.com', 691442280, 'octavio_171291', 'octaelmejo'),
(8, 'Pepa', 'Pig', '1990-03-12', 'fhsdfgds@glsdfkj.com', 345346546, 'pepapig', '4321');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
