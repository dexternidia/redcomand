-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-10-2017 a las 21:36:29
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
-- Estructura de tabla para la tabla `1x10`
--

CREATE TABLE IF NOT EXISTS `1x10` (
  `cedula` varchar(8) NOT NULL,
  `nombre_y_apellidos` varchar(60) NOT NULL,
  `edad` varchar(60) NOT NULL,
  `sector` varchar(60) NOT NULL,
  `telefono` varchar(60) NOT NULL,
  `jefe_1_x_10` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clp`
--

CREATE TABLE IF NOT EXISTS `clp` (
  `id_clp` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL,
  `nombre_clp` varchar(30) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre_apellido` varchar(60) NOT NULL,
  `telefono_1` int(11) NOT NULL,
  `telefono_2` int(11) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estructura`
--

CREATE TABLE IF NOT EXISTS `estructura` (
  `id_estructura` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estructura`
--

INSERT INTO `estructura` (`id_estructura`, `nombre`, `eliminar`) VALUES
(1, 'CLP', 0),
(2, 'UBCH', 0),
(3, 'CLAP', 0),
(4, 'SOMOS', 0),
(5, '1_x_10', 0),
(6, '1_x4', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instituciones`
--

CREATE TABLE IF NOT EXISTS `instituciones` (
  `id_instituciones` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `eliminar` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `instituciones`
--

INSERT INTO `instituciones` (`id_instituciones`, `nombre`, `eliminar`) VALUES
(1, 'ATENCIÓN AL CIUDADANO ', 0),
(2, 'ZONA EDUCATIVA DEL ESTADO BARINAS', 0),
(3, 'SECRETARIA EJECUTIVA DE EDUCACION', 0),
(4, 'INSTITUTO AUTONOMO DE LA VIVIENDA Y EQUIPAMIENTO DE BARRIOS	', 0),
(5, 'SECRETARIA EJECUTIVA DE SALUD			', 0),
(6, 'FUNDACION PARA LA SALUD DEL ESTADO BARINAS			', 0),
(7, 'SECRETARIA EJECUTIVA DE DESARROLLO SOCIAL			', 0),
(8, 'SECRETARIA EJECUTIVA DEL DESPACHO', 0),
(9, 'SECRETARIA GENERAL DE GOBIERNO			', 0),
(10, 'SECRETARIA EJECUTIVA DE DESARROLLO ECONOMICO', 0),
(11, 'INTERMISIONES', 0),
(12, 'BARRIO NUEVO BARRIO TRICOLOR', 0),
(13, 'SECRETARIA EJECUTIVA DE RECURSOS HUMANOS', 0),
(14, 'SECRETARIA EJECUTIVA DE ADMINISTRACIÓN, HACIENDA Y FINANZAS', 0),
(15, 'INSTITUTO AUTONOMO DE PROTECCION CIVIL Y ADMINISTRACION DE DESASTRES DEL ESTADO BARINAS\n', 0),
(16, 'OFICINA ESTADAL ANTIDROGAS (OEA)', 0),
(17, 'COMANDANCIA GENERAL DE POLICIA', 0),
(18, 'INSTITUTO DE TRANSPORTE Y VIALIDAD DEL ESTADO BARINAS', 0),
(19, 'SECRETARIA EJECUTIVA DE EDUCACIÓN', 0),
(20, 'INSTITUTO AUTONOMO DE CULTURA DEL ESTADO BARINAS', 0),
(21, 'SECRETARIA EJECUTIVA DE INFRAESTRUCTURA Y ORDENAMIENTO TERRITORIAL			', 0),
(22, 'CORPORACION BARINESA DE TURISMO', 0),
(23, 'RESIDENCIA OFICIAL DE GOBERNADORES', 0),
(24, 'INSTITUTO REGIONAL DEL DEPORTE DEL ESTADO BARINAS', 0),
(25, 'FUNDACION CENTRO DE EDUCACION Y RECUPERACION NUTRICIONAL', 0),
(26, 'FONDO NACIONAL DE EDIFICACIONES PENITENCIARIAS', 0),
(27, 'INSTITUTO REGIONAL DE LA MUJER', 0),
(28, 'COORDINACION GENERAL DE LOS MODULOS DE SERVICIOS', 0),
(29, 'PROCURADURIA GENERAL DEL ESTADO', 0),
(30, 'CONTRALORIA DEL ESTADO', 0),
(31, 'CONSEJO LEGISLATIVO REGIONAL', 0),
(32, 'FONDO DE JUBILACIONES Y PENSIONES DE LEGISLADORES Y TRABAJADORES DEL CONSEJO LEGISLATIVO', 0),
(33, 'OFICINA DE INFORMACION Y RELACIONES INTERINSTITUCIONALES', 0),
(34, 'COMEDOR POPULAR MANUEL PALACIO FAJARDO', 0),
(35, 'SECRETARIA EJECUTIVA DE SEGURIDAD CIUDADANA', 0),
(36, 'OFICINA DE DESARROLLO ADMINISTRATIVO', 0),
(37, 'OFICINA DE ASUNTOS LEGALES', 0),
(38, 'UNIDAD DE AUDITORIA INTERNA', 0),
(39, 'SECRETARIA EJECUTIVA DE PLANIFICACION, PROGRAMACION Y PRESUPUESTO', 0),
(40, 'CONSEJO ESTADAL DE PLANTIFICACION Y COORDINACION DE POLITICAS PUBLICAS', 0),
(41, 'TESORERIA GENERAL DEL ESTADO', 0),
(42, 'UNIDAD GERIATRICA', 0),
(43, 'SECRETARIA EJECUTIVA DE DESARROLLO ECONOMICO', 0),
(44, 'SECRETARIA EJECUTIVA DE DESARROLLO AGROPECUARIO', 0),
(45, 'DIRECCIÓN REGIONAL EL NIÑO SIMÓN', 0),
(46, 'SOCIEDAD DE GARANTIAS RECIPROCAS', 0),
(47, 'SERVICIO DE ADMINISTRACION TRIBUTARIA DEL ESTADO BARINAS', 0),
(48, 'ARCHIVO DEL ESTADO', 0),
(49, 'CIRCUNSCRIPCION MILITAR', 0),
(50, 'INSTITUTO AUTONOMO  CONSEJO NACIONAL DE DERECHOS DEL NINO, NINA Y ADOLESCENTES', 0),
(51, 'ASOCIACION CIVIL MISION JESUS EL NAZARENO', 0),
(52, 'SERVICIO DESCONCENTRADO PARA LA ACTIVIDAD MINERA DEL ESTADO BARINAS ', 0),
(53, 'INSTITUTO PUBLICO DE AEROPUERTOS Y AERÓDROMOS DEL ESTADO BARINAS', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE IF NOT EXISTS `municipios` (
  `id_municipio` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `poblacion` int(11) NOT NULL,
  `abrebiar` varchar(20) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipio`, `nombre`, `poblacion`, `abrebiar`) VALUES
(2, 'ALBERTO ARVELO TORREALBA', 41232, 'AA'),
(3, 'ANTONIO JOSE DE SUCRE', 81665, 'AJ'),
(4, 'ARISMENDI', 23727, 'AR'),
(5, 'BARINAS', 353852, 'BA'),
(6, 'BOLIVAR', 52872, 'BO'),
(7, 'CRUZ PAREDES', 26042, 'CP'),
(8, 'EZEQUIEL ZAMORA', 53580, 'EZ'),
(9, 'OBISPOS', 37493, 'OB'),
(10, 'PEDRAZA', 65390, 'PE'),
(11, 'ROJAS', 40126, 'RO'),
(12, 'SOSA', 24142, 'SO'),
(13, 'ANDRES ELOY BLANCO', 16144, 'AE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE IF NOT EXISTS `parroquias` (
  `id_parroquia` int(11) NOT NULL,
  `nombre` varchar(250) COLLATE latin1_general_ci NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `poblacion` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id_parroquia`, `nombre`, `id_municipio`, `poblacion`) VALUES
(1, ' SABANETA', 2, 34148),
(2, ' RODRIGUEZ DOMINGUEZ', 2, 7084),
(3, ' TICOPORO', 3, 65801),
(4, ' ANDRES BELLO', 3, 7147),
(5, ' NICOLAS PULIDO', 3, 8717),
(6, ' ARISMENDI', 4, 9327),
(7, ' GUADARRAMA', 4, 2165),
(8, ' LA UNION', 4, 7280),
(9, ' SAN ANTONIO', 4, 4955),
(10, ' BARINAS', 5, 7651),
(11, ' ALFREDO ARVELO LARRIVA', 5, 9251),
(12, ' SAN SILVESTRE', 5, 6905),
(13, ' SANTA INES', 5, 3508),
(14, ' SANTA LUCIA', 5, 5780),
(15, ' TORUNOS', 5, 4882),
(16, ' EL CARMEN', 5, 41527),
(17, ' ROMULO BETANCOURT', 5, 40647),
(18, ' CORAZON DE JESUS', 5, 58413),
(19, ' RAMON IGNACIO MENDEZ', 5, 90464),
(20, ' ALTO BARINAS', 5, 64194),
(21, ' MANUEL PALACIO FAJARDO', 5, 9763),
(22, ' JUAN ANTONIO RODRIGUEZ DOMINGUEZ', 5, 4110),
(23, ' DOMINGA ORTIZ DE PAEZ', 5, 6748),
(24, ' BARINITAS', 6, 43863),
(25, ' ALTAMIRA', 6, 3045),
(26, ' CALDERAS', 6, 5964),
(27, ' BARRANCAS', 7, 21121),
(28, ' EL SOCORRO', 7, 4345),
(29, ' MASPARRITO', 7, 576),
(30, ' SANTA BARBARA', 8, 40370),
(31, ' JOSE IGNACIO DEL PUMAR', 8, 3343),
(32, ' PEDRO BRICEÑO MENDEZ', 8, 5658),
(33, ' RAMON IGNACIO MENDEZ', 8, 4209),
(34, ' OBISPOS', 9, 15696),
(35, ' EL REAL', 9, 2919),
(36, ' LA LUZ', 9, 7581),
(37, ' LOS GUASIMITOS', 9, 11297),
(38, ' CIUDAD BOLIVIA', 10, 44975),
(39, ' IGNACIO BRICE?O', 10, 6274),
(40, ' JOSE FELIX RIBAS', 10, 7573),
(41, ' PAEZ', 10, 6568),
(42, ' LIBERTAD', 11, 11415),
(43, ' DOLORES', 11, 8264),
(44, ' PALACIOS FAJARDO', 11, 11855),
(45, ' SANTA ROSA', 11, 8592),
(46, ' CIUDAD DE NUTRIAS', 12, 15168),
(47, ' EL REGALO', 12, 5454),
(48, ' PUERTO DE NUTRIAS', 12, 15168),
(49, ' SANTA CATALINA', 12, 1183),
(50, ' EL CANTON', 13, 6466),
(51, ' SANTA CRUZ DE GUACAS', 13, 5486),
(52, ' PUERTO VIVAS', 13, 4192);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `partidos`
--

CREATE TABLE IF NOT EXISTS `partidos` (
  `id_organismos` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `eliminar` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `partidos`
--

INSERT INTO `partidos` (`id_organismos`, `nombre`, `eliminar`) VALUES
(1, 'PSUV', 0),
(2, 'GPP', 0),
(3, 'TUPAMARO', 0),
(4, 'PPT', 0),
(5, 'PCV', 0),
(6, 'ORA', 0),
(7, 'PODEMOS', 0),
(8, 'UPV', 0),
(9, 'NCR', 0),
(10, 'REDES', 0),
(11, 'MEP', 0),
(12, 'JOVEN', 0),
(13, 'COMANDITO', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_maestro`
--

CREATE TABLE IF NOT EXISTS `registro_maestro` (
  `tipo` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre_apellido` varchar(100) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `institucion` int(11) NOT NULL,
  `ubch` int(11) NOT NULL,
  `clp` int(11) NOT NULL,
  `clap` int(11) NOT NULL,
  `somos` int(11) NOT NULL,
  `chamba` int(11) NOT NULL,
  `1_x_10` int(11) NOT NULL,
  `1_x_4` int(11) NOT NULL,
  `comandito` int(11) NOT NULL,
  `h_patria` int(11) NOT NULL,
  `pensionados` int(11) NOT NULL,
  `bono_escolar` int(11) NOT NULL,
  `carnet_patria` int(11) NOT NULL,
  `constituyente` int(11) NOT NULL,
  `maisanta` int(11) NOT NULL,
  `gob_17` int(11) NOT NULL,
  `firma_en_contra` int(11) NOT NULL,
  `vivienda` int(11) NOT NULL,
  `vehiculo` int(11) NOT NULL,
  `centro_votacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubch`
--

CREATE TABLE IF NOT EXISTS `ubch` (
  `id_ubch` int(11) NOT NULL,
  `nombre_ubch` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL,
  `sector` int(11) NOT NULL,
  `nacionalidad` varchar(1) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre_apellido` varchar(60) NOT NULL,
  `email` int(11) NOT NULL,
  `telefono_1` int(11) NOT NULL,
  `telefono_2` int(11) NOT NULL,
  `vehiculo` int(11) NOT NULL,
  `id_instituciones` int(11) NOT NULL,
  `id_partidos` int(11) NOT NULL,
  `id_estructura` int(11) NOT NULL,
  `estatus` int(11) NOT NULL,
  `tipo` int(11) NOT NULL,
  `cod_clp` int(11) NOT NULL,
  `cod_centro` int(11) NOT NULL,
  `cod_mesa` int(11) NOT NULL,
  `cantidad_mesa` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubch`
--

INSERT INTO `ubch` (`id_ubch`, `nombre_ubch`, `id_municipio`, `id_parroquia`, `sector`, `nacionalidad`, `cedula`, `nombre_apellido`, `email`, `telefono_1`, `telefono_2`, `vehiculo`, `id_instituciones`, `id_partidos`, `id_estructura`, `estatus`, `tipo`, `cod_clp`, `cod_centro`, `cod_mesa`, `cantidad_mesa`) VALUES
(1, 0, 2, 3, 2, 'v', 17997299, 'ajajajajajajaja', 1, 2147483647, 2147483647, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clp`
--
ALTER TABLE `clp`
  ADD PRIMARY KEY (`id_clp`);

--
-- Indices de la tabla `estructura`
--
ALTER TABLE `estructura`
  ADD PRIMARY KEY (`id_estructura`);

--
-- Indices de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  ADD PRIMARY KEY (`id_instituciones`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`), ADD KEY `id_municipio` (`id_municipio`,`nombre`,`poblacion`,`abrebiar`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id_parroquia`), ADD KEY `id_parrouia` (`id_parroquia`,`nombre`,`id_municipio`,`poblacion`);

--
-- Indices de la tabla `partidos`
--
ALTER TABLE `partidos`
  ADD PRIMARY KEY (`id_organismos`);

--
-- Indices de la tabla `registro_maestro`
--
ALTER TABLE `registro_maestro`
  ADD PRIMARY KEY (`cedula`), ADD UNIQUE KEY `cedula` (`cedula`), ADD UNIQUE KEY `tipo` (`tipo`);

--
-- Indices de la tabla `ubch`
--
ALTER TABLE `ubch`
  ADD PRIMARY KEY (`id_ubch`), ADD UNIQUE KEY `sector` (`sector`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clp`
--
ALTER TABLE `clp`
  MODIFY `id_clp` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `estructura`
--
ALTER TABLE `estructura`
  MODIFY `id_estructura` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `instituciones`
--
ALTER TABLE `instituciones`
  MODIFY `id_instituciones` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipio` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id_parroquia` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT de la tabla `partidos`
--
ALTER TABLE `partidos`
  MODIFY `id_organismos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT de la tabla `registro_maestro`
--
ALTER TABLE `registro_maestro`
  MODIFY `tipo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ubch`
--
ALTER TABLE `ubch`
  MODIFY `id_ubch` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
