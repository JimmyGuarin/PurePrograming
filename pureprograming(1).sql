-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2015 a las 15:37:30
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `pureprograming`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pujasusuario`
--

CREATE TABLE IF NOT EXISTS `pujasusuario` (
  `idUsuario` int(11) NOT NULL,
  `idSubasta` int(11) NOT NULL,
  `monto_Actual` int(11) NOT NULL,
  `estado` tinyint(1) DEFAULT NULL COMMENT 'Si va ganando o no'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subastas`
--

CREATE TABLE IF NOT EXISTS `subastas` (
`id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(60) NOT NULL,
  `imagen` varchar(30) NOT NULL,
  `monto_inicial` int(11) NOT NULL,
  `fecha_cierre` date NOT NULL,
  `propietario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(2) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `edad` int(3) NOT NULL,
  `documento` varchar(12) NOT NULL,
  `pass1` varchar(10) NOT NULL,
  `pujas` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nombre`, `apellidos`, `email`, `edad`, `documento`, `pass1`, `pujas`) VALUES
(2, 'Jimmy', 'Guarin', 'jimmyguarin43@gmail.com', 22, '1094938223', '123456', 10),
(3, 'felipe', 'Valencia', 'felipe23_23@hotmail.com', 22, '1094938223', 'qwer', 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pujasusuario`
--
ALTER TABLE `pujasusuario`
 ADD PRIMARY KEY (`idUsuario`,`idSubasta`);

--
-- Indices de la tabla `subastas`
--
ALTER TABLE `subastas`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id_2` (`id`), ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `subastas`
--
ALTER TABLE `subastas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
