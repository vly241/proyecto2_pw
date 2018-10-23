-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-10-2018 a las 15:21:52
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdbeautyvp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `fecha`, `id_producto`, `cantidad`, `id_usuario`, `total`) VALUES
(1, '2018-10-10', 3, 4, 1, 30000),
(2, '2018-10-17', 5, 1, 2, 10000),
(3, '2018-10-17', 3, 1, 2, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `stock` int(120) NOT NULL,
  `imagen` text NOT NULL,
  `precio` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `stock`, `imagen`, `precio`) VALUES
(3, 'kit de limpieza facial ECO BEAUTY', 'limpiado profundo \r\nproductos naturales y no probados en animales \r\ncon estrato de aguacate y lagrimas de dios', 15, 'kit_limpieza_ecobeauty.jpg', 45000),
(5, 'delineador', 'delineador negro', 45, 'delineador_definition.png', 5000),
(6, 'labial tilbury', ' de estracto de rosas rojas', 40, 'labial_tilbury.jpg', 35000),
(7, 'sellante de maquillaje', 'es hecho a base de productos naturales', 15, 'primer.jpg', 15000),
(8, 'locion victoria secret pink', 'fragancia de frutos rojos', 14, 'locion_victoria_secret.jpg', 60000),
(9, 'paleta de tonos tierra', 'color de tonos oscuros ', 45, 'paleta_maquillaje_tonos_oscuros.jpg', 90000),
(10, 'labial rojo', 'labial a base de quinoa', 7, 'labial_rojo.jpg', 18000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `correo` varchar(120) NOT NULL,
  `nombre` varchar(120) NOT NULL,
  `apellido` varchar(120) NOT NULL,
  `direccion` text NOT NULL,
  `localidad` text NOT NULL,
  `numeroMovil` int(60) NOT NULL,
  `tipo_usuario` varchar(60) NOT NULL,
  `clave` varchar(300) NOT NULL,
  `sexo` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `correo`, `nombre`, `apellido`, `direccion`, `localidad`, `numeroMovil`, `tipo_usuario`, `clave`, `sexo`) VALUES
(1, 'admin', 'v@gmail.com', 'valeria', 'liscano', 'cre3', 'cartago', 2147483647, 'admin', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'img_avatar2.png'),
(2, 'usuario', 'user@gmail.com', 'maria', 'lopez', 'calle 11 norte', 'cartago', 2147483647, 'usuario', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'img_avatar2.png'),
(7, 'pepa', 'pepa@gmail.com', 'pamela', 'robledo', 'cr4', 'cartago', 2147483647, 'usuario', '4f22a5b713259a8b3e6d47c9073d7eef25e6ced4c20cbe49abaaa2e80b01e4e37c1a7c16891810668dd9a6bd88f259bbf8b7a672d37e785c3f2f3aa0b7169b54', 'img_avatar2.png'),
(8, 'paula', 'paula@gmail.com', 'paula', 'cabrera', 'cr5', 'cartago', 1452566, 'admin', '4f22a5b713259a8b3e6d47c9073d7eef25e6ced4c20cbe49abaaa2e80b01e4e37c1a7c16891810668dd9a6bd88f259bbf8b7a672d37e785c3f2f3aa0b7169b54', 'img_avatar2.png');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `facturas_ibfk_1` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`),
  ADD CONSTRAINT `facturas_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
