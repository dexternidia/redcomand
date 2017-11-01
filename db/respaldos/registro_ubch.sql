-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2017 a las 19:21:50
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `elections_mayor`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_ubch`
--

CREATE TABLE IF NOT EXISTS `registro_ubch` (
  `id_ubch` int(11) NOT NULL,
  `nombre_ubch` varchar(100) NOT NULL,
  `direccion_ubch` varchar(200) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL,
  `estatus` int(11) NOT NULL COMMENT 'Activa= 1 o Inactiva= 2',
  `id_clp` int(11) NOT NULL,
  `fecha_registro` varchar(30) NOT NULL,
  `hora_registro` varchar(30) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `registro_ubch`
--

INSERT INTO `registro_ubch` (`id_ubch`, `nombre_ubch`, `direccion_ubch`, `id_municipio`, `id_parroquia`, `estatus`, `id_clp`, `fecha_registro`, `hora_registro`, `eliminar`) VALUES
(5, 'UNIDAD BASICA HERMINIO LEON COLMENARES', 'URBANIZACION DOMINGA ORITZ DE PAEZ DERECHA CALLE 1 IZQUIERDA CALLE 27 FRENTE CALLE 17 AVENIDA DOMING', 2, 10, 0, 0, '2017-11-01', '19:07:53', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro_ubch`
--
ALTER TABLE `registro_ubch`
  ADD PRIMARY KEY (`id_ubch`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro_ubch`
--
ALTER TABLE `registro_ubch`
  MODIFY `id_ubch` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
