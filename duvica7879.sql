-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-02-2017 a las 22:08:54
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `duvica7879`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `almacen`
--

CREATE TABLE IF NOT EXISTS `almacen` (
  `Direccion` varchar(20) NOT NULL,
  `Cod_Producto` varchar(10) NOT NULL,
  `Cantidad_Egresada` varchar(10) NOT NULL,
  `Cantidad_Ingresada` varchar(10) NOT NULL,
  `Fecha_Ingreso` date NOT NULL,
  `Fecha_Egreso` date NOT NULL,
  `Nombre_Producto` varchar(11) NOT NULL,
  PRIMARY KEY (`Cod_Producto`),
  KEY `Nombre_Producto` (`Nombre_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `Nombres` varchar(25) NOT NULL,
  `Apellidos` varchar(25) NOT NULL,
  `Cedula` varchar(11) NOT NULL,
  `Cantidad_Solicitada` varchar(11) NOT NULL,
  `Cod_Producto` varchar(10) NOT NULL,
  `Precio_Total` varchar(10) NOT NULL,
  `Fecha_nac` date NOT NULL,
  PRIMARY KEY (`Cedula`),
  KEY `Cod_Producto` (`Cod_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE IF NOT EXISTS `personal` (
  `Nombres` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Cedula` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `Cargo` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(40) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_Nacimiento` date NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `Nombre_Producto` varchar(20) NOT NULL,
  `Clasificacion` varchar(15) NOT NULL,
  `Precio_Adquisicion` varchar(10) NOT NULL,
  `Cod_Producto` varchar(10) NOT NULL,
  `Precio_Venta` varchar(10) NOT NULL,
  PRIMARY KEY (`Cod_Producto`),
  KEY `Descripcion` (`Nombre_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE IF NOT EXISTS `proveedor` (
  `Nombre` varchar(20) NOT NULL,
  `Cedula` varchar(10) NOT NULL,
  `Precio_Adquisicion` varchar(15) NOT NULL,
  `Direccion` varchar(30) NOT NULL,
  `Telefono` varchar(11) NOT NULL,
  `Cod_Producto` varchar(10) NOT NULL,
  PRIMARY KEY (`Cedula`),
  KEY `Cod_Producto` (`Cod_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_cliente`
--

CREATE TABLE IF NOT EXISTS `registro_cliente` (
  `Cedula` int(12) NOT NULL,
  `Nombres` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_de_Nacimiento` date NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_empleado`
--

CREATE TABLE IF NOT EXISTS `registro_empleado` (
  `Cedula` int(20) NOT NULL,
  `Nombres` text COLLATE utf8_spanish2_ci NOT NULL,
  `Apellidos` text COLLATE utf8_spanish2_ci NOT NULL,
  `Direccion` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Cargo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Fecha_de_Nacimiento` int(20) NOT NULL,
  PRIMARY KEY (`Cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro_empleado`
--

INSERT INTO `registro_empleado` (`Cedula`, `Nombres`, `Apellidos`, `Direccion`, `Cargo`, `Fecha_de_Nacimiento`) VALUES
(0, 'deaeaqew', 'dasdasd', 'dsadasda', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_producto`
--

CREATE TABLE IF NOT EXISTS `registro_producto` (
  `Codigo_producto` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `Nombre_producto` text COLLATE utf8_spanish2_ci NOT NULL,
  `Clasificacion` text COLLATE utf8_spanish2_ci NOT NULL,
  `Precio_adquisicion` float NOT NULL,
  `Precio_venta` float NOT NULL,
  PRIMARY KEY (`Codigo_producto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `registro_producto`
--

INSERT INTO `registro_producto` (`Codigo_producto`, `Nombre_producto`, `Clasificacion`, `Precio_adquisicion`, `Precio_venta`) VALUES
('0001', 'pasta', '0', 3213, 321321);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
