-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-07-2019 a las 14:35:31
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `lectorm`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usu` int(11) NOT NULL,
  `nombre_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `apellido_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `celular_usu` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fechaNac_usu` date NOT NULL,
  `email_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `pass_usu` varchar(128) COLLATE utf8_spanish_ci NOT NULL,
  `sede_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `curso_usu` varchar(10) CHARACTER SET utf8 COLLATE utf8_swedish_ci NOT NULL,
  `nivel_usu` int(11) NOT NULL COMMENT '1 admin, 2 profesor, 3 alumno',
  `ultimasesion_usu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `bloqueo_usu` tinyint(1) NOT NULL COMMENT '1 Activo, 0 Inactivo',
  `foto_usu` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usu`, `nombre_usu`, `apellido_usu`, `celular_usu`, `fechaNac_usu`, `email_usu`, `pass_usu`, `sede_usu`, `curso_usu`, `nivel_usu`, `ultimasesion_usu`, `bloqueo_usu`, `foto_usu`) VALUES
(1, 'admin', 'admin', '3138416440', '0000-00-00', 'charlesrct@hotmail.com', '123', 'central', 'admin', 1, '2019-06-27 00:00:00', 0, ''),
(2, 'a', 'a', '1', '2019-07-01', 'a@a.com', '12345678', 'a', 'a', 2, '2019-07-21 00:00:00', 0, 'fotoPerfil/charlesrctgmailcom.jpg'),
(3, 'Charles Richar', 'Torres Moreno', '3138416440', '1977-07-10', 'charlesrct@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d', '2', '2', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmailcom.jpg'),
(4, 'Charles Richar', 'Torres Moreno', '3138416440', '2018-06-19', 'charlesrct@gmail1.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail1com.jpg'),
(5, 'Charles Richar', 'Torres Moreno', '1131289', '2018-06-20', 'charlesrct@gmail2.com', '7c222fb2927d828af22f592134e8932480637c0d', '3', '4', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail2com.jpg'),
(8, 'Charles Richar', 'Torres Moreno', '1234567889', '2013-01-16', 'charlesrct@gmail3.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail3com.jpg'),
(9, 'Charles Richar', 'Torres Moreno', '3138426440', '2018-06-21', 'charlesrct@gmail4.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail4com.jpg'),
(12, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail5.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail5com.jpg'),
(13, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail6.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail6com.jpg'),
(15, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail7.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail7com.jpg'),
(16, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail8.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail8com.jpg'),
(17, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail9.com', '7c222fb2927d828af22f592134e8932480637c0d', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail9com.jpg'),
(18, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail10.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '1', '1', 2, '0000-00-00 00:00:00', 1, 'fotoPerfil/charlesrctgmail10com.jpg'),
(19, 'Charles Richar', 'Torres Moreno', '1', '2018-06-21', 'charlesrct@gmail11.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', '1', '1', 2, '2019-07-22 16:36:14', 1, 'fotoPerfil/charlesrctgmail11com.jpg'),
(20, 'Andres', 'Perez', '6487264849', '2009-06-02', 'mega20andres@gmail.com', '4ea842c8c6304f4a418835fb6665df10524df1a5', '1', '3', 2, '2019-07-25 06:51:14', 1, 'fotoPerfil/mega20andresgmailcom.PNG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usu`),
  ADD UNIQUE KEY `email_usu` (`email_usu`),
  ADD UNIQUE KEY `email_usu_2` (`email_usu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
