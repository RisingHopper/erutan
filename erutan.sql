-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 21-02-2024 a las 17:58:38
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `erutan`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `forum_comments`
--

CREATE TABLE `forum_comments` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `id_comment_parent` int NOT NULL,
  `comment_text` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int NOT NULL,
  `name` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` tinytext COLLATE utf8mb4_general_ci NOT NULL,
  `phone` tinytext COLLATE utf8mb4_general_ci NOT NULL,
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `newsletter_listado_mensajes`
--

CREATE TABLE `newsletter_listado_mensajes` (
  `titulo` varchar(200) NOT NULL,
  `asunto` tinytext NOT NULL,
  `mensaje` longtext NOT NULL,
  `imagen` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `img` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_es` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `title_en` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description_es` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `description_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `text_es` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `text_en` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `slug_es` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `slug_en` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` tinytext CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `active` tinyint NOT NULL DEFAULT '0',
  `published_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ranking_users`
--

CREATE TABLE `ranking_users` (
  `id` int NOT NULL,
  `id_user` int NOT NULL,
  `points` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_web`
--

CREATE TABLE `users_web` (
  `id` int NOT NULL,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `username` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `phone` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profile_picture` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `country` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `city` varchar(250) COLLATE utf8mb4_general_ci NOT NULL,
  `lvl` tinyint NOT NULL DEFAULT '1',
  `verification` tinyint(1) NOT NULL DEFAULT '0',
  `send_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `views`
--

CREATE TABLE `views` (
  `id` int NOT NULL,
  `ip` int NOT NULL DEFAULT '0',
  `visit_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `views`
--

INSERT INTO `views` (`id`, `ip`, `visit_date`) VALUES
(1, 1, '2024-02-16 14:21:44'),
(2, 1, '2024-02-16 14:27:53'),
(3, 1, '2024-02-16 14:28:15'),
(4, 1, '2024-02-18 12:56:35'),
(5, 1, '2024-02-18 12:56:35'),
(6, 1, '2024-02-18 12:58:45'),
(7, 1, '2024-02-18 13:00:06'),
(8, 1, '2024-02-18 13:00:24'),
(9, 1, '2024-02-18 13:14:53'),
(10, 1, '2024-02-18 13:16:48'),
(11, 1, '2024-02-18 13:17:05'),
(12, 1, '2024-02-18 13:18:25'),
(13, 1, '2024-02-18 13:18:46'),
(14, 1, '2024-02-18 13:20:04'),
(15, 1, '2024-02-18 13:28:32'),
(16, 1, '2024-02-18 13:29:21'),
(17, 1, '2024-02-18 13:30:50'),
(18, 1, '2024-02-18 13:32:31'),
(19, 1, '2024-02-18 13:33:40'),
(20, 1, '2024-02-18 13:34:50'),
(21, 1, '2024-02-18 13:35:09'),
(22, 1, '2024-02-18 13:36:12'),
(23, 1, '2024-02-18 13:36:30'),
(24, 1, '2024-02-18 13:36:44'),
(25, 1, '2024-02-18 13:43:52'),
(26, 1, '2024-02-18 16:43:12'),
(27, 1, '2024-02-18 16:43:47'),
(28, 1, '2024-02-18 16:44:15'),
(29, 1, '2024-02-18 16:45:06'),
(30, 1, '2024-02-18 16:45:18'),
(31, 1, '2024-02-18 16:45:30'),
(32, 1, '2024-02-18 16:46:28'),
(33, 1, '2024-02-18 16:48:59'),
(34, 1, '2024-02-18 19:25:50'),
(35, 1, '2024-02-18 19:31:06'),
(36, 1, '2024-02-18 19:32:32'),
(37, 1, '2024-02-18 19:33:53'),
(38, 1, '2024-02-18 19:36:20'),
(39, 1, '2024-02-18 19:36:29'),
(40, 1, '2024-02-18 19:36:36'),
(41, 1, '2024-02-18 19:37:11'),
(42, 1, '2024-02-18 19:37:38'),
(43, 1, '2024-02-18 19:37:39'),
(44, 1, '2024-02-18 19:37:48'),
(45, 1, '2024-02-18 19:40:06'),
(46, 1, '2024-02-18 19:40:18'),
(47, 1, '2024-02-18 19:53:32'),
(48, 1, '2024-02-18 19:53:33'),
(49, 1, '2024-02-18 19:53:37'),
(50, 1, '2024-02-18 22:56:06'),
(51, 1, '2024-02-18 22:58:21'),
(52, 1, '2024-02-18 22:58:25'),
(53, 1, '2024-02-18 22:58:36'),
(54, 1, '2024-02-18 22:58:52'),
(55, 1, '2024-02-18 23:02:31'),
(56, 1, '2024-02-18 23:04:06'),
(57, 1, '2024-02-18 23:04:59'),
(58, 1, '2024-02-18 23:07:40'),
(59, 1, '2024-02-18 23:07:42'),
(60, 1, '2024-02-18 23:07:49'),
(61, 1, '2024-02-18 23:08:21'),
(62, 1, '2024-02-18 23:08:26'),
(63, 1, '2024-02-18 23:08:33'),
(64, 1, '2024-02-18 23:09:10'),
(65, 1, '2024-02-18 23:09:11'),
(66, 1, '2024-02-18 23:09:21'),
(67, 1, '2024-02-18 23:09:28'),
(68, 1, '2024-02-18 23:09:37'),
(69, 1, '2024-02-18 23:10:39'),
(70, 1, '2024-02-18 23:10:47'),
(71, 1, '2024-02-18 23:10:52'),
(72, 1, '2024-02-18 23:11:06'),
(73, 1, '2024-02-18 23:11:07'),
(74, 1, '2024-02-18 23:11:25'),
(75, 1, '2024-02-18 23:11:28'),
(76, 1, '2024-02-18 23:11:34');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ranking_users`
--
ALTER TABLE `ranking_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users_web`
--
ALTER TABLE `users_web`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `forum_comments`
--
ALTER TABLE `forum_comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `ranking_users`
--
ALTER TABLE `ranking_users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users_web`
--
ALTER TABLE `users_web`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `views`
--
ALTER TABLE `views`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `forum_comments`
--
ALTER TABLE `forum_comments`
  ADD CONSTRAINT `forum_comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users_web` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `ranking_users`
--
ALTER TABLE `ranking_users`
  ADD CONSTRAINT `ranking_users_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users_web` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
