-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 15-12-2018 a las 20:12:14
-- Versión del servidor: 5.7.23
-- Versión de PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `codeigniter`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
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
-- Volcado de datos para la tabla `comentario`
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
-- Estructura de tabla para la tabla `favoritos`
--

DROP TABLE IF EXISTS `favoritos`;
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(32) NOT NULL,
  `id_movil` int(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `favoritos`
--

INSERT INTO `favoritos` (`id`, `id_usuario`, `id_movil`) VALUES
(1, 2, 4),
(2, 2, 5),
(3, 2, 7),
(4, 2, 3),
(14, 2, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movil`
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `movil`
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
(9, 'Motorola', 'One', '2018-09-18', 1, 'one.png', 2),
(10, 'Xiaomi', 'Pocophone F1', '2018-11-13', 1, 'pocophone.png', 0),
(11, 'Xiaomi', 'Mi8', '2018-08-14', 1, 'mi8.png', 1),
(12, 'OnePlus', '6T', '2018-10-10', 1, 'OnePlus6t.png', 0),
(13, 'Huawei', 'Honor 8x', '2018-09-20', 1, 'honor8x.png', 0),
(14, 'Xiaomi', 'Note 6 Pro', '2018-09-10', 1, 'minote6.png', 0),
(15, 'Huawei', 'Honor 10', '0000-00-00', 1, 'HHonor10.png', 0),
(16, 'Xiaomi', 'Mi8 Lite', '2018-09-01', 1, 'mi8l.png', 0),
(17, 'Xiaomi', 'Note 5', '2018-03-10', 1, 'note5.png', 0),
(18, 'Xiaomi', 'Mi A2 Lite', '2018-07-10', 1, 'A2Lite.png', 0),
(21, 'Xiaomi', 'Mi Mix 2s', '2018-03-21', 1, 'Mix2s.png', 0),
(23, 'Xiaomi', 'Mi Max 3', '2018-07-22', 1, 'Max3.png', 0),
(24, 'Xiaomi', 'Prueba', '2018-12-12', 0, 'A2.jpg', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

DROP TABLE IF EXISTS `noticia`;
CREATE TABLE IF NOT EXISTS `noticia` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `foto` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `url` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `foto`, `descrip`, `url`) VALUES
(1, 'noticia2.jpg', '5 móviles por menos de 150 euros que merecen la pena para Navidad', 'https://elandroidelibre.elespanol.com/2018/12/5-moviles-por-menos-de-150-euros-merecen-la-pena-navidad.html'),
(2, 'noticia1.jpg', 'Consejos para alargar la vida útil de los móviles', 'https://www.europapress.es/portaltic/gadgets/noticia-consejos-alargar-vida-util-moviles-20181209112932.html'),
(3, 'noticia3.jpg', 'Huawei domina las redes y los móviles españoles', 'https://elpais.com/internacional/2018/12/09/actualidad/1544372596_492738.html');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
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
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `precio`
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
(15, 9, 1, 269, 'Media Mark', 'https://www.mediamarkt.es/es/product/_m%C3%B3vil-motorola-one-5-9-hd-android-one-8-x-2-0ghz-4-gb-ram-64-gb-13-8-mp-negro-1434013.html'),
(16, 10, 1, 311.7, 'Amazon', 'https://www.amazon.es/Xiaomi-Pocophone-Dual-SIM-Versión-importada/dp/B07GTD2XDF'),
(17, 11, 1, 499.5, 'Amazon', 'https://www.amazon.es/Xiaomi-Dual-128GB-Azul-Free/dp/B07FT4P2CP'),
(18, 12, 1, 549, 'PcComponentes', 'https://www.pccomponentes.com/oneplus-6t-6gb-128gb-mirror-black-libre?utm_campaign=afiliados&utm_source=effi-1395053310'),
(19, 13, 1, 249, 'PcComponentes', 'https://www.pccomponentes.com/honor-8x-4-64gb-dual-sim-azul-libre?utm_campaign=afiliados&utm_source=effi-1395053310'),
(20, 14, 1, 185, 'Tienda Xiaomi', 'https://www.tienda-xiaomi.com/xiaomi-redmi-note-6-pro-3-32gb-negro-global/?utm_campaign=kimovil_affiliated_traffic&utm_medium=referral&utm_source=kimovil.com&utm_content=xiaomi-redmi-note-6-pro'),
(21, 15, 1, 339, 'Amazon', 'https://www.amazon.es/Honor-10-Smartphone-pantalla-desbloqueo/dp/B07CXHZ2KH'),
(22, 16, 1, 241, 'Amazon', 'https://www.amazon.es/Xiaomi-Lite-6-26-Doble-Negro/dp/B07JMPGNHK/ref=olp_product_details?_encoding=UTF8&me='),
(23, 17, 1, 182, 'Tienda Xiaomi', 'https://es.aliexpress.com/item/Versi-n-Espa-ola-Smartphone-Xiaomi-Redmi-Note-5-Memoria-interna-de-32-GB-RAM/32874360191.html?cv=47843&af=329643&aff_platform=aaf&mall_affr=pr3&cpt=1544866481583&afref=https://www.kimovil.com/to/9SMTZ9&sk=VnYZvQVf&aff_trace_k'),
(24, 18, 1, 163, 'Amazon', 'https://www.amazon.es/Xiaomi-Mi-A2-Lite-32GB/dp/B07HF5VM64/ref=olp_product_details?_encoding=UTF8&me='),
(25, 4, 1, 239, 'Amazon', 'https://www.amazon.es/Xiaomi-MI-A2-Smartphone-Snapdragon/dp/B07GDSFZ25/ref=olp_product_details?_encoding=UTF8&me='),
(26, 4, 1, 239, 'Amazon', 'https://www.amazon.es/Xiaomi-MI-A2-Smartphone-Snapdragon/dp/B07GDSFZ25/ref=olp_product_details?_encoding=UTF8&me='),
(27, 21, 1, 367, 'Amazon', 'https://www.amazon.es/Xiaomi-5-99-Doble-3400mAh-Blanco/dp/B07D4NBDM9/ref=sr_1_1?s=music&ie=UTF8&qid=1544867222&sr=8-1&keywords=Xiaomi+Mi+Mix+2s'),
(28, 22, 1, 629, 'PowerPlanet', 'https://www.powerplanetonline.com/mi_mix_3'),
(29, 23, 1, 250, 'Amazon', 'https://www.amazon.es/Xiaomi-Mi-MAX-Smartphone-Memoria/dp/B07GVRS5FV/ref=olp_product_details?_encoding=UTF8&me='),
(30, 24, 1, 339, 'Amazon', 'https://www.mediamarkt.es/es/product/_móvil-apple-iphone-xr-64-gb-liquid-retina-hd-6-1-a12-bionic-12-mp-f-1-8-hdr-4k-ip67-rojo-1433011.html?gclid=CjwKCAiAo8jgBRAVEiwAJUXKqMeIaEZWPiqupc7Q6HNB_Fu6aCJGfC66p2W7vkg_lU7WkZQyVkCErBoCwPoQAvD_BwE&gclsrc=aw.ds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestaciones`
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
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `prestaciones`
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
(9, 9, '5.9\"', 'Quad-core', '2Ghz', '4 Gb', 64, '13 Mpx', 150, 'Android 8.0', 3400),
(10, 10, '6.18', 'Octa-core', '2.8GHz', '4 Gb', 64, '12 Mpx', 182, 'Android 8.0', 4000),
(11, 11, '6.21', 'Octa-core', '2.8GHz', '6 Gb', 128, '12 Mpx', 175, 'Android 8.0', 3400),
(12, 12, '6.41', 'Octa-core', '2.8GHz', '6 Gb', 128, '16 Mpx', 185, 'Android 8.0', 3700),
(13, 13, '6.5', 'Octa-core', '2.2 GHz', '4 Gb', 64, '20 Mpx', 175, 'Android 7.1.1', 3700),
(14, 14, '6.26', 'Octa-core', '1.8GHz', '3 Gb', 32, '12 Mpx', 176, 'Android 7.7', 4000),
(15, 15, '5.84', 'Octa-core', '2.8GHz', '6 Gb', 64, '16 Mpx', 153, 'Android 8.0', 3400),
(16, 16, '6.26', 'Octa-core', '2.8GHz', '4 Gb', 64, '12 Mpx', 169, 'Android 8.0', 3300),
(17, 17, '5.99', 'Octa-core', '1.8GHz', '3 Gb', 32, '12 Mpx', 180, 'Android 8.0', 4000),
(18, 18, '5.84', 'Octa-core', '2Ghz', '3 Gb', 32, '12 Mpx', 178, 'Android 8.0', 4000),
(19, 4, '5.99', 'Octa-core', '2.2 GHz', '4 Gb', 64, '12 Mpx', 166, 'Android 9', 3010),
(20, 4, '5.99', 'Octa-core', '2.2 GHz', '4 Gb', 64, '12 Mpx', 166, 'Android 9', 3010),
(21, 21, '5.99', 'Octa-core', '2.8GHz', '6 Gb', 64, '12 Mpx', 194, 'Android 8.0', 3400),
(22, 22, '6.39', 'Octa-core', '2.8GHz', '6 Gb', 128, '12 Mpx', 218, 'Android 9', 3200),
(23, 23, '6.9', 'Octa-core', '1.8GHz', '4 Gb', 64, '12 Mpx', 221, 'Android 8.0', 5500),
(24, 24, '5.8', 'Apple A11', '2.2GHz', '6 Gb', 128, '16 Mpx', 175, 'iOS 12', 3010);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion_reseña`
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
-- Estructura de tabla para la tabla `reseña`
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
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `reseña`
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
(33, 2, 1, 5, 5, 5, 5),
(34, 1, 10, 1, 1, 1, 1),
(38, 1, 11, 5, 3, 5, 2),
(36, 1, 12, 1, 1, 1, 1),
(37, 1, 13, 1, 1, 1, 1),
(39, 1, 14, 1, 1, 1, 1),
(40, 1, 15, 1, 1, 1, 1),
(41, 1, 16, 1, 1, 1, 1),
(42, 1, 17, 1, 1, 1, 1),
(43, 1, 18, 1, 1, 1, 1),
(44, 1, 4, 1, 1, 1, 1),
(45, 1, 4, 1, 1, 1, 1),
(46, 1, 21, 1, 1, 1, 1),
(47, 1, 22, 1, 1, 1, 1),
(48, 1, 23, 1, 1, 1, 1),
(49, 1, 24, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reseña_tienda`
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
-- Estructura de tabla para la tabla `tienda`
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
-- Volcado de datos para la tabla `tienda`
--

INSERT INTO `tienda` (`id`, `nombre`, `esFisica`, `dominio`, `id_puntuacion`) VALUES
(1, 'Media Mark', 1, 'Wut', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
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
-- Volcado de datos para la tabla `usuario`
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
