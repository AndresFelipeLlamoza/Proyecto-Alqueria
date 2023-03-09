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
  `Celular` bigint(20) DEFAULT NULL,
  `Cedula` bigint(20) DEFAULT NULL,
  `Ruta` varchar(500) DEFAULT NULL,
  `Perfil` longblob,
  `Estado` varchar(50) DEFAULT 'Activo',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla alqueriadocs.contratistas: 2 rows
/*!40000 ALTER TABLE `contratistas` DISABLE KEYS */;
INSERT INTO `contratistas` (`id`, `Nombre`, `Celular`, `Cedula`, `Ruta`, `Perfil`, `Estado`) VALUES
	(1, 'Andres Felipe Llamosa Pechene', 3154281811, 1113978483, 'CROSSPAL', _binary 0x433A55736572736569626172726167417070446174614C6F63616C54656D70706870374645362E746D70, 'Activo'),
	(2, 'Zoila Rosa Parra Moreno', 12389128703, 321049219042301, 'P0230', _binary 0x32303232303732385F3131313431322E6A7067, 'Activo');
/*!40000 ALTER TABLE `contratistas` ENABLE KEYS */;

-- Volcando estructura para tabla alqueriadocs.especialistas
CREATE TABLE IF NOT EXISTS `especialistas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(500) DEFAULT NULL,
  `Usuario` varchar(500) DEFAULT NULL,
  `Correo` varchar(500) DEFAULT NULL,
  `Clave` varchar(600) DEFAULT NULL,
  `Perfil` mediumblob,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Volcando datos para la tabla alqueriadocs.especialistas: 4 rows
/*!40000 ALTER TABLE `especialistas` DISABLE KEYS */;
INSERT INTO `especialistas` (`id`, `Nombre`, `Usuario`, `Correo`, `Clave`, `Perfil`) VALUES
	(1, 'Helder Fabio Bonilla', 'fbonilla', 'fbonilla@alqueria.com.co', 'Distribucion123', NULL),
	(2, 'Eucardo Ibarra', 'eibarrag', 'eibarrag@alqueria.com.co', 'Proposito226', NULL),
	(3, 'Camilo Patiño', 'cpatinog', 'cpatinog@alqueria.com.co', 'Alqueria2023', NULL),
	(4, 'David Asia Bonilla', 'dassiab', 'dassiab@alqueria.com.co', 'Logistica3.', NULL);
/*!40000 ALTER TABLE `especialistas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
