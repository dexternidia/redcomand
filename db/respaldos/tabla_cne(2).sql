-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2017 at 11:48 AM
-- Server version: 5.5.55-0+deb8u1
-- PHP Version: 5.6.30-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cne`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabla_cne`
--

CREATE TABLE IF NOT EXISTS `tabla_cne` (
`id` int(11) NOT NULL,
  `tipo` varchar(1) NOT NULL,
  `cedula` varchar(11) NOT NULL,
  `apellido_1` varchar(50) NOT NULL,
  `apellido_2` varchar(50) NOT NULL,
  `nombre_1` varchar(50) NOT NULL,
  `nombre_2` varchar(50) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fecha_nac` varchar(25) NOT NULL,
  `edad` int(11) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `municipio` varchar(50) NOT NULL,
  `parroquia` varchar(50) NOT NULL,
  `campo_4` int(4) NOT NULL,
  `pensionados` int(1) NOT NULL,
  `hogares` int(1) NOT NULL COMMENT '0 no registrado, 1 No retiro y 2 Si retiro',
  `vienda` int(1) NOT NULL,
  `maisanto_chavez` int(1) NOT NULL,
  `carnet_patria` int(1) NOT NULL,
  `firmaencontra_maduro` int(1) NOT NULL,
  `vehiculos` int(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19811073 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tabla_cne`
--

INSERT INTO `tabla_cne` (`id`, `tipo`, `cedula`, `apellido_1`, `apellido_2`, `nombre_1`, `nombre_2`, `sexo`, `fecha_nac`, `edad`, `telefono`, `estado`, `municipio`, `parroquia`, `campo_4`, `pensionados`, `hogares`, `vienda`, `maisanto_chavez`, `carnet_patria`, `firmaencontra_maduro`, `vehiculos`) VALUES
(19000001, 'V', '25104189', 'CONTRERAS', 'QUEVEDO', 'OBERT', 'JOSE', 'M', '1995-01-17', 22, '', '7', '6', '1', 70601036, 0, 0, 0, 0, 0, 0, 0),
(19000002, 'V', '25104191', 'GARBAN', 'BLASCO', 'ANGELICA', 'IRALIS', 'F', '1994-11-23', 23, '', '7', '6', '1', 70601001, 0, 0, 0, 0, 0, 0, 0),
(19000003, 'V', '25104192', 'CHIRINOS', 'CALDERA', 'JHOLFRAN', 'JOSE', 'M', '1996-09-17', 21, '', '7', '6', '1', 70601006, 0, 0, 0, 0, 0, 0, 0),
(19000004, 'V', '25104193', 'SANTANA', 'RIERA', 'MIGUEL', 'ANGEL', 'M', '1983-07-14', 34, '', '7', '6', '1', 70601006, 0, 0, 0, 0, 0, 0, 0),
(19000005, 'V', '25104194', 'TARAZONA', 'LOPEZ', 'LUIS', 'IZAEL', 'M', '1992-10-10', 25, '', '7', '6', '1', 70601032, 0, 0, 0, 0, 0, 0, 0),
(19000006, 'V', '25104195', 'BUSTAMANTE', 'LAYA', 'YONAYKER', 'ONIEL', 'M', '1996-10-07', 21, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000007, 'V', '25104196', 'MONTERO', 'AGUILERA', 'WILLIAM', 'ALEXIS', 'M', '1997-01-08', 20, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000008, 'V', '25104198', 'OROPEZA', 'TORRES', 'ANA', 'ABIGAIL', 'F', '1996-12-06', 21, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000009, 'V', '25104199', 'OROPEZA', 'TORRES', 'ABIEZER', 'ALFREDO', 'M', '1995-08-03', 22, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000010, 'V', '25104200', 'SECO', 'ARIAS', 'VERONICA', 'ISABEL', 'F', '1993-09-24', 24, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000011, 'V', '25104201', 'USEA', 'MANZANARES', 'ROBERT', 'ALEJANDRO', 'M', '1994-06-12', 23, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000012, 'V', '25104203', 'PETIT', 'BARROYETA', 'ANTHONY', 'JOSE', 'M', '1995-09-01', 22, '', '7', '9', '8', 70908040, 0, 0, 0, 0, 0, 0, 0),
(19000013, 'V', '25104204', 'RODRIGUEZ', 'ROSAS', 'YULIMAR', 'JOSEFINA', 'F', '1996-12-24', 21, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000014, 'V', '25104205', 'PETIT', 'SECO', 'ALEXANDER', 'JAVIER', 'M', '1996-07-22', 21, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000015, 'V', '25104206', 'RAMOS', '""', 'JUAN', 'MANUEL', 'M', '1996-06-24', 21, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000016, 'V', '25104209', 'MENDEZ', 'CAMPOS', 'JOSE', 'ANTONIO', 'M', '1992-05-18', 25, '', '7', '7', '1', 70701003, 0, 0, 0, 0, 0, 0, 0),
(19000017, 'V', '25104211', 'PEROZO', 'PADRON', 'YUSCARLIS', 'AURIMAR', 'F', '1997-01-07', 20, '', '7', '7', '4', 70704014, 0, 0, 0, 0, 0, 0, 0),
(19000018, 'V', '25104212', 'SANCHEZ', 'SOLORZANO', 'LUISANA', 'MARIELIS', 'F', '1995-11-07', 22, '', '7', '7', '7', 70707002, 0, 0, 0, 0, 0, 0, 0),
(19000019, 'V', '25104213', 'BLANCO', 'PIRONA', 'FRANCHESCA', 'TAMAR', 'F', '1997-01-13', 20, '', '7', '7', '7', 70707002, 0, 0, 0, 0, 0, 0, 0),
(19000020, 'V', '25104214', 'FERNANDEZ', 'NEIRE', 'MARIURVIS', 'ANYELI', 'F', '1996-04-16', 21, '', '7', '7', '7', 70707002, 0, 0, 0, 0, 0, 0, 0),
(19000021, 'V', '25104215', 'PIRONA', 'BASTIDAS', 'JHOAN', 'ALEXANDER', 'M', '1994-10-24', 23, '', '1', '1', '22', 10122005, 0, 0, 0, 0, 0, 0, 0),
(19000022, 'V', '25104216', 'SILVA', '""', 'JUNIOR', 'DANIEL', 'M', '1993-12-27', 24, '', '7', '7', '3', 70703002, 0, 0, 0, 0, 0, 0, 0),
(19000023, 'V', '25104217', 'FLORES', 'PE', 'LUIS', 'ALFREDO', 'M', '1994-04-15', 23, '', '7', '7', '7', 70707002, 0, 0, 0, 0, 0, 0, 0),
(19000024, 'V', '25104219', 'BARRETO', 'CORDOVA', 'JOSE', 'MANUEL', 'M', '1994-05-14', 23, '', '7', '7', '4', 70704008, 0, 0, 0, 0, 0, 0, 0),
(19000025, 'V', '25104220', 'QUIROZ', 'SANDOVAL', 'YRMARIS', 'NAILETH', 'F', '1996-08-14', 21, '', '7', '7', '7', 70707001, 0, 0, 0, 0, 0, 0, 0),
(19000026, 'V', '25104222', 'UGARTE', 'CUICAS', 'RUBEN', 'DARIO', 'M', '1996-08-29', 21, '', '7', '6', '2', 70602002, 0, 0, 0, 0, 0, 0, 0),
(19000027, 'V', '25104224', 'BLANCO', 'CASTILLO', 'CARLOS', 'JAVIER', 'M', '1995-01-20', 22, '', '7', '7', '7', 70707003, 0, 0, 0, 0, 0, 0, 0),
(19000028, 'V', '25104225', 'MUNDARAIN', 'RODRIGUEZ', 'BERIUSCA', 'YASMINA', 'F', '1995-08-19', 22, '', '7', '6', '2', 70602002, 0, 0, 0, 0, 0, 0, 0),
(19000029, 'V', '25104227', 'CONTRERAS', 'CAMPOS', 'JESUS', 'EDUARDO', 'M', '1991-09-24', 26, '', '2', '3', '1', 20301069, 0, 0, 0, 0, 0, 0, 0),
(19000030, 'V', '25104228', 'ESCARATE', 'GUTIERREZ', 'LUISVER', 'YETSY', 'M', '1997-02-11', 20, '', '7', '6', '2', 70602002, 0, 0, 0, 0, 0, 0, 0),
(19000031, 'V', '25104233', 'PEROZO', 'PEROZO', 'CARMEN', '""', 'F', '1942-04-12', 75, '', '7', '6', '2', 70602005, 0, 0, 0, 0, 0, 0, 0),
(19000032, 'V', '25104234', 'MANAURE', 'CORONADO', 'JORGE', 'ALEJANDRO', 'M', '1995-12-26', 22, '', '7', '7', '4', 70704005, 0, 0, 0, 0, 0, 0, 0),
(19000033, 'V', '25104235', 'QUIJADA', 'CARABALLO', 'LUISANA', 'ANDREINA', 'F', '1996-12-29', 21, '', '7', '7', '3', 70703016, 0, 0, 0, 0, 0, 0, 0),
(19000034, 'V', '25104236', 'MARCANO', 'SUAREZ', 'MARIA', 'ALEJANDRA', 'F', '1993-09-29', 24, '', '7', '7', '1', 70701004, 0, 0, 0, 0, 0, 0, 0),
(19000035, 'V', '25104237', 'VASQUEZ', 'ORDO', 'FRANCONIS', 'ALEXIS JUNIOR', 'M', '1994-11-26', 23, '', '7', '7', '5', 70705003, 0, 0, 0, 0, 0, 0, 0),
(19000036, 'V', '25104238', 'TORRELLES', 'PERDOMO', 'JOSE', 'ENRIQUE', 'M', '1996-08-27', 21, '', '7', '7', '4', 70704007, 0, 0, 0, 0, 0, 0, 0),
(19000037, 'V', '25104239', 'SABARIEGO', 'SUAREZ', 'ANTHONY', 'JOSE', 'M', '1996-08-16', 21, '', '7', '7', '5', 70705008, 0, 0, 0, 0, 0, 0, 0),
(19000038, 'V', '25104240', 'ARAQUE', 'ALVAREZ', 'KIMBERLIN', 'PATRICIA', 'F', '1994-09-06', 23, '', '7', '7', '4', 70704008, 0, 0, 0, 0, 0, 0, 0),
(19000039, 'V', '25104241', 'LEO', 'GARCIA', 'ANTHONY', 'WLADIMIR', 'M', '1994-12-28', 23, '', '13', '3', '1', 130301074, 0, 0, 0, 0, 0, 0, 0),
(19000040, 'V', '25104244', 'ROMERO', 'DUMONT', 'FERNANDA', 'GABRIELA', 'F', '1992-02-01', 25, '', '7', '4', '1', 70401020, 0, 0, 0, 0, 0, 0, 0),
(19000041, 'V', '25104247', 'SECO', 'TORRES', 'BRANDO', 'ALEXIS', 'M', '1996-10-05', 21, '', '1', '1', '3', 10103005, 0, 0, 0, 0, 0, 0, 0),
(19000042, 'V', '25104253', 'MU', 'ARIAS', 'GRISANGELES', 'MARIA', 'F', '1996-03-10', 21, '', '7', '6', '1', 70601016, 0, 0, 0, 0, 0, 0, 0),
(19000043, 'V', '25104254', 'RAZ', 'PRADO', 'CESAR', 'DAVID', 'M', '1996-10-17', 21, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000044, 'V', '25104255', 'CAMPOS', 'RODRIGUEZ', 'ROXANA', 'ANABEL', 'F', '1993-01-25', 24, '', '9', '17', '2', 91702004, 0, 0, 0, 0, 0, 0, 0),
(19000045, 'V', '25104256', 'SILLIE', '""', 'YRAIZ', 'DEL CARMEN', 'F', '1981-07-16', 36, '', '7', '6', '1', 70601012, 0, 0, 0, 0, 0, 0, 0),
(19000046, 'V', '25104260', 'BAUTE', 'BRACHO', 'WUILMAR', 'DEL CARMEN', 'F', '1996-09-14', 21, '', '7', '6', '1', 70601001, 0, 0, 0, 0, 0, 0, 0),
(19000047, 'V', '25104262', 'PIREL', 'PEREZ', 'DENNYS', 'GREGORIO', 'M', '1994-08-07', 23, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000048, 'V', '25104263', 'CASTILLO', '""', 'RUTH', 'FELICHIA', 'F', '1994-06-20', 23, '', '7', '4', '1', 70401014, 0, 0, 0, 0, 0, 0, 0),
(19000049, 'V', '25104265', 'POLANCO', 'GOITIA', 'ROCELIS', 'YOSELIN', 'F', '1996-08-09', 21, '', '7', '6', '1', 70601009, 0, 0, 0, 0, 0, 0, 0),
(19000050, 'V', '25104267', 'CASTILLO', 'ORTIZ', 'ROSVELIS', 'DIOLIMAR', 'F', '1996-12-27', 21, '', '7', '6', '1', 70601004, 0, 0, 0, 0, 0, 0, 0),
(19000051, 'V', '25104268', 'SECO', 'PEREZ', 'MIYEILI', 'GABRIELA', 'F', '1994-07-14', 23, '', '7', '6', '1', 70601011, 0, 0, 0, 0, 0, 0, 0),
(19000052, 'V', '25104269', 'QUINTERO', 'CARRILLO', 'LARRY', 'NICK', 'M', '1996-10-23', 21, '', '1', '1', '3', 10103005, 0, 0, 0, 0, 0, 0, 0),
(19000053, 'V', '25104270', 'SABARIEGO', 'BARRAEZ', 'ANDERSON', 'JOSE', 'M', '1994-06-14', 23, '', '7', '6', '1', 70601013, 0, 0, 0, 0, 0, 0, 0),
(19000054, 'V', '25104272', 'GARCIA', 'ROMERO', 'JHOANDRY', 'WILJOSE', 'M', '1993-03-24', 24, '', '7', '6', '1', 70601034, 0, 0, 0, 0, 0, 0, 0),
(19000055, 'V', '25104273', 'LOPEZ', 'ARIAS', 'ELIMAR', 'COROMOTO', 'F', '1996-08-27', 21, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000056, 'V', '25104275', 'MYERS', 'MORENO', 'PAOLA', 'MICHELL', 'F', '1997-01-30', 20, '', '6', '7', '1', 60701002, 0, 0, 0, 0, 0, 0, 0),
(19000057, 'V', '25104276', 'CORONEL', 'GARCIA', 'ELIANA', 'JOSE', 'F', '1992-07-09', 25, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000058, 'V', '25104277', 'MANTINI', 'RAZ', 'EDUARDO', 'JOSE', 'M', '1996-08-18', 21, '', '7', '6', '1', 70601023, 0, 0, 0, 0, 0, 0, 0),
(19000059, 'V', '25104278', 'FIGUEROA', 'SALON', 'LAGDIELYS', 'ROSYNMAR', 'F', '1995-12-15', 22, '', '7', '7', '2', 70702002, 0, 0, 0, 0, 0, 0, 0),
(19000060, 'V', '25104280', 'NARANJO', 'DELGADO', 'ROSIMAR', 'ANDREINA', 'F', '1997-01-02', 20, '', '7', '6', '1', 70601011, 0, 0, 0, 0, 0, 0, 0),
(19000061, 'V', '25104285', 'SILVA', 'MANZANO', 'LUIS', 'JOSE', 'M', '1996-07-15', 21, '', '7', '7', '4', 70704017, 0, 0, 0, 0, 0, 0, 0),
(19000062, 'V', '25104286', 'RIERA', 'PEREZ', 'JHONNY', 'MANUEL', 'M', '1993-12-15', 24, '', '7', '6', '1', 70601034, 0, 0, 0, 0, 0, 0, 0),
(19000063, 'V', '25104287', 'REYES', 'SUAREZ', 'JESUS', 'RAMON', 'M', '1996-02-23', 21, '', '7', '6', '1', 70601040, 0, 0, 0, 0, 0, 0, 0),
(19000064, 'V', '25104288', 'CANELO', 'MARTINEZ', 'FRANCELYS', 'ENDYMAR', 'F', '1994-09-15', 23, '', '7', '6', '1', 70601011, 0, 0, 0, 0, 0, 0, 0),
(19000065, 'V', '25104289', 'CASANOVA', 'SUAREZ', 'OSWALDO', 'JOSE', 'M', '1994-02-04', 23, '', '7', '6', '1', 70601003, 0, 0, 0, 0, 0, 0, 0),
(19000066, 'V', '25104290', 'HERNANDEZ', 'FLORES', 'NEPTALI', 'ABRAHAM', 'M', '1996-04-15', 21, '', '7', '6', '1', 70601007, 0, 0, 0, 0, 0, 0, 0),
(19000067, 'V', '25104291', 'GONZALEZ', 'MARQUEZ', 'BETHALY', 'CAROLINA', 'F', '1995-03-23', 22, '', '7', '6', '2', 70602005, 0, 0, 0, 0, 0, 0, 0),
(19000068, 'V', '25104293', 'LUGO', '""', 'GENESIS', 'JOSEFINA', 'F', '1995-10-24', 22, '', '9', '15', '3', 91503001, 0, 0, 0, 0, 0, 0, 0),
(19000069, 'V', '25104294', 'MORENO', 'REVILLA', 'NELMARY', 'DEL VALLE', 'F', '1996-07-31', 21, '', '7', '6', '1', 70601011, 0, 0, 0, 0, 0, 0, 0),
(19000070, 'V', '25104295', 'MONTERO', 'OSTA', 'JOSE', 'GREGORIO', 'M', '1995-10-09', 22, '', '7', '6', '1', 70601034, 0, 0, 0, 0, 0, 0, 0),
(19000071, 'V', '25104296', 'GONZALEZ', 'RIERA', 'GABRIEL', 'ALEJANDRO', 'M', '1995-03-23', 22, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000072, 'V', '25104297', 'ORTEGA', 'HERNANDEZ', 'MICELIS', 'ARIANNI', 'F', '1996-04-26', 21, '', '7', '6', '1', 70601012, 0, 0, 0, 0, 0, 0, 0),
(19000073, 'V', '25104298', 'LOPEZ', 'FEBRES', 'JUAN', 'CARLOS', 'M', '1994-06-22', 23, '', '7', '6', '1', 70601009, 0, 0, 0, 0, 0, 0, 0),
(19000074, 'V', '25104299', 'POLANCO', 'ROJAS', 'CARLOS', 'EDUARDO', 'M', '1992-03-27', 25, '', '7', '6', '1', 70601034, 0, 0, 0, 0, 0, 0, 0),
(19000075, 'V', '25104301', 'LOPEZ', '""', 'DEOMAR', 'ICASIO', 'M', '1994-06-01', 23, '', '7', '6', '2', 70602005, 0, 0, 0, 0, 0, 0, 0),
(19000076, 'V', '25104302', 'LOPEZ', 'SILVA', 'LOIFRAINE', 'DE LOS ANGELES', 'F', '1995-09-19', 22, '', '7', '6', '2', 70602005, 0, 0, 0, 0, 0, 0, 0),
(19000077, 'V', '25104303', 'CUEVA', 'LOPEZ', 'NIVEATHNA', 'ANGELY', 'F', '1995-08-01', 22, '', '7', '6', '1', 70601011, 0, 0, 0, 0, 0, 0, 0),
(19000078, 'V', '25104304', 'CUEVA', 'SILVA', 'DAICELYS', 'YOSELYN', 'F', '1994-11-09', 23, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000079, 'V', '25104305', 'ESCOBAR', 'TAPIAS', 'JAVIER', 'DAVID', 'M', '1993-02-11', 24, '', '7', '6', '1', 70601039, 0, 0, 0, 0, 0, 0, 0),
(19000080, 'V', '25104307', 'ARIAS', 'HERNANDEZ', 'FANNY', 'COROMOTO', 'F', '1991-10-04', 26, '', '7', '6', '1', 70601042, 0, 0, 0, 0, 0, 0, 0),
(19000081, 'V', '25104308', 'MONTERO', 'OSTA', 'CRISALIDA', 'JOSEFINA', 'F', '1994-06-05', 23, '', '7', '6', '1', 70601034, 0, 0, 0, 0, 0, 0, 0),
(19000082, 'V', '25104309', 'BORREGALES', 'POLANCO', 'JOSE', 'GREGORIO', 'M', '1995-07-23', 22, '', '7', '7', '3', 70703001, 0, 0, 0, 0, 0, 0, 0),
(19000083, 'V', '25104311', 'NARANJO', 'ENCINOZA', 'LAURA', 'PATRICIA', 'F', '1995-09-11', 22, '', '7', '6', '1', 70601003, 0, 0, 0, 0, 0, 0, 0),
(19000084, 'V', '25104312', 'PARRA', 'PEREZ', 'ERICSON', 'ORLANDO', 'M', '1996-11-06', 21, '', '7', '4', '2', 70402003, 0, 0, 0, 0, 0, 0, 0),
(19000085, 'V', '25104313', 'MUJICA', 'RAMIREZ', 'MARIANNIS', 'YUSMERLIS', 'F', '1996-11-18', 21, '', '7', '6', '1', 70601014, 0, 0, 0, 0, 0, 0, 0),
(19000086, 'V', '25104314', 'VALLE', 'CHIRINOS', 'JOSE', 'GREGORIO', 'M', '1996-08-02', 21, '', '7', '6', '1', 70601014, 0, 0, 0, 0, 0, 0, 0),
(19000087, 'V', '25104315', 'CASTILLO', 'ROJAS', 'YUNIOR', 'MANUEL', 'M', '1994-06-04', 23, '', '7', '6', '1', 70601042, 0, 0, 0, 0, 0, 0, 0),
(19000088, 'V', '25104317', 'LOPEZ', 'MONTERO', 'YUNIXA', 'MARLETH', 'F', '1995-06-30', 22, '', '7', '6', '1', 70601040, 0, 0, 0, 0, 0, 0, 0),
(19000089, 'V', '25104319', 'NU', 'PRIETO', 'FREIMIN', 'ALEJANDRO', 'M', '1995-08-29', 22, '', '7', '6', '1', 70601037, 0, 0, 0, 0, 0, 0, 0),
(19000090, 'V', '25104320', 'MARTINEZ', 'GONZALEZ', 'LUIS', 'ANGEL', 'M', '1992-06-09', 25, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000091, 'V', '25104321', 'VILORIA', 'NAVEDA', 'JUAN', 'ENRIQUE', 'M', '1997-01-02', 20, '', '24', '1', '7', 240107005, 0, 0, 0, 0, 0, 0, 0),
(19000092, 'V', '25104322', 'MELENDEZ', 'CHAVEZ', 'ARMANDO', 'ALEJANDRO', 'M', '1996-12-01', 21, '', '2', '1', '1', 20101019, 0, 0, 0, 0, 0, 0, 0),
(19000093, 'V', '25104325', 'LOPEZ', 'PADRON', 'MARIA', 'KATIUSCA', 'F', '1996-08-11', 21, '', '7', '6', '1', 70601009, 0, 0, 0, 0, 0, 0, 0),
(19000094, 'V', '25104326', 'PADRON', 'LEONARDO', 'JUSNEIDYS', 'MARGARITA', 'F', '1994-11-01', 23, '', '7', '6', '1', 70601029, 0, 0, 0, 0, 0, 0, 0),
(19000095, 'V', '25104327', 'ALCALA', 'COLINA', 'NAPOLEON', 'ANTONIO', 'M', '1997-03-07', 20, '', '13', '18', '1', 131801005, 0, 0, 0, 0, 0, 0, 0),
(19000096, 'V', '25104330', 'PRIMERA', 'HERRERA', 'JESUS', 'EDUARDO', 'M', '1994-07-08', 23, '', '7', '6', '1', 70601013, 0, 0, 0, 0, 0, 0, 0),
(19000097, 'V', '25104331', 'HERNANDEZ', 'QUIROGA', 'DAYANA', 'CAROLINA', 'F', '1995-01-11', 22, '', '7', '6', '1', 70601013, 0, 0, 0, 0, 0, 0, 0),
(19000098, 'V', '25104333', 'NAVARRO', 'CALDERA', 'ISIMAR', 'GUADALUPE', 'F', '1995-01-02', 22, '', '9', '10', '7', 91007002, 0, 0, 0, 0, 0, 0, 0),
(19000099, 'V', '25104335', 'VANEGAS', 'CARRILLO', 'JAVIER', 'DAVID', 'M', '1996-10-29', 21, '', '7', '12', '1', 71201016, 0, 0, 0, 0, 0, 0, 0),
(19000100, 'V', '25104336', 'COLINA', 'NARVAEZ', 'ANGEL', 'DE JESUS', 'M', '1994-06-06', 23, '', '7', '7', '5', 70705003, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabla_cne`
--
ALTER TABLE `tabla_cne`
 ADD PRIMARY KEY (`id`), ADD KEY `tipo` (`tipo`,`cedula`,`estado`,`municipio`,`parroquia`,`campo_4`), ADD KEY `cedula` (`cedula`), ADD KEY `cedula_2` (`cedula`,`edad`,`estado`,`municipio`,`parroquia`,`pensionados`,`hogares`), ADD KEY `tipo_2` (`tipo`,`cedula`,`sexo`,`telefono`,`estado`,`municipio`,`parroquia`,`pensionados`,`hogares`,`vienda`,`maisanto_chavez`,`carnet_patria`,`firmaencontra_maduro`,`vehiculos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabla_cne`
--
ALTER TABLE `tabla_cne`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19811073;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
