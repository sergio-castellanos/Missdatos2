-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-12-2023 a las 05:00:39
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `md`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre_completo` varchar(50) DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `telefono` varchar(15) DEFAULT NULL,
  `cargo` varchar(20) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `identificacion`, `nombre_completo`, `fecha_nacimiento`, `direccion`, `telefono`, `cargo`, `correo`) VALUES
(21, 1030680818, 'sergio castellanoss moreno', '2023-12-01', 'calle carrera', '3142107518', 'asesor', 'sm@hotmaikkl.com'),
(29, 222222222, 'Juan plazas plazass', '2023-11-29', 'engativa', '4353525252', 'asesor', 'sebas|@gmail.com'),
(34, 1010229730, 'daniela capeda', '3243-02-11', 'ferias', '3142002980', 'topografia', 'daiela@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incapacidad`
--

CREATE TABLE `incapacidad` (
  `id_incapacidad` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `eps` text NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `soporte` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `incapacidad`
--

INSERT INTO `incapacidad` (`id_incapacidad`, `identificacion`, `nombre_completo`, `eps`, `fecha_inicio`, `fecha_final`, `cargo`, `soporte`) VALUES
(10, 1030680818, 'sergio castellanos', 'compensar', '2023-12-05', '2023-12-21', 'estudiante', 0x6172636869766f5f657863656c20283135292e786c7378),
(11, 1030680818, 'sergio castellanos', 'compensar', '2023-12-05', '2023-12-21', 'estudiante', 0x6172636869766f5f657863656c20283135292e786c7378),
(12, 1030680818, 'david moreno ', 'compensar', '2023-12-13', '2023-12-22', 'ama de casa', 0x6172636869766f5f657863656c20283138292e786c7378);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mi perfil`
--

CREATE TABLE `mi perfil` (
  `id_perfil` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `teléfono` int(15) NOT NULL,
  `correo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `mensaje` text NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `hora` datetime NOT NULL,
  `cargo` varchar(20) NOT NULL,
  `motivo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `identificacion`, `nombre_completo`, `fecha_inicio`, `fecha_final`, `hora`, `cargo`, `motivo`) VALUES
(9, 1030680818, 'juan', '2023-11-28', '2023-11-29', '0000-00-00 00:00:00', 'asesor', 'personal'),
(10, 1030680819, 'alejandro', '2023-11-29', '2023-12-07', '0000-00-00 00:00:00', 'ayudante', 'personal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE `solicitud` (
  `id` int(11) NOT NULL,
  `idsolicitud` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `superadministrador`
--

CREATE TABLE `superadministrador` (
  `id` int(11) NOT NULL,
  `identificación` int(11) NOT NULL,
  `Nombre_Completo` varchar(50) NOT NULL,
  `id_superadministrador` int(50) NOT NULL,
  `novedades` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `superadministrador`
--

INSERT INTO `superadministrador` (`id`, `identificación`, `Nombre_Completo`, `id_superadministrador`, `novedades`) VALUES
(98765, 7923393, 'armando gonzales', 0, 'director');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(10) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contrasena` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_completo`, `rol`, `usuario`, `contrasena`) VALUES
(19, 'sergio david castellanos moreno mm', 'admin', 'sergioc', '12345'),
(31, 'juan sebastian plazas', 'empleado', 'juanp', '00000'),
(32, 'david castellanos', 'empleado', 'davidm', '11111');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vacaciones`
--

CREATE TABLE `vacaciones` (
  `id_vacaciones` int(11) NOT NULL,
  `identificacion` int(11) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_final` date NOT NULL,
  `cargo` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vacaciones`
--

INSERT INTO `vacaciones` (`id_vacaciones`, `identificacion`, `nombre_completo`, `fecha_inicio`, `fecha_final`, `cargo`) VALUES
(1, 1030680818, 'sergio castellanos', '2023-12-01', '2023-12-15', 'asesor'),
(2, 1030680819, 'david moreno ', '2023-12-25', '2023-12-31', 'asesor');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  ADD PRIMARY KEY (`id_incapacidad`);

--
-- Indices de la tabla `mi perfil`
--
ALTER TABLE `mi perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`);

--
-- Indices de la tabla `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `solicitud` (`idsolicitud`);

--
-- Indices de la tabla `superadministrador`
--
ALTER TABLE `superadministrador`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_superadministrador` (`id_superadministrador`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  ADD PRIMARY KEY (`id_vacaciones`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `incapacidad`
--
ALTER TABLE `incapacidad`
  MODIFY `id_incapacidad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `vacaciones`
--
ALTER TABLE `vacaciones`
  MODIFY `id_vacaciones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
