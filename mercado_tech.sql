-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-07-2018 a las 00:08:04
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mercado_tech`
--
CREATE DATABASE IF NOT EXISTS `mercado_tech` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mercado_tech`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(10) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Precio` decimal(6,2) NOT NULL,
  `Marca` int(10) NOT NULL,
  `Categoria` int(10) NOT NULL,
  `Detalle` varchar(60) NOT NULL,
  `Stock` int(6) NOT NULL,
  `Imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `Nombre`, `Precio`, `Marca`, `Categoria`, `Detalle`, `Stock`, `Imagen`) VALUES
(1, 'iPhone 6', '499.99', 1, 1, '16GB', 500, 'https://image.ibb.co/j8Xx8T/P001.jpg'),
(2, 'iPad Pro', '599.99', 1, 1, '32GB', 300, 'https://image.ibb.co/hMHm2o/P002.jpg'),
(3, 'Nexus 7', '299.99', 1, 1, '32GB', 300, 'https://image.ibb.co/jQVTF8/P003.jpg'),
(4, 'Galaxy S7', '459.90', 1, 1, '64GB', 650, 'https://image.ibb.co/dOjoF8/P004.jpg'),
(5, 'Moto G', '489.99', 1, 1, '8GB', 750, 'https://image.ibb.co/jgkH8T/P005.jpg'),
(6, 'L40', '199.69', 1, 1, '24GB', 350, 'https://image.ibb.co/kObPoT/P006.jpg'),
(7, 'Apple Watch', '299.00', 1, 1, '19', 40, 'https://image.ibb.co/mHT4oT/P007.jpg'),
(8, 'HP Mini 110', '2399.00', 1, 1, '22', 30, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(9, 'TV LCD Modelo LC813H', '2999.00', 1, 1, '32', 25, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(10, 'TV LCD Modelo 26LG30R', '2999.00', 1, 1, '26', 25, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(11, 'TV LCD Modelo CDH-L26S02', '3099.00', 1, 1, '26', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(12, 'TV LCD Modelo PL3219', '3399.00', 1, 1, '32', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(13, 'CPU LE1250DVD2GB160VS', '2199.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(14, 'CPU A64X246DV2G160VBOF', '2499.00', 1, 1, 'Sin detalle', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(15, 'CPU E5200DVDR2GB320VB', '2699.00', 1, 1, 'Sin detalle', 5, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(16, 'CPU SG3308LA', '3099.00', 1, 1, 'Sin detalle', 5, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(17, 'Impresora T23', '219.00', 1, 1, 'Sin detalle', 18, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(18, 'Impresora DJ-6940', '349.00', 1, 1, 'Sin detalle', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(19, 'Impresora T33', '399.00', 1, 1, 'Sin detalle', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(20, 'Impresora K5400', '499.00', 1, 1, 'Sin detalle', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(21, 'Home Cinema SPH70', '319.00', 1, 1, 'Sin detalle', 0, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(22, 'Home Cinema AMX115', '419.00', 1, 1, 'Sin detalle', 0, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(23, 'Home Cinema HT E 860', '599.00', 1, 1, 'Sin detalle', 0, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(24, 'Home Cinema DC-T990', '759.00', 1, 1, 'Sin detalle', 5, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(25, 'Home Cinema HT-1105U', '829.00', 1, 1, 'Sin detalle', 18, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(26, 'Home Cinema HT304SL-A2', '949.00', 1, 1, 'Sin detalle', 6, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(27, 'Home Cinema HT-Z110', '999.00', 1, 1, 'Sin detalle', 22, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(28, 'Home Cinema HTS3011/55', '1099.00', 1, 1, 'Sin detalle', 18, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(29, 'Home Cinema HT503SH', '1299.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(30, 'Home Cinema HT503SH-AM', '1299.00', 1, 1, 'Sin detalle', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(31, 'Home Cinema HT-IS10', '1499.00', 1, 1, 'Sin detalle', 7, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(32, 'Home Cinema HTS3365/55', '1599.00', 1, 1, 'Sin detalle', 5, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(33, 'Radio Port RP 299', '49.00', 1, 1, 'Sin detalle', 5, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(34, 'Radio DX-365', '79.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(35, 'Radio ICF-S10MK2/SCE', '79.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(36, 'Radio ICF-18', '99.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(37, 'Radio ICF-303/304 AM-FM', '129.00', 1, 1, 'Sin detalle', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(38, 'Radio SRF-59/SC E', '129.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(39, 'Notebook C2D2VB250WC14', '3699.00', 1, 1, 'Sin detalle', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(40, 'Notebook CQ40-300', '2999.00', 1, 1, 'Sin detalle', 9, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(41, 'Notebook DV2-1010', '3999.00', 1, 1, 'Sin detalle', 7, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(42, 'Notebook DV4-1212', '4199.00', 1, 1, 'Sin detalle', 9, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(43, 'Notebook DV5-1310', '4999.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(44, 'Telefono DECT1221S', '169.00', 1, 1, 'Inalambrico', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(45, 'Telefono CD1401B', '169.00', 1, 1, 'Inalambrico', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(46, 'Telefono CD2401S', '239.00', 1, 1, 'Inalambrico', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(47, 'Telefono CD1302S', '249.00', 1, 1, 'Inalambrico', 8, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(48, 'Telefono HNS-3300', '69.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(49, 'Lavarropa 7000', '1679.00', 1, 1, '7kg', 7, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(50, 'Lavarropa 7500 T750', '1839.00', 1, 1, '7,5kg', 4, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(51, 'Lavarropa ACQ7500 GRAFT750', '1939.00', 1, 1, '7,5kg', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(52, 'Lavarropa WF-T1202TP', '2449.00', 1, 1, '12kg', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(53, 'Lavarropa WF-T1205TP Titanium', '2499.00', 1, 1, '12kg', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(54, 'Camara Digital C813', '549.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(55, 'Camara Digital VPCS-870EX', '579.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(56, 'Camara Digital C913', '599.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(57, 'Camara Digital 760', '649.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(58, 'Camara Digital ES10', '749.00', 1, 1, 'Sin detalle', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(59, 'Camara Digital ES15', '799.00', 1, 1, 'Sin detalle', 40, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(60, 'Camara Video DCR-DVD650', '2749.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(61, 'Camara Video DCR-DVD810', '2999.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(62, 'Calefactor TB 2400 GN', '459.00', 1, 1, 'Sin detalle', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(63, 'Calefactor TB 3000 GN', '699.00', 1, 1, 'Sin detalle', 12, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(64, 'Calefactor TB 5000 GN', '1999.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(65, 'Aire Acondicionador SP TS-C096', '1999.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(66, 'Aire Acondicionador SP TS-C096', '1999.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(67, 'Aire Acondicionador SP TS-C126', '2249.00', 1, 1, 'Sin detalle', 10, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(68, 'Aire Acondicionador SP TS-C186', '3049.00', 1, 1, 'Sin detalle', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(69, 'Aire Acondicionador SP LS-C186', '3349.00', 1, 1, 'Sin detalle', 20, 'https://image.ibb.co/hK2VTT/sin_foto.jpg'),
(70, 'Aire Acondicionador SP WSX09CG', '1599.00', 1, 1, 'Sin detalle', 15, 'https://image.ibb.co/hK2VTT/sin_foto.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
