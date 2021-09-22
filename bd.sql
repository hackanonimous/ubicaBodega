CREATE TABLE `areas` (
  `id` int(30) NOT NULL,
  `area` text NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `bodegas` (
  `id` int(30) NOT NULL,
  `servicios_id` int(30) NOT NULL,
  `nombre` text NOT NULL,
  `tipo` tinyint(1) NOT NULL COMMENT '1 = persona, 2 = empresa',
  `celular` varchar(200) NOT NULL,
  `direccion` text NOT NULL,
  `descripcion` text NOT NULL,
  `areas_id` text NOT NULL,
  `img` text NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

CREATE TABLE `servicios` (
  `id` int(30) NOT NULL,
  `servicios` text NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;
