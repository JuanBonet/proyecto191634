-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 23:57:29
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `productos_ID` int(3) NOT NULL,
  `nom_pro` varchar(100) NOT NULL,
  `des_pro` varchar(300) NOT NULL,
  `color_pro` varchar(15) NOT NULL,
  `precio_pro` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`productos_ID`, `nom_pro`, `des_pro`, `color_pro`, `precio_pro`) VALUES
(5, 'Alcancía de puerquito', 'Hecho de porcelana resistente al calor y frío, gran material de calidad.', 'rosa', '10.000'),
(6, 'Combo para cine', 'Ideal para alguna cita especial u entretenimiento.', 'X', '50.000'),
(7, 'Cereal integral', 'El mejor cereal con ingredientes 100% naturales.', 'X', '12.000'),
(8, 'Peluche de oso polar', 'Súper suave y perfecto para adornar tu casa o tu alcoba.', 'blanco', '25.000'),
(9, 'Set de manicure', 'Set De Manicure, Con Cremallera De 5Pzs, Mediano, Negro, Color negro.', 'negro', '20.000'),
(12, 'Tapabocas de tela para niños, pequeño', 'Elaborado con tela antifluido, que reduce el riesgo de exposicióna partículas suspendidas en el aire y fluidos corporales, gran cobertura facial que va desde el tabique hasta la barbilla, y con diseño ergonómico que se ajusta a la parte retroauricular demanera fácil y cómoda.', 'rosa', '9.000'),
(13, 'mug sesame street 350ml, mediano', 'Úsala para beber tus bebidas favoritas. Capacidad de 350 ml. | Color blanco. | Con diseño de los personajes de la serie. | Pertenece a la colección de productos de la serie animada Sesame Street. | Hecha de cerámica. Úsala para beber tus bebidas favoritas.\r\n\r\n', 'blanco', '10.000'),
(14, 'Cable de datos, android', '¿Andas fuera de casa y te quedaste sin batería en tu celular? No te preocupes tenemos el accesorio perfecto para ti, conoce el Cable De Datos USB a USB-C TPE Flexible Negro 1 m. | Con 1 metro de largo. | Hecho de FTP flexible. | Compatible con muchos dispositivos. | Va de USB a USB-C', 'negro', '15.000'),
(15, 'Carro', '4x4, 4 puertas, automático', 'rojo', '50.000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `tipo_usuario`) VALUES
(4, 'juan', 'juan', 'juan bonet', 1),
(6, 'usuario', 'usuario', 'usuario', 2),
(7, 'jose', 'jose', 'jose gomez', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`productos_ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `productos_ID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
