-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-05-2021 a las 12:28:09
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `main_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `author` varchar(50) NOT NULL,
  `comment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `author`, `comment`) VALUES
(1, '2021-05-21 10:24:52', 'David', '100% recomendado! El corte de pelo ecónomico y muy profesional, además del trato al cliente que tienen. Mi peluquero de confianza a partir de ahora.'),
(2, '2021-05-21 10:25:03', 'Marc Rosello', 'Excelente corte. La barbería muy acogedora y Toni un gran profesional. Ya he encontrado barbero en mi barrio!'),
(3, '2021-05-21 10:26:27', 'Jaume Camprubí Esteve', 'Lo conozco desde hace algunos años, muy buen profesional. Tengo una barba \"dificil\" y el resultado siempre es excelente. El corte de pelo es genial, el local siempre esta limpio, se esmera en recoger los pelos que han caido durante el corte. Poder reservar hona mediante aplicacion, es un acierto.'),
(4, '2021-05-21 10:26:36', 'Eric S', 'Muy contento de haber dado con Toni, es un gran profesional y se nota en los detalles que le pone a su trabajo. Me encanta el corte y volveré 100%'),
(5, '2021-05-21 10:26:47', 'Felipe Aragay', 'Gran profesional !. Fui por primera vez a la peluquería recomendado por otra persona y quede encantado con el trato de Toni, que me aconsejó muy bien en el momento del corte y quedé muy contento con el servicio. Sin duda volveré...');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
