-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2017 a las 05:07:00
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `contact`
--
CREATE DATABASE IF NOT EXISTS `contact` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci;
USE `contact`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `creator` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `category`, `creator`) VALUES
(2, 'Empresarial', '2017-04-29'),
(3, 'Hogar', '2017-04-29'),
(4, 'Familiar', '2017-04-29'),
(6, 'Amigos', '2017-05-01'),
(7, 'Otros', '2017-05-01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `business` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `position` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `notes` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `birth_date` date NOT NULL,
  `category` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_address`
--

CREATE TABLE IF NOT EXISTS `contact_address` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact` bigint(20) NOT NULL,
  `address` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tag` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact` (`contact`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_association`
--

CREATE TABLE IF NOT EXISTS `contact_association` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact5` bigint(20) NOT NULL,
  `association` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tag` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact5` (`contact5`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_dates`
--

CREATE TABLE IF NOT EXISTS `contact_dates` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact4` bigint(20) NOT NULL,
  `date` date NOT NULL,
  `tag` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact4` (`contact4`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_emails`
--

CREATE TABLE IF NOT EXISTS `contact_emails` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact3` bigint(20) NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tag` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact3` (`contact3`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_phones`
--

CREATE TABLE IF NOT EXISTS `contact_phones` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact2` bigint(20) NOT NULL,
  `phone` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tag` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact2` (`contact2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact_web`
--

CREATE TABLE IF NOT EXISTS `contact_web` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `contact1` bigint(20) NOT NULL,
  `site_web` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `tag` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contact1` (`contact1`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identification` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `nick` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(500) COLLATE utf8_spanish2_ci NOT NULL,
  `creation` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `identification`, `name`, `lastname`, `email`, `nick`, `pass`, `creation`) VALUES
(1, '1112784648', 'Julian Esteban', 'Rios Holguin', 'jerios84@misena.edu.co', 'julian', '1112784648', '2017-04-27'),
(5, '0123456789', 'Administrador', 'Super', 'admin@gmail.com', 'Admin', 'Admin', '2017-04-29'),
(6, '16227804', 'Julio Cesar', 'Rios Lopez', 'jucerilo59@hotmail.com', 'jucerilo', '16227804', '2017-04-29'),
(7, '43726575', 'Gloria Esperanza', 'Holguin Bermudez', 'julieste12@hotmail.com', 'Gloria', '43726575', '2017-05-02');

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `category` FOREIGN KEY (`category`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_address`
--
ALTER TABLE `contact_address`
  ADD CONSTRAINT `contact` FOREIGN KEY (`contact`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_association`
--
ALTER TABLE `contact_association`
  ADD CONSTRAINT `contact5` FOREIGN KEY (`contact5`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_dates`
--
ALTER TABLE `contact_dates`
  ADD CONSTRAINT `contact4` FOREIGN KEY (`contact4`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_emails`
--
ALTER TABLE `contact_emails`
  ADD CONSTRAINT `contact3` FOREIGN KEY (`contact3`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_phones`
--
ALTER TABLE `contact_phones`
  ADD CONSTRAINT `contact2` FOREIGN KEY (`contact2`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `contact_web`
--
ALTER TABLE `contact_web`
  ADD CONSTRAINT `contact1` FOREIGN KEY (`contact1`) REFERENCES `contact` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
