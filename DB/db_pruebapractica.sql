-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-01-2024 a las 17:31:08
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_pruebapractica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `tipo` enum('Administrativo','Administrativo-Operativo','Operativo') NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `ap_paterno` varchar(60) NOT NULL,
  `ap_materno` varchar(60) NOT NULL,
  `sexo` enum('Femenino','Masculino') NOT NULL,
  `email` varchar(254) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `codigo_postal` varchar(5) NOT NULL,
  `colonia` varchar(60) NOT NULL,
  `delegacion` varchar(60) NOT NULL,
  `estado` varchar(60) NOT NULL,
  `status` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `fecha_registro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `password`, `tipo`, `nombre`, `ap_paterno`, `ap_materno`, `sexo`, `email`, `telefono`, `codigo_postal`, `colonia`, `delegacion`, `estado`, `status`, `fecha_registro`) VALUES
(1, 'juli12asdasd', '$2y$10$upk8Fm8NHizY8KQ/jhR3mOm/SSJ.Q4Si5KWubcJ.mouKjRFjSJdQ2', 'Administrativo-Operativo', 'Julio', 'Gozales', 'Ramirez', 'Femenino', 'juliozaaks@gmail.com', '5517844172', '07550', 'Providencia', 'GAM', 'CDMX', 'Inactivo', '2024-01-27 23:46:52');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`),
  ADD UNIQUE KEY `usuario_UNIQUE` (`usuario`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
