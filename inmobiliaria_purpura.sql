-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-07-2018 a las 18:03:33
-- Versión del servidor: 10.1.31-MariaDB
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inmobiliaria_purpura`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristicas`
--

CREATE TABLE `caracteristicas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristicas`
--

INSERT INTO `caracteristicas` (`id`, `nombre`, `icono`, `created_at`, `updated_at`) VALUES
(1, 'Habitaciones', 'habitacion.png', NULL, NULL),
(2, 'Baños', 'banios.png', NULL, NULL),
(3, 'Area', 'area.png', NULL, NULL),
(4, 'Garaje', 'garaje.png', NULL, NULL),
(5, 'Estrato', 'estrato.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caracteristica_inmueble`
--

CREATE TABLE `caracteristica_inmueble` (
  `id` int(10) UNSIGNED NOT NULL,
  `caracteristica_id` int(10) UNSIGNED NOT NULL,
  `inmueble_id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `caracteristica_inmueble`
--

INSERT INTO `caracteristica_inmueble` (`id`, `caracteristica_id`, `inmueble_id`, `cantidad`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, NULL, NULL),
(2, 2, 2, 1, NULL, NULL),
(3, 3, 2, 300, NULL, NULL),
(4, 4, 2, 0, NULL, NULL),
(5, 5, 2, 2, NULL, NULL),
(6, 1, 3, 2, NULL, NULL),
(7, 2, 3, 1, NULL, NULL),
(8, 3, 3, 200, NULL, NULL),
(9, 4, 3, 0, NULL, NULL),
(10, 5, 3, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `nombre_completo`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, 'jefferson bahamon cuevas', 'calle 13 # 0 - 31, motilones', '3125271579', '2018-07-02 22:22:40', '2018-07-02 22:22:40'),
(2, 'jefferson bahamon cuevas', 'calle 13 # 0 - 31, motilones', '3125271579', '2018-07-02 22:25:33', '2018-07-02 22:25:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_adicionals`
--

CREATE TABLE `detalle_adicionals` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inmueble_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `detalle_adicionals`
--

INSERT INTO `detalle_adicionals` (`id`, `descripcion`, `inmueble_id`, `created_at`, `updated_at`) VALUES
(1, 'baños privados', 2, '2018-07-02 20:42:28', '2018-07-02 20:42:28'),
(2, 'espacio para asados', 3, '2018-07-02 22:34:34', '2018-07-02 22:34:34'),
(3, 'servicio de vigilancia', 3, '2018-07-02 22:34:34', '2018-07-02 22:34:34'),
(4, 'sdasdasdad', 3, '2018-07-02 22:34:34', '2018-07-02 22:34:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagens`
--

CREATE TABLE `imagens` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inmueble_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `imagens`
--

INSERT INTO `imagens` (`id`, `titulo`, `nombre`, `inmueble_id`, `created_at`, `updated_at`) VALUES
(3, 'actualizadossssssssssss', 'propertys/y0Sf73lCglvrtwJMZLENdxh3ol7IYc8aqVY3vEIZ.jpeg', 2, '2018-07-02 21:12:32', '2018-07-02 22:08:49'),
(4, 'df sdfdsf dsfdsf ds f', 'propertys/0RRN0obzv4YBCPNTv3DPsgm1sagb63QNFUpIBcTU.png', 2, '2018-07-02 21:38:41', '2018-07-02 21:38:41'),
(5, 'zona frontal de la casa', 'propertys/stlDNPqgRlOnm0Or2TS3hX3WGOn1D1XUJCHrN2H9.jpeg', 3, '2018-07-02 22:39:05', '2018-07-02 22:39:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inmuebles`
--

CREATE TABLE `inmuebles` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` int(11) NOT NULL,
  `promocionar` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `oferta` char(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zona` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `ubicacion` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `propietario_id` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '000000000',
  `tipo_inmueble_id` int(10) UNSIGNED NOT NULL,
  `tipo_servicio_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `inmuebles`
--

INSERT INTO `inmuebles` (`id`, `nombre`, `descripcion`, `valor`, `promocionar`, `oferta`, `zona`, `imagen`, `ubicacion`, `propietario_id`, `tipo_inmueble_id`, `tipo_servicio_id`, `created_at`, `updated_at`) VALUES
(2, 'inmueble en promocion en los patios', 'inmueble ubicado en la parte alta de los patios', 50000000, '1', '1', 'Oriente', 'propertys/GvMqtqwzvPmiClRSiaYt6GJr4TbutMkmFvncN4ch.png', 'calle 3 # 34n - 67 los patios', '1116789304', 1, 1, '2018-06-27 07:42:49', '2018-07-02 21:39:25'),
(3, 'casa en arriendo motilones', 'se arrienda casa en motilones, excelente estado, con escrituras y todos los impuestos pagados, se puede dar a cuotas', 400000, '1', '1', 'Sur', 'propertys/tPCv6nNN8GjHzRU3H1foYOg0oGePO9uCRHVEPS7J.jpeg', 'calle 3 #  0 - 31 motilones', '1116789304', 1, 3, '2018-07-02 22:32:39', '2018-07-03 01:05:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_05_12_205005_create_caracteristicas_table', 1),
(2, '2018_05_12_205023_create_clientes_table', 1),
(3, '2018_05_12_205255_create_tipo_inmuebles_table', 1),
(4, '2018_05_12_205323_create_tipo_servicios_table', 1),
(5, '2018_05_12_210036_create_propietarios_table', 1),
(6, '2018_05_12_215529_create_inmuebles_table', 1),
(7, '2018_05_12_215610_create_solicituds_table', 1),
(8, '2018_05_12_233716_crate_detalle_adicionals_table', 1),
(9, '2018_05_12_234944_crate_detalle_imagens_table', 1),
(10, '2018_05_13_000641_create_caracteristica_inmueble_table', 1),
(11, '2018_05_28_004314_create_users_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `documento` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_completo` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicituds`
--

CREATE TABLE `solicituds` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mensaje` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `inmueble_id` int(10) UNSIGNED NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `solicituds`
--

INSERT INTO `solicituds` (`id`, `fecha`, `mensaje`, `inmueble_id`, `cliente_id`, `created_at`, `updated_at`) VALUES
(1, '02/07/2018', 'd fsd fsdf sf sd fsdf sdf sf', 2, 2, '2018-07-02 22:25:33', '2018-07-02 22:25:33');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_inmuebles`
--

CREATE TABLE `tipo_inmuebles` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_inmuebles`
--

INSERT INTO `tipo_inmuebles` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'casa', '2018-06-27 07:29:03', '2018-06-27 07:29:03'),
(2, 'local', '2018-06-27 07:30:32', '2018-06-27 07:30:32'),
(3, 'apartamento', '2018-06-27 07:30:46', '2018-06-27 07:30:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_servicios`
--

CREATE TABLE `tipo_servicios` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_servicios`
--

INSERT INTO `tipo_servicios` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'Venta', '2018-06-27 07:25:43', '2018-06-27 07:25:43'),
(3, 'arriendo', '2018-06-27 07:30:58', '2018-06-27 07:30:58');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `user`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'purpura', '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', '5xJMVQGYpSSLoOyX4awG3O5158qfhML8SFf2Yeqhlbn04MJSvBXCYKZeuswP', NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `caracteristica_inmueble`
--
ALTER TABLE `caracteristica_inmueble`
  ADD PRIMARY KEY (`id`,`caracteristica_id`,`inmueble_id`),
  ADD KEY `caracteristica_id` (`caracteristica_id`),
  ADD KEY `inmueble_id` (`inmueble_id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `detalle_adicionals`
--
ALTER TABLE `detalle_adicionals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detalle_adicionals_inmueble_id_foreign` (`inmueble_id`);

--
-- Indices de la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `imagens_inmueble_id_foreign` (`inmueble_id`);

--
-- Indices de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `inmuebles_propietario_id_foreign` (`propietario_id`),
  ADD KEY `inmuebles_tipo_inmueble_id_foreign` (`tipo_inmueble_id`),
  ADD KEY `inmuebles_tipo_servicio_id_foreign` (`tipo_servicio_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`documento`);

--
-- Indices de la tabla `solicituds`
--
ALTER TABLE `solicituds`
  ADD PRIMARY KEY (`id`),
  ADD KEY `solicituds_inmueble_id_foreign` (`inmueble_id`),
  ADD KEY `cliente_id` (`cliente_id`);

--
-- Indices de la tabla `tipo_inmuebles`
--
ALTER TABLE `tipo_inmuebles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_servicios`
--
ALTER TABLE `tipo_servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `caracteristicas`
--
ALTER TABLE `caracteristicas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `caracteristica_inmueble`
--
ALTER TABLE `caracteristica_inmueble`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalle_adicionals`
--
ALTER TABLE `detalle_adicionals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `imagens`
--
ALTER TABLE `imagens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `solicituds`
--
ALTER TABLE `solicituds`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_inmuebles`
--
ALTER TABLE `tipo_inmuebles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_servicios`
--
ALTER TABLE `tipo_servicios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `caracteristica_inmueble`
--
ALTER TABLE `caracteristica_inmueble`
  ADD CONSTRAINT `caracteristica_inmueble_ibfk_1` FOREIGN KEY (`caracteristica_id`) REFERENCES `caracteristicas` (`id`),
  ADD CONSTRAINT `caracteristica_inmueble_ibfk_2` FOREIGN KEY (`inmueble_id`) REFERENCES `inmuebles` (`id`);

--
-- Filtros para la tabla `detalle_adicionals`
--
ALTER TABLE `detalle_adicionals`
  ADD CONSTRAINT `detalle_adicionals_inmueble_id_foreign` FOREIGN KEY (`inmueble_id`) REFERENCES `inmuebles` (`id`);

--
-- Filtros para la tabla `imagens`
--
ALTER TABLE `imagens`
  ADD CONSTRAINT `imagens_inmueble_id_foreign` FOREIGN KEY (`inmueble_id`) REFERENCES `inmuebles` (`id`);

--
-- Filtros para la tabla `inmuebles`
--
ALTER TABLE `inmuebles`
  ADD CONSTRAINT `inmuebles_tipo_inmueble_id_foreign` FOREIGN KEY (`tipo_inmueble_id`) REFERENCES `tipo_inmuebles` (`id`),
  ADD CONSTRAINT `inmuebles_tipo_servicio_id_foreign` FOREIGN KEY (`tipo_servicio_id`) REFERENCES `tipo_servicios` (`id`);

--
-- Filtros para la tabla `solicituds`
--
ALTER TABLE `solicituds`
  ADD CONSTRAINT `solicituds_ibfk_1` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `solicituds_inmueble_id_foreign` FOREIGN KEY (`inmueble_id`) REFERENCES `inmuebles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
