-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2022 a las 12:30:26
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imaxdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL,
  `fechaHora` datetime DEFAULT NULL,
  `leido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`, `fechaHora`, `leido`) VALUES
(1, 27, 59, 'hola', NULL, 1),
(2, 27, 59, 'que onda', NULL, 1),
(3, 27, 59, 'como estas', NULL, 1),
(4, 27, 66, 'buenas que tal?', NULL, 1),
(5, 27, 66, 'quiero hacer una consulta', NULL, 1),
(6, 27, 66, 'sisisisisis', NULL, 1),
(7, 66, 27, 'sisisisis', NULL, 1),
(8, 66, 27, 'sisisissi', NULL, 1),
(9, 66, 27, 'hola', '2021-12-21 08:55:07', 1),
(10, 66, 27, 'que tal', '2021-12-21 08:55:28', 1),
(11, 66, 27, 'hola', '2021-12-21 09:07:02', 1),
(12, 66, 27, 'hola', '2021-12-21 09:07:04', 1),
(13, 27, 66, 'hola', '2021-12-21 09:08:29', 1),
(14, 27, 66, 'hola', '2021-12-21 09:08:30', 1),
(15, 27, 66, 'hola', '2021-12-21 09:08:32', 1),
(16, 27, 66, 'hola', '2021-12-21 09:08:33', 1),
(17, 27, 66, 'hola', '2021-12-21 09:08:35', 1),
(18, 27, 66, 'como andamos por ahi', '2021-12-21 09:09:15', 1),
(19, 27, 66, '??', '2021-12-21 09:09:17', 1),
(20, 27, 66, 'todo bien??', '2021-12-21 09:09:23', 1),
(21, 66, 27, 'si sr', '2021-12-21 09:26:14', 1),
(22, 66, 27, 'hola', '2021-12-21 09:26:18', 1),
(23, 66, 27, 'a', '2021-12-21 09:26:20', 1),
(24, 66, 27, 'a', '2021-12-21 09:26:22', 1),
(25, 66, 27, 'a', '2021-12-21 09:26:23', 1),
(26, 66, 27, 'a', '2021-12-21 09:26:25', 1),
(27, 66, 27, 'a', '2021-12-21 09:26:34', 1),
(28, 66, 27, 'a', '2021-12-21 09:26:36', 1),
(29, 66, 27, 'a', '2021-12-21 09:26:37', 1),
(30, 66, 27, 'a', '2021-12-21 09:26:38', 1),
(31, 66, 27, 'a', '2021-12-21 09:27:11', 1),
(32, 66, 27, 'd', '2021-12-21 09:27:12', 1),
(33, 66, 27, 'f', '2021-12-21 09:27:13', 1),
(34, 66, 27, 'r', '2021-12-21 09:27:14', 1),
(35, 66, 27, 'q', '2021-12-21 09:27:15', 1),
(36, 66, 27, 'w', '2021-12-21 09:27:16', 1),
(37, 66, 27, 'e', '2021-12-21 09:27:17', 1),
(38, 66, 27, 'r', '2021-12-21 09:27:17', 1),
(39, 66, 27, 't', '2021-12-21 09:27:18', 1),
(40, 66, 27, 'y', '2021-12-21 09:27:19', 1),
(41, 66, 27, 'u', '2021-12-21 09:27:20', 1),
(42, 27, 66, 'hola', '2021-12-21 09:30:33', 1),
(43, 27, 66, '}hola', '2021-12-21 09:30:35', 1),
(44, 27, 66, 'esto es una prueba', '2021-12-21 09:43:14', 1),
(45, 66, 27, 'weno', '2021-12-21 09:44:09', 1),
(46, 27, 66, 'hola', '2021-12-21 09:46:07', 1),
(47, 27, 66, 'hola', '2021-12-21 09:46:11', 1),
(48, 27, 66, 'hola', '2021-12-21 09:46:13', 1),
(49, 27, 66, 'hola', '2021-12-21 09:46:15', 1),
(50, 27, 66, 'hola', '2021-12-21 09:46:19', 1),
(51, 27, 66, 'hola', '2021-12-21 09:46:22', 1),
(52, 27, 66, 'hola', '2021-12-21 09:46:24', 1),
(53, 27, 66, 'hola', '2021-12-21 09:46:26', 1),
(54, 27, 66, 'hola', '2021-12-21 09:46:32', 1),
(55, 27, 66, 'j', '2021-12-21 09:46:39', 1),
(56, 27, 66, 'H', '2021-12-21 09:46:45', 1),
(57, 27, 66, 'k', '2021-12-21 09:46:52', 1),
(58, 27, 66, 's', '2021-12-21 09:47:58', 1),
(59, 66, 27, 'w', '2021-12-21 09:48:02', 1),
(60, 66, 27, 'w', '2021-12-21 09:48:02', 1),
(61, 66, 27, 'w', '2021-12-21 09:48:03', 1),
(62, 66, 27, 'q', '2021-12-21 09:48:03', 1),
(63, 66, 27, 'e', '2021-12-21 09:48:04', 1),
(64, 27, 66, 'j', '2021-12-21 09:48:47', 1),
(65, 66, 27, 'que tal', '2021-12-21 09:48:52', 1),
(66, 66, 27, 'todo bien', '2021-12-21 09:48:56', 1),
(67, 66, 27, 'espero que si', '2021-12-21 09:49:00', 1),
(68, 66, 27, 'a', '2021-12-21 09:49:24', 1),
(69, 66, 27, 's', '2021-12-21 09:49:27', 1),
(70, 66, 27, 'q', '2021-12-21 09:49:30', 1),
(71, 27, 66, 'p', '2021-12-21 09:58:44', 1),
(72, 66, 27, 'a', '2021-12-21 10:00:30', 1),
(73, 27, 66, 'd', '2021-12-21 10:00:35', 1),
(74, 27, 66, 'a', '2021-12-21 10:00:38', 1),
(75, 66, 27, '2', '2021-12-21 10:00:43', 1),
(76, 66, 27, 'd', '2021-12-21 10:00:46', 1),
(77, 66, 27, 's', '2021-12-21 10:03:24', 1),
(78, 27, 66, 's', '2021-12-21 10:03:28', 1),
(79, 27, 66, 'q', '2021-12-21 10:33:32', 0),
(80, 27, 49, 'hola', '2021-12-27 10:54:40', 0),
(81, 27, 49, 'que tal', '2021-12-27 10:54:48', 0),
(82, 49, 27, 'todo bien y vos?', '2021-12-27 10:56:14', 0),
(83, 27, 67, 'Hola', '2021-12-27 11:00:35', 0),
(84, 27, 67, 'Que tal ', '2021-12-27 11:00:41', 0),
(85, 27, 67, 'Todo bien ????????¿?', '2021-12-27 11:00:55', 0),
(86, 67, 27, 'si señorita', '2021-12-27 11:01:21', 0),
(87, 67, 27, 'en que le puedo ayudar?', '2021-12-27 11:01:38', 0),
(88, 27, 67, 'Buenas', '2021-12-27 11:43:09', 0),
(89, 67, 27, 'hola', '2021-12-27 11:44:22', 0),
(90, 27, 67, 'Si que onda', '2021-12-27 12:04:15', 0),
(91, 27, 67, 'Por acá todo bien pa', '2021-12-27 12:04:24', 0),
(92, 67, 27, 'hola reina', '2021-12-27 12:04:36', 0),
(93, 67, 27, 'aca tranquui', '2021-12-27 12:04:44', 0),
(94, 67, 27, 'esperando el turno en la cimica', '2021-12-27 12:04:58', 0),
(95, 67, 27, 'clinica', '2021-12-27 12:05:03', 0),
(96, 67, 27, 'paaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-12-27 12:05:07', 0),
(97, 67, 27, 'paaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-12-27 12:05:12', 0),
(98, 67, 27, 'popkkapksdjajsdajdjaljdaj aiojd oiajd oiajs doijaosdj oiasjd oiajsd a ', '2021-12-27 12:05:19', 0),
(99, 67, 27, 'dd', '2021-12-27 12:05:23', 0),
(100, 67, 27, 'd', '2021-12-27 12:05:23', 0),
(101, 67, 27, 'd', '2021-12-27 12:05:23', 0),
(102, 67, 27, 'd', '2021-12-27 12:05:24', 0),
(103, 67, 27, 'd', '2021-12-27 12:05:24', 0),
(104, 67, 27, 'd', '2021-12-27 12:05:24', 0),
(105, 67, 27, 'd', '2021-12-27 12:05:25', 0),
(106, 67, 27, 'a', '2021-12-27 12:05:25', 0),
(107, 67, 27, 'q', '2021-12-27 12:05:26', 0),
(108, 67, 27, 'e', '2021-12-27 12:05:26', 0),
(109, 67, 27, 'r', '2021-12-27 12:05:27', 0),
(110, 67, 27, 'we', '2021-12-27 12:05:27', 0),
(111, 27, 67, 'Hola', '2021-12-27 12:08:08', 0),
(112, 67, 27, 'hola', '2021-12-27 12:08:16', 0),
(113, 67, 27, 'ss', '2021-12-27 12:08:36', 0),
(114, 27, 67, 'Hola', '2021-12-27 12:10:58', 0),
(115, 27, 67, 'Ffd', '2021-12-27 12:11:15', 0),
(116, 67, 27, 'l', '2021-12-27 12:11:28', 0),
(117, 27, 67, 'Hooa', '2021-12-27 12:13:37', 0),
(118, 67, 27, 'hpña', '2021-12-27 12:13:40', 0),
(119, 27, 67, 'Si sra', '2021-12-27 12:13:47', 0),
(120, 67, 27, 'si sro', '2021-12-27 12:13:51', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nombreCompleto` varchar(150) CHARACTER SET utf8 NOT NULL,
  `dni` int(11) NOT NULL,
  `domicilio` varchar(150) NOT NULL,
  `user` varchar(150) NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `pass`, `nombreCompleto`, `dni`, `domicilio`, `user`, `tipo`, `status`, `img`) VALUES
(27, '', 'admin', 'ADMINISTRACION IMAX', 0, '', 'admin', 1, 'Desconectado', ''),
(28, 'gabrielaballato@hotmail.com', '34351341', 'Gabriela Ballato', 34351341, 'Balaguer 223 sur', 'Gabriela', 0, '', ''),
(30, '', '11000821', 'Vera Maria Alejandra', 11000821, 'alberdi 455', '11000821', 0, 'Desconectado', ''),
(49, '', '21660098', 'Mildred Obst', 21660098, '', '21660098', NULL, 'En línea', ''),
(52, '', '28097582', 'Francisca CÃ©spedes', 28097582, '', '28097582', NULL, '', ''),
(53, '', '16716687', 'Ramona Benitez', 16716687, '', '16716687', NULL, 'En línea', ''),
(54, '', '17828815', 'Lidia Ayala', 17828815, '', '17828815', NULL, '', ''),
(55, '', '26582194', 'MarÃ­a Magdalena GÃ³mez', 26582194, '', '26582194', NULL, 'Desconectado', ''),
(56, '', '24276682', 'Evelin Velastiqui', 24276682, '', '24276682', NULL, '', ''),
(57, '', '92982791', 'EspÃ­nola MarÃ­a Stella', 92982791, '', '92982791', NULL, '', ''),
(58, '', '21308443', 'Gonzalez, MarÃ­a AsunciÃ³n', 21308443, '', '21308443', NULL, '', ''),
(59, '', '4512568', 'CenturiÃ³n MarÃ­a Martina', 4512568, '', '4512568', NULL, 'Desconectado', ''),
(60, '', '23331200', 'Zavala Denis', 23331200, '', '23331200', NULL, '', ''),
(61, '', '24329327', 'TorrejÃ³n Claudia', 24329327, '', '24329327', NULL, '', ''),
(62, '', '11319801', 'Susana Lilian Reniero', 11319801, '', '11319801', NULL, '', ''),
(63, '', '12077261', 'Leandra Arguello', 12077261, '', '12077261', NULL, '', ''),
(64, '', '25013048', 'Fabricia FariÃ±a', 25013048, '', '25013048', NULL, '', ''),
(65, '', '93754093', 'Silvero Yolanda Hilda', 93754093, '', '93754093', NULL, '', ''),
(66, '', '17210640', 'Gonzalez Blanca', 17210640, '', '17210640', NULL, 'Desconectado', ''),
(67, '', '20101484', 'Brizuela MarÃ­a Ãngela', 20101484, '', '20101484', NULL, 'En línea', ''),
(68, '', '18897771', 'MarÃ­a Elena BogarÃ­n Bobadilla', 18897771, '', '18897771', NULL, '', ''),
(69, '', '6510528', 'Sandoval Aida', 6510528, '', '6510528', NULL, '', ''),
(70, '', '3798405', 'Liliana Cardozo Enciso', 3798405, '', '3798405', NULL, '', ''),
(71, '', '92485887', 'Prudencia LeÃ³n Sosa', 92485887, '', '92485887', NULL, '', ''),
(72, '', '10432533', 'Leguiza Magdalena', 10432533, '', '10432533', NULL, '', ''),
(73, '', '26707291', 'Marta Elizabeth Ramos', 26707291, '', '26707291', NULL, '', ''),
(74, '', '28391859', 'Patricia Beatriz Mendes', 28391859, '', '28391859', NULL, '', ''),
(75, '', '35789314', 'Cinthia Gonzalez', 35789314, '', '35789314', NULL, '', ''),
(76, '', '13128149', 'Graciela Campuzano', 13128149, '', '13128149', NULL, '', ''),
(77, '', '18443250', 'InÃ©s Vera de Mareco', 18443250, '', '18443250', NULL, '', ''),
(78, '', '37535288', 'Mirta RocÃ­o Figueredo', 37535288, '', '37535288', NULL, '', ''),
(79, '', '13604661', 'Gaona Celina', 13604661, '', '13604661', NULL, '', ''),
(80, '', '34936945', 'MagalÃ­ Martinez', 37936945, '', '34936945', NULL, '', ''),
(81, '', '17750378', 'Valdez Arminda', 17750378, '', '17750378', NULL, '', ''),
(82, '', '28455814', 'Lilian Benitez', 28455814, '', '28455814', NULL, '', ''),
(83, '', '17828854', 'Crecencia Fretes', 17828854, '', '17828854', NULL, '', ''),
(84, '', '12250571', 'Benita Penayo de Aguilar', 12250571, '', '12250571', NULL, '', ''),
(85, '', '30193857', 'Lisa Acosta', 30193857, '', '30193857', NULL, '', ''),
(86, '', '14950444', 'Heidrich Zulma', 14950444, '', '14950444', NULL, '', ''),
(87, '', '13116648', 'Irma Ãngela AcuÃ±a', 13116648, '', '13116648', NULL, '', ''),
(88, '', '10503491', 'Delfina Silva', 10503491, '', '10503491', NULL, '', ''),
(89, '', '25949663', 'Laura Patricia Acosta', 25949663, '', '25949663', NULL, '', ''),
(90, '', '14560416', 'Albina Morinigo', 14560416, '', '14560416', NULL, '', ''),
(91, '', '11000821', 'MarÃ­a Alejandra Vera', 11000821, '', '11000821', NULL, '', ''),
(92, '', '21309750', 'Irma Graciela OtazÃº', 21309750, '', '21309750', NULL, '', ''),
(93, '', '94971185', 'Matilde Ojeda', 94971185, '', '94971185', NULL, '', ''),
(94, '', '16591095', 'MarÃ­a Teresa Ortiz', 16591095, '', '16591095', NULL, '', ''),
(95, '', '29783071', 'Lourdes Elizabeth Francou', 29783071, '', '29783071', NULL, '', ''),
(96, '', '18097765', 'MarÃ­a Saturnina Villalba', 18097765, '', '18097765', NULL, '', ''),
(97, '', '4945941', 'MarÃ­a de los Ãngeles Rejala', 4945941, '', '4945941', NULL, '', ''),
(98, '', '16090847', 'Ofelia Morel', 16090847, '', '16090847', NULL, '', ''),
(99, '', '27155481', 'Lorenza Francisca kentner', 27155481, '', '27155481', NULL, '', ''),
(100, '', '22055838', 'Clementina Zaracho', 22055838, '', '22055838', NULL, '', ''),
(101, '', '24679140', 'Tania karina Dlugoszweski', 24679140, '', '24679140', NULL, '', ''),
(102, '', '16279622', 'Teresa DÃ¡valos', 16279622, '', '16279622', NULL, '', ''),
(103, '', '13879833', 'Irma Morinigo', 13879833, '', '13879833', NULL, '', ''),
(104, '', '21755537', 'Nancy Quiroga', 21755537, '', '21755537', NULL, '', ''),
(105, '', '16090654', 'Estela Beatriz Alvarenga', 16090654, '', '16090654', NULL, '', ''),
(106, '', '17675130', 'Herminda Gladys Castillo', 17675130, '', '17675130', NULL, '', ''),
(107, '', '12773245', 'Olga Beatriz Rivero', 12773245, '', '12773245', NULL, '', ''),
(108, '', '14191223', 'Nilda Oviedo', 14191223, '', '14191223', NULL, '', ''),
(109, '', '92707546', 'Eulogia Ojeda', 92707546, '', '92707546', NULL, '', ''),
(110, '', '32075228', 'Carolina Schultheins', 32075228, '', '32075228', NULL, '', ''),
(111, '', '24276624', 'Mabel Rosso', 24276624, '', '24276624', NULL, '', ''),
(112, '', '25013426', 'Claudia Patricia Meza', 25013426, '', '25013426', NULL, '', ''),
(113, '', '16257341', 'Atanancia SimbrÃ³n', 16257341, '', '16257341', NULL, '', ''),
(114, '', '24344505', 'Laura Ayala', 24344505, '', '24344505', NULL, '', ''),
(115, '', '12741763', 'Pabla Cuevas de Aquino', 12741763, '', '12741763', NULL, '', ''),
(116, '', '93954477', 'Natalia Zarate InsfrÃ¡n de Sosa', 93954477, '', '93954477', NULL, '', ''),
(117, '', '18097700', 'Myriam LÃ³pez de Fretes', 18097700, '', '18097700', NULL, '', ''),
(118, '', '27021796', 'MarÃ­a Elena Benitez de Lovera', 27021796, '', '27021796', NULL, '', ''),
(119, '', '33315227', 'Valeria Amarilla', 33315227, '', '33315227', NULL, '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
