-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-09-2023 a las 22:27:08
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `podoclear`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `hora`
--

CREATE TABLE `hora` (
  `NOMBRE` varchar(15) NOT NULL,
  `APELLIDO` varchar(15) NOT NULL,
  `RUT` varchar(10) NOT NULL,
  `FECHA` varchar(10) NOT NULL,
  `HORA` varchar(5) NOT NULL,
  `MOTIVO` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `hora`
--

INSERT INTO `hora` (`NOMBRE`, `APELLIDO`, `RUT`, `FECHA`, `HORA`, `MOTIVO`) VALUES
('Daniel', 'Caro', '19514976-3', '2026-11-30', '11:00', 'lksdjlkdj'),
('Juan', 'Torres', '18668552-6', '2023-06-22', '12:00', 'Tengo las uñas largas'),
('scarlet', 'carcamo', '20273722-6', '2023-06-28', '12:00', 'Tengo una uña encarnada'),
('scarlet', 'carcamo', '20273722-6', '2023-06-21', '11:00', 'lajsdkajd'),
('kasjd', 'ajsd', '45879586-5', '2023-06-28', '11:00', 'askdlaksd'),
('añskdñask', 'lskñsdlkf', '65123546-5', '2023-06-27', '12:00', 'alsñalskd'),
('Pedro', 'pascal', '63526975-8', '2023-07-20', '11:00', 'askdlakjdlaskdj');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `RUT` varchar(10) NOT NULL,
  `NOMBRE` varchar(10) NOT NULL,
  `APELLIDO` varchar(15) NOT NULL,
  `EDAD` int(2) NOT NULL,
  `ENF_BASE` varchar(20) NOT NULL,
  `TELEFONO` int(9) NOT NULL,
  `DIRECCION` varchar(60) NOT NULL,
  `EMAIL` varchar(40) NOT NULL,
  `PRO_REAL` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`RUT`, `NOMBRE`, `APELLIDO`, `EDAD`, `ENF_BASE`, `TELEFONO`, `DIRECCION`, `EMAIL`, `PRO_REAL`) VALUES
('12345678-9', 'Peurba', 'prueba', 32, 'no', 0, 'no', 'no', ''),
('12521212-9', 'Maria Juan', 'Faundes', 40, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'a-s.,d-a.sd,-a.s,d-a.s,d'),
('13652456-3', 'PEPE', 'LASTARRIA', 36, 'DIABETES', 988780611, 'viña de mar', 'cualquiera@gmail.com', '18/06/2023:\r\nSe le realizo corte de uñas completo. \r\n----------------------------------------------------------------------------'),
('15675865-2', 'PEPA', 'Pig', 15, 'Rosacia', 956478524, 'su casa', 'pepapig@gmail.com', '18/06/2023:\r\nSe le cortaron las pezuñas.\r\n-----------------------------------------------------------------------------------------'),
('15965304-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965424-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965444-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965504-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965524-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965554-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965764-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965874-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('15965964-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('19514456-3', 'Javier', 'caro', 23, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19514976-3', 'Daniel', 'caro', 29, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19515896-3', 'Laura', 'caro', 26, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19516346-3', 'Vivi', 'caro', 25, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19516546-3', 'Mario', 'caro', 21, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19516926-3', 'Felipe', 'caro', 20, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('19518956-3', 'Frenaciso', 'caro', 29, 'niuna mi rey', 988780611, 'mi casa', 'aaa@aaa.com', 'se le cortaron las uñas al paciente'),
('20273722-6', 'llkjl', 'kjlkj', 45, 'laksdjlaksdj', 0, 'lkjalskdjalskdj', 'lkjalskdjlaksdjl', 'kjlklaskdlaksd'),
('21272150-3', 'carlos', 'carcamo', 20, 'no', 654792255, 'mi casa', 'laijdslaksdj', ''),
('46593268-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas'),
('63526975-8', 'pedro', 'pascal', 13, 'no', 88780611, 'viña de mar', 'admin@podoclear.com', 'Se le reliza '),
('63985214-9', 'JAviii', 'Torres', 45, 'NO tiene', 985632545, 'aqui', 'asd@asd.cl', 'Le hice varias cosas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `PASS` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID`, `EMAIL`, `PASS`) VALUES
(11, 'admin@podoclear.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(14, 'admin@podoclear.cl', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2'),
(16, 'profesor@duocuc.cl', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`RUT`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
