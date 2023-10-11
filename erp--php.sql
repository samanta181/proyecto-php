-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 11-10-2023 a las 07:40:15
-- Versión del servidor: 8.0.17
-- Versión de PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erp--php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name_user` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apep_user` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `apem_user` varchar(80) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `name_user`, `apep_user`, `apem_user`) VALUES
(1, 'cristhian', 'zapata', 'galdos'),
(2, 'samanta', 'mogrovejo', 'tucto'),
(3, 'samanta', 'mogrovejo', 'tucto'),
(4, 'juan', 'perez', 'gomez'),
(5, 'maria', 'lopez', 'rodriguez'),
(6, 'carlos', 'gonzalez', 'ramirez'),
(7, 'laura', 'martinez', 'fernandez'),
(8, 'david', 'rodriguez', 'diaz'),
(9, 'andrea', 'sanchez', 'ramos'),
(10, 'javier', 'hernandez', 'perez'),
(11, 'natalia', 'castro', 'torres'),
(12, 'sergio', 'torres', 'garcia'),
(13, 'ana', 'ramos', 'mendoza'),
(14, 'felipe', 'guerrero', 'castillo'),
(15, 'lucia', 'mendoza', 'navarro'),
(16, 'diego', 'castillo', 'morales'),
(17, 'clara', 'navarro', 'santos'),
(18, 'eduardo', 'santos', 'diaz'),
(19, 'vanesa', 'morales', 'jimenez'),
(20, 'oscar', 'jimenez', 'herrera'),
(21, 'diana', 'herrera', 'reyes'),
(22, 'roberto', 'reyes', 'fernandez');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
