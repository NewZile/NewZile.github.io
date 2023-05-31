-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2023 a las 13:35:30
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `php_login_base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE DATABASE php_login_base;
USE php_login_base;

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `permisos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `permisos`) VALUES
(21, 'raul', 'rauldelarosa815@gmail.com', '$2y$10$HNnLE1kTJ5YirEdEFMbXTOPmvVXBno2hJMmjtfLVOiXO6RZUQBxuu', 'admin'),
(22, 'raul', 'rauldelarosariquelme@hotmail.com', '$2y$10$2eyoRKbAte8MlSRM2d3Xsetu5ZBFAJo5MzclTue/D52MLr9ngneSW', 'usuario'),
(23, 'raul', 'nfjdinfidsn@gmail.com', '$2y$10$QFYYjbTpdRg6LrCgas0hP.46LgZda5ApTCgMgpoitACcT8/HUbnVC', 'usuario'),
(24, 'raul', 'rauldelarosa815@gmail.com', '$2y$10$Pwhf7PIdfOJJ.jwp8GIK/.1jvBbXdVnXA5H0wvI1/JyLKsrd6LZn2', 'usuario'),
(25, 'raul', 'rauldelarosa815@gmail.com', '$2y$10$0B8wj.N/s7Hbw1csEQFwputuFfTIcdK4sAQEesqOLyN2RjjHquzam', 'usuario'),
(26, 'raul', 'rauldelarosa815@gmail.com', '$2y$10$RPfetih5mXoUwnbO2xg8nuKyQxaFUYF1ljKUbBevnt9o3kT4AGIjq', 'usuario'),
(27, 'raul', 'rauldelarosa815@gmail.com', '$2y$10$RjpF7AgKfyqdUnqcJop8N.j1eGOga1wKS8QE91CMrOATpCkBRuBdu', 'usuario');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;