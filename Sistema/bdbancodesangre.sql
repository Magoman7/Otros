-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2015 a las 01:41:00
-- Versión del servidor: 5.5.27
-- Versión de PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bdbancodesangre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdonantes`
--

CREATE TABLE IF NOT EXISTS `tdonantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `CEDULA` varchar(20) NOT NULL,
  `NOMBRE` varchar(20) NOT NULL,
  `APELLIDO` varchar(20) NOT NULL,
  `DIRECCION` varchar(20) NOT NULL,
  `FECHADENACIMIENTO` date NOT NULL,
  `LUGARDENACIMIENTO` varchar(20) NOT NULL,
  `TELEFONO` varchar(20) NOT NULL,
  `PROFESION` varchar(20) NOT NULL,
  `OCUPACION` varchar(20) NOT NULL,
  `SEXO` varchar(20) NOT NULL,
  `TIPO_SANGRE` varchar(10) NOT NULL,
  PRIMARY KEY (`CEDULA`),
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tserologia`
--

CREATE TABLE IF NOT EXISTS `tserologia` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `CEDULA` varchar(20) NOT NULL,
  `TIPODEDONACION` varchar(20) NOT NULL,
  `FECHA` date NOT NULL,
  `DESTINO` varchar(30) NOT NULL,
  `PACIENTE` varchar(30) NOT NULL,
  `HIV` varchar(20) NOT NULL,
  `HTIV` varchar(20) NOT NULL,
  `SIFILIS` varchar(20) NOT NULL,
  `VDRL` varchar(20) NOT NULL,
  `CHAGAS` varchar(20) NOT NULL,
  `HCV` varchar(20) NOT NULL,
  `HBSAG` varchar(20) NOT NULL,
  `ANTIHBCAB` varchar(20) NOT NULL,
  `DEPRANOCITOS` varchar(20) NOT NULL,
  PRIMARY KEY (`CEDULA`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE IF NOT EXISTS `tusuario` (
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(150) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `correo` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`usuario`, `clave`, `tipo`, `correo`) VALUES
('martin', 'bc8155a93f8756c1c339c43f1bacf8256f6217d1', 'ADMINISTRADOR', 'martin@gmail.com'),
('Usuario', 'bc8155a93f8756c1c339c43f1bacf8256f6217d1', 'USUARIO', 'usuario@gmail.com'),
('vista', 'bc8155a93f8756c1c339c43f1bacf8256f6217d1', 'VISTA', 'vista@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
