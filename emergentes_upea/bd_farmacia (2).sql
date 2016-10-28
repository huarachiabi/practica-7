-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-10-2016 a las 00:29:22
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_farmacia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `descripcion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `descripcion`) VALUES
(1, 'Suerooooo'),
(2, 'Analgesicos'),
(3, 'Antibiotico'),
(4, 'Jarabe'),
(5, 'Inyecciones'),
(6, 'Amoxisilica'),
(7, 'Cremas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `descripcion` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `costo_unitario` float NOT NULL,
  `cantidad` int(11) NOT NULL,
  `stock_minimo` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `descripcion`, `costo_unitario`, `cantidad`, `stock_minimo`, `id_categoria`) VALUES
(1, 'Analgesicos', 1, 0, 4, 10),
(2, 'violeta', 15, 55, 50, 5),
(3, 'Vitaminas', 70, 10, 7, 7),
(4, 'estucheraiiii', 15, 20, 18, 1),
(5, 'Pomadas', 150, 25, 20, 7),
(6, 'Calmante', 9, 150, 145, 4),
(7, 'Desinfectantes', 35, 15, 10, 7),
(8, 'Sicatrikiu', 350, 10, 9, 7),
(9, 'Paracitamol', 10, 20, 19, 4),
(10, 'Antigrioalpergfef', 5, 10, 8, 33),
(11, 'Tapsinwwwww', 8, 15, 10, 10),
(12, 'Refiolipppppppp', 15, 10, 9, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `clave` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `correo` varchar(50) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `usuario`, `clave`, `nombre`, `correo`) VALUES
(1, 'abigail', '202cb962ac59075b964b07152d234b70', 'abigail', 'abigail@gmail.com'),
(2, 'walter', '202cb962ac59075b964b07152d234b70', 'emilio', 'waltertig@gmail.com'),
(3, 'ale', '3def184ad8f4755ff269862ea77393dd', 'alejandra', 'ale@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `fecha`, `id_producto`, `cantidad`, `total`, `id_usuario`) VALUES
(1, '0000-00-00', 0, 0, 0, 0),
(2, '2016-10-05', 2, 5, 0, 1),
(3, '2016-10-19', 0, 10, 0, 1),
(4, '2016-10-20', 0, 10, 0, 1),
(5, '2016-10-21', 4, 6, 0, 1),
(6, '2016-10-21', 6, 15, 0, 1),
(7, '0000-00-00', 0, 0, 0, 1),
(8, '2016-10-07', 4, 2, 0, 1),
(9, '2016-10-14', 5, 2, 0, 1),
(11, '2016-10-22', 5, 1, 0, 1),
(12, '2016-10-14', 1, 10, 0, 1),
(13, '2016-10-15', 5, 1, 0, 1),
(14, '2016-10-22', 6, 5, 0, 1),
(15, '2016-10-15', 3, 1, 0, 1),
(16, '2016-10-15', 3, 4, 0, 1),
(17, '2016-10-15', 2, 2, 0, 1),
(18, '0000-00-00', 6, 0, 0, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
