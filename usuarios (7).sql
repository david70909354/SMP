-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2024 a las 23:05:33
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos3`
--

CREATE TABLE `archivos3` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_original` varchar(1024) NOT NULL,
  `nombre_real` varchar(36) NOT NULL,
  `fecha_creacion` varchar(19) NOT NULL,
  `tamanio_bytes` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos5`
--

CREATE TABLE `archivos5` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre_original` varchar(1024) NOT NULL,
  `nombre_real` varchar(36) NOT NULL,
  `fecha_creacion` varchar(19) NOT NULL,
  `tamanio_bytes` bigint(20) UNSIGNED NOT NULL,
  `id_usuario` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos6`
--

CREATE TABLE `archivos6` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `ruta` varchar(1024) NOT NULL,
  `fecha_subida` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `archivos6`
--

INSERT INTO `archivos6` (`id`, `nombre`, `ruta`, `fecha_subida`) VALUES
(1, 'IMG_2602.jpg', 'uploads/IMG_2602.jpg', '2024-08-08 20:46:13'),
(2, 'IMG_0814.jpg', 'uploads/IMG_0814.jpg', '2024-08-08 21:41:02'),
(3, 'IMG_1083.jpg', 'uploads/IMG_1083.jpg', '2024-08-08 22:04:03'),
(4, 'diagrama-de-sistemas-relacion-del-individuo-con-el-entorno-ga9-2402015-26-aa3-ev01 (3).pdf', 'uploads/diagrama-de-sistemas-relacion-del-individuo-con-el-entorno-ga9-2402015-26-aa3-ev01 (3).pdf', '2024-08-08 22:40:55'),
(5, 'IMG_2542.jpg', 'uploads/IMG_2542.jpg', '2024-08-09 02:07:25'),
(6, 'MANUALES TECNICOS DE LA APLICACION.pdf', 'uploads/MANUALES TECNICOS DE LA APLICACION.pdf', '2024-08-09 02:34:49'),
(7, 'INFORME DE REQUERIMIENTOS-CASOS DE USO-IEEE830.docx', 'uploads/INFORME DE REQUERIMIENTOS-CASOS DE USO-IEEE830.docx', '2024-08-09 03:05:56'),
(8, 'CAPACITACION DE USUARIOS.pdf', 'uploads/CAPACITACION DE USUARIOS.pdf', '2024-08-09 20:17:30'),
(9, 'MANUALES TECNICOS DE LA APLICACION.pdf', 'uploads/MANUALES TECNICOS DE LA APLICACION.pdf', '2024-08-09 21:31:34'),
(10, 'Presentación implantacion de software.pdf', 'uploads/Presentación implantacion de software.pdf', '2024-08-12 21:46:29'),
(11, '136 APK.docx', 'uploads/136 APK.docx', '2024-08-13 18:37:04'),
(12, 'Bitacora 2 vb.xlsx', 'uploads/Bitacora 2 vb.xlsx', '2024-08-15 20:21:07'),
(13, 'Genealogías de 43 familias  imprimir.docx', 'uploads/Genealogías de 43 familias  imprimir.docx', '2024-08-16 01:06:49'),
(14, '8 Mapa mental.docx', 'uploads/8 Mapa mental.docx', '2024-08-19 20:52:42'),
(15, '39 Documento de plan de capacitación y acta de entrega del proyecto.docx', 'uploads/39 Documento de plan de capacitación y acta de entrega del proyecto.docx', '2024-08-23 02:42:13'),
(16, '34.5 Elabora documento técnicos y de  usuario del software.docx', 'uploads/34.5 Elabora documento técnicos y de  usuario del software.docx', '2024-08-26 20:26:39'),
(17, 'LIBRETO APLICACION MARINILLA.pptx', 'uploads/LIBRETO APLICACION MARINILLA.pptx', '2024-09-04 00:35:32'),
(18, '39.1 Documento de plan de capacitación y acta de entrega del proyecto.docx', 'uploads/39.1 Documento de plan de capacitación y acta de entrega del proyecto.docx', '2024-09-17 19:07:12'),
(19, '33 Documentación de plan de migración y respaldo de los datos del software.docx', 'uploads/33 Documentación de plan de migración y respaldo de los datos del software.docx', '2024-09-19 20:09:01'),
(20, 'Genealogías de 43 familias  imprimir.docx', 'uploads/Genealogías de 43 familias  imprimir.docx', '2024-09-26 16:00:54'),
(21, 'Genealogías de 43 familias  imprimir.docx', 'uploads/Genealogías de 43 familias  imprimir.docx', '2024-09-30 19:04:30'),
(22, 'Genealogías de 43 familias  imprimir.docx', 'uploads/Genealogías de 43 familias  imprimir.docx', '2024-10-02 01:42:12'),
(24, '20170519_211109.jpg', 'uploads/20170519_211109.jpg', '2024-10-05 01:28:18'),
(25, 'anaconda.mp4', 'uploads/anaconda.mp4', '2024-10-11 19:53:51'),
(26, 'Camino de Islitas V4 (1).docx', 'uploads/Camino de Islitas V4 (1).docx', '2024-10-13 20:14:58'),
(27, 'Bitacora 2 vb.xlsx', 'uploads/Bitacora 2 vb.xlsx', '2024-10-15 17:19:42'),
(28, 'Bitacora 6 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', 'uploads/Bitacora 6 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', '2024-10-17 16:55:19'),
(29, 'Bitacora 1 vb - copia.xlsx', 'uploads/Bitacora 1 vb - copia.xlsx', '2024-10-17 17:14:17'),
(30, 'Bitacora 4 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', 'uploads/Bitacora 4 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', '2024-10-17 17:31:25'),
(31, 'Bitacora 4 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', 'uploads/Bitacora 4 Pasantia David Rícardo Ramírez Gómez vs 2.xlsx', '2024-10-17 17:33:42'),
(32, 'Camino de Islitas V4 (1).docx', 'uploads/Camino de Islitas V4 (1).docx', '2024-10-17 17:36:19'),
(33, '1 Evidencia de producto.docx', 'uploads/1 Evidencia de producto.docx', '2024-10-29 23:00:21'),
(34, 'LA MUSICA EN MI VIDA.docx', 'uploads/LA MUSICA EN MI VIDA.docx', '2024-11-21 20:31:13'),
(35, 'Mejoras Públicas de Marinilla.docx', 'uploads/Mejoras Públicas de Marinilla.docx', '2024-11-21 20:36:46'),
(36, 'diagrama-de-flujo-sobre-las-instrucciones-de-un-proceso-relacionado-con-su-quehacer-laboral-ga5-240202501-aa1-ev01 (1).pdf', 'uploads/diagrama-de-flujo-sobre-las-instrucciones-de-un-proceso-relacionado-con-su-quehacer-laboral-ga5-240202501-aa1-ev01 (1).pdf', '2024-11-25 21:33:34'),
(37, 'Comprobante de pago en linea (1).pdf', 'uploads/Comprobante de pago en linea (1).pdf', '2024-11-25 22:04:40'),
(38, 'IMG_3241.MOV.jpg', 'uploads/IMG_3241.MOV.jpg', '2024-11-26 20:59:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_compartidos`
--

CREATE TABLE `archivos_compartidos` (
  `hash` int(11) NOT NULL,
  `id_archivo` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios6`
--

CREATE TABLE `usuarios6` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios6`
--

INSERT INTO `usuarios6` (`id`, `email`, `password`) VALUES
(1, 'jualgo@gmail.com', '$2y$10$O1/Xeufi6Iy0MJJTO7CPweWN6oidxsSlW3VIpPavZXGhJLMJgYzeS'),
(2, 'administrador@gmail.com', '$2y$10$Evg9sxxrWlv6c5EADWyqNe4sofaBeTYSqvJWVIJF1VZcA13alRNzi'),
(3, 'jualgo@gmail.com', '$2y$10$nDPUAOtK3H4p8jgSJgSeVuNs1UI/tg5W9/PBmPAagER9airnApL9O'),
(4, 'rormoreno@gmail.com', '$2y$10$bDE0N2DqaDum/AuNdPie8OUvEiqHLtnmsn4gywZw4DQv2l/ti1nmu'),
(5, 'rormoreno@gmail.com', '$2y$10$3zEcH/4jDWVklDpPhWIWW.5YHBtIfuntgbpzfktjN86ojSpzGLSye'),
(6, 'david@david.com', '$2y$10$masiceJsxFlHS6pH0O1TwOJDYj6kNZqlCr6bRgtUclkICyMEu7qVC'),
(7, 'jualgo1@gmail.com', '$2y$10$HRlCOb22dZ0cE4Sj3q9aQeWQhrPNrq4H3Nr9Zvo71QhNq1W.rXr7.'),
(8, 'will36x@gmail.com', '$2y$10$HkVFdiQbhWlaYpBR8kU6J./y7A/XaWyQREk14eOxmclbYOAUV3MIe'),
(9, 'economo@gmail.com', '$2y$10$.fRWTNtpEXdvBGLQtla0P.LOYbEtKuDBf9/XBOVPvQ6rE/zXIi62.'),
(10, 'caramioreg@gmail.com', '$2y$10$V8QPXVknernOp4Cgs11fuePapXosTdv.IadaQmRKYCfQXbszot5vy'),
(11, 'leonardo@gmail.com', '$2y$10$lLd2yIXdxeHJFXsf1DWcnenfJzxFAjkdER5jXCk0KeIb2iBWAs7Ae'),
(12, 'leonardo920@gmail.com', '$2y$10$nmlvuyxWW8lSC186wJoLs.er/LVELJpIy95ufMbWWGVoMCszLuAG2'),
(13, 'ramon@gmail.com', '$2y$10$G04DUMDtaA3DhgB1NidSnetXx.YM2MnR53LMe2ucEs8MGNFq.mmdO'),
(14, 'amigo123@gmail.com', '$2y$10$Kb4QBo4V17UZOnFL.hiezOe6tRBaxrmANKp1FuLbAJ38wUO1HlZvC'),
(15, 'gloria@gmail.com', '$2y$10$sJpAz61PhtdR.VWNoHjQ5eeWh21gzETGFJ5zZhC2dZ.lP.lXYUn0u'),
(16, 'lilian@gmail.com', '$2y$10$Ibg3U72.N9I08Fx2L.2RUu2pCD5Md4PLIOVL9lPmfPXeiIysslpyy'),
(17, 'paula@gmail.com', '$2y$10$bs6KizUQWzWfcJLLo444cejLNBaiFbvvS.OTK88Wkksvmy31Y4gVK'),
(18, 'rafael@gmail.com', '$2y$10$OIbuqRlGqjokMx4CgLMgsO2taE9zzTHMOxj9d80f8FDPKMcD0ydRa');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `archivos3`
--
ALTER TABLE `archivos3`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `archivos5`
--
ALTER TABLE `archivos5`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `archivos6`
--
ALTER TABLE `archivos6`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `archivos_compartidos`
--
ALTER TABLE `archivos_compartidos`
  ADD PRIMARY KEY (`hash`);

--
-- Indices de la tabla `usuarios6`
--
ALTER TABLE `usuarios6`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `archivos3`
--
ALTER TABLE `archivos3`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `archivos5`
--
ALTER TABLE `archivos5`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `archivos6`
--
ALTER TABLE `archivos6`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `archivos_compartidos`
--
ALTER TABLE `archivos_compartidos`
  MODIFY `hash` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios6`
--
ALTER TABLE `usuarios6`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `archivos3`
--
ALTER TABLE `archivos3`
  ADD CONSTRAINT `archivos3_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `archivos5`
--
ALTER TABLE `archivos5`
  ADD CONSTRAINT `archivos5_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
