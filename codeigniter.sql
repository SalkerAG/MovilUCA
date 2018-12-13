-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 12, 2018 at 04:40 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `comentario`
--

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE IF NOT EXISTS `comentario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_movil` int(11) NOT NULL,
  `com` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `id_usuario` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `comentario`
--

INSERT INTO `comentario` (`id`, `id_movil`, `com`, `fecha`, `id_usuario`) VALUES
(1, 1, '1', '2018-11-25 13:55:48', 2),
(2, 2, 's', '2018-11-25 13:59:05', 1),
(3, 2, 's', '2018-11-25 13:59:28', 1),
(4, 2, 's', '2018-11-25 14:00:15', 2),
(5, 1, '2', '2018-11-25 14:02:20', 1),
(41, 1, 'Hola que tal esto es un a prueba', '2018-12-12 16:19:27', 2),
(39, 2, 's', '2018-12-01 19:08:52', 1),
(38, 6, 'Prueba 1 2 3', '2018-12-01 18:18:20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(32) NOT NULL,
  `id_movil` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `favoritos`
--

INSERT INTO `favoritos` (`id`, `id_usuario`, `id_movil`) VALUES
(1, 2, 4),
(2, 2, 5),
(3, 2, 7),
(4, 2, 3),
(14, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `movil`
--

DROP TABLE IF EXISTS `movil`;
CREATE TABLE IF NOT EXISTS `movil` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `marca` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `modelo` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `fecha_lanzamiento` date NOT NULL,
  `disponibilidad` tinyint(4) NOT NULL DEFAULT '0',
  `foto` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `num_reseñas` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `movil`
--

INSERT INTO `movil` (`id`, `marca`, `modelo`, `fecha_lanzamiento`, `disponibilidad`, `foto`, `num_reseñas`) VALUES
(1, 'BQ', 'Aquaris X', '2018-11-14', 1, 'bqx.png', 6),
(2, 'Apple', 'IPhone X', '2018-06-05', 0, 'IphoneX.png', 2),
(3, 'Samsung', 'Galaxy S6 Edge', '2017-12-18', 1, 's6.png', 3),
(4, 'Xiaomi', 'MI A2', '2018-04-18', 1, 'xiaomiA2.png', 2),
(5, 'Huawei', 'P20 Lite', '2018-04-07', 0, 'HuaweiP20.png', 2),
(6, 'Honor', '10', '2018-07-17', 1, 'Honor10.png', 3),
(7, 'Samsung', 'Galaxy J6', '2018-07-09', 1, 'j6.png', 2),
(8, 'Xiaomi', 'MI A1', '2018-03-07', 0, 'xiaomiA1.png', 5),
(9, 'Motorola', 'One', '2018-09-18', 1, 'one.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `foto` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `noticia`
--

INSERT INTO `noticia` (`foto`, `descrip`, `url`) VALUES
('noticia2.jpg', '5 móviles por menos de 150 euros que merecen la pena para Navidad', 'https://elandroidelibre.elespanol.com/2018/12/5-moviles-por-menos-de-150-euros-merecen-la-pena-navidad.html'),
('noticia1.jpg', 'Consejos para alargar la vida útil de los móviles', 'https://www.europapress.es/portaltic/gadgets/noticia-consejos-alargar-vida-util-moviles-20181209112932.html'),
('noticia3.jpg', 'Huawei domina las redes y los móviles españoles', 'https://elpais.com/internacional/2018/12/09/actualidad/1544372596_492738.html');

-- --------------------------------------------------------

--
-- Table structure for table `precio`
--

DROP TABLE IF EXISTS `precio`;
CREATE TABLE IF NOT EXISTS `precio` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_movil` int(32) NOT NULL,
  `id_tienda` int(32) NOT NULL,
  `precio` double NOT NULL,
  `tienda` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_movil` (`id_movil`),
  KEY `id_tienda` (`id_tienda`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `precio`
--

INSERT INTO `precio` (`id`, `id_movil`, `id_tienda`, `precio`, `tienda`, `url`) VALUES
(1, 1, 1, 299.99, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-bq-aquaris-x-pro-5-2-full-hd-snapdragon-626-4-gb-ram-64-gb-4g-12-mp-1363809.html'),
(2, 2, 1, 929, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-iphone-x-64-gb-super-retina-de-5-8-12-mpx-red-4g-lte-gris-espacial-1382453.html'),
(3, 1, 1, 280.45, 'Amazon', 'https://www.amazon.es/Aquaris-Dual-SIM-64GB-Black/dp/B0745ZRXMN/ref=sr_1_5?s=electronics&ie=UTF8&qid=1544628139&sr=1-5&keywords=bq+aquiaris+x'),
(4, 3, 1, 207.33, 'Amazon', 'https://www.amazon.es/Samsung-Galaxy-Edge-Smartphone-Quad-Core/dp/B00TX5PCX8/ref=sr_1_2?s=electronics&ie=UTF8&qid=1544628407&sr=1-2&keywords=samsung+galaxy+s6+edge'),
(5, 4, 1, 209.95, 'Amazon', 'https://www.amazon.es/Xiaomi-MI-A2-Smartphone-importada/dp/B07FMPVBQR/ref=sr_1_1?s=electronics&ie=UTF8&qid=1544628455&sr=1-1&keywords=xiaomi+mi+a2'),
(6, 4, 1, 258, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-xiaomi-mi-a2-5-99-octa-core-4-gb-ram-64-gb-dorado-1427298.html'),
(7, 5, 1, 259, 'Amazon', 'https://www.amazon.es/Huawei-P20-Lite-Memoria-Pantalla/dp/B07BHDC9V6/ref=sr_1_1?s=electronics&ie=UTF8&qid=1544628520&sr=1-1&keywords=huawei+p20+lite'),
(8, 5, 1, 279, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-huawei-p20-lite-fullview-5-84-full-hd-kirin-659-4-gb-ram-64-gb-dual-c%C3%A1mara-azul-1401774.html'),
(9, 2, 1, 856.32, 'Amazon', 'https://www.amazon.es/Apple-iPhone-%C3%BAnica-256GB-Plata/dp/B075R9SDZ9/ref=sr_1_2_sspa?s=electronics&ie=UTF8&qid=1544628308&sr=1-2-spons&keywords=iphone%2Bx&th=1'),
(10, 6, 1, 339, 'Amazon', 'https://www.amazon.es/Honor-10-Smartphone-pantalla-desbloqueo/dp/B07CXHZ2KH/ref=sr_1_1?s=electronics&ie=UTF8&qid=1544628577&sr=1-1&keywords=honor+10'),
(11, 6, 1, 399, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-honor-10-5-84-128-gb-rom-4-gb-ram-24-mp-16-mp-dual-ia-azul-1418694.html'),
(12, 7, 1, 171.99, 'Amazon', 'https://www.amazon.es/Samsung-Galaxy-J6-Smartphone-bluetooth/dp/B07DXNX7X4/ref=sr_1_5?s=electronics&ie=UTF8&qid=1544628666&sr=1-5&keywords=samsung+galaxy+j6'),
(13, 7, 1, 219, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-samsung-galaxy-j6-6-true-hd-infinity-3-gb-ram-32-gb-dual-c%C3%A1mara-13-5-mp-negro-1433250.html'),
(14, 8, 1, 172, 'Amazon', 'https://www.amazon.es/Xiaomi-Mi-A1-Smartphone-Snapdragon/dp/B077Y4NVNW/ref=sr_1_5?s=electronics&ie=UTF8&qid=1544628716&sr=1-5&keywords=xiaomi+mi+a1'),
(15, 9, 1, 269, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-motorola-one-5-9-hd-android-one-8-x-2-0ghz-4-gb-ram-64-gb-13-8-mp-negro-1434013.html');

-- --------------------------------------------------------

--
-- Table structure for table `prestaciones`
--

DROP TABLE IF EXISTS `prestaciones`;
CREATE TABLE IF NOT EXISTS `prestaciones` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_movil` int(32) NOT NULL,
  `pantalla` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `procesador` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `velocidad` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `ram` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `memoria` int(32) NOT NULL,
  `camara` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `peso` int(32) NOT NULL,
  `version` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `bateria` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_movil` (`id_movil`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `prestaciones`
--

INSERT INTO `prestaciones` (`id`, `id_movil`, `pantalla`, `procesador`, `velocidad`, `ram`, `memoria`, `camara`, `peso`, `version`, `bateria`) VALUES
(1, 1, '5.2\"', 'Octa-core', '2.2 GHz', '4 Gb', 64, '12 Mpx', 159, 'Android 7.1.1', 3100),
(2, 2, '5.8\"', 'Apple A11', '(6 núcleos)', '3 Gb', 64, '12 Mpx', 177, 'iOS 12', 3100),
(3, 3, '5.1\"', 'Quad-core', '2.1GHz', '3 Gb', 32, '16 Mpx', 132, 'Android 5.0', 2600),
(4, 4, '5.99\"', 'Quad-core', '2.2GHz', '4 Gb', 64, '16 Mpx', 168, 'Android 7.7', 2600),
(5, 5, '5.8\"', 'Quad-core', '2.36 GHz', '4 Gb', 64, '16 Mpx', 145, 'Android 8.0', 3000),
(6, 6, '5.84\"', 'Octa-core', '2.3GHz', '4 Gb', 64, '16+24 Mpx', 154, 'Android 8.0', 3400),
(7, 7, '5.6\"', 'Octa-core', '1.6GHz', '3 Gb', 32, '13 Mpx', 154, 'Android 8.0', 3400),
(8, 8, '5.5\"', 'Quad-core', '2Ghz', '4 Gb', 32, '12 Mpx', 150, 'Android 7.7', 3400),
(9, 9, '5.9\"', 'Quad-core', '2Ghz', '4 Gb', 64, '13 Mpx', 150, 'Android 8.0', 3400);

-- --------------------------------------------------------

--
-- Table structure for table `puntuacion_reseña`
--

DROP TABLE IF EXISTS `puntuacion_reseña`;
CREATE TABLE IF NOT EXISTS `puntuacion_reseña` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(32) NOT NULL,
  `id_reseña` int(32) NOT NULL,
  `puntuacion` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reseña`
--

DROP TABLE IF EXISTS `reseña`;
CREATE TABLE IF NOT EXISTS `reseña` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(32) NOT NULL,
  `id_movil` int(32) NOT NULL,
  `rendimiento` int(32) NOT NULL,
  `bateria` int(32) NOT NULL,
  `diseño` int(32) NOT NULL,
  `pantalla` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `reseña`
--

INSERT INTO `reseña` (`id`, `id_usuario`, `id_movil`, `rendimiento`, `bateria`, `diseño`, `pantalla`) VALUES
(1, 1, 1, 4, 3, 4, 5),
(2, 2, 1, 3, 4, 3, 4),
(3, 1, 2, 5, 4, 5, 4),
(4, 3, 2, 4, 5, 3, 4),
(5, 1, 3, 5, 5, 5, 5),
(6, 3, 3, 5, 5, 5, 5),
(7, 2, 4, 3, 2, 3, 1),
(8, 3, 4, 3, 3, 2, 1),
(9, 2, 5, 3, 1, 3, 4),
(10, 1, 5, 1, 4, 2, 5),
(11, 3, 6, 4, 4, 4, 4),
(12, 2, 6, 5, 5, 5, 5),
(13, 1, 7, 3, 3, 3, 3),
(14, 2, 7, 3, 3, 3, 3),
(15, 2, 8, 5, 5, 5, 5),
(16, 3, 8, 4, 4, 4, 3),
(17, 2, 9, 2, 2, 2, 2),
(18, 1, 9, 2, 2, 2, 2),
(23, 2, 1, 1, 1, 1, 1),
(26, 2, 8, 5, 5, 5, 5),
(25, 2, 6, 2, 2, 2, 2),
(24, 2, 3, 2, 3, 4, 2),
(31, 2, 1, 5, 5, 5, 5),
(32, 2, 1, 5, 5, 5, 5),
(33, 2, 1, 5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `reseña_tienda`
--

DROP TABLE IF EXISTS `reseña_tienda`;
CREATE TABLE IF NOT EXISTS `reseña_tienda` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(32) NOT NULL,
  `id_tienda` int(32) NOT NULL,
  `puntuacion` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tienda`
--

DROP TABLE IF EXISTS `tienda`;
CREATE TABLE IF NOT EXISTS `tienda` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `esFisica` tinyint(4) NOT NULL DEFAULT '0',
  `dominio` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `id_puntuacion` int(32) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_puntuacion` (`id_puntuacion`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `tienda`
--

INSERT INTO `tienda` (`id`, `nombre`, `esFisica`, `dominio`, `id_puntuacion`) VALUES
(1, 'Media Mark', 1, 'Wut', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `correo` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `codigo` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `estado` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `correo`, `usuario`, `pass`, `codigo`, `estado`) VALUES
(1, 'admin', 'admin@admin.es', 'admin', 'admin', 'administrador', 1),
(2, 'Ernesto', 'ernesto@ernesto.es', 'Ernesto', '1234', 'UsuarioErnesto', 1),
(10, '2', 'ernesto@gmail.com', '322', '22', '123456', 0),
(9, '3', 'ernesto@gmail.com', '323', '3', '123456', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
