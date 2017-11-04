-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 04, 2017 at 11:39 AM
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
(1, 'E', '1101', 'MAASS', 'LINDER', 'RICHARD', '""', 'M', '1922-01-01', 95, '', '7', '9', '6', 70906011, 0, 0, 0, 0, 0, 0, 0),
(2, 'E', '1340', 'ACERO', 'ESPINOSA', 'JOSUE', '""', 'M', '1913-01-01', 104, '', '1', '1', '10', 10110042, 0, 0, 0, 0, 0, 0, 0),
(3, 'E', '1567', 'GURRUCHAGA', 'BASTIDA', 'PEDRO', '""', 'M', '1909-01-01', 108, '', '13', '18', '1', 131801014, 0, 0, 0, 0, 0, 0, 0),
(4, 'E', '1693', 'PAZMI#O', 'PAZMI#O', 'HUGO', 'ALFONSO', 'M', '1916-12-01', 101, '', '1', '1', '22', 10122011, 0, 0, 0, 0, 0, 0, 0),
(5, 'E', '1957', 'QUIN', 'SORZANO', 'CARLOS', '""', 'M', '1909-07-31', 108, '', '13', '9', '2', 130902015, 0, 0, 0, 0, 0, 0, 0),
(6, 'E', '2198', 'SOULE', 'BERMY', 'JEANNE', '""', 'F', '1917-06-18', 100, '', '1', '1', '22', 10122007, 0, 0, 0, 0, 0, 0, 0),
(7, 'E', '2280', 'VANEGAS', 'CAMPOVERDE', 'ROMAN', 'VICENTE', 'M', '1921-02-26', 96, '', '21', '5', '3', 210503001, 0, 0, 0, 0, 0, 0, 0),
(8, 'E', '2986', 'PONS', 'GARCIA', 'ROSALIA', '""', 'F', '1909-11-02', 108, '', '13', '9', '2', 130902008, 0, 0, 0, 0, 0, 0, 0),
(9, 'E', '3607', 'CASTELLANOS', 'DE O', 'FRACISC', 'JO', 'F', '1909-04-06', 108, '', '13', '9', '2', 130902009, 0, 0, 0, 0, 0, 0, 0),
(10, 'E', '3737', 'FURIO', 'DONET', 'JOSE', '""', 'M', '1922-09-21', 98, '', '16', '3', '1', 160301016, 0, 0, 0, 0, 0, 0, 0),
(11, 'E', '3799', 'CARDONA', 'RIERA', 'LUIS', '""', 'M', '1905-12-12', 112, '', '7', '9', '6', 70906011, 0, 0, 0, 0, 0, 0, 0),
(12, 'E', '3997', 'LUND', 'NIELSEN', 'ALEX', '""', 'M', '1916-08-15', 101, '', '13', '16', '1', 131601019, 0, 0, 0, 0, 0, 0, 0),
(13, 'E', '5354', 'SANTIAGO', '""', 'PABLO', '""', 'M', '1914-01-01', 103, '', '1', '1', '11', 10111026, 0, 0, 0, 0, 0, 0, 0),
(14, 'E', '6442', 'MASSO', 'DE ARRILLAGA', 'ANGUSTIAS', '""', 'F', '1921-01-01', 96, '', '6', '3', '3', 60303011, 0, 0, 0, 0, 0, 0, 0),
(15, 'E', '6525', 'ANTON', 'DE ANAUT', 'ANTONIA', '""', 'F', '1924-10-05', 93, '', '1', '1', '22', 10122015, 0, 0, 0, 0, 0, 0, 0),
(16, 'E', '7078', 'DI MASE', 'MAZZIOTTA', 'GAETANO', '""', 'M', '1926-05-27', 91, '', '13', '18', '1', 131801022, 0, 0, 0, 0, 0, 0, 0),
(17, 'E', '7541', 'SPARICE', 'DE POMARICO', 'PETRONILLA', '""', 'F', '1920-06-12', 110, '', '1', '1', '4', 10104030, 0, 0, 0, 0, 0, 0, 0),
(18, 'E', '7544', 'POMARICO', 'DEL DUCA', 'HUMBERTO', '""', 'M', '1906-09-15', 111, '', '1', '1', '4', 10104030, 0, 0, 0, 0, 0, 0, 0),
(19, 'E', '7603', 'DI NISCIA', 'FOSELLI', 'EMILIO', '""', 'M', '1912-01-01', 105, '', '2', '11', '1', 21101001, 0, 0, 0, 0, 0, 0, 0),
(20, 'E', '7613', 'GIFFUNI', 'CESARINO', 'PASQUALE', '""', 'M', '1920-11-18', 97, '', '1', '1', '6', 10106011, 0, 0, 0, 0, 0, 0, 0),
(21, 'E', '7679', 'PIFANO', 'FASANARO', 'ANTONO', '""', 'M', '1907-01-01', 110, '', '6', '1', '6', 60106011, 0, 0, 0, 0, 0, 0, 0),
(22, 'E', '7761', 'GITTENS', 'SCOTTS', 'JOSEPH', '""', 'M', '1926-02-15', 91, '', '4', '3', '1', 40301001, 0, 0, 0, 0, 0, 0, 0),
(23, 'E', '8011', 'POJAN', 'VALDEMARI', 'ENRICO', '""', 'M', '1909-01-01', 103, '', '9', '10', '3', 91003004, 0, 0, 0, 0, 0, 0, 0),
(24, 'E', '8054', 'DIOTAIUTI', '""', 'CARMELA', '""', 'F', '1921-08-09', 96, '', '11', '5', '1', 110501002, 0, 0, 0, 0, 0, 0, 0),
(25, 'E', '8137', 'SPARICE', 'SANTULLO', 'GAETANO', '""', 'M', '1922-08-07', 95, '', '1', '1', '4', 10104030, 0, 0, 0, 0, 0, 0, 0),
(26, 'E', '8188', 'ACOSTA', 'PRINCE', 'JULIO', '""', 'M', '1909-01-01', 108, '', '1', '1', '15', 10115008, 0, 0, 0, 0, 0, 0, 0),
(27, 'E', '9673', 'VAZQUEZ', 'PENICHE', 'CARLOS', '""', 'M', '1915-01-01', 102, '', '11', '2', '2', 110202021, 0, 0, 0, 0, 0, 0, 0),
(28, 'E', '10021', 'BERETTA PICC', 'PORETTI', 'CLAUDIO', '""', 'M', '1910-01-01', 107, '', '7', '4', '2', 70402002, 0, 0, 0, 0, 0, 0, 0),
(29, 'E', '11050', 'BRADLEY', 'HARRIS', 'EDGAR', 'WALTER', 'M', '1910-01-01', 107, '', '21', '5', '3', 210503026, 0, 0, 0, 0, 0, 0, 0),
(30, 'E', '11141', 'HUNG', '""', 'FRANCISCO', '""', 'M', '1921-03-06', 96, '', '1', '1', '17', 10117031, 0, 0, 0, 0, 0, 0, 0),
(31, 'E', '13725', 'DOBRZYNSKI', 'BERNSTAT', 'HENRIETTE', ' ', 'F', '1923-02-28', 94, '', '13', '18', '1', 131801014, 0, 0, 0, 0, 0, 0, 0),
(32, 'E', '15482', 'HUALDE', 'DE ANDRES', 'FRANCISCA', 'TERESA', 'F', '1921-03-27', 96, '', '13', '13', '1', 131301007, 0, 0, 0, 0, 0, 0, 0),
(33, 'E', '15516', 'GORRIN', 'TORRES', 'JOSE', 'MANUEL', 'M', '1926-03-19', 91, '', '20', '13', '1', 201301002, 0, 0, 0, 0, 0, 0, 0),
(34, 'E', '15749', 'FORTE', 'FORTE', 'VINCENZO', '""', 'M', '1927-06-09', 90, '', '1', '1', '13', 10113011, 0, 0, 0, 0, 0, 0, 0),
(35, 'E', '15827', 'SMITH', 'BABINGTON', 'FOSTER', 'DEWEY', 'M', '1920-01-01', 36, '', '2', '1', '1', 20101006, 0, 0, 0, 0, 0, 0, 0),
(36, 'E', '17027', 'IGLESIAS', 'DE RAMOS MARCOS', 'AMPARO', '""', 'F', '1906-10-30', 111, '', '13', '19', '1', 131901001, 0, 0, 0, 0, 0, 0, 0),
(37, 'E', '17313', 'MORENO', 'OCHOA', 'ALFONSO', '""', 'M', '1912-01-01', 105, '', '7', '9', '6', 70906011, 0, 0, 0, 0, 0, 0, 0),
(38, 'E', '17395', 'OLLER', 'DE MIGUENS', 'LAVINIA', 'OFELIA', 'F', '1921-06-11', 96, '', '13', '18', '1', 131801005, 0, 0, 0, 0, 0, 0, 0),
(39, 'E', '18440', 'FONTANE', 'MORENO', 'VICENTA', '""', 'F', '1920-03-11', 97, '', '1', '1', '4', 10104039, 0, 0, 0, 0, 0, 0, 0),
(40, 'E', '18450', 'SIMOES', 'SANTOS', 'JAIME', '""', 'M', '1911-01-01', 106, '', '4', '8', '1', 40801004, 0, 0, 0, 0, 0, 0, 0),
(41, 'E', '18789', 'ORNACHI', 'MEANI', 'PAOLO', '""', 'M', '1906-01-01', 111, '', '19', '7', '2', 190702003, 0, 0, 0, 0, 0, 0, 0),
(42, 'E', '18933', 'GUTIERREZ', 'RODRIGUEZ', 'JOSE', '""', 'M', '1930-03-23', 87, '', '13', '2', '1', 130201007, 0, 0, 0, 0, 0, 0, 0),
(43, 'E', '19106', 'NU', 'PUIG', 'SANTOS', 'NICOLAS', 'M', '1916-12-06', 101, '', '1', '1', '10', 10110076, 0, 0, 0, 0, 0, 0, 0),
(44, 'E', '19430', 'CUESTA', 'DE DEL VALLE', 'AURORA', '""', 'F', '1924-04-07', 93, '', '1', '1', '21', 10121002, 0, 0, 0, 0, 0, 0, 0),
(45, 'E', '19530', 'WICKHAM', 'DE SNAGGS', 'AUDREY', 'ISMAY', 'F', '1909-02-26', 108, '', '21', '5', '6', 210506003, 0, 0, 0, 0, 0, 0, 0),
(46, 'E', '19830', 'DOS SANTOS', 'JARDIN DO', 'MARIO', '""', 'M', '1910-01-01', 107, '', '1', '1', '2', 10102011, 0, 0, 0, 0, 0, 0, 0),
(47, 'E', '20044', 'JIMENEZ', 'ROJAS', 'AGUSTIN', '""', 'M', '1905-01-01', 112, '', '1', '1', '19', 10119010, 0, 0, 0, 0, 0, 0, 0),
(48, 'E', '20485', 'RANGEL', 'DE MELO', 'EUSTACIA', '""', 'F', '1982-01-01', 35, '', '20', '4', '1', 200401008, 0, 0, 0, 0, 0, 0, 0),
(49, 'E', '20575', 'MONTEJO', 'ASCANIO', 'RAMON', 'GUILLERMO', 'M', '1916-01-01', 101, '', '21', '5', '8', 210508004, 0, 0, 0, 0, 0, 0, 0),
(50, 'E', '20621', 'CUELIAR', 'RINCON', 'MARIO', '""', 'M', '1960-01-01', 57, '', '18', '19', '3', 181903002, 0, 0, 0, 0, 0, 0, 0),
(51, 'E', '20712', 'RAMIREZ', 'NI#O', 'ROBERTO', 'RUBEN', 'M', '1911-04-11', 106, '', '18', '8', '2', 180802002, 0, 0, 0, 0, 0, 0, 0),
(52, 'E', '20727', 'GELVIS', 'CHACON', 'FILOMENA', '""', 'F', '1917-01-01', 100, '', '18', '8', '2', 180802002, 0, 0, 0, 0, 0, 0, 0),
(53, 'E', '20831', 'MOGOLLON', 'VILLAMIZAR', 'LUIS', 'DAVID', 'M', '1920-01-01', 97, '', '18', '8', '1', 180801003, 0, 0, 0, 0, 0, 0, 0),
(54, 'E', '20967', 'JEREZ', 'FERRER', 'JOSE', 'ANTONIO', 'M', '1907-01-10', 110, '', '18', '8', '2', 180802005, 0, 0, 0, 0, 0, 0, 0),
(55, 'E', '21106', 'MORENO', 'SANDOVAL', 'JOSE', 'DEL CARME', 'M', '1913-01-01', 104, '', '18', '26', '1', 182601003, 0, 0, 0, 0, 0, 0, 0),
(56, 'E', '21114', 'RINCON', 'DE ROA', 'CONCEPCION', '""', 'F', '1917-01-17', 109, '', '7', '12', '1', 71201020, 0, 0, 0, 0, 0, 0, 0),
(57, 'E', '21161', 'MORA', 'GAMBOA', 'JUAN', 'EMIRO', 'M', '1923-01-04', 98, '', '7', '9', '6', 70906002, 0, 0, 0, 0, 0, 0, 0),
(58, 'E', '21226', 'AGELVIS', 'CHACON', 'JUANA', 'MARIA', 'F', '1920-12-17', 97, '', '6', '3', '1', 60301009, 0, 0, 0, 0, 0, 0, 0),
(59, 'E', '21258', 'MONROY', 'RINCON', 'JULIO', 'RAMON', 'M', '1908-03-08', 100, '', '18', '8', '2', 180802005, 0, 0, 0, 0, 0, 0, 0),
(60, 'E', '21367', 'CABALLERO', 'MARIN', 'ESTEBAN', '""', 'M', '1911-01-01', 106, '', '18', '14', '4', 181404003, 0, 0, 0, 0, 0, 0, 0),
(61, 'E', '21676', 'CORREDOR', '""', 'LEOPOLDO', '""', 'M', '1922-12-24', 95, '', '18', '11', '1', 181101008, 0, 0, 0, 0, 0, 0, 0),
(62, 'E', '21758', 'RICON', 'SALINAS', 'ROSARIO', 'ANTONIO', 'M', '1919-01-01', 98, '', '18', '2', '1', 180201014, 0, 0, 0, 0, 0, 0, 0),
(63, 'E', '21826', 'MANSILLA', 'HERNANDEZ', 'RAMON', '""', 'M', '1922-01-14', 98, '', '18', '8', '4', 180804004, 0, 0, 0, 0, 0, 0, 0),
(64, 'E', '21920', 'RODRIGUEZ', 'MARTINEZ', 'JOSE', 'MARIA', 'M', '1911-01-01', 106, '', 'BARINAS', 'BARINAS', 'CORAZON DE JESUS', 50209002, 0, 0, 0, 0, 0, 0, 0),
(65, 'E', '21931', 'BONOME', 'DE MARTINEZ', 'CONSUELO', '""', 'F', '1919-01-01', 98, '', '12', '4', '6', 120406005, 0, 0, 0, 0, 0, 0, 0),
(66, 'E', '22013', 'NIETO', '""', 'EVANGELISTA', '""', 'M', '1923-01-10', 94, '', '18', '19', '3', 181903005, 0, 0, 0, 0, 0, 0, 0),
(67, 'E', '22161', 'LLANES', '""', 'ISABEL', '""', 'F', '1914-01-01', 103, '', '4', '1', '6', 40106013, 0, 0, 0, 0, 0, 0, 0),
(68, 'E', '22399', 'RICO', 'SUAREZ', 'DANIEL', '""', 'M', '1919-01-29', 98, '', '18', '6', '1', 180601009, 0, 0, 0, 0, 0, 0, 0),
(69, 'E', '22409', 'RICO', 'CONTRERAS', 'JOSE', 'ANTONIO', 'M', '1913-06-18', 104, '', '18', '23', '1', 182301002, 0, 0, 0, 0, 0, 0, 0),
(70, 'E', '22732', 'RODRIGUEZ', 'DE DELGADO', 'ISIDORA', '""', 'F', '1918-01-01', 99, '', '18', '8', '1', 180801004, 0, 0, 0, 0, 0, 0, 0),
(71, 'E', '22743', 'CRESPO', 'ALONZO', 'PAULA', '""', 'F', '1905-01-01', 112, '', '13', '3', '1', 130301026, 0, 0, 0, 0, 0, 0, 0),
(72, 'E', '23127', 'GUTIERREZ', '""', 'ELISEO', '""', 'M', '1917-01-01', 100, '', '18', '26', '1', 182601002, 0, 0, 0, 0, 0, 0, 0),
(73, 'E', '23132', 'CABALLERO', '""', 'ARQUIMEDES', '""', 'M', '1907-01-01', 110, '', '18', '8', '1', 180801014, 0, 0, 0, 0, 0, 0, 0),
(74, 'E', '23179', 'CAMARGO', '""', 'MARIA', 'ELENA', 'F', '1925-03-30', 92, '', '13', '4', '2', 130402011, 0, 0, 0, 0, 0, 0, 0),
(75, 'E', '23186', 'PAEZ', 'JIMENEZ', 'JOSE', 'MISAEL', 'M', '1911-01-01', 106, '', '18', '1', '2', 180102001, 0, 0, 0, 0, 0, 0, 0),
(76, 'E', '23335', 'ORTIZ', '""', 'FELICIANO', '""', 'M', '1924-01-01', 93, '', '18', '8', '3', 180803017, 0, 0, 0, 0, 0, 0, 0),
(77, 'E', '23379', 'SUAREZ', '""', 'APOLINAR', '""', 'M', '1915-01-01', 102, '', '24', '1', '6', 240106001, 0, 0, 0, 0, 0, 0, 0),
(78, 'E', '23423', 'MENDOZA', '""', 'MANUEL', 'ANTONIO', 'M', '1994-01-01', 23, '', '7', '5', '1', 70501015, 0, 0, 0, 0, 0, 0, 0),
(79, 'E', '23553', 'GELVES', 'CAICEDO', 'JOSE', 'ENCARNACI', 'M', '1919-01-01', 98, '', '12', '8', '7', 120807009, 0, 0, 0, 0, 0, 0, 0),
(80, 'E', '23606', 'LIZCANO', 'CAMARGO', 'SOFIA', '""', 'F', '1920-01-01', 97, '', '13', '9', '1', 130901106, 0, 0, 0, 0, 0, 0, 0),
(81, 'E', '23607', 'RINCON', '""', 'DIONISIO', '""', 'M', '1922-01-01', 95, '', '16', '3', '1', 160301047, 0, 0, 0, 0, 0, 0, 0),
(82, 'E', '23692', 'RODRIGUEZ', '""', 'ROSA', 'ALBINA', 'F', '1916-01-01', 101, '', '1', '1', '1', 10101003, 0, 0, 0, 0, 0, 0, 0),
(83, 'E', '23781', 'BALLESTEROS', 'DE LEMUS', 'ELISENIA', '""', 'F', '1917-09-17', 100, '', 'BARINAS', 'BARINAS', 'EL CARMEN', 50207001, 0, 0, 0, 0, 0, 0, 0),
(84, 'E', '23821', 'VERA', 'ACEVEDO', 'MAXIMINO', '""', 'M', '1925-01-01', 92, '', '18', '26', '1', 182601003, 0, 0, 0, 0, 0, 0, 0),
(85, 'E', '23911', 'TARAZONA', 'VALERO', 'ALIX', 'MERCEDES', 'F', '1925-11-03', 92, '', 'BARINAS', 'ANTONIO JOSE DE SUCRE', 'NICOLAS PULIDO', 51002002, 0, 0, 0, 0, 0, 0, 0),
(86, 'E', '23916', 'RAMIREZ', '""', 'LUIS', 'DAVID', 'M', '1919-01-01', 98, '', '13', '19', '1', 131901020, 0, 0, 0, 0, 0, 0, 0),
(87, 'E', '24035', 'CARDENAS', 'CALDERON', 'LUIS', 'FRANCISCO', 'M', '1913-10-16', 104, '', '11', '4', '1', 110401005, 0, 0, 0, 0, 0, 0, 0),
(88, 'E', '24293', 'MOGOLLON', 'RIVERA', 'DOMINGO', 'MARIA', 'M', '1911-12-20', 106, '', '18', '25', '1', 182501001, 0, 0, 0, 0, 0, 0, 0),
(89, 'E', '24327', 'GONZALEZ', 'PEREZ', 'RAIMUNDO', '""', 'M', '1906-01-01', 111, '', '11', '2', '3', 110203007, 0, 0, 0, 0, 0, 0, 0),
(90, 'E', '24357', 'FUENTES', 'GARCIA', 'VICENTA', '""', 'F', '1928-01-01', 89, '', '4', '1', '6', 40106001, 0, 0, 0, 0, 0, 0, 0),
(91, 'E', '24893', 'MORTEGUI', 'ANDRADE', 'ROSA', 'MARIA', 'F', '1912-08-30', 95, '', '8', '6', '1', 80601019, 0, 0, 0, 0, 0, 0, 0),
(92, 'E', '24913', 'URIBE', 'TARAZONA', 'MANUEL', '""', 'M', '1924-11-11', 93, '', '21', '18', '6', 211806001, 0, 0, 0, 0, 0, 0, 0),
(93, 'E', '24924', 'BUITRAGO', '""', 'LUIS', 'CARLOS', 'M', '1918-01-01', 99, '', 'BARINAS', 'EZEQUIEL ZAMORA', 'JOSE IGNACIO DEL PUMAR', 50402001, 0, 0, 0, 0, 0, 0, 0),
(94, 'E', '25052', 'TOBITO', 'DE VIVAS', 'IGNACIA', '""', 'F', '1931-01-01', 86, '', '18', '9', '1', 180901002, 0, 0, 0, 0, 0, 0, 0),
(95, 'E', '25091', 'CABALLERO', '""', 'ROSALIA', '""', 'F', '1913-01-01', 104, '', '1', '1', '19', 10119007, 0, 0, 0, 0, 0, 0, 0),
(96, 'E', '25106', 'LIZARAZO', 'BOTIA', 'SANTIAGO', '""', 'M', '1922-01-01', 95, '', 'BARINAS', 'ANDRES ELOY BLANCO', 'SANTA CRUZ DE GUACAS', 51202001, 0, 0, 0, 0, 0, 0, 0),
(97, 'E', '25250', 'ESTUPI#AN', 'ESTUPI#AN', 'JOSE', 'NOE', 'M', '1921-01-01', 96, '', '16', '12', '1', 161201006, 0, 0, 0, 0, 0, 0, 0),
(98, 'E', '25302', 'BERNAL', 'BURGOS', 'LUDOVINA', '""', 'F', '1923-12-16', 94, '', '1', '1', '15', 10115049, 0, 0, 0, 0, 0, 0, 0),
(99, 'E', '25360', 'GONZALEZ', '""', 'PEDRO', 'VICENTE', 'M', '1925-01-01', 92, '', '18', '11', '1', 181101004, 0, 0, 0, 0, 0, 0, 0),
(100, 'E', '25437', 'PINTO', 'DE CAICEDO', 'ANA', 'MARIA', 'F', '1922-10-05', 95, '', '18', '1', '1', 180101007, 0, 0, 0, 0, 0, 0, 0);

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
