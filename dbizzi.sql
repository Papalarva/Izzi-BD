-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-12-2021 a las 03:28:47
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbizzi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `curp` varchar(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `puesto_trabajo` varchar(50) NOT NULL,
  `salario` varchar(50) NOT NULL,
  `turno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `curp`, `nombre`, `apellido`, `puesto_trabajo`, `salario`, `turno`) VALUES
(1, '0', 'EjemploUno', 'ApellidoEjemplo', 'Programador', '0', '1'),
(2, 'PALE040528H', 'Edgar', 'Pablo', 'Programador', '$3250', 'Primer Turno'),
(3, 'ANVEDA25019', 'Angel David', 'Venegas', 'Publicidad', '$2500', 'Segundo Turno'),
(4, 'ANHS132665F', 'Anel Nicole ', 'Hernández Sánchez ', 'Técnica', '$1500', 'Segundo Turno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `id_factura` int(50) NOT NULL,
  `fecha_factura` date NOT NULL,
  `id_usuarioFactura` int(50) NOT NULL,
  `costo` varchar(50) NOT NULL,
  `paquete_internet` int(50) NOT NULL,
  `metodo_pago` varchar(50) NOT NULL,
  `fecha_contratacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id_factura`, `fecha_factura`, `id_usuarioFactura`, `costo`, `paquete_internet`, `metodo_pago`, `fecha_contratacion`) VALUES
(1, '2021-11-30', 1, '0', 1, 'Ejemplo', '2021-11-30'),
(18, '2021-11-30', 4, '$750', 1, 'Pago en caja', '2021-08-30'),
(19, '2021-12-30', 3, '$950', 4, 'Tarjeta de crédito', '2021-08-30'),
(20, '2021-11-17', 2, '$800', 2, 'Pago en caja', '2021-10-30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id_servicio` int(11) NOT NULL,
  `fecha_realizacion` date NOT NULL,
  `nombre_servicio` varchar(250) NOT NULL,
  `especializacion` longtext NOT NULL,
  `id_trabajadorServicio` int(11) NOT NULL,
  `id_usuarioServicio` int(11) NOT NULL,
  `costo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id_servicio`, `fecha_realizacion`, `nombre_servicio`, `especializacion`, `id_trabajadorServicio`, `id_usuarioServicio`, `costo`) VALUES
(2, '2021-11-29', 'Prueba', '', 4345, 345, '0'),
(3, '2021-12-04', 'Instalación de red', 'Técnica', 5, 2, '$250'),
(4, '2021-12-23', 'Instalación de codificador de televisión', 'Técnica', 5, 2, '$450'),
(5, '2021-12-22', 'Revisión de costo ', 'Analista', 2, 3, '$0'),
(6, '2021-12-10', 'Revisión de descuentos', 'Analista', 2, 2, '$0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `codigo_postal` int(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `apellido`, `codigo_postal`, `direccion`, `telefono`, `correo`) VALUES
(1, 'Ejemplo', 'Apellido Ejemplo', 32658, 'Dirección de ejemplo', '2147483647', 'correo@gmail.com'),
(5, 'Edgar', 'Pablo', 32674, 'Pradera de los Oasis', '6562455939', 'papalarva1@gmail.com'),
(6, 'Irwing Genaro', 'Proa Ochoa', 32674, 'Pradera de los Oasis', '6568459636', 'palomablanca@gmail.com'),
(7, 'Leslie', 'Gaytan', 32685, 'Oasis de Turquia', '6568459632', 'leslieGaytan@gmail.com'),
(13, 'Angel David', 'Venegas', 32675, 'Las torres', '6569847586', 'AngelSandoval@gmail.com');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`id_factura`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id_servicio`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `id_factura` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
