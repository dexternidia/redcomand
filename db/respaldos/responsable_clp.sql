-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2017 at 05:38 AM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redcomand`
--

-- --------------------------------------------------------

--
-- Table structure for table `responsable_clp`
--

CREATE TABLE `responsable_clp` (
  `id_responsable_clp` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_municipal` int(11) NOT NULL,
  `id_clp` int(11) NOT NULL,
  `id_municipio` int(11) NOT NULL,
  `id_parroquia` int(11) NOT NULL,
  `id_instituciones` int(11) NOT NULL,
  `cedula` int(11) NOT NULL,
  `nombre_apellido` varchar(60) NOT NULL,
  `telefono_1` varchar(100) NOT NULL,
  `telefono_2` varchar(100) NOT NULL,
  `fecha_registro` varchar(100) NOT NULL,
  `hora_registro` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responsable_clp`
--

INSERT INTO `responsable_clp` (`id_responsable_clp`, `id_usuario`, `id_municipal`, `id_clp`, `id_municipio`, `id_parroquia`, `id_instituciones`, `cedula`, `nombre_apellido`, `telefono_1`, `telefono_2`, `fecha_registro`, `hora_registro`) VALUES
(4, 39, 6, 39, 2, 10, 3, 19881315, 'CARLOS SILVA', '(0412) 762-4857', '', '2017-11-27', '13:00:51'),
(5, 40, 0, 40, 2, 10, 2, 19881316, 'CARLOS SILVA', '(0412) 762-4857', '', '2017-11-27', '13:16:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `responsable_clp`
--
ALTER TABLE `responsable_clp`
  ADD PRIMARY KEY (`id_responsable_clp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `responsable_clp`
--
ALTER TABLE `responsable_clp`
  MODIFY `id_responsable_clp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
