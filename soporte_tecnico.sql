-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-02-2017 a las 18:56:11
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `soporte_tecnico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `categoria` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime DEFAULT NULL,
  `status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `categoria`, `modified`, `created`, `status`) VALUES
(1, 'OFICINA', '2017-02-07 22:39:53', '2017-01-30 20:46:08', 1),
(2, 'RUTAS', '2017-02-07 22:39:48', '2017-01-30 20:46:08', 1),
(3, 'CARTÓN', '2017-02-07 22:39:46', '2017-01-30 20:46:08', 1),
(4, 'YORICAS', '2017-02-07 22:39:47', '2017-01-30 20:46:08', 1),
(5, 'TOYES', '2017-02-07 22:39:43', '2017-01-30 20:46:08', 1),
(6, 'TÉCNICOS', '2017-02-07 22:39:43', '2017-01-30 20:46:08', 1),
(7, 'EJECUTIVOS', '2017-02-01 18:28:47', '2017-01-30 20:46:08', 1),
(8, 'PRODUCCIÓN', '2017-02-07 05:14:38', '2017-02-06 22:14:38', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dire` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pobla` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `colonia` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `list_p` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `vende` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rfc` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `clave_r` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `adeuno` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `computadora`
--

CREATE TABLE `computadora` (
  `id` int(11) NOT NULL,
  `codpc` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `respon` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `obser` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `pro` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `tmp` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `py` int(1) NOT NULL,
  `ti` int(1) NOT NULL,
  `me` int(1) NOT NULL,
  `yb` int(1) NOT NULL,
  `ye` int(1) NOT NULL,
  `ytt` int(1) NOT NULL,
  `yv` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `foto` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `ytb` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) NOT NULL,
  `cant` int(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT NULL,
  `id_produc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lineas`
--

CREATE TABLE `lineas` (
  `id` int(11) NOT NULL,
  `linea` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lineas`
--

INSERT INTO `lineas` (`id`, `linea`, `status`, `created`, `modified`) VALUES
(1, 'FRITURAS', 1, '2016-12-15 22:53:36', '2017-02-01 16:38:43'),
(2, 'AGUA', 1, '2016-12-15 22:53:58', '2017-02-01 16:38:45'),
(3, 'CUARTO FRIO', 1, '2016-12-15 22:56:12', '2016-12-16 05:56:12'),
(4, 'SALSA CASTILLO', 1, '2016-12-17 20:46:04', '2016-12-18 03:46:04'),
(5, 'PAN', 1, '2016-12-17 20:47:03', '2016-12-18 03:47:03'),
(6, 'HARINAS', 1, '2016-12-17 23:39:13', '2016-12-17 22:39:23'),
(7, 'TORTILLAS', 1, '2016-12-19 16:35:05', '2016-12-19 23:35:05'),
(8, 'GRASAS', 1, '2016-12-19 16:35:20', '2017-02-01 17:00:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_precio`
--

CREATE TABLE `lista_precio` (
  `id` int(11) NOT NULL,
  `lista` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `clave` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descrip` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `descripc` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `unidad` varchar(255) COLLATE utf8_spanish_ci NOT NULL DEFAULT 'PIEZA',
  `linea` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) NOT NULL DEFAULT '1',
  `cant` int(11) NOT NULL DEFAULT '1',
  `impuesto` float DEFAULT '0',
  `lista1` float DEFAULT '0',
  `lista2` float DEFAULT '0',
  `lista3` float DEFAULT '0',
  `lista4` float DEFAULT '0',
  `lista5` float DEFAULT '0',
  `desc_lis_1` float DEFAULT '0',
  `desc_lis_2` float DEFAULT '0',
  `desc_lis_3` float DEFAULT '0',
  `desc_lis_4` float DEFAULT '0',
  `desc_lis_5` float DEFAULT '0',
  `existencia` int(11) DEFAULT '0',
  `desc` int(1) NOT NULL,
  `precio_com` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `clave`, `descrip`, `descripc`, `unidad`, `linea`, `created`, `modified`, `status`, `cant`, `impuesto`, `lista1`, `lista2`, `lista3`, `lista4`, `lista5`, `desc_lis_1`, `desc_lis_2`, `desc_lis_3`, `desc_lis_4`, `desc_lis_5`, `existencia`, `desc`, `precio_com`) VALUES
(1, 'SAL7', 'SALSA 7 MARES 24/150 ML ', 'SALSA 7 MARES ', 'PIEZA', 'SALSA CASTILLO', '2017-01-30 21:09:52', '2017-02-06 18:14:51', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(2, '789991223', 'HARINA SAN VICENTE ', 'HARINA SAN VICENTE', 'FARDO', 'HARINAS', '2017-02-04 18:59:02', '2017-02-06 18:14:50', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(3, 'MAS10', 'HARINA MASECA 10 KG', 'HARINA MASECA 10KG', 'FARDO', 'HARINAS', '2017-02-04 19:38:11', '2017-02-07 17:58:12', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(4, 'MASANT', 'MASECA ANTOJITOS C/10', 'MASECA ANTOJITOS C/10', 'FARDO', 'HARINAS', '2017-02-06 19:08:23', '2017-02-07 17:58:04', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(5, 'MIN', 'HARINA MINSA C/10 PIEZAS', 'HARINA MINSA C/10 PIEZAS', 'FARDO', 'HARINAS', '2017-02-06 19:09:10', '2017-02-07 02:09:10', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(6, 'MASTAL', 'MASECA PARA TAMAL C/10 PIEZAS', 'MASECA PARA TAMAL C/10 PIEZAS', 'FARDO', 'HARINAS', '2017-02-06 19:11:06', '2017-02-07 02:11:06', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(7, 'TOS20', 'TOSTADA C/20', 'TOSTADA C/20', 'PIEZA', 'FRITURAS', '2017-02-06 19:11:55', '2017-02-06 19:13:57', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(8, 'TOS50', 'TOSTADA C/50', 'TOSTADA C/50', 'PIEZA', 'FRITURAS', '2017-02-06 19:12:32', '2017-02-07 02:12:32', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(9, 'TOT200', 'TOTOPO DE 200GR', 'TOTOPO DE 200GR', 'PIEZA', 'FRITURAS', '2017-02-06 19:13:09', '2017-02-07 02:13:09', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(10, 'NAC200', 'NACHO DE 200GR', 'NACHO 200GR', 'PIEZA', 'FRITURAS', '2017-02-06 20:09:03', '2017-02-07 17:58:38', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(11, 'TOT450', 'TOTOPO DE 450GR', 'TOTOPO DE 450GR', 'PIEZA', 'FRITURAS', '2017-02-06 20:11:06', '2017-02-07 03:11:06', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL),
(12, '7503013797385', 'CHURRIELITO DE 120GR', 'CHURRIELITO DE 120GR', 'PIEZA', 'FRITURAS', '2017-02-07 19:15:28', '2017-02-08 02:15:28', 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `status` int(1) NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id`, `nombre`, `telefono`, `categoria`, `status`, `modified`, `created`) VALUES
(1, 'MONICA TETANCHOPO', '(642) 178-7440', 'YORICA', 1, '2017-02-07 18:05:59', '2017-01-30 18:29:40'),
(2, 'FRANCISCA CASTELO', '(642) 134-3536', 'OFICINA', 1, '2017-02-07 18:05:16', '2017-01-30 20:48:33'),
(3, 'TERESITA DE JESUS RODRIGUEZ ROJO', '(642) 117-8788', 'EJECUTIVOS', 1, '2017-02-07 18:06:08', '2017-01-31 01:54:07'),
(4, 'LUIS FERNANDO SAAVEDRA HERNANDEZ', '(642) 117-8744', 'TECNICOS', 1, '2017-02-07 18:05:39', '2017-02-01 18:24:09'),
(5, 'REYES LUCIA GIL YOCUPICIO', '(642) 853-9274', 'OFICINA', 1, '2017-02-07 05:13:33', '2017-02-06 22:13:33'),
(6, 'VANESSA GIOVANA MUMULMEA FLORES', '(642) 117-1334', 'PRODUCCIÓN', 1, '2017-02-07 05:16:10', '2017-02-06 22:16:10'),
(7, 'REFUGIO ESQUER (CUCO)', '(642) 114-2085', 'RUTAS', 1, '2017-02-07 05:56:42', '2017-02-06 22:56:42'),
(8, 'PAULA LAUREN RAMOS ROJO', '(642) 483-3428', 'OFICINA', 1, '2017-02-07 05:57:31', '2017-02-06 22:57:31'),
(9, 'ALVARO FELIX GAMEZ', '(642) 104-2881', 'RUTAS', 1, '2017-02-07 16:04:50', '2017-02-06 22:58:42'),
(10, 'JOEL FRANCISCO RODRIGUEZ ROJO', '(642) 114-1516', 'OFICINA', 1, '2017-02-07 06:00:46', '2017-02-06 23:00:46'),
(11, 'BENJAMIN BUSTILLOS SOTELO', '(642) 112-3225', 'RUTAS', 1, '2017-02-07 06:01:44', '2017-02-06 23:01:44'),
(12, 'MARCO ANTONIO AGUILAR ALAMEA', '(642) 116-8340', 'RUTAS', 1, '2017-02-07 06:02:24', '2017-02-06 23:02:24'),
(13, 'JOSE LUIS MEZA AGUILAR', '(642) 409-2344', 'RUTAS', 1, '2017-02-07 06:02:46', '2017-02-06 23:02:46'),
(14, 'FRANCISCO AGUILAR ALAMEA', '(642) 113-1896', 'RUTAS', 1, '2017-02-07 06:03:26', '2017-02-06 23:03:26'),
(15, 'LUCIA VALENZUELA MORENO', '(642) 136-6584', 'PRODUCCIÓN', 1, '2017-02-06 22:12:42', '2017-02-06 23:12:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varbinary(16) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(80) NOT NULL,
  `salt` varchar(40) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, 0x7f000001, 'administrator', '1ce2c7613dfdb540f608aa22bb767783c0ca06db', '9462e8eee0', 'admin@admin.com', '', 'p15W8Hzzshvv6EQOrZGud.491ef568bf50344db2', 1485988693, 'LSdCYftDA4', 1268889823, 1486507208, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `lineas`
--
ALTER TABLE `lineas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lista_precio`
--
ALTER TABLE `lista_precio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `lineas`
--
ALTER TABLE `lineas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `lista_precio`
--
ALTER TABLE `lista_precio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
