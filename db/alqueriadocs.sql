-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.1.72-community - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para alqueriadocs
CREATE DATABASE IF NOT EXISTS `alqueriadocs` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `alqueriadocs`;

-- Volcando estructura para tabla alqueriadocs.contratistas
CREATE TABLE IF NOT EXISTS `contratistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(500) DEFAULT NULL,
  `Celular` int(11) DEFAULT NULL,
  `Correo` varchar(500) DEFAULT NULL,
  `Ruta` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla alqueriadocs.contratistas: 0 rows
/*!40000 ALTER TABLE `contratistas` DISABLE KEYS */;
/*!40000 ALTER TABLE `contratistas` ENABLE KEYS */;

-- Volcando estructura para tabla alqueriadocs.especialistas
CREATE TABLE IF NOT EXISTS `especialistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(500) DEFAULT NULL,
  `Usuario` varchar(500) DEFAULT NULL,
  `Correo` varchar(500) DEFAULT NULL,
  `Clave` varchar(600) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla alqueriadocs.especialistas: 4 rows
/*!40000 ALTER TABLE `especialistas` DISABLE KEYS */;
INSERT INTO `especialistas` (`id`, `Nombre`, `Usuario`, `Correo`, `Clave`) VALUES
	(1, 'Helder Fabio Bonilla', 'fbonilla', 'fbonilla@alqueria.com.co', 'Distribucion123'),
	(2, 'Eucardo Ibarra', 'eibarrag', 'eibarrag@alqueria.com.co', 'Proposito226'),
	(3, 'Camilo Patiño', 'cpatinog', 'cpatinog@alqueria.com.co', 'Alqueria2023'),
	(4, 'David Asia Bonilla', 'dassiab', 'dassiab@alqueria.com.co', 'Logistica3.');
/*!40000 ALTER TABLE `especialistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
