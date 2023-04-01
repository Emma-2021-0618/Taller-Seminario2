-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-03-2023 a las 20:51:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bancos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblbanco`
--

CREATE TABLE `tblbanco` (
  `bancoid` int(11) NOT NULL,
  `banconombre` varchar(40) NOT NULL,
  `dir` varchar(60) NOT NULL,
  `cantidadsucursales` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblbanco`
--

INSERT INTO `tblbanco` (`bancoid`, `banconombre`, `dir`, `cantidadsucursales`) VALUES
(1, 'BANCO POPULAR', 'AV. JHON F. KENNEDY', 300),
(2, 'BANRESERVAS', '27 DE FEBRERO', 400);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblcajeros`
--

CREATE TABLE `tblcajeros` (
  `Cajeroid` int(11) NOT NULL,
  `cajeronombre` varchar(40) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `ciudadid` int(11) NOT NULL,
  `ubicacion` varchar(40) NOT NULL,
  `fechainst` int(11) NOT NULL,
  `bancoid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblcajeros`
--

INSERT INTO `tblcajeros` (`Cajeroid`, `cajeronombre`, `modelo`, `ciudadid`, `ubicacion`, `fechainst`, `bancoid`) VALUES
(1, 'cajero unapec', 'CA01', 1, '1', 0, 1),
(2, 'cajero unapec', 'CA02', 1, '1', 0, 1),
(3, 'CAJERO UCE', 'CA01', 3, 'UNIVERSIDAD CENTRAL DEL ESTE', 0, 1),
(4, 'CAJERO JUMBO', 'CA02', 3, 'CENTRO NACINAL DEL ESTE', 0, 1),
(5, 'CAJERO IBERIA', 'CA01', 3, 'ALMACENES IBERIA', 0, 1),
(6, 'CAJERO JUMBO', 'CA02', 3, 'CENTRO NACINAL DEL ESTE', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblciudad`
--

CREATE TABLE `tblciudad` (
  `ciudadid` int(11) NOT NULL,
  `ciudad` varchar(50) NOT NULL,
  `fechac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblciudad`
--

INSERT INTO `tblciudad` (`ciudadid`, `ciudad`, `fechac`) VALUES
(1, 'SANTO DOMINGO', '2022-10-22'),
(2, 'SANTO DOMINGO ESTE', '2022-10-22'),
(3, 'SAN PEDRO DE MACORIS', '2022-10-19'),
(4, 'LA ROMANA', '2022-10-19'),
(5, 'SANTIAGO DE LOS CABALLEROS', '2022-10-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblclientes`
--

CREATE TABLE `tblclientes` (
  `clienteid` int(11) NOT NULL,
  `nombres` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` bigint(12) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fcreado` date NOT NULL,
  `factalizado` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tblclientes`
--

INSERT INTO `tblclientes` (`clienteid`, `nombres`, `apellidos`, `direccion`, `telefono`, `sexo`, `fcreado`, `factalizado`) VALUES
(1, 'PEDRO', 'MATEO', 'C/PRIMERA NO. 5, VILLA PROGRESO', 99, 'M', '2023-03-31', '0000-00-00'),
(2, 'LUISA MARIA', 'ROSARIO', 'C/CUARTA NO. 20, VILLA PROVIDENCIA', 99, 'M', '2023-03-31', '0000-00-00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tblbanco`
--
ALTER TABLE `tblbanco`
  ADD PRIMARY KEY (`bancoid`);

--
-- Indices de la tabla `tblcajeros`
--
ALTER TABLE `tblcajeros`
  ADD PRIMARY KEY (`Cajeroid`);

--
-- Indices de la tabla `tblciudad`
--
ALTER TABLE `tblciudad`
  ADD PRIMARY KEY (`ciudadid`);

--
-- Indices de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  ADD PRIMARY KEY (`clienteid`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tblbanco`
--
ALTER TABLE `tblbanco`
  MODIFY `bancoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tblcajeros`
--
ALTER TABLE `tblcajeros`
  MODIFY `Cajeroid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tblciudad`
--
ALTER TABLE `tblciudad`
  MODIFY `ciudadid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tblclientes`
--
ALTER TABLE `tblclientes`
  MODIFY `clienteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
