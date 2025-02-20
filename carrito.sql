-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-02-2024 a las 17:08:23
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
-- Base de datos: `carrito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `imagen` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `nombre`, `descripcion`, `imagen`) VALUES
(1, 'Computadoras', 'La categoría de Computadoras engloba una amplia gama de dispositivos diseñados para satisfacer diversas necesidades informáticas, desde el uso doméstico y educativo hasta aplicaciones profesionales y de gaming de alta demanda.', 'Labtop JP.jpg'),
(2, 'Telefonos', 'La categoría de teléfonos abarca una amplia gama de dispositivos móviles que se adaptan a las necesidades modernas de comunicación y entretenimiento.', 'Telefono Z.jpg'),
(3, 'Relojes', 'Explora relojes elegantes y funcionales, perfectos para el día a día y ajustados a tu presupuesto.', 'Reloj XDH.jpg'),
(4, 'Audifonos', 'Descubre nuestra selección de audífonos, desde modelos inalámbricos para libertad de movimiento hasta opciones con cancelación de ruido para una inmersión total en tu música.', 'Audifono con cable.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colore`
--

CREATE TABLE `colore` (
  `id` int(11) NOT NULL,
  `color` varchar(50) NOT NULL,
  `codigo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colore`
--

INSERT INTO `colore` (`id`, `color`, `codigo`) VALUES
(1, 'red', '#FF0000'),
(2, 'blue', '#0000ff'),
(3, 'black', '#000000'),
(4, 'gray', '#9b9b9b');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envios`
--

CREATE TABLE `envios` (
  `id_envio` int(11) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `cp` varchar(10) NOT NULL,
  `id_venta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `envios`
--

INSERT INTO `envios` (`id_envio`, `pais`, `company`, `direccion`, `estado`, `cp`, `id_venta`) VALUES
(1, '2', 'Propia', 'Noveno anillo', 'Santa Cruz', '0000', 3),
(2, '1', '', '', '', '', 4),
(3, '3', 'Propia', 'Calle alemana', 'Buenos Aires', '1212', 5),
(4, '1', '', '', '', '', 6),
(5, '3', 'personal', 'Cumavi', 'Santa Cruz', '000', 7),
(6, '1', '', '', '', '', 8),
(7, '1', '', '', '', '', 9),
(8, '1', '', '', '', '', 10),
(9, '2', 'Propia', 'Noveno anillo', 'Santa Cruz', '0000', 11),
(10, '2', 'Propia', 'Noveno anillo', 'Santa Cruz', '0000', 12),
(11, '2', 'Propia', 'Noveno anillo', 'Santa Cruz', '0000', 13),
(12, '1', '', '', '', '', 14),
(13, '2', 'Propia', 'Noveno anillo', 'S', '', 15),
(14, '1', 'Propia', 'Noveno anillo', 'Santa Cruz', '0000', 16);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `descripcion` text NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `inventario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `talla` varchar(100) NOT NULL,
  `color` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `precio`, `imagen`, `inventario`, `id_categoria`, `talla`, `color`) VALUES
(1, 'Audífonos con cable MX50', 'Los Audífonos MX50 con cable son una elección excelente para aquellos que buscan una experiencia auditiva inmersiva. Presentan una calidad de sonido detallada y equilibrada, con bajos robustos y agudos claros. Diseñados para una comodidad duradera, tienen almohadillas suaves y una construcción resistente. Su cable reforzado asegura una conexión confiable y duradera, perfecta para el uso diario en viajes, trabajo o para disfrutar de tu playlist favorita.', 50, 'Audifono con cable.jpg', 30, 4, '16.8', 'black'),
(2, 'Smartphone Z Pixel Max 128GB desbloqueado', 'El Smartphone Z Pixel Max de 128GB desbloqueado es un dispositivo de última generación que ofrece una experiencia de usuario excepcional con su potente procesador y amplio almacenamiento. Su cámara de alta resolución captura imágenes vívidas, y la pantalla de gran tamaño brinda una visualización clara y detallada. Con su batería de larga duración y conectividad rápida, es ideal para quienes necesitan rendimiento y fiabilidad.', 800, 'Telefono Z.jpg', 25, 2, '5.5', 'black'),
(3, 'JP Laptop para juegos de 15,6\" de 256GB', 'La Laptop JP para juegos de 15,6\" con disco duro de 256GB está diseñada para ofrecer una experiencia de juego superior. Cuenta con un procesador potente y gráficos avanzados que garantizan un rendimiento fluido y rápido en los juegos más exigentes. Su pantalla de alta definición ofrece imágenes nítidas y colores vivos, mientras que su almacenamiento de 256GB SSD asegura arranques rápidos y cargas de juego instantáneas. Ideal para jugadores que buscan velocidad y rendimiento en un diseño compacto y eficiente.', 800, 'Labtop JP.jpg', 1, 1, '15,6', 'gray'),
(4, 'FitWatch XDH reloj inteligente de fitness', 'El FitWatch XDH es un reloj inteligente centrado en la salud y el fitness, diseñado para los entusiastas del deporte y la actividad física. Este gadget tecnológico está equipado con múltiples sensores que monitorizan la frecuencia cardíaca, el conteo de pasos y la calidad del sueño. Su resistencia al agua y su duradera batería lo hacen perfecto para el uso diario y las sesiones intensas de entrenamiento. Con su interfaz amigable y su sincronización con dispositivos móviles, el FitWatch XDH es un compañero ideal para una vida activa y saludable.', 500, 'Reloj XDH.jpg', 50, 3, '36', 'black'),
(5, 'Laptop Pilates de 16\" y 24GB de RAM', 'La Laptop Pilates redefine la experiencia de la computación móvil con su pantalla táctil de 16 pulgadas, ofreciendo una visualización inmersiva y una interacción intuitiva. Equipada con 24GB de RAM, asegura un rendimiento excepcional para multitarea y aplicaciones exigentes. Ideal para profesionales creativos y gamers, esta laptop combina potencia y portabilidad, adaptándose a cualquier desafío con estilo y eficiencia. Su diseño elegante y ligero facilita la productividad en movimiento, convirtiéndola en la elección perfecta para quienes buscan lo último en tecnología.', 1000, 'Labtop Pilates.jpg', 30, 1, '16', 'black'),
(6, 'Laptop MSP de 14\" con 16 GB de RAM, gris', 'La Laptop MSP de 14 pulgadas, en su elegante acabado gris carbón, es una combinación perfecta de rendimiento y portabilidad. Con 16 GB de memoria, esta computadora es ideal para tareas exigentes y multitarea, ofreciendo una experiencia fluida tanto para profesionales como para estudiantes. Su diseño compacto y ligero la hace fácil de transportar, mientras que su potente configuración garantiza que pueda manejar aplicaciones pesadas y multitareas sin esfuerzo. Es una opción versátil para aquellos que valoran la eficiencia y el estilo.', 700, 'Laptop MSP.jpg', 22, 1, '14', 'gray'),
(7, 'JP Exmax Phantom, 5G, 16GB', 'El JP Exmax Phantom es un teléfono de vanguardia compatible con 5G, diseñado para los usuarios más exigentes. Con 16GB de RAM, este dispositivo promete un rendimiento excepcional, permitiendo multitareas sin esfuerzo y una experiencia de usuario suave. Ideal para juegos, aplicaciones pesadas y navegación rápida en internet, el Exmax Phantom se posiciona como una opción premium para aquellos que buscan velocidad, eficiencia y la última tecnología en telecomunicaciones. Su soporte 5G asegura la más rápida conexión a internet, marcando el comienzo de una nueva era en la comunicación móvil.', 900, 'Telefono JP.jpg', 30, 2, '5.5', 'black'),
(8, 'OVE Light Space 5G, 128GB', 'El OVE Light Space 5G redefine la experiencia móvil con su capacidad de almacenamiento de 128GB y conectividad 5G ultrarrápida. Este smartphone está diseñado para aquellos que valoran tanto el rendimiento como el estilo, ofreciendo una interfaz fluida y capacidad para multitareas intensivas sin sacrificar la eficiencia. Con su amplio almacenamiento, es perfecto para guardar todos tus recuerdos, aplicaciones y juegos sin preocupaciones. Prepárate para sumergirte en un mundo de entretenimiento y productividad sin límites con el OVE Light Space 5G.', 1000, 'Telefono OVE.jpg', 20, 2, '5.5', 'gray'),
(9, 'Fitboot fitness con seguimiento del ritmo', 'El Fitboot es un avanzado monitor de fitness diseñado para aquellos comprometidos con su bienestar. Con capacidades de seguimiento del ritmo cardíaco, este dispositivo es perfecto para monitorear tu salud y progreso durante el ejercicio. Es ideal para todo tipo de actividades físicas, permitiéndote mantener un registro preciso de tus pulsaciones para optimizar tus rutinas de entrenamiento. Su diseño cómodo y duradero asegura que puedas llevarlo en todo momento, convirtiéndolo en el compañero perfecto para tu viaje hacia un estilo de vida más saludable.', 200, 'Reloj fitness.jpg', 29, 3, '36', 'black'),
(10, 'Space Moon Smartwatch con cargador', 'El Space Moon Smartwatch redefine la interacción inteligente con su diseño innovador y tecnología de carga avanzada. Este reloj inteligente no solo te mantiene conectado con notificaciones y llamadas, sino que también monitorea tu salud y actividad física con precisión. Con su cargador único, ofrece una solución rápida y eficiente para mantener tu dispositivo siempre listo. Su diseño elegante combina funcionalidad y estilo, haciéndolo el complemento perfecto para cualquier atuendo y ocasión. Experimenta la conveniencia en su máxima expresión con el Space Moon Smartwatch.', 200, 'Reloj Moon.jpg', 31, 3, '36', 'gray'),
(11, 'Drums Pro audífonos inalámbricos sobre el oído', 'Los Drums Pro son audífonos inalámbricos sobre el oído diseñados para ofrecer una experiencia sonora superior. Con tecnología de cancelación de ruido activa, garantizan una inmersión total en tu música, bloqueando efectivamente los ruidos externos. Su conexión Bluetooth de alta calidad asegura una transmisión estable sin interrupciones. Con una batería de larga duración, estos audífonos son ideales para viajes largos, sesiones de estudio prolongadas o simplemente para disfrutar de tu playlist favorita sin ataduras. Su diseño ergonómico y almohadillas suaves prometen comodidad durante todo el día.', 600, 'Audifono Pro.jpg', 46, 4, '16.8', 'black'),
(12, 'Audífonos inalámbricos con cancelación del ruido', 'Los audífonos inalámbricos con cancelación de ruido ofrecen una experiencia auditiva de primera, bloqueando sonidos externos para una inmersión total en la música. Perfectos para ambientes ruidosos, permiten disfrutar de llamadas y melodías sin distracciones. Con una conexión Bluetooth estable, prometen comodidad y libertad de movimiento, siendo ideales para viajes, trabajo o ejercicio. Su diseño ergonómico y batería duradera aseguran horas de música continua, haciendo de estos audífonos una elección excelente para los amantes del sonido de calidad.', 200, 'Audifono inalambricos.jpg', 25, 4, '0', 'black');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_venta`
--

CREATE TABLE `productos_venta` (
  `id` int(11) NOT NULL,
  `id_venta` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `cantidad` double NOT NULL,
  `precio` double NOT NULL,
  `subtotal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `productos_venta`
--

INSERT INTO `productos_venta` (`id`, `id_venta`, `id_producto`, `cantidad`, `precio`, `subtotal`) VALUES
(1, 1, 3, 1, 800, 800),
(2, 1, 2, 1, 20, 20),
(3, 2, 3, 3, 800, 2400),
(4, 3, 3, 3, 800, 2400),
(5, 4, 3, 1, 800, 800),
(6, 4, 2, 1, 800, 800),
(7, 5, 11, 1, 600, 600),
(8, 6, 10, 1, 200, 200),
(9, 7, 3, 1, 800, 800),
(10, 8, 11, 1, 600, 600),
(11, 8, 12, 2, 200, 400),
(12, 9, 10, 1, 200, 200),
(13, 10, 11, 1, 600, 600),
(14, 11, 12, 3, 200, 600),
(15, 12, 10, 1, 200, 200),
(16, 13, 9, 1, 200, 200),
(17, 14, 10, 2, 200, 400),
(18, 15, 6, 3, 700, 2100),
(19, 15, 11, 1, 600, 600),
(20, 16, 11, 1, 600, 600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `img_perfil` varchar(300) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `telefono`, `email`, `password`, `img_perfil`, `nivel`) VALUES
(1, 'Rafael da Silva', '77778888', 'rafael@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(2, 'Rafael da Silva', '77778888', 'rafael@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(3, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(4, 'Herny Zapata', '+998813412', 'herny@gmail.com', 'bb5df327fb9e772517012a38c656ace29f6b80fc', '', ''),
(5, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(6, 'Rafa da Silva', '74516516', 'rafarl@gmail', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(7, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(8, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(9, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(10, 'Rafael da Silva', '75003192', 'rafaeljdasilva@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(11, 'Rafael da Silva', '', 'rafaeljdasilvam@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(12, 'Rafael da Silva', '75003192', 'rafaeljdasilvam@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', ''),
(13, ' ', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(14, 'Rafael da Silva', '', '', 'da39a3ee5e6b4b0d3255bfef95601890afd80709', '', ''),
(15, 'Rafael da Silva', '75003192', 'rafaeljdasilvam@gmail.com', '601f1889667efaebb33b8c12572835da3f027f78', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `id` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `id_usuario`, `total`, `fecha`) VALUES
(1, 1, 820, '2024-02-03 12:02:57'),
(2, 1, 2400, '2024-02-04 11:02:14'),
(3, 2, 2400, '2024-02-04 11:02:51'),
(4, 3, 1600, '2024-02-05 16:02:52'),
(5, 4, 600, '2024-02-05 16:02:23'),
(6, 5, 200, '2024-02-05 05:02:09'),
(7, 6, 800, '2024-02-05 08:02:01'),
(8, 7, 1000, '2024-02-05 11:02:09'),
(9, 8, 200, '2024-02-05 13:02:56'),
(10, 9, 600, '2024-02-06 05:02:38'),
(11, 10, 600, '2024-02-06 10:02:37'),
(12, 11, 200, '2024-02-06 10:02:22'),
(13, 12, 200, '2024-02-06 10:02:54'),
(14, 13, 400, '2024-02-06 10:02:02'),
(15, 14, 2700, '2024-02-06 09:02:21'),
(16, 15, 600, '2024-02-06 09:02:16');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `colore`
--
ALTER TABLE `colore`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `envios`
--
ALTER TABLE `envios`
  ADD PRIMARY KEY (`id_envio`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `colore`
--
ALTER TABLE `colore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `envios`
--
ALTER TABLE `envios`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `productos_venta`
--
ALTER TABLE `productos_venta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
