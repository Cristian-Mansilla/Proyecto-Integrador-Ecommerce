-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 25-11-2019 a las 21:17:54
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_4Buy`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProductos` int(11) NOT NULL,
  `titulo` varchar(45) NOT NULL,
  `precio` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `imgProducto` int(11) NOT NULL,
  `id_marca` int(11) NOT NULL,
  `id_categorias` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProductos`, `titulo`, `precio`, `stock`, `imgProducto`, `id_marca`, `id_categorias`) VALUES
(1, 'Celular 1', 2300, 2, 10, 3, 12),
(2, 'Celular 2', 3400, 3, 11, 4, 12),
(3, 'Celular 3', 4500, 5, 12, 3, 12),
(4, 'Celular 4', 1300, 1, 13, 8, 12),
(5, 'Celular 5', 4000, 7, 14, 3, 12),
(6, 'Celular 6', 10000, 2, 15, 4, 12),
(7, 'Celular 7', 7000, 3, 16, 5, 12),
(8, 'Celular 8', 5131, 5, 17, 5, 12),
(9, 'Celular 9', 2322, 1, 18, 5, 12),
(10, 'Televisor 1', 2356, 1, 22, 8, 8),
(11, 'Televisor 2', 4520, 3, 23, 1, 8),
(12, 'Televisor 3', 5283, 5, 24, 4, 8),
(13, 'Televisor 4', 9820, 1, 25, 8, 8),
(14, 'Televisor 5', 2039, 1, 26, 1, 8),
(15, 'Televisor 6', 9257, 4, 27, 4, 8),
(16, 'Notebook 1', 12000, 1, 28, 2, 15),
(17, 'Notebook 2', 18999, 3, 30, 9, 15),
(18, 'Notebook 3', 9870, 1, 31, 4, 15),
(19, 'Notebook 4', 17800, 1, 32, 11, 15),
(20, 'Notebook 5', 15000, 6, 33, 10, 15),
(21, 'Accesorio para celular 1', 235, 234, 34, 12, 11),
(22, 'Accesorio para celular 2', 300, 57, 35, 12, 11),
(23, 'Accesorio para celular 3', 250, 23, 36, 12, 11),
(24, 'Accesorio para celular 4', 170, 4, 37, 12, 11),
(25, 'Accesorio para celular 5', 250, 23, 38, 12, 11),
(26, 'Almacenamiento 1', 2000, 2, 39, 14, 13),
(27, 'Almacenamiento 2', 2900, 3, 40, 15, 13),
(28, 'Almacenamiento 3', 600, 4, 41, 13, 13),
(29, 'Audio 1', 7500, 2, 42, 16, 9),
(30, 'Audio 2', 4000, 30, 43, 12, 9),
(31, 'Audio 3', 9000, 2, 44, 12, 9),
(32, 'Bazar y Cocina 1', 980, 1, 45, 12, 18),
(33, 'Bazar y Cocina 2', 300, 1, 46, 12, 18),
(34, 'Bazar y Cocina 3', 790, 1, 47, 12, 18),
(35, 'Bazar y Cocina 4', 1800, 1, 48, 12, 18),
(36, 'Bazar y Cocina 5', 600, 1, 49, 12, 18),
(37, 'Cables 1', 380, 190, 50, 12, 10),
(38, 'Cables 2', 590, 100, 51, 12, 10),
(39, 'Cables 3', 700, 23, 52, 12, 10),
(40, 'Cables 4', 200, 12, 53, 12, 10),
(41, 'Cables 5', 150, 2, 54, 12, 10);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProductos`),
  ADD UNIQUE KEY `idProductos_UNIQUE` (`idProductos`),
  ADD KEY `producto_marca_foreign_idx` (`id_marca`),
  ADD KEY `producto_categoria_foreign_idx` (`id_categorias`),
  ADD KEY `producto_imagen_foreign` (`imgProducto`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProductos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `producto_categoria_foreign` FOREIGN KEY (`id_categorias`) REFERENCES `categorias` (`idCategorias`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `producto_imagen_foreign` FOREIGN KEY (`imgProducto`) REFERENCES `imagenes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `producto_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `Marcas` (`idMarca`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
