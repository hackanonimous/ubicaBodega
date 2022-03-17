-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2022 a las 16:15:22
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ubicaBodega`
--
CREATE DATABASE IF NOT EXISTS `ubicaBodega` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `ubicaBodega`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tempresa`
--

CREATE TABLE `tempresa` (
  `empresa_ruc` int(11) NOT NULL,
  `empresa_razonsocial` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa_mail` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa_telefono` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa_giro` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `empresa_responsable` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tlespecial`
--

CREATE TABLE `tlespecial` (
  `lespecial_id` int(11) NOT NULL,
  `licencia_finicio` datetime NOT NULL,
  `licencia_fexpiracion` datetime NOT NULL,
  `licencia_horario` varchar(45) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tlicencia`
--

CREATE TABLE `tlicencia` (
  `licencia_id` int(11) NOT NULL,
  `licencia_codigo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_expediente` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_tipo` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_direccion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_areanegocio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_fechacreacion` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `licencia_estado` tinyint(4) DEFAULT NULL,
  `licencia_ruc` int(11) NOT NULL,
  `licencia_usuario` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tpersona`
--

CREATE TABLE `tpersona` (
  `persona_dni` int(8) NOT NULL,
  `persona_nombres` varchar(65) COLLATE utf8_spanish2_ci NOT NULL,
  `persona_apaterno` varchar(65) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `persona_amaterno` varchar(65) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `persona_nacimiento` date DEFAULT NULL,
  `persona_telefono` varchar(12) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `persona_mail` varchar(65) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tpersona`
--

INSERT INTO `tpersona` (`persona_dni`, `persona_nombres`, `persona_apaterno`, `persona_amaterno`, `persona_nacimiento`, `persona_telefono`, `persona_mail`) VALUES
(12345678, 'silvia', 'olarte', 'sihue', '1997-07-20', '789654321', 'olarte@gmail.com'),
(70133573, 'JOSE LUIS', 'ALVAREZ', 'ESCOBAR', '1990-08-28', '917452076', 'esi.segurity@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tusuario`
--

CREATE TABLE `tusuario` (
  `usuario_dni` int(8) NOT NULL,
  `usuario_clave` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL,
  `usuario_estado` tinyint(4) DEFAULT NULL,
  `usuario_privilegio` varchar(45) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tusuario`
--

INSERT INTO `tusuario` (`usuario_dni`, `usuario_clave`, `usuario_estado`, `usuario_privilegio`) VALUES
(12345678, 'cUhlUlRZbXEzSURQOCtnS0EwYm41QT09', 1, 'Editor'),
(70133573, 'cUhlUlRZbXEzSURQOCtnS0EwYm41QT09', 1, 'Administrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tempresa`
--
ALTER TABLE `tempresa`
  ADD PRIMARY KEY (`empresa_ruc`),
  ADD KEY `fk_tempresa_tpersona1_idx` (`empresa_responsable`);

--
-- Indices de la tabla `tlespecial`
--
ALTER TABLE `tlespecial`
  ADD PRIMARY KEY (`lespecial_id`),
  ADD KEY `fk_tlic_especial_tlicencia1_idx` (`licencia_id`);

--
-- Indices de la tabla `tlicencia`
--
ALTER TABLE `tlicencia`
  ADD PRIMARY KEY (`licencia_id`),
  ADD KEY `fk_tlicencia_tempresa1_idx` (`licencia_ruc`),
  ADD KEY `fk_tlicencia_tusuario1_idx` (`licencia_usuario`);

--
-- Indices de la tabla `tpersona`
--
ALTER TABLE `tpersona`
  ADD PRIMARY KEY (`persona_dni`);

--
-- Indices de la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD PRIMARY KEY (`usuario_dni`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tempresa`
--
ALTER TABLE `tempresa`
  ADD CONSTRAINT `fk_tempresa_tpersona1` FOREIGN KEY (`empresa_responsable`) REFERENCES `tpersona` (`persona_dni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tlespecial`
--
ALTER TABLE `tlespecial`
  ADD CONSTRAINT `fk_tlic_especial_tlicencia1` FOREIGN KEY (`licencia_id`) REFERENCES `tlicencia` (`licencia_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tlicencia`
--
ALTER TABLE `tlicencia`
  ADD CONSTRAINT `fk_tlicencia_tempresa1` FOREIGN KEY (`licencia_ruc`) REFERENCES `tempresa` (`empresa_ruc`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tlicencia_tusuario1` FOREIGN KEY (`licencia_usuario`) REFERENCES `tusuario` (`usuario_dni`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tusuario`
--
ALTER TABLE `tusuario`
  ADD CONSTRAINT `fk_tusuario_tpersona1` FOREIGN KEY (`usuario_dni`) REFERENCES `tpersona` (`persona_dni`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
