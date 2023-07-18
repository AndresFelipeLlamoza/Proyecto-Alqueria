-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-06-2023 a las 22:57:26
-- Versión del servidor: 5.7.17
-- Versión de PHP: 7.1.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `alqueriadocs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratistas`
--

CREATE TABLE `contratistas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(500) DEFAULT NULL,
  `Celular` bigint(20) DEFAULT NULL,
  `Cedula` bigint(20) DEFAULT NULL,
  `Perfil` varchar(100) DEFAULT NULL,
  `Estado` varchar(50) DEFAULT 'Activo',
  `id_ruta` int(11) NOT NULL,
  `Placa` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contratistas`
--

INSERT INTO `contratistas` (`id`, `Nombre`, `Celular`, `Cedula`, `Perfil`, `Estado`, `id_ruta`, `Placa`) VALUES
(1, 'Vladimir Pino Cabrera', 3102350930, 94327162, '../view/profiles/IMG-20230406-WA0029.jpg', 'Activo', 20, 'ZNN941'),
(2, 'Zoila Rosa Parra', 3152623846, 29657155, '../view/profiles/image-3.jpg', 'Activo', 14, 'DBB954'),
(3, 'Luis Hernando Alvarado', 3022135109, 94318089, '../view/profiles/empty-user.png', 'Activo', 10, 'GUR052'),
(4, 'Dahian Vanessa QuiÃ±onez', 3152456138, 1113683202, '../view/profiles/empty-user.png', 'Activo', 13, 'SPK943'),
(5, 'Wilson Jimenez Diaz', 3222100098, 16269372, '../view/profiles/', 'Activo', 6, 'TJX824'),
(6, 'Marco Antonio Ahumada', 3166974384, 94330861, '../view/profiles/', 'Activo', 2, 'WHW504'),
(7, 'Vladimir Pino Cabrera', 3102350930, 94327162, '../view/profiles/', 'Activo', 4, 'SPK283'),
(8, 'ar', 3146847241, 6186124, '../view/profiles/image-1.jpg', 'Retirado', 56, 'SYX542'),
(9, 'Carlos Julio Jimenez Gutierrez', 3182617804, 16365713, '../view/profiles/empty-user.png', 'Activo', 60, 'SQF569'),
(10, 'Katherin Johana Pasichana', 3114344792, 1114827490, '../view/profiles/empty-user.png', 'Activo', 34, 'EQL241'),
(11, 'Nicolas Rodriguez Ortiz', 3234496668, 1143872251, '../view/profiles/empty-user.png', 'Activo', 46, 'ESY592'),
(12, 'Diego Fernando Ospina Garcia', 3006849653, 1113656383, '../view/profiles/empty-user.png', 'Activo', 35, 'ZNM394'),
(13, 'Elizabeth Cortes LondoÃ±o', 3203609779, 25173447, '../view/profiles/empty-user.png', 'Activo', 36, 'ZNL897'),
(14, 'Edward Andres Salamanca Arango', 3017284537, 14469036, '../view/profiles/empty-user.png', 'Activo', 63, 'WHW486'),
(15, 'Jhon Anderson Riascos Marmolejo', 3183606307, 14678147, '../view/profiles/empty-user.png', 'Activo', 37, 'WHW744'),
(16, 'Leonardo Lopez Vargas', 3174524042, 12239000, '../view/profiles/empty-user.png', 'Activo', 38, 'SXJ263'),
(17, 'Liliana Mayorquin Guzman', 3183802220, 31167781, '../view/profiles/empty-user.png', 'Activo', 39, 'WHU733'),
(18, 'Edwin Ernesto Chamorro', 3003346174, 10301699, '../view/profiles/empty-user.png', 'Activo', 40, 'EQR439'),
(19, 'Oscar David Gonzales', 3128865233, 10301699, '../view/profiles/empty-user.png', 'Activo', 41, 'KOK994'),
(20, 'William Fernelly Sanchez', 3173903752, 94321235, '../view/profiles/empty-user.png', 'Activo', 42, 'WHW837'),
(21, 'Oscar Mauricio Benavides Mitis', 3164457896, 1088588495, '../view/profiles/empty-user.png', 'Activo', 43, 'TJW288'),
(22, 'Henry Ospina', 3125434879, 16667421, '../view/profiles/empty-user.png', 'Activo', 44, 'SPS786'),
(23, 'Lady Jimena Marin Mora', 3188795444, 1113662310, '../view/profiles/empty-user.png', 'Activo', 45, 'TJW788'),
(24, 'Alejandro Mena Llanten', 3174736279, 1006326023, '../view/profiles/empty-user.png', 'Activo', 46, 'SNO611'),
(25, 'Luz Mery Buitrago Tumbo', 3102529809, 40784466, '../view/profiles/empty-user.png', 'Activo', 15, 'LFL156'),
(26, 'Hernan Henao Gonzales', 3163386118, 16276410, '../view/profiles/empty-user.png', 'Activo', 17, 'ZNK846'),
(27, 'Luis Ignacio CedeÃ±o Bermudez', 3126827343, 83234072, '../view/profiles/empty-user.png', 'Activo', 31, 'KUN578'),
(28, 'Rosario Bermeo Anacona', 3167412023, 36280025, '../view/profiles/empty-user.png', 'Activo', 32, 'WDL799'),
(29, 'Marlet Ivone Conde Morales', 3041089967, 66785511, '../view/profiles/empty-user.png', 'Activo', 48, 'WGB032'),
(30, 'Evelin del mar muriel castaÃ±o', 3204745781, 1144181762, '../view/profiles/empty-user.png', 'Activo', 49, 'SMD808'),
(31, 'Sandra Paola Diaz Morales', 3122932910, 31575240, '../view/profiles/empty-user.png', 'Activo', 50, 'WOX869'),
(32, 'Oscar David Gonzales', 3107518444, 1114817029, '../view/profiles/empty-user.png', 'Activo', 52, 'ZNL440'),
(33, 'Edilson Villamil Noa', 3122811870, 76305331, '../view/profiles/empty-user.png', 'Activo', 56, 'WDL819'),
(34, 'Zoila Rosa Parra', 3152623846, 29657155, '../view/profiles/empty-user.png', 'Activo', 16, 'ZNK790'),
(35, 'Edilson Villamil Noa', 3122811870, 76305331, '../view/profiles/empty-user.png', 'Activo', 57, 'SIG593'),
(36, 'Anderson Pino ZuÃ±iga', 3102361634, 1061701492, '../view/profiles/empty-user.png', 'Activo', 58, 'VZD646'),
(37, 'Edilson Villamil Noa', 3122811870, 76305331, '../view/profiles/empty-user.png', 'Activo', 64, 'USE923'),
(38, 'Jhon Jairo Naspiran Botina', 3116892630, 5207742, '../view/profiles/empty-user.png', 'Activo', 55, 'SRP548'),
(39, 'Jhon Jairo Naspiran Botina', 3183495728, 5207742, '../view/profiles/empty-user.png', 'Activo', 55, 'WFI049'),
(40, 'Oscar Orlando Naspiran Botina', 3154637575, 98397171, '../view/profiles/empty-user.png', 'Activo', 61, 'KUK825'),
(41, 'Oscar Orlando Naspiran Botina', 3154637575, 98397171, '../view/profiles/empty-user.png', 'Activo', 61, 'SST316'),
(42, 'Oscar Orlando Naspiran Botina', 3154637575, 98397171, '../view/profiles/empty-user.png', 'Activo', 61, 'GTZ100'),
(43, 'Oscar Orlando Naspiran Botina', 3154637575, 98397171, '../view/profiles/empty-user.png', 'Activo', 61, 'SYA923'),
(44, 'Brenda Lucia Del Campo', 3163468235, 1113627262, '../view/profiles/empty-user.png', 'Activo', 1, 'ZNK809'),
(45, 'Marco Antonio Ahumada', 3166974384, 94330861, '../view/profiles/empty-user.png', 'Activo', 29, 'WHW504'),
(46, 'Johan Andres Burbano Meneses', 3174476156, 1113683375, '../view/profiles/empty-user.png', 'Activo', 5, 'UPT065'),
(47, 'Maria Dolly Mora Ortega', 3147466563, 30039638, '../view/profiles/empty-user.png', 'Activo', 7, 'WHV911'),
(48, 'Maria Alba Arango De Valencia', 3147630926, 38891133, '../view/profiles/empty-user.png', 'Activo', 8, 'KUN382'),
(49, 'Ruben Dario Gonzales', 3194749262, 16794177, '../view/profiles/empty-user.png', 'Activo', 9, 'SPS236'),
(50, 'Luz Mery Buitrago Tumbo', 3102529809, 40784466, '../view/profiles/empty-user.png', 'Activo', 11, 'ZNK844'),
(51, 'Anggy Lorena Rios Holguin', 3122312456, 1113663984, '../view/profiles/empty-user.png', 'Activo', 33, 'VCN513'),
(52, 'Jannette Amparo Mira Franco', 3158256746, 66785020, '../view/profiles/empty-user.png', 'Activo', 62, 'KUL540'),
(53, 'Erminson Bucheli Lopez', 3117333305, 6396137, '../view/profiles/empty-user.png', 'Activo', 19, 'ZNK821'),
(54, 'Victor Manuel Reina Mora', 3105814081, 1113620984, '../view/profiles/empty-user.png', 'Activo', 21, 'ZNL815'),
(55, 'Victor Manuel Reina Mora', 3105814081, 1113620984, '../view/profiles/empty-user.png', 'Activo', 30, 'WDM009'),
(56, 'Arbey Rojas', 3105722355, 6349609, '../view/profiles/empty-user.png', 'Activo', 23, 'WHU845'),
(57, 'Marco Antonio Ahumada', 3166974384, 94330861, '../view/profiles/empty-user.png', 'Activo', 24, 'EYY457'),
(58, 'Luis Hernando Alvarado', 3022135109, 94318089, '../view/profiles/empty-user.png', 'Activo', 24, 'TMO986'),
(59, 'Alvaro Pino Cabrera', 3207198671, 94311844, '../view/profiles/empty-user.png', 'Activo', 26, 'ZNK820'),
(60, 'Maria Dolly Mora Ortega', 3147466563, 30039638, '../view/profiles/empty-user.png', 'Activo', 27, 'TJW829'),
(61, 'Leyder Luligo MuÃ±oz', 3107077246, 6383999, '../view/profiles/empty-user.png', 'Activo', 18, 'KUK861'),
(62, 'Laura Leonela BermÃºdez Carmona', 3163769986, 1113526792, '../view/profiles/empty-user.png', 'Activo', 12, 'SLG155'),
(63, 'Leidy Mosquera Olaya', 3106856237, 29682538, '../view/profiles/empty-user.png', 'Activo', 25, 'LAI266'),
(64, 'Jose Maria Clausen NarvÃ¡ez', 3146845236, 5354228, '../view/profiles/empty-user.png', 'Activo', 51, 'TJV977'),
(65, 'Diego Fernando Melendez', 1113619009, 3187956290, '../view/profiles/empty-user.png', 'Activo', 3, 'WHW454'),
(66, 'Yurany Liceth MontaÃ±o Rosero', 3234311499, 1113661636, '../view/profiles/empty-user.png', 'Activo', 65, 'ESY590');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id_documento` int(11) NOT NULL,
  `Nombre_doc` varchar(100) NOT NULL,
  `Vigencia` date DEFAULT NULL,
  `Contenido_doc` varchar(100) NOT NULL,
  `id` int(11) NOT NULL,
  `id_nomdoc` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `documentos`
--

INSERT INTO `documentos` (`id_documento`, `Nombre_doc`, `Vigencia`, `Contenido_doc`, `id`, `id_nomdoc`) VALUES
(1, 'TECNOMECANICA', '2029-11-04', '../view/documents/ ZNN941 vladimir pino.pdf', 1, NULL),
(2, 'POLIZA VEHICULO', '2023-11-08', '../view/documents/ POLIZA VEHICULO ZNN941.pdf', 1, NULL),
(3, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA DE PROPIEDAD.pdf', 1, NULL),
(5, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio P0202..pdf', 1, NULL),
(6, 'SOAT', '2023-11-02', '../view/documents/ SOAT ZNN941.pdf', 1, NULL),
(7, 'CONCEPTO SANITARIO', '2023-11-23', '../view/documents/ PERMISO SANITARIO.pdf', 1, NULL),
(8, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/Fumigacion ZNN941.pdf', 1, NULL),
(9, 'FOTO VEHICULO', NULL, '../view/documents/ DBB954 FOTO VEHICULO.pdf', 2, NULL),
(10, 'SOAT', '2023-09-11', '../view/documents/ DBB954 SOAT.pdf', 2, NULL),
(11, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ DBB954 TARJETA PROPIEDAD.pdf', 2, NULL),
(12, 'TECNOMECANICA', '2024-01-21', '../view/documents/ DBB954 TECNOMECANICA.pdf', 2, NULL),
(13, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_DBB954_POLIZA_1000491645202_CERTIFICADO_0_RIESGO_3.pdf', 2, NULL),
(14, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio P0228.pdf', 2, NULL),
(15, 'CONCEPTO SANITARIO', '2024-02-08', '../view/documents/ P0228 PERMISO SANITARIO.pdf', 2, NULL),
(16, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO DBB954.pdf', 2, NULL),
(17, 'FOTO VEHICULO', NULL, '../view/documents/ GUR052 FOTOS VEHICULO.pdf', 3, NULL),
(18, 'SOAT', '2024-04-12', '../view/documents/ Poliza_SOAT_85472052.pdf', 3, NULL),
(19, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ GUR052 LICENCIA DE TRANSITO.pdf', 3, NULL),
(20, 'TECNOMECANICA', '2024-05-23', '../view/documents/ tecnomecanica GUR052.pdf', 3, NULL),
(21, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_GUR052_POLIZA_1000491645202_CERTIFICADO_0_RIESGO_212.pdf', 3, NULL),
(22, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio P0213.pdf', 3, NULL),
(23, 'CONCEPTO SANITARIO', '2023-08-08', '../view/documents/ GUR052 CONCEPTO SANITARIO.pdf', 3, NULL),
(24, 'CERTIFICADO FUMIGACION', '2023-07-14', '../view/documents/ VEHICULO GUR052.pdf', 3, NULL),
(25, 'FOTO VEHICULO', NULL, '../view/documents/ fotografia vehiculo.pdf', 4, NULL),
(26, 'SOAT', '2023-09-21', '../view/documents/ SOAT SPK943.pdf', 4, NULL),
(29, 'TECNOMECANICA', '2023-09-21', '../view/documents/ TECNOMECANICA SPK943.pdf', 4, NULL),
(28, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD SPK943.pdf', 4, NULL),
(30, 'POLIZA VEHICULO', '2023-10-03', '../view/documents/ POLIZA VEHICULO.pdf', 4, NULL),
(31, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio SPK 943.pdf', 4, NULL),
(32, 'CONCEPTO SANITARIO', '2024-02-22', '../view/documents/PERMISO SANITARIO SPK943.pdf', 4, NULL),
(33, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO SPK943.pdf', 4, NULL),
(34, 'CERTIFICADO LIBERTAD INMUEBLE', NULL, '../view/documents/ CERTIFICADO DE TRADICION INMUEBLE CODEUDOR DAHIAN VANESSA QUIÃ‘ONEZ.pdf', 4, NULL),
(35, 'SOAT', '2023-08-27', '../view/documents/ TJX824 SOAT.pdf', 5, NULL),
(36, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA DE PROPIEDAD TJX824.pdf', 5, NULL),
(37, 'TECNOMECANICA', '2023-08-29', '../view/documents/ TJX824 TECNOMECANICA.pdf', 5, NULL),
(38, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_TJX824_POLIZA_1000491645202_CERTIFICADO_0_RIESGO_67.pdf', 5, NULL),
(39, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio P0209.pdf', 5, NULL),
(40, 'CONCEPTO SANITARIO', '2023-12-02', '../view/documents/ PERMISO SANITARIO TJX824.pdf', 5, NULL),
(41, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO TJX824.pdf', 5, NULL),
(42, 'FOTO VEHICULO', NULL, '../view/documents/ 218 EYY457 FOTO.pdf', 6, NULL),
(43, 'SOAT', '2023-12-18', '../view/documents/ SOAT EYY457 2023.pdf', 6, NULL),
(44, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ 218 EYY457 TARJETA PROPIEDAD.pdf', 6, NULL),
(45, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_EYY457_POLIZA_1000491645202_CERTIFICADO_0_RIESGO_175.pdf', 6, NULL),
(46, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio P0223.pdf', 6, NULL),
(47, 'CONCEPTO SANITARIO', '2024-03-20', '../view/documents/CONCEPTO SANITARIO EYY457 2023.pdf', 6, NULL),
(48, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO EYY457.pdf', 6, NULL),
(49, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO - RUTA 207 - VLADIMIR PINO CABRERA - SPK283.pdf', 7, NULL),
(50, 'SOAT', '2024-01-11', '../view/documents/ SOAT SPK283.pdf', 7, NULL),
(51, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD - RUTA 207 - VLADIMIR PINO CABRERA - SPK283.pdf.pdf', 7, NULL),
(52, 'TECNOMECANICA', '2023-07-13', '../view/documents/ TECNOMECANICA SPK283 VLADIMIR PINO.pdf', 7, NULL),
(53, 'POLIZA VEHICULO', '2023-06-10', '../view/documents/ POLIZA_SPK283.pdf', 7, NULL),
(54, 'REVISION PATIO', '2023-09-10', '../view/documents/ revision patio P0207.pdf', 7, NULL),
(55, 'CONCEPTO SANITARIO', '2024-04-20', '../view/documents/ PERMISO SANITARIO VLADIMIR SPK283.pdf', 7, NULL),
(56, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO SPK283.pdf', 7, NULL),
(57, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2020-02-23', '../view/documents/ FACTURA 230220 - RUTA 207 - VLADIMIR PINO CABRERA - SPK283.pdf', 7, NULL),
(58, 'FOTO VEHICULO', NULL, '../view/documents/ FOTOGRAFÃA VEHÃCULO  - RUTA TULÃšA - GABRIEL ARTURO CLAVIJO - SQF569.pdf', 9, NULL),
(59, 'SOAT', '2024-01-19', '../view/documents/ SQF569 SOAT.pdf', 9, NULL),
(60, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ 3. Tarjeta propiedad.pdf', 9, NULL),
(61, 'TECNOMECANICA', '2024-06-01', '../view/documents/ TECNOMECANICA SQF569 2023.pdf', 9, NULL),
(62, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_SQF569_2023.pdf', 9, NULL),
(63, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio SQF 569.pdf', 9, NULL),
(64, 'CONCEPTO SANITARIO', '2023-06-24', '../view/documents/ SQF569 CONCEPTO SANITARIO.pdf', 9, NULL),
(65, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO SQF569.pdf', 9, NULL),
(66, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-04-25', '../view/documents/SQF569 CERTIFICADO DE MANTENIMIENTO PREVENTIVO.pdf', 9, NULL),
(67, 'SOAT', '2023-09-24', '../view/documents/ EQL241 SOAT.pdf', 10, NULL),
(68, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD EQL241.pdf', 10, NULL),
(69, 'TECNOMECANICA', '2023-10-19', '../view/documents/ TECNOMECANICA EQL241 (1).pdf', 10, NULL),
(70, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_EQL241_POLIZA_1000491645202_CERTIFICADO_0_RIESGO_159.pdf', 10, NULL),
(71, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio EQL 241.pdf', 10, NULL),
(72, 'CONCEPTO SANITARIO', '2024-03-24', '../view/documents/Concepto Sanitario EQL241.pdf', 10, NULL),
(73, 'CERTIFICADO FUMIGACION', '2023-07-12', '../view/documents/ VEHICULO EQL241.pdf', 10, NULL),
(74, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-09-28', '../view/documents/ EQL241 CERTIFICADO DE MANTENIMIENTO PREVENTIVO.pdf', 10, NULL),
(75, 'FOTO VEHICULO', NULL, '../view/documents/ ESY592 FOTO VEHICULO.pdf', 11, NULL),
(76, 'SOAT', '2023-08-18', '../view/documents/ SOAT ESY592.pdf', 11, NULL),
(77, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ LICENCIA DE TRANSITO NICOLAS RODRIGUEZ.pdf', 11, NULL),
(78, 'TECNOMECANICA', '2023-07-24', '../view/documents/ ESY592 TECNOMECANICA NICOLAS RODRIGUEZ.pdf', 11, NULL),
(79, 'POLIZA VEHICULO', '2023-08-09', '../view/documents/ PÃ“LIZA VEHÃCULO ESY592.pdf', 11, NULL),
(80, 'REVISION PATIO', '2023-09-18', '../view/documents/ revision patio ESY 592.pdf', 11, NULL),
(81, 'CONCEPTO SANITARIO', '2023-12-20', '../view/documents/ PERMISO SANITARIO ESY592.pdf', 11, NULL),
(84, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2024-04-06', '../view/documents/ Mantenimiento ESY592.pdf', 11, NULL),
(83, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO ESY592.pdf', 11, NULL),
(85, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO - RUTA NORTEVAL - DIEGO FERNANDO OSPINA GARCÃA - ZNM394.pdf', 12, NULL),
(86, 'SOAT', '2024-01-10', '../view/documents/ SOAT ZNM394 DIEGO OSPINA (2023).pdf', 12, NULL),
(87, 'TECNOMECANICA', '2024-01-24', '../view/documents/ tecnomecanica ZNM394.jpg', 12, NULL),
(88, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA DE PROPIEDAD NORTEVAL ZNM394.pdf', 12, NULL),
(90, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ PLACA_ZNM394_POLIZA_2023.pdf', 12, NULL),
(91, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION DE PATIO ZNM394.pdf', 12, NULL),
(92, 'CONCEPTO SANITARIO', '2023-06-22', '../view/documents/ PERMISO SANITARIO ZNM394.pdf', 12, NULL),
(93, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO ZNM394 2023.pdf', 12, NULL),
(94, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO ZNM394 2023.pdf', 12, NULL),
(95, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-08-11', '../view/documents/ ZNM394 MANTENIMIENTO PREVENTIVO.pdf', 12, NULL),
(96, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO ZNL897.pdf', 13, NULL),
(97, 'POLIZA VEHICULO', '2024-05-17', '../view/documents/ POLIZA ZNL897.jpg', 13, NULL),
(98, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD ZNL897.pdf', 13, NULL),
(99, 'TECNOMECANICA', '2023-06-23', '../view/documents/ P0100 TECNOMECANICA ZNL897.pdf', 13, NULL),
(100, 'REVISION PATIO', '2023-09-10', '../view/documents/ REVISION PATIO ZNL897.pdf', 13, NULL),
(101, 'CONCEPTO SANITARIO', '2024-04-18', '../view/documents/ CONCEPTO SANITARIO ZNL897 2023.pdf', 13, NULL),
(102, 'CERTIFICADO FUMIGACION', '2023-07-20', '../view/documents/ Fumigacion P0100 ABRIL 2023.pdf', 13, NULL),
(103, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHCIULO WHW486.pdf', 14, NULL),
(104, 'SOAT', '2024-04-13', '../view/documents/ SOAT WHW486.pdf', 14, NULL),
(105, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD WHW486.pdf', 14, NULL),
(106, 'TECNOMECANICA', '2024-06-01', '../view/documents/ TECNOMECANICA VEHICULO WHW486.pdf', 14, NULL),
(107, 'POLIZA VEHICULO', '2024-05-11', '../view/documents/ EDWARD ANDRES POLIZA VEHICULO.pdf', 14, NULL),
(108, 'CONCEPTO SANITARIO', '2024-04-20', '../view/documents/ CONCEPTO SANITARIO WHW486.pdf', 14, NULL),
(109, 'CERTIFICADO FUMIGACION', '2024-04-20', '../view/documents/ FUMIGACION WHW486.jpg', 14, NULL),
(110, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2024-02-10', '../view/documents/ MANTENIMIENTO WHW486.pdf', 14, NULL),
(111, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO WHW744.pdf', 15, NULL),
(112, 'SOAT', '2023-11-10', '../view/documents/ SOAT WHW744.pdf', 15, NULL),
(113, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD WHW744.pdf', 15, NULL),
(114, 'TECNOMECANICA', '2023-11-29', '../view/documents/ TECNOMECANICA WHW744.pdf', 15, NULL),
(115, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION PATIO WHW744.pdf', 15, NULL),
(116, 'POLIZA VEHICULO', '2024-01-01', '../view/documents/POLIZA WHW744 2023.pdf', 15, NULL),
(117, 'CONCEPTO SANITARIO', '2024-03-13', '../view/documents/ CONCEPTO SANITARIO WHW744.pdf', 15, NULL),
(118, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO WHW744.pdf', 15, NULL),
(119, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2021-05-25', '../view/documents/ MANTENIMIENTO WHW744.pdf', 15, NULL),
(120, 'FOTO VEHICULO', NULL, '../view/documents/ FOTOGRAFÃA VEHÃCULO  SXJ263.pdf', 16, NULL),
(121, 'SOAT', '2024-05-25', '../view/documents/ SOAT SXJ263 2023.pdf', 16, NULL),
(122, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD SXJ263.pdf', 16, NULL),
(123, 'TECNOMECANICA', '2023-09-05', '../view/documents/ SXJ263 TECNOMECANICA.pdf', 16, NULL),
(124, 'POLIZA VEHICULO', '2023-09-03', '../view/documents/ SXJ263 POLIZA VEHICULO.pdf', 16, NULL),
(125, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION PATIO SXJ263.pdf', 16, NULL),
(126, 'CONCEPTO SANITARIO', '2023-06-08', '../view/documents/ CONCEPTO SANITARIO SXJ263.pdf', 16, NULL),
(127, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO SXJ263.pdf', 16, NULL),
(128, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2024-04-20', '../view/documents/ MANTENIMIENTO CARRO SXJ263.pdf', 16, NULL),
(129, 'SOAT', '2024-02-04', '../view/documents/ SOAT WHW733.pdf', 17, NULL),
(130, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD WHU733.pdf', 17, NULL),
(131, 'TECNOMECANICA', '2024-02-16', '../view/documents/ TECNOMECANICA WHU733.pdf', 17, NULL),
(132, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ POLIZA VEHICULO WHU733.pdf', 17, NULL),
(133, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION PATIO WHU733.pdf', 17, NULL),
(134, 'CONCEPTO SANITARIO', '2023-08-03', '../view/documents/ PERMISO SANITARIO WHU733.pdf', 17, NULL),
(135, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO WHU733.pdf', 17, NULL),
(136, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-08-22', '../view/documents/ MANTENIMIENTO WHU733.pdf', 17, NULL),
(137, 'FOTO VEHICULO', NULL, '../view/documents/ EQR439 FOTOS VEHICULO.pdf', 18, NULL),
(138, 'SOAT', '2023-11-15', '../view/documents/ SOAT EQR439.pdf', 18, NULL),
(139, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ EQR439  TARJETA DE PROPIEDAD.pdf', 18, NULL),
(141, 'TECNOMECANICA', '2023-12-22', '../view/documents/ tecnomecanica EQR439.pdf', 18, NULL),
(142, 'POLIZA VEHICULO', '2022-11-20', '../view/documents/ EQR439 POLIZA DE AUTOMOVIL.pdf', 18, NULL),
(143, 'REVISION PATIO', '2023-09-18', '../view/documents/ P0105 REVISION DE PATIO.pdf', 18, NULL),
(144, 'CONCEPTO SANITARIO', '2022-05-06', '../view/documents/ EQR439 CONCEPTO SANITARIO.pdf', 18, NULL),
(145, 'CERTIFICADO FUMIGACION', '2023-06-01', '../view/documents/EQR439 C FUMIGACION.pdf', 18, NULL),
(146, 'FOTO VEHICULO', NULL, '../view/documents/ FOTOS ZNL440.pdf', 19, NULL),
(147, 'SOAT', '2024-02-12', '../view/documents/ SOAT ZNL440.pdf', 19, NULL),
(148, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA DE PROPIEDAD ZNL440.pdf', 19, NULL),
(149, 'TECNOMECANICA', '2024-02-15', '../view/documents/ TECNOMECANICA ZNL440.pdf', 19, NULL),
(150, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ POLIZA ZNL440.pdf', 19, NULL),
(151, 'REVISION PATIO', '2023-09-19', '../view/documents/ REVISION DE PATIO ZNL440.pdf', 19, NULL),
(152, 'CONCEPTO SANITARIO', '2024-03-17', '../view/documents/ PERMISO SANITARIO ZNL440.pdf', 19, NULL),
(153, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO ZNL440.pdf', 19, NULL),
(154, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2022-01-05', '../view/documents/ MANTENIMIENTO ZNL440 II.pdf', 19, NULL),
(155, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO WHW837.pdf', 20, NULL),
(156, 'SOAT', '2023-12-26', '../view/documents/ WHW837 SOAT.pdf', 20, NULL),
(157, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD WHW837.pdf', 20, NULL),
(158, 'TECNOMECANICA', '2023-12-21', '../view/documents/ TECNOMECANICA WHW837.pdf', 20, NULL),
(159, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ TECNOMECANICA WHW837.pdf', 20, NULL),
(160, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION DE PATIO WHW837.pdf', 20, NULL),
(161, 'CONCEPTO SANITARIO', '2024-02-09', '../view/documents/ PERMISO SANITARIO WHW837.pdf', 20, NULL),
(162, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO WHW837.pdf', 20, NULL),
(163, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2021-05-16', '../view/documents/ MANTENIMIENTO WHW837.pdf', 20, NULL),
(164, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO TJW288.pdf', 21, NULL),
(165, 'SOAT', '2024-04-25', '../view/documents/ SOAT TJW288.pdf', 21, NULL),
(166, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD TJW288.pdf', 21, NULL),
(167, 'TECNOMECANICA', '2024-05-31', '../view/documents/ TECNOMECANICA TJW288.pdf', 21, NULL),
(168, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ POLIZA TJW288.pdf', 21, NULL),
(169, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION DE PATIO P0108.pdf', 21, NULL),
(170, 'CONCEPTO SANITARIO', '2024-02-09', '../view/documents/ PERMISO SANITARIO TJW288.pdf', 21, NULL),
(171, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO TJW288.pdf', 21, NULL),
(174, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHÃCULO SPS786.pdf', 22, NULL),
(173, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-03-25', '../view/documents/ FACTURA MANTENIMIENTO P0108.pdf', 21, NULL),
(175, 'SOAT', '2023-10-08', '../view/documents/ SOAT SPS786 HENRY OSPINA.pdf', 22, NULL),
(176, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD SPS786.pdf', 22, NULL),
(177, 'TECNOMECANICA', '2023-12-07', '../view/documents/ TECNOMECANICA SPS786.pdf', 22, NULL),
(178, 'POLIZA VEHICULO', '2024-05-30', '../view/documents/ POLIZA SPS786.pdf', 22, NULL),
(179, 'REVISION PATIO', '2023-09-18', '../view/documents/ REVISION PATIO SPS786.pdf', 22, NULL),
(180, 'CONCEPTO SANITARIO', '2023-09-21', '../view/documents/ SPS789 INSPECCION SANITARIA.pdf', 22, NULL),
(181, 'CERTIFICADO FUMIGACION', '2023-07-13', '../view/documents/ VEHICULO SPS786.pdf', 22, NULL),
(182, 'CERTIFICADO MANTENIMIENTO CORRECTIVO', '2023-08-21', '../view/documents/ SPS786 MANTENIMIENTO.pdf', 22, NULL),
(183, 'FOTO VEHICULO', NULL, '../view/documents/ FOTO VEHICULO TJW788.pdf', 23, NULL),
(184, 'SOAT', '2023-10-04', '../view/documents/ SOAT TJW788 LADY MARIN.pdf', 23, NULL),
(185, 'TARJETA DE PROPIEDAD', NULL, '../view/documents/ TARJETA PROPIEDAD TJW788.pdf', 23, NULL),
(186, 'TECNOMECANICA', '2023-11-21', '../view/documents/ TECNOMECANICA TJW788.pdf', 23, NULL),
(187, 'POLIZA VEHICULO', '2024-05-31', '../view/documents/ POLIZA TJW788.pdf', 23, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialistas`
--

CREATE TABLE `especialistas` (
  `id` int(11) NOT NULL,
  `Nombre` varchar(500) DEFAULT NULL,
  `Usuario` varchar(500) DEFAULT NULL,
  `Correo` varchar(500) DEFAULT NULL,
  `Clave` varchar(600) DEFAULT NULL,
  `Perfil` mediumblob
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `especialistas`
--

INSERT INTO `especialistas` (`id`, `Nombre`, `Usuario`, `Correo`, `Clave`, `Perfil`) VALUES
(1, 'Helder Fabio Bonilla', 'fbonilla', 'fbonilla@alqueria.com.co', 'Distribucion123', NULL),
(2, 'Eucardo Ibarra', 'eibarrag', 'eibarrag@alqueria.com.co', 'Proposito227', NULL),
(3, 'Camilo Patiño', 'cpatinog', 'cpatinog@alqueria.com.co', 'Alqueria2023', NULL),
(4, 'David Asia Bonilla', 'dassiab', 'dassiab@alqueria.com.co', 'Logistica3.', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listadocs`
--

CREATE TABLE `listadocs` (
  `id_nomdoc` int(11) NOT NULL,
  `nom_doc` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `listadocs`
--

INSERT INTO `listadocs` (`id_nomdoc`, `nom_doc`) VALUES
(1, 'TECNOMECANICA'),
(2, 'POLIZA VEHICULO'),
(3, 'POLIZA VIDA'),
(4, 'TARJETA DE PROPIEDAD'),
(5, 'FOTO VEHICULO'),
(6, 'CEDULA CONTRATISTA'),
(7, 'CERTIFICACION BANCARIA'),
(8, 'ESTUDIO DE SEGURIDAD'),
(9, 'DECLARACION CONFLICTO DE INTERESES'),
(10, 'CEDULA CODEUDOR'),
(11, 'CERTIFICADO LIBERTAD INMUEBLE'),
(12, 'DOCUMENTOS LEGALES'),
(13, 'CERTIFICADO MANTENIMIENTO CORRECTIVO'),
(14, 'SOAT'),
(15, 'CONCEPTO SANITARIO'),
(16, 'RUT'),
(17, 'REVISION PATIO'),
(18, 'HOJA DE VIDA'),
(19, 'VALIDACION SIMIT'),
(20, 'LICENCIA DE CONDUCCION'),
(21, 'ANTECEDENTES DISCIPLINARIOS'),
(22, 'ANTECEDENTES JUDICIALES'),
(23, 'CERTIFICADO FUMIGACION'),
(24, 'CERTIFICADO MANIPULADOR ALIMENTOS'),
(25, 'SSMA'),
(26, 'EXAMEN MEDICO MANIPULADOR'),
(27, 'CERTIFICADO MEDICO GENERAL'),
(28, 'CARNET DE LA COMPAÑIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rutas`
--

CREATE TABLE `rutas` (
  `id_ruta` int(11) NOT NULL,
  `nombre_ruta` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rutas`
--

INSERT INTO `rutas` (`id_ruta`, `nombre_ruta`) VALUES
(1, 'P0204'),
(2, 'P0205'),
(3, 'P0206'),
(4, 'P0207'),
(5, 'P0208'),
(6, 'P0209'),
(7, 'P0210'),
(8, 'P0211'),
(9, 'P0212'),
(10, 'P0213'),
(11, 'P0216'),
(12, 'P0217'),
(13, 'P0225'),
(14, 'P0228'),
(15, 'P0229'),
(16, 'P0230'),
(17, 'P0231'),
(18, 'P0236'),
(19, 'P0201'),
(20, 'P0202'),
(21, 'P0203'),
(22, 'P0206'),
(23, 'P0214'),
(24, 'P0215'),
(25, 'P0218'),
(26, 'P0220'),
(27, 'P0221'),
(28, 'P0222'),
(29, 'P0223'),
(30, 'P0224'),
(31, 'P0232'),
(32, 'P0233'),
(33, 'P0241'),
(34, 'CROSSJAM'),
(35, 'NORTEVAL'),
(36, 'P0100'),
(37, 'P0101'),
(38, 'P0102'),
(39, 'P0104'),
(40, 'P0105'),
(41, 'P0106'),
(42, 'P0107'),
(43, 'P0108'),
(44, 'P0110'),
(45, 'P0111'),
(46, 'P0116'),
(47, 'P0302'),
(48, 'P0303'),
(49, 'P0409'),
(50, 'P0410'),
(51, 'SEVILLA'),
(52, 'SM BUENAV'),
(53, 'SEVILLA'),
(54, 'CROSSPAS'),
(55, 'CROSSPOP'),
(56, 'P0117'),
(57, 'P0253'),
(58, 'P0254'),
(59, 'P0255'),
(60, 'TULUA AU'),
(61, 'SM PASTO'),
(62, 'P0240'),
(63, 'RELEVOS'),
(64, 'P0256'),
(65, 'YUMBO');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contratistas`
--
ALTER TABLE `contratistas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_ruta` (`id_ruta`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id_documento`),
  ADD KEY `id` (`id`),
  ADD KEY `id_nomdoc` (`id_nomdoc`);

--
-- Indices de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `listadocs`
--
ALTER TABLE `listadocs`
  ADD PRIMARY KEY (`id_nomdoc`);

--
-- Indices de la tabla `rutas`
--
ALTER TABLE `rutas`
  ADD PRIMARY KEY (`id_ruta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contratistas`
--
ALTER TABLE `contratistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id_documento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT de la tabla `especialistas`
--
ALTER TABLE `especialistas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `listadocs`
--
ALTER TABLE `listadocs`
  MODIFY `id_nomdoc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `rutas`
--
ALTER TABLE `rutas`
  MODIFY `id_ruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
