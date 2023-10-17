-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 11:05:57
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `computadores`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadores`
--

CREATE TABLE `computadores` (
  `Top` int(11) NOT NULL,
  `Computer` varchar(100) DEFAULT NULL,
  `Marca` varchar(100) DEFAULT NULL,
  `Precio` int(10) DEFAULT NULL,
  `Descuento` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `computadores`
--

INSERT INTO `computadores` (`Top`, `Computer`, `Marca`, `Precio`, `Descuento`) VALUES
(1, 'MacBook Air M2 2022', 'Apple', 1200, 10),
(2, 'Ideapad Duet Chromebook', 'Lenovo', 300, 15),
(3, 'Macbook Air (M1 2020)', 'Apple', 999, 20),
(4, 'XPS 13 (9300)', 'Dell', 1000, 25),
(5, 'XPS 15 9520', 'Dell', 1200, 30),
(6, 'Acer Swift 3 (2020)', 'Acer', 650, 15),
(7, 'MacBook Pro 16-inch M2 (2023)', 'Apple', 2400, 10),
(8, 'Samsung Galaxy Book2 360', 'Samsung', 1200, 20),
(9, 'Razer Blade 14', 'Razer', 1800, 15),
(10, 'Dell XPS 17 (2022)', 'Dell', 1400, 25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `computadores`
--
ALTER TABLE `computadores`
  ADD PRIMARY KEY (`Top`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
