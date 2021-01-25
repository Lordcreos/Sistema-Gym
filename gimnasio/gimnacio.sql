-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2019 a las 01:05:57
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gimnacio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `id_caja` int(200) NOT NULL,
  `estado` varchar(200) NOT NULL,
  `monto` varchar(200) NOT NULL,
  `fecha_apertura` date NOT NULL,
  `fecha_cierre` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `ruc` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `dni` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_pedido`
--

CREATE TABLE `detalles_pedido` (
  `id_detalles` int(200) NOT NULL,
  `id_pedido` varchar(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id_empresa` int(100) NOT NULL,
  `empresa` varchar(200) NOT NULL,
  `ruc` varchar(100) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `imagen` varchar(2000) NOT NULL,
  `correo` varchar(200) NOT NULL,
  `por_dia` varchar(200) NOT NULL,
  `moneda` varchar(200) NOT NULL,
  `simbolo_moneda` varchar(200) NOT NULL,
  `impuesto_diario` float NOT NULL,
  `impuesto_producto` float NOT NULL,
  `impuesto_planes` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id_empresa`, `empresa`, `ruc`, `direccion`, `telefono`, `descripcion`, `imagen`, `correo`, `por_dia`, `moneda`, `simbolo_moneda`, `impuesto_diario`, `impuesto_producto`, `impuesto_planes`) VALUES
(1, 'gimnacio tusolutionweb', '354355', 'av san jeroronimo', '935142132', 'rubro de ventas', 'logo.jpg', 'tusolutionweb@gmail.com', '2', 'Nuevo sol', 'S/.', 1, 5, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(1, 1, 'has logged in the system at ', '2018-11-27 07:58:26'),
(2, 1, 'has logged out the system at ', '2018-11-27 07:59:03'),
(3, 1, 'has logged in the system at ', '2018-11-30 22:32:20'),
(4, 6, 'has logged in the system at ', '2018-12-01 20:28:15'),
(13, 1, 'has logged out the system at ', '2018-11-30 22:42:36'),
(14, 1, 'has logged in the system at ', '2018-12-04 11:12:37'),
(15, 1, 'has logged in the system at ', '2018-12-19 10:16:00'),
(16, 1, 'has logged in the system at ', '2018-12-19 10:21:46'),
(17, 1, 'has logged in the system at ', '2018-12-19 10:27:32'),
(18, 1, 'has logged in the system at ', '2018-12-19 10:33:11'),
(19, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:39:49'),
(20, 1, 'has logged in the system at ', '2018-12-19 10:40:01'),
(21, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:40:04'),
(22, 1, 'has logged in the system at ', '2018-12-19 10:42:35'),
(23, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:42:44'),
(24, 1, 'has logged in the system at ', '2018-12-19 10:43:07'),
(25, 1, 'se ha desconectado el sistema en ', '2018-12-19 10:44:35'),
(26, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-14 10:55:46'),
(27, 1, 'se ha desconectado el sistema en ', '2019-01-14 11:02:35'),
(28, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-14 11:02:41'),
(29, 1, 'se ha desconectado el sistema en ', '2019-01-14 11:09:15'),
(30, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:05:23'),
(31, 1, 'se ha desconectado el sistema en ', '2019-01-16 21:05:32'),
(32, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:06:19'),
(33, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:09:39'),
(34, 1, 'se ha desconectado el sistema en ', '2019-01-16 21:12:48'),
(35, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 21:12:52'),
(36, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-16 22:33:53'),
(37, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-17 08:50:57'),
(38, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-17 22:37:23'),
(39, 1, 'se ha desconectado el sistema en ', '2019-01-18 01:25:04'),
(40, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 03:35:56'),
(41, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 08:25:58'),
(42, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-18 20:31:12'),
(43, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-19 06:39:38'),
(44, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 01:27:24'),
(45, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 01:43:21'),
(46, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 02:56:46'),
(47, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 10:44:05'),
(48, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-20 11:13:20'),
(49, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-21 11:27:47'),
(50, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 01:38:33'),
(51, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 07:15:31'),
(52, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 10:39:09'),
(53, 1, 'ha iniciado sesiÃ³n en el sistema en ', '2019-01-23 20:39:13'),
(54, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:32:13'),
(55, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:46:48'),
(56, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:48:41'),
(57, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:48:52'),
(58, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:49:01'),
(59, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:52:37'),
(60, 1, 'se ha desconectado el sistema en ', '2019-01-24 01:55:52'),
(61, 1, 'se ha desconectado el sistema en ', '2019-01-24 02:50:25'),
(62, 1, 'se ha desconectado el sistema en ', '2019-01-25 18:59:42'),
(63, 1, 'se ha desconectado el sistema en ', '2019-01-26 12:13:01'),
(64, 1, 'se ha desconectado el sistema en ', '2019-01-26 12:39:03'),
(65, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:34:43'),
(66, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:35:05'),
(67, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:36:18'),
(68, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:37:19'),
(69, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:40:18'),
(70, 1, 'se ha desconectado el sistema en ', '2019-01-26 21:42:37'),
(71, 2, 'se ha desconectado el sistema en ', '2019-01-26 21:53:27'),
(72, 3, 'se ha desconectado el sistema en ', '2019-01-26 23:53:55'),
(73, 2, 'se ha desconectado el sistema en ', '2019-01-27 00:02:46'),
(74, 3, 'se ha desconectado el sistema en ', '2019-01-27 00:26:04'),
(75, 3, 'se ha desconectado el sistema en ', '2019-01-27 00:27:37'),
(76, 4, 'se ha desconectado el sistema en ', '2019-01-27 00:28:53'),
(77, 0, 'se ha desconectado el sistema en ', '2019-02-01 10:49:35'),
(78, 1, 'se ha desconectado el sistema en ', '2019-02-02 01:10:46'),
(79, 1, 'se ha desconectado el sistema en ', '2019-02-08 13:27:52'),
(80, 1, 'se ha desconectado el sistema en ', '2019-02-08 13:29:04'),
(81, 1, 'se ha desconectado el sistema en ', '2019-02-11 12:13:25'),
(82, 1, 'se ha desconectado el sistema en ', '2019-02-17 23:59:49'),
(83, 1, 'se ha desconectado el sistema en ', '2019-02-19 22:06:23'),
(84, 1, 'se ha desconectado el sistema en ', '2019-02-25 00:30:32'),
(85, 1, 'se ha desconectado el sistema en ', '2019-02-27 11:45:10'),
(86, 1, 'se ha desconectado el sistema en ', '2019-02-28 05:20:10'),
(87, 1, 'se ha desconectado el sistema en ', '2019-03-04 01:08:23'),
(88, 1, 'se ha desconectado el sistema en ', '2019-03-04 07:27:54'),
(89, 3, 'se ha desconectado el sistema en ', '2019-03-04 07:28:35'),
(90, 1, 'se ha desconectado el sistema en ', '2019-03-04 07:37:53'),
(91, 3, 'se ha desconectado el sistema en ', '2019-03-04 10:41:27'),
(92, 1, 'se ha desconectado el sistema en ', '2019-03-05 10:17:44'),
(93, 3, 'se ha desconectado el sistema en ', '2019-03-05 10:17:54'),
(94, 1, 'se ha desconectado el sistema en ', '2019-03-05 12:54:15'),
(95, 3, 'se ha desconectado el sistema en ', '2019-03-05 12:56:25'),
(96, 3, 'se ha desconectado el sistema en ', '2019-03-05 13:15:01'),
(97, 1, 'se ha desconectado el sistema en ', '2019-03-05 21:34:11'),
(98, 1, 'se ha desconectado el sistema en ', '2019-03-05 22:56:40'),
(99, 1, 'se ha desconectado el sistema en ', '2019-03-06 09:09:23'),
(100, 1, 'se ha desconectado el sistema en ', '2019-03-06 09:19:54'),
(101, 3, 'se ha desconectado el sistema en ', '2019-03-06 09:32:54'),
(102, 1, 'se ha desconectado el sistema en ', '2019-03-07 08:06:32'),
(103, 1, 'se ha desconectado el sistema en ', '2019-03-08 13:47:16'),
(104, 3, 'se ha desconectado el sistema en ', '2019-03-08 14:13:56'),
(105, 1, 'se ha desconectado el sistema en ', '2019-03-08 14:32:58'),
(106, 1, 'se ha desconectado el sistema en ', '2019-03-08 23:57:14'),
(107, 1, 'se ha desconectado el sistema en ', '2019-03-09 03:23:22'),
(108, 6, 'se ha desconectado el sistema en ', '2019-03-09 04:49:54'),
(109, 1, 'se ha desconectado el sistema en ', '2019-03-09 04:53:28'),
(110, 6, 'se ha desconectado el sistema en ', '2019-03-09 05:07:58'),
(111, 1, 'se ha desconectado el sistema en ', '2019-03-09 05:10:25'),
(112, 6, 'se ha desconectado el sistema en ', '2019-03-09 05:12:26'),
(113, 1, 'se ha desconectado el sistema en ', '2019-03-09 07:41:10'),
(114, 1, 'se ha desconectado el sistema en ', '2019-03-09 12:58:12'),
(115, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:58:32'),
(116, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:59:19'),
(117, 1, 'se ha desconectado el sistema en ', '2019-03-09 23:59:27'),
(118, 1, 'se ha desconectado el sistema en ', '2019-03-10 00:00:22'),
(119, 1, 'se ha desconectado el sistema en ', '2019-03-10 00:00:34'),
(120, 1, 'se ha desconectado el sistema en ', '2019-03-10 01:33:16'),
(121, 5, 'se ha desconectado el sistema en ', '2019-03-10 01:46:17'),
(122, 5, 'se ha desconectado el sistema en ', '2019-03-10 05:54:18'),
(123, 5, 'se ha desconectado el sistema en ', '2019-03-11 12:37:07'),
(124, 5, 'se ha desconectado el sistema en ', '2019-03-11 13:12:30'),
(125, 1, 'se ha desconectado el sistema en ', '2019-03-12 04:02:11'),
(126, 1, 'se ha desconectado el sistema en ', '2019-03-12 08:26:01'),
(127, 3, 'se ha desconectado el sistema en ', '2019-03-12 08:38:10'),
(128, 1, 'se ha desconectado el sistema en ', '2019-03-12 09:10:43'),
(129, 5, 'se ha desconectado el sistema en ', '2019-03-12 12:33:46'),
(130, 0, 'se ha desconectado el sistema en ', '2019-03-12 12:51:49'),
(131, 5, 'se ha desconectado el sistema en ', '2019-03-31 19:59:15'),
(132, 5, 'se ha desconectado el sistema en ', '2019-04-02 11:38:59'),
(133, 5, 'se ha desconectado el sistema en ', '2019-04-04 11:41:47'),
(134, 5, 'se ha desconectado el sistema en ', '2019-04-04 16:01:10'),
(135, 0, 'se ha desconectado el sistema en ', '2019-04-05 18:15:40'),
(136, 5, 'se ha desconectado el sistema en ', '2019-04-06 10:36:44'),
(137, 5, 'se ha desconectado el sistema en ', '2019-04-13 12:32:33'),
(138, 5, 'se ha desconectado el sistema en ', '2019-04-15 11:45:20'),
(139, 5, 'se ha desconectado el sistema en ', '2019-04-15 21:55:45'),
(140, 5, 'se ha desconectado el sistema en ', '2019-04-15 22:13:42'),
(141, 5, 'se ha desconectado el sistema en ', '2019-04-16 11:58:00'),
(142, 5, 'se ha desconectado el sistema en ', '2019-04-16 18:48:57'),
(143, 5, 'se ha desconectado el sistema en ', '2019-04-16 22:39:40'),
(144, 5, 'se ha desconectado el sistema en ', '2019-04-16 23:41:18'),
(145, 5, 'se ha desconectado el sistema en ', '2019-04-17 21:20:15'),
(146, 5, 'se ha desconectado el sistema en ', '2019-04-17 21:28:21'),
(147, 5, 'se ha desconectado el sistema en ', '2019-04-18 09:40:21'),
(148, 5, 'se ha desconectado el sistema en ', '2019-04-18 20:00:53'),
(149, 0, 'se ha desconectado el sistema en ', '2019-04-18 20:00:59'),
(150, 5, 'se ha desconectado el sistema en ', '2019-04-18 23:16:01'),
(151, 5, 'se ha desconectado el sistema en ', '2019-04-18 23:16:38'),
(152, 5, 'se ha desconectado el sistema en ', '2019-04-19 07:47:43'),
(153, 5, 'se ha desconectado el sistema en ', '2019-04-21 09:08:54'),
(154, 5, 'se ha desconectado el sistema en ', '2019-04-21 19:56:32'),
(155, 7, 'se ha desconectado el sistema en ', '2019-04-21 22:30:24'),
(156, 5, 'se ha desconectado el sistema en ', '2019-04-22 23:02:23'),
(157, 5, 'se ha desconectado el sistema en ', '2019-04-22 23:37:21'),
(158, 5, 'se ha desconectado el sistema en ', '2019-04-23 11:40:35'),
(159, 5, 'se ha desconectado el sistema en ', '2019-05-01 12:04:50'),
(160, 5, 'se ha desconectado el sistema en ', '2019-05-02 10:12:30'),
(161, 5, 'se ha desconectado el sistema en ', '2019-05-02 12:30:32'),
(162, 5, 'se ha desconectado el sistema en ', '2019-05-04 12:10:46'),
(163, 5, 'se ha desconectado el sistema en ', '2019-05-04 22:20:56'),
(164, 5, 'se ha desconectado el sistema en ', '2019-05-07 22:22:45'),
(165, 5, 'se ha desconectado el sistema en ', '2019-05-07 22:24:13'),
(166, 8, 'se ha desconectado el sistema en ', '2019-05-08 12:37:35'),
(167, 8, 'se ha desconectado el sistema en ', '2019-05-08 12:37:46'),
(168, 5, 'se ha desconectado el sistema en ', '2019-06-06 19:55:16'),
(169, 5, 'se ha desconectado el sistema en ', '2019-06-06 20:04:23'),
(170, 5, 'se ha desconectado el sistema en ', '2019-06-06 21:29:35'),
(171, 5, 'se ha desconectado el sistema en ', '2019-06-08 01:49:35'),
(172, 5, 'se ha desconectado el sistema en ', '2019-06-15 01:41:48'),
(173, 5, 'se ha desconectado el sistema en ', '2019-06-15 20:17:22'),
(174, 5, 'se ha desconectado el sistema en ', '2019-06-17 12:26:46'),
(175, 5, 'se ha desconectado el sistema en ', '2019-06-17 12:40:53'),
(176, 5, 'se ha desconectado el sistema en ', '2019-06-17 12:45:34'),
(177, 5, 'se ha desconectado el sistema en ', '2019-06-17 13:10:45'),
(178, 5, 'se ha desconectado el sistema en ', '2019-06-18 00:09:22'),
(179, 5, 'se ha desconectado el sistema en ', '2019-06-18 12:58:27'),
(180, 5, 'se ha desconectado el sistema en ', '2019-06-19 01:00:17'),
(181, 5, 'se ha desconectado el sistema en ', '2019-06-19 01:36:36'),
(182, 5, 'se ha desconectado el sistema en ', '2019-06-20 00:29:38'),
(183, 5, 'se ha desconectado el sistema en ', '2019-06-21 16:38:12'),
(184, 5, 'se ha desconectado el sistema en ', '2019-06-21 21:00:10'),
(185, 9, 'se ha desconectado el sistema en ', '2019-06-21 21:10:28'),
(186, 5, 'se ha desconectado el sistema en ', '2019-06-22 01:24:14'),
(187, 5, 'se ha desconectado el sistema en ', '2019-06-22 01:30:22'),
(188, 5, 'se ha desconectado el sistema en ', '2019-06-22 02:12:25'),
(189, 5, 'se ha desconectado el sistema en ', '2019-06-22 02:17:59'),
(190, 5, 'se ha desconectado el sistema en ', '2019-06-22 13:24:30'),
(191, 5, 'se ha desconectado el sistema en ', '2019-06-22 15:25:07'),
(192, 5, 'se ha desconectado el sistema en ', '2019-06-22 16:26:13'),
(193, 5, 'se ha desconectado el sistema en ', '2019-07-07 21:17:34'),
(194, 5, 'se ha desconectado el sistema en ', '2019-07-15 12:31:28'),
(195, 5, 'se ha desconectado el sistema en ', '2019-07-26 20:12:44'),
(196, 5, 'se ha desconectado el sistema en ', '2019-07-27 15:06:57'),
(197, 5, 'se ha desconectado el sistema en ', '2019-09-12 10:06:14'),
(198, 5, 'se ha desconectado el sistema en ', '2019-09-12 11:14:40'),
(199, 5, 'se ha desconectado el sistema en ', '2019-09-12 12:03:34'),
(200, 5, 'se ha desconectado el sistema en ', '2019-09-12 12:04:20'),
(201, 5, 'se ha desconectado el sistema en ', '2019-09-12 12:08:32'),
(202, 5, 'se ha desconectado el sistema en ', '2019-09-12 17:53:36'),
(203, 5, 'se ha desconectado el sistema en ', '2019-09-12 17:54:58'),
(204, 5, 'se ha desconectado el sistema en ', '2019-09-12 17:57:12'),
(205, 5, 'se ha desconectado el sistema en ', '2019-09-12 17:57:32'),
(206, 5, 'se ha desconectado el sistema en ', '2019-09-12 18:02:39'),
(207, 5, 'se ha desconectado el sistema en ', '2019-09-12 18:05:41');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(200) NOT NULL,
  `num_pedido` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_sesion` int(100) NOT NULL,
  `id_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes`
--

CREATE TABLE `planes` (
  `id_plan` int(200) NOT NULL,
  `nombre_plan` varchar(200) NOT NULL,
  `tipo_tiempo` varchar(200) NOT NULL,
  `numero_tiempo` varchar(200) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `precio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_asistencia`
--

CREATE TABLE `plan_asistencia` (
  `id_plan_asistencia` int(200) NOT NULL,
  `fecha_asistencia` date NOT NULL,
  `plan_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_cliente`
--

CREATE TABLE `plan_cliente` (
  `id_plan_cliente` int(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `id_cliente` int(200) NOT NULL,
  `id_plan` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_pro` int(100) NOT NULL,
  `nombre_pro` varchar(100) NOT NULL,
  `descripcion` varchar(2000) NOT NULL,
  `unidad` varchar(100) NOT NULL,
  `precio_venta` varchar(100) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `stock` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal`
--

CREATE TABLE `temporal` (
  `id_temporal` int(200) NOT NULL,
  `plan` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal`
--

INSERT INTO `temporal` (`id_temporal`, `plan`, `cliente`) VALUES
(1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_pedido`
--

CREATE TABLE `temporal_pedido` (
  `id_temporal` int(200) NOT NULL,
  `id_pedido` varchar(200) NOT NULL,
  `id_producto` int(200) NOT NULL,
  `cantidad` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_productos`
--

CREATE TABLE `temporal_productos` (
  `id_temporal` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal_productos`
--

INSERT INTO `temporal_productos` (`id_temporal`, `cliente`) VALUES
(1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temporal_ventas_dia`
--

CREATE TABLE `temporal_ventas_dia` (
  `id_temporal` int(200) NOT NULL,
  `cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `temporal_ventas_dia`
--

INSERT INTO `temporal_ventas_dia` (`id_temporal`, `cliente`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `tipo` varchar(200) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `apellido` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `correo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `imagen`, `tipo`, `nombre`, `apellido`, `telefono`, `correo`) VALUES
(5, 'admin', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', '58384352_2392346464143161_9100511151573172224_n.jpg', 'administrador', 'Roy', 'Mustang', '', 'tusolutionweb@gmail.com'),
(6, 'empleado', 'a1Bz20ydqelm8m1wql21232f297a57a5a743894a0e4a801fc3', '', 'empleado', 'fredy', 'mercury', '345543', 'mercury@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_diaria`
--

CREATE TABLE `venta_diaria` (
  `id_venta_diaria` int(200) NOT NULL,
  `codigo` varchar(200) NOT NULL,
  `fecha` date NOT NULL,
  `id_cliente` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`id_caja`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  ADD PRIMARY KEY (`id_detalles`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `planes`
--
ALTER TABLE `planes`
  ADD PRIMARY KEY (`id_plan`);

--
-- Indices de la tabla `plan_asistencia`
--
ALTER TABLE `plan_asistencia`
  ADD PRIMARY KEY (`id_plan_asistencia`);

--
-- Indices de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  ADD PRIMARY KEY (`id_plan_cliente`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_pro`);

--
-- Indices de la tabla `temporal`
--
ALTER TABLE `temporal`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_pedido`
--
ALTER TABLE `temporal_pedido`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_productos`
--
ALTER TABLE `temporal_productos`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `temporal_ventas_dia`
--
ALTER TABLE `temporal_ventas_dia`
  ADD PRIMARY KEY (`id_temporal`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `venta_diaria`
--
ALTER TABLE `venta_diaria`
  ADD PRIMARY KEY (`id_venta_diaria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `id_caja` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalles_pedido`
--
ALTER TABLE `detalles_pedido`
  MODIFY `id_detalles` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id_empresa` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=208;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `planes`
--
ALTER TABLE `planes`
  MODIFY `id_plan` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_asistencia`
--
ALTER TABLE `plan_asistencia`
  MODIFY `id_plan_asistencia` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `plan_cliente`
--
ALTER TABLE `plan_cliente`
  MODIFY `id_plan_cliente` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_pro` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temporal`
--
ALTER TABLE `temporal`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temporal_pedido`
--
ALTER TABLE `temporal_pedido`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `temporal_productos`
--
ALTER TABLE `temporal_productos`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `temporal_ventas_dia`
--
ALTER TABLE `temporal_ventas_dia`
  MODIFY `id_temporal` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `venta_diaria`
--
ALTER TABLE `venta_diaria`
  MODIFY `id_venta_diaria` int(200) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
