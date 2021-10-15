-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 14-10-2021 a las 23:59:36
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.23

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `empresa_id` int(2) NOT NULL,
  `empresa_nombre` varchar(90) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa_email` varchar(70) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa_telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `empresa_direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencia`
--

CREATE TABLE `licencia` (
  `licencia_id` int(50) NOT NULL,
  `licencia_codigo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_expediente` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_tipo` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_razon_social` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_ruc_negocio` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_area_negocio` int(10) NOT NULL,
  `licencia_giro_negocio` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_horario_atencion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `licencia_fecha_inicio` date NOT NULL,
  `licencia_fecha_final` date NOT NULL,
  `licencia_fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `licencia_estado` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_id` int(10) NOT NULL,
  `representante_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `representante`
--

CREATE TABLE `representante` (
  `representante_id` int(10) NOT NULL,
  `representante_dni` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `representante_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `representante_apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `representante_telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `representante_direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `representante_email` varchar(150) COLLATE utf8_spanish2_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuario_id` int(10) NOT NULL,
  `usuario_dni` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_apellido` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_telefono` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_direccion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_email` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_clave` varchar(535) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_estado` varchar(17) COLLATE utf8_spanish2_ci NOT NULL,
  `usuario_privilegio` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`empresa_id`);

--
-- Indices de la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD PRIMARY KEY (`licencia_id`),
  ADD KEY `usuario_id` (`usuario_id`),
  ADD KEY `representante_id` (`representante_id`);

--
-- Indices de la tabla `representante`
--
ALTER TABLE `representante`
  ADD PRIMARY KEY (`representante_id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `empresa_id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `licencia`
--
ALTER TABLE `licencia`
  MODIFY `licencia_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `representante`
--
ALTER TABLE `representante`
  MODIFY `representante_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `usuario_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `licencia`
--
ALTER TABLE `licencia`
  ADD CONSTRAINT `licencia_ibfk_1` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`usuario_id`),
  ADD CONSTRAINT `licencia_ibfk_2` FOREIGN KEY (`representante_id`) REFERENCES `representante` (`representante_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
