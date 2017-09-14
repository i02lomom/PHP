-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-09-2017 a las 20:16:04
-- Versión del servidor: 5.5.41
-- Versión de PHP: 5.5.30-1+deb.sury.org~precise+1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sabiogc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE IF NOT EXISTS `administradores` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(25) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `pwd` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id`, `usuario`, `pwd`) VALUES
(3, 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `categoria` varchar(25) NOT NULL,
  PRIMARY KEY (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`categoria`) VALUES
('Arte'),
('Ciencia'),
('Deportes'),
('Entretenimiento'),
('Geografía'),
('Historia'),
('Informática'),
('Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expcategorias`
--

CREATE TABLE IF NOT EXISTS `expcategorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idExperto` int(11) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `i1expcategorias` (`idExperto`,`categoria`),
  KEY `f2_categorias` (`categoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=206 ;

--
-- Volcado de datos para la tabla `expcategorias`
--

INSERT INTO `expcategorias` (`id`, `idExperto`, `categoria`) VALUES
(199, 1, 'Arte'),
(200, 1, 'Ciencia'),
(201, 1, 'Deportes'),
(202, 1, 'Entretenimiento'),
(203, 1, 'Geografía'),
(204, 1, 'Historia'),
(205, 1, 'Informática'),
(49, 3, 'Arte'),
(50, 3, 'Ciencia'),
(51, 3, 'Deportes'),
(52, 3, 'Entretenimiento'),
(53, 3, 'Informática'),
(54, 3, 'Literatura'),
(40, 4, 'Arte'),
(41, 4, 'Ciencia'),
(42, 4, 'Deportes'),
(62, 7, 'Arte'),
(147, 9, 'Entretenimiento'),
(146, 10, 'Literatura'),
(101, 11, 'Deportes'),
(102, 11, 'Entretenimiento'),
(103, 11, 'Geografía'),
(104, 11, 'Historia'),
(105, 11, 'Informática'),
(106, 11, 'Literatura'),
(148, 12, 'Arte'),
(149, 12, 'Ciencia'),
(150, 12, 'Deportes'),
(151, 12, 'Entretenimiento'),
(152, 12, 'Historia'),
(153, 12, 'Informática'),
(154, 12, 'Literatura'),
(184, 21, 'Arte'),
(185, 21, 'Ciencia'),
(186, 21, 'Deportes'),
(187, 21, 'Entretenimiento'),
(188, 21, 'Geografía'),
(189, 21, 'Historia'),
(190, 21, 'Informática'),
(191, 21, 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expertos`
--

CREATE TABLE IF NOT EXISTS `expertos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `usuario` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `validada` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Volcado de datos para la tabla `expertos`
--

INSERT INTO `expertos` (`id`, `nombre`, `usuario`, `password`, `email`, `validada`) VALUES
(1, 'Miguel Angel López', 'miguel', '*A9F6D996241EC23A304D63505345D0755B6F5799', 'i02lomom@gmail.com', 1),
(3, 'culoju_admin', 'culoju_admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin@admin', 1),
(4, 'culoju_oscar', 'culoju_oscar', '*3CE46DD83967B3A132C4C53DF554F8EF94A2E72A', 'oscar@oscar.es', 1),
(5, 'Miguel Zamora', 'maze', '*6C66323E83EC5A36F73326C518E06A97082CFFD7', 'migue_95_zb@hotmail.com', 1),
(7, 'Roberto Carlos', 'roberto', '*FA98D4E3FFA828CDA3F674CD9B9383D4D7B0FBD5', 'r.carlosfloresgomez@gmail.com', 1),
(8, 'Administrador', 'admin', '*4ACFE3202A5FF5CF467898FC58AAB1D615029441', 'admin@admin.com', 2),
(9, 'Estela Muñoz Cordón', 'estela', '*2037330E0A0B66645568B885F48AF03C6C59D7EB', 'estela@gmil.com', 1),
(10, 'Tony Luque Bravo', 'tony', '*A41E4CE84B23E6A08E9C7A3864850DCAE83057F2', 'tonyluque@gmail.com', 1),
(11, 'Oscar Heredia Tartajo', 'oschertar', '*FAA45135DB6DBC47D85E8AADD5F3C2107E0BFFB1', 'oschertar@gmail.com', 1),
(12, 'Total Usuario Absoluto', 'total', '*50A8A671137166E91200BD4AEFEFBC43A52FAC55', 'total@gmail.com', 1),
(21, 'Lucas Márquez Muñoz', 'lucas', 'lucas', 'ladamadelfuegohelado@gmail.com', 1),
(30, 'jose', 'jose', '*9B7E9CB5C7418FF658BE5C710AC2A3688DFAABF8', 'jose@jose.com', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `niveles`
--

CREATE TABLE IF NOT EXISTS `niveles` (
  `Nivel` varchar(25) NOT NULL,
  PRIMARY KEY (`Nivel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `niveles`
--

INSERT INTO `niveles` (`Nivel`) VALUES
('Difícil'),
('Fácil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE IF NOT EXISTS `preguntas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pregunta` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `Objeto` varchar(256) COLLATE utf8_spanish_ci NOT NULL,
  `tipoObjeto` enum('Imagen','Vídeo','Audio','') COLLATE utf8_spanish_ci NOT NULL,
  `categoria` varchar(25) CHARACTER SET latin1 NOT NULL,
  `nivel` varchar(25) CHARACTER SET latin1 NOT NULL,
  `idExperto` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `f1categorias` (`categoria`),
  KEY `f2niveless` (`nivel`),
  KEY `f3expertos` (`idExperto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=1015 ;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `pregunta`, `Objeto`, `tipoObjeto`, `categoria`, `nivel`, `idExperto`) VALUES
(1, 'Número de equipos de la primera división española de fútbol', ' ', '', 'Deportes', 'Fácil', 1),
(2, 'Número de equipos de la segunda división española de fútbol', '', '', 'Deportes', 'Fácil', 1),
(3, '¿Cuántas ligas ha ganado el Córdoba CF?', '', '', 'Deportes', 'Fácil', 1),
(4, '¿Cómo se llama la liga de baloncesto más famosa?', '', '', 'Deportes', 'Fácil', 1),
(5, 'Torneo de tenis que se juega en París', 'tenis.jpg', 'Imagen', 'Deportes', 'Fácil', 1),
(6, 'Número de mundiales de F1 de Fernando Alonso', '', '', 'Deportes', 'Fácil', 1),
(7, '¿Cuántos JJOO ha ganado la selección española de baloncesto?', 'baloncesto.jpg', 'Imagen', 'Deportes', 'Fácil', 1),
(8, 'Número de equipos que jugarán el mundial de fútbol a partir de 2026', '', '', 'Deportes', 'Fácil', 1),
(9, '¿Dónde se disputa el Rally Dakar en la actualidad?', 'continentes.jpg', 'Imagen', 'Deportes', 'Fácil', 1),
(10, 'Atleta con más medallas ganadas en los JJOO', '', '', 'Deportes', 'Fácil', 1),
(11, 'Nadador con más medallas en los JJOO', '', '', 'Deportes', 'Fácil', 1),
(14, '¿Qué resultado se dio en este partido?', 'golamalta.mp4', 'Vídeo', 'Deportes', 'Difícil', 1),
(15, 'Nombre de este periodista deportivo', 'deportes1.mp3', 'Audio', 'Deportes', 'Difícil', 1),
(51, '¿Quién vivía en el 221B de Backer Street?', '', '', 'Arte', 'Fácil', 1),
(52, '¿Qué profesión tenía Hércules Poiriot en las novelas de Agatha Christie?', '', '', 'Arte', 'Fácil', 1),
(53, '¿Qué obra de mármol de Miguel Ángel se encuentra en la Basílica de San Pedro?', '', '', 'Arte', 'Fácil', 1),
(54, '¿Quién fue Antonio Lucio Vivaldi?', '', '', 'Arte', 'Fácil', 1),
(55, '¿Quién pintó La Capilla Sixtina?', '', '', 'Arte', 'Fácil', 1),
(56, '¿Qué filósofo dijo ‘solo sé que no sé nada’?', '', '', 'Arte', 'Fácil', 1),
(57, '¿A quién está dedicada la torre más alta de la Sagrada Familia de Gaudí, aún pendiente de construcción?', '', '', 'Arte', 'Difícil', 1),
(58, '¿Cuál es el género teatral intermedio entre la comedia y la tragedia?', '', '', 'Arte', 'Fácil', 1),
(59, '¿De qué material está hecho un saxofón?', '', '', 'Arte', 'Fácil', 1),
(60, '¿Quién es el autor de la novela ‘Crimen y Castigo ‘?', '', '', 'Arte', 'Fácil', 1),
(61, '¿Cómo se llama el arte japones de la papiroflexia?', '', '', 'Arte', 'Fácil', 1),
(62, '¿Que escultura es la que aparece en la fotografía?', 'imagenPregunta62.jpg', 'Imagen', 'Arte', 'Fácil', 1),
(63, '¿Qué artista aparece retratado en “Las Meninas”?', '', '', 'Arte', 'Fácil', 1),
(251, '¿Quién es la mascota de SEGA?', '', '', 'Entretenimiento', 'Fácil', 1),
(252, '¿Qué animal es la mascota de Jazmín en Aladdin?', '', '', 'Entretenimiento', 'Fácil', 1),
(253, '¿Qué personaje de La Que Se Avecina dice: Me has hecho el lío?', '', '', 'Entretenimiento', 'Fácil', 1),
(254, '¿En qué Distrito vivía Katniss en Los Juegos Del Hambre?', '', '', 'Entretenimiento', 'Fácil', 1),
(255, '¿Que facción escogió Tris en Divergente?', '', '', 'Entretenimiento', 'Fácil', 1),
(256, '¿Como se llama el robot alcohólico de Futurama?', '', '', 'Entretenimiento', 'Fácil', 1),
(257, '¿Cuál fue la primera película de Fast & Furious desarrollada en Tokio?', '', '', 'Entretenimiento', 'Fácil', 1),
(258, '¿De qué trabajaba Ted Mosby de Cómo Conocí a Vuestra Madre?', '', '', 'Entretenimiento', 'Fácil', 1),
(259, '¿Quién protagonizó la pelicula Eduardo Manos Tijeras?', '', '', 'Entretenimiento', 'Fácil', 1),
(260, '¿De qué grupo es esta canción?', 'audio260.mp3', 'Audio', 'Entretenimiento', 'Fácil', 1),
(261, '¿Quién es este Actor?', 'imagen261.jpg', 'Imagen', 'Entretenimiento', 'Fácil', 1),
(262, '¿De qué juego es este vídeo?', 'video262.mp4', 'Vídeo', 'Entretenimiento', 'Fácil', 1),
(263, '¿Qué actor protagonizó Grease?', '', '', 'Entretenimiento', 'Fácil', 1),
(264, '¿A que familia pertenecía Dobby en Harry Potter?', '', '', 'Entretenimiento', 'Fácil', 1),
(265, '¿Como se llama el vendedor de comics en los Simpson?', '', '', 'Entretenimiento', 'Fácil', 1),
(351, '¿Qué equipo de fútbol ganó la Liga Española 2015/2016?', '', '', 'Deportes', 'Fácil', 1),
(352, '¿Cómo se llama el portero ganador del trofeo Zamora 2015/2016?', '', '', 'Deportes', 'Fácil', 1),
(353, '¿Quién ganó la medalla de oro en los últimos JJOO(2016) en la categoría femenina de bádminton?', '', '', 'Deportes', 'Fácil', 1),
(354, '¿Qué equipo de baloncesto ha sido el último ganador de la Euroliga 2016?', '', '', 'Deportes', 'Fácil', 1),
(355, '¿En qué año ganó el mundial la Selección Española de Fútbol?', '', '', 'Deportes', 'Fácil', 1),
(356, '¿A qué club de fútbol español pertenece este escudo?', 'imagenPregunta356.jpg', 'Imagen', 'Deportes', 'Fácil', 1),
(357, '¿Qué famoso futbolista realizó este grito?', 'sonidoPregunta357.mp3', 'Audio', 'Deportes', 'Fácil', 1),
(358, 'Visualiza atentamente el video, ¿En qué año ocurrió la escena que se muestra?', 'videoPregunta358.mp4', 'Vídeo', 'Deportes', 'Fácil', 1),
(359, '¿Cuál de los siguientes deportes no es un deporte olímpico?', '', '', 'Deportes', 'Fácil', 1),
(360, 'En el waterolo, ¿cuántos jugadores debe de tener un equipo sobre el agua?', '', '', 'Deportes', 'Fácil', 1),
(361, '¿Quién fue el abanderado español en los Juegos Olímpicos de Barcelona 92?', '', '', 'Deportes', 'Fácil', 1),
(362, 'Según la revista Forbes, ¿Quién es el deportista mejor pagado de la historia?', '', '', 'Deportes', 'Fácil', 1),
(363, '¿Cuál es la competición deportiva que generó más ingresos en 2016?', '', '', 'Deportes', 'Fácil', 1),
(364, '¿Cuál es el fichaje más caro de la historia del fútbol?', '', '', 'Deportes', 'Fácil', 1),
(365, '¿En qué ciudad se celebrarán los JJOO 2020?', '', '', 'Deportes', 'Fácil', 1),
(401, '¿Qué animal quería ser domesticado por El Principito?', '', '', 'Arte', 'Fácil', 1),
(402, '¿Con qué escritor del Siglo de Oro estuvo enfrentado Luis de Góngora?', '', '', 'Arte', 'Fácil', 1),
(403, '¿A qué generación pertenece García Lorca?', '', '', 'Arte', 'Fácil', 1),
(404, '¿Cómo se llama el perro de Obélix?', '', '', 'Arte', 'Fácil', 1),
(405, '¿Cuál es la autora de: Lo que el viento se llevó?', '', '', 'Arte', 'Fácil', 1),
(406, '¿De dónde era Diego Velázquez?', '', '', 'Arte', 'Fácil', 1),
(407, '¿Quién es el autor de La Celestina?', '', '', 'Arte', 'Fácil', 1),
(408, '¿Qué ingeniero y arquitecto valenciano contruyó el puente del Alamillo de Sevilla?', '', '', 'Arte', 'Fácil', 1),
(409, '¿Quién escribió Don Juan Tenorio?', '', '', 'Arte', 'Fácil', 1),
(410, '¿Con que filme el director Alfonso Cuarón ganó un premio Oscar 2014?', '', '', 'Arte', 'Fácil', 1),
(411, '¿Cómo despertó el principe a la Bella Durmiente?', '', '', 'Arte', 'Fácil', 1),
(412, '¿Quién hizo la obra La vida es sueño?', '', '', 'Arte', 'Fácil', 1),
(413, '¿Qué odia Mafalda?', '', '', 'Arte', 'Fácil', 1),
(414, '¿Gato con guantes...?', '', '', 'Arte', 'Fácil', 1),
(415, '¿Cómo se llama a la gente que no posee magia en la saga de Harry Potter?', '', '', 'Arte', 'Fácil', 1),
(416, '¿Cuál fue el género más cultivado por los autores de la generación del 27?', '', '', 'Arte', 'Fácil', 1),
(417, '¿Quién es el autor de El retrato de Dorian Gray?', '', '', 'Arte', 'Fácil', 1),
(418, '¿Quién compuso ésto?', 'audio418.mp3', 'Audio', 'Arte', 'Fácil', 1),
(419, '¿Qué cuadro es el que aparece en la imagen?', 'imagen419.jpg', 'Imagen', 'Arte', 'Fácil', 1),
(420, '¿Qué tipo de arte se muestra en el vídeo?', 'video420.mp4', 'Vídeo', 'Arte', 'Fácil', 1),
(421, '¿Quién es el personaje de la imagen?', 'picasso.jpg', 'Imagen', 'Arte', 'Fácil', 1),
(1000, 'Los osos panda son:', 'Panda-info-and images 04.jpg', 'Imagen', 'Arte', 'Difícil', 3),
(1001, 'Borges fue :', '220px-Jorge_Luis_Borges_1951,_by_Grete_Stern.jpg', 'Imagen', 'Literatura', 'Difícil', 3),
(1002, '¿A qué país pertenece esta bandera?', 'imagen1002.jpg', 'Imagen', 'Geografía', 'Fácil', 11),
(1004, 'Personaje de la foto', 'bill.jpeg', 'Imagen', 'Informática', 'Fácil', 19),
(1008, '¿Qué dispositivo hacía este sonido?', 'audio1008.mp3', 'Audio', 'Informática', 'Fácil', 11),
(1010, '¿De qué grupo es esta canción?', 'audio1010.mp3', 'Audio', 'Entretenimiento', 'Fácil', 11),
(1012, '¿A qué planeta quiere viajar el hombre por primera vez?', 'planetas.jpg', 'Imagen', 'Ciencia', 'Fácil', 21),
(1013, '¿En qué deporte se utiliza lo que se ve en la imagen?', 'imagen1013.jpg', 'Imagen', 'Deportes', 'Fácil', 11),
(1014, 'Planeta más cercano al Sol', '', '', 'Ciencia', 'Fácil', 21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `respuestas`
--

CREATE TABLE IF NOT EXISTS `respuestas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `respuesta` varchar(250) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `idPregunta` int(11) NOT NULL,
  `valida` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `f1preguntas` (`idPregunta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=597 ;

--
-- Volcado de datos para la tabla `respuestas`
--

INSERT INTO `respuestas` (`id`, `respuesta`, `idPregunta`, `valida`) VALUES
(52, 'Sherlock Holmes', 51, 1),
(53, 'Truman Capote', 51, 0),
(54, 'Philip Marlowe', 51, 0),
(55, 'Arthur Conan Doyle', 51, 0),
(56, 'Policía', 52, 0),
(57, 'Médico', 52, 0),
(58, 'Detective', 52, 1),
(59, 'Escritor', 52, 0),
(60, 'Moisés', 53, 0),
(61, 'La Piedad', 53, 1),
(62, 'Capilla Sixtina', 53, 0),
(63, 'David', 53, 0),
(64, 'Guitarrista Clásico', 54, 0),
(65, 'Tenor de Opera', 54, 0),
(66, 'Violinista y Compositor del Barroco', 54, 1),
(67, 'Clavesista Italiano', 54, 0),
(68, 'Giorgio Vasari', 55, 0),
(69, 'Leonardo Da Vinci', 55, 0),
(70, 'Miguel Ángel', 55, 1),
(71, 'Tiziano', 55, 0),
(72, 'Heráclito', 56, 0),
(73, 'Platón', 56, 0),
(74, 'Sócrates', 56, 1),
(75, 'Tales de Mileto', 56, 0),
(76, 'La Virgen María', 57, 0),
(77, 'El Espiritú Santo', 57, 0),
(78, 'Jesucristo', 57, 1),
(79, 'La Sagrada Familia', 57, 0),
(80, 'Drama', 58, 1),
(81, 'Zarzuela', 58, 0),
(82, 'Entremés', 58, 0),
(83, 'Farsa', 58, 0),
(84, 'Cobre', 59, 0),
(85, 'Hierro', 59, 0),
(86, 'Latón', 59, 1),
(87, 'Acero', 59, 0),
(88, 'León Tolstói', 60, 0),
(89, 'Fiódor Dostoyevski', 60, 1),
(90, 'Antón Chéjov', 60, 0),
(91, 'Vladimir Navokov', 60, 0),
(92, 'Haiku', 61, 0),
(93, 'Ikebana', 61, 0),
(94, 'Origami', 61, 1),
(95, 'Ukiyo-e', 61, 0),
(96, 'Venus de Milo', 62, 0),
(97, 'David', 62, 1),
(98, 'Moisés', 62, 0),
(99, 'Auriga de Delfos', 62, 0),
(100, 'Velázquez', 63, 1),
(101, 'Miguel Ángel', 63, 0),
(102, 'Sorolla', 63, 0),
(103, 'Goya', 63, 0),
(104, 'FC Barcelona', 351, 1),
(105, 'Real Madrid CF', 351, 0),
(106, 'Valencia CF', 351, 0),
(107, 'Atlético de Madrid', 351, 0),
(108, 'Ter Stegen', 352, 0),
(109, 'Oblak', 352, 1),
(110, 'Keylor Navas', 352, 0),
(111, 'Iraizoz', 352, 0),
(112, 'Akiko Daruma', 353, 0),
(113, 'Hayami Kyoto', 353, 0),
(114, 'Carolina Marin', 353, 1),
(115, 'TAI Tzu Ying', 353, 0),
(116, 'Real Madrid', 354, 0),
(117, 'CSKA Moscú', 354, 1),
(118, 'FC Barcelona', 354, 0),
(119, 'Olympiakos', 354, 0),
(120, '2010', 355, 1),
(121, '2012', 355, 0),
(122, '2014', 355, 0),
(123, '2016', 355, 0),
(124, 'Granada Club de Fútbol', 356, 0),
(125, 'Sociedad Deportiva Eibar', 356, 0),
(126, 'Real Club Celta de Vigo', 356, 1),
(127, 'Club Deportivo Leganés', 356, 0),
(128, 'Cristiano Ronaldo', 357, 1),
(129, 'Leo Messi', 357, 0),
(130, 'Zlatan Ibrahimovic', 357, 0),
(131, 'Antoine Griezmann', 357, 0),
(132, 'Rally Inglaterra 96', 358, 0),
(133, 'Rally Inglaterra 97', 358, 0),
(134, 'Rally Inglaterra 98', 358, 1),
(135, 'Rally Inglaterra 99', 358, 0),
(136, 'Golf', 359, 0),
(137, 'Esgrima', 359, 0),
(138, 'Motociclismo', 359, 1),
(139, 'Ciclismo', 359, 0),
(140, '8: 7 jugadores y un portero', 360, 0),
(141, '6: 5 jugadores y un portero', 360, 0),
(142, '7: 6 jugadores y un portero', 360, 1),
(143, '5: 4 jugadores y un portero', 360, 0),
(144, 'Fermín Cacho', 361, 0),
(145, 'Felipe VI de España', 361, 1),
(146, 'Conchita Martínez', 361, 0),
(147, 'Arantxa Sánchez Vicario', 361, 0),
(148, 'Michael Jordan', 362, 1),
(149, 'Roger Federer', 362, 0),
(150, 'Cristiano Ronaldo', 362, 0),
(151, 'Michael Schumacher', 362, 0),
(152, 'Champions League ', 363, 0),
(153, 'La Liga Santander', 363, 0),
(154, 'Premier League', 363, 0),
(155, 'NFL', 363, 1),
(156, 'Cristiano Ronaldo', 364, 0),
(157, 'Gareth Bale', 364, 0),
(158, 'Paul Pogba', 364, 1),
(159, 'Gonzalo Higuaín', 364, 0),
(160, 'Tokio', 365, 1),
(161, 'Madrid', 365, 0),
(162, 'Estambul', 365, 0),
(163, 'Doha', 365, 0),
(164, 'Un perro', 401, 0),
(165, 'Un zorro', 401, 1),
(166, 'Un gato', 401, 0),
(167, 'Un lobo', 401, 0),
(168, 'Calderón de la Barca', 402, 0),
(169, 'Rosalía de Castro', 402, 0),
(170, 'Lope de Vega', 402, 0),
(171, 'Quevedo', 402, 1),
(172, 'De 2001', 403, 0),
(173, 'Siglo de oro', 403, 0),
(174, 'Ninguna', 403, 0),
(175, 'Del 27', 403, 1),
(176, 'Ideafix', 404, 1),
(177, 'Milú', 404, 0),
(178, 'Indeofix', 404, 0),
(179, 'Panoramix', 404, 0),
(180, 'Maruja Torres', 405, 0),
(181, 'Jane Austen', 405, 0),
(182, 'Emily Broté', 405, 0),
(183, 'Margaret Mitchell', 405, 1),
(184, 'Madrid', 406, 0),
(185, 'Murcia', 406, 0),
(186, 'Toledo', 406, 0),
(187, 'Sevilla', 406, 1),
(188, 'Jorge Manrique', 407, 0),
(189, 'Fernando de Rojas', 407, 1),
(190, 'Miguel de Cervantes', 407, 0),
(191, 'Anónima', 407, 0),
(192, 'Gaudí', 408, 0),
(193, 'Moneo', 408, 0),
(194, 'Calatrava', 408, 1),
(195, 'Villanueva', 408, 0),
(196, 'Camilo José Cela', 409, 0),
(197, 'Espronceda', 409, 0),
(198, 'Gracía-Lorca', 409, 0),
(199, 'José Zorrilla', 409, 1),
(200, 'Brave', 410, 0),
(201, 'Iron Man 3', 410, 0),
(202, 'Gravity', 410, 1),
(203, 'The Lady in Numbre 6', 410, 0),
(204, 'Tocándole las palmas', 411, 0),
(205, 'Besándola', 411, 1),
(206, 'Acariciándola', 411, 0),
(207, 'Gritándole', 411, 0),
(208, 'Calderón de la Barca', 412, 1),
(209, 'Miguel de Cervantes', 412, 0),
(210, 'Lope de Vega', 412, 0),
(211, 'Tirso de Molina', 412, 0),
(212, 'El Pájaro Loco', 413, 0),
(213, 'La sopa', 413, 1),
(214, 'Los panqueques', 413, 0),
(215, 'A Manolito', 413, 0),
(216, 'Y von botas', 414, 0),
(217, 'No rasca bigotes', 414, 0),
(218, 'No corre al trote', 414, 0),
(219, 'No caza ratones', 414, 1),
(220, 'Humano', 415, 0),
(221, 'Simplón', 415, 0),
(222, 'Impuro', 415, 0),
(223, 'Muggles', 415, 1),
(224, 'Ensayo', 416, 0),
(225, 'Poesía', 416, 1),
(226, 'Teatro', 416, 0),
(227, 'Novela', 416, 0),
(228, 'Oscar Wilde', 417, 1),
(229, 'Charles Dickens', 417, 0),
(230, 'Arthur Conan Doyle', 417, 0),
(231, 'George Orwell', 417, 0),
(236, 'La Gioconda', 419, 0),
(237, 'La Mona Lisa', 419, 0),
(238, 'Gernica', 419, 0),
(239, 'Las Meninas', 419, 1),
(240, 'Rupestre', 420, 0),
(241, 'Romano', 420, 0),
(242, 'Griego', 420, 0),
(243, 'Egipcio', 420, 1),
(244, 'Mario', 251, 0),
(245, 'Sonic', 251, 1),
(246, 'Pikachu', 251, 0),
(247, 'PacMan', 251, 0),
(248, 'Loro', 252, 0),
(249, 'Serpiente', 252, 0),
(250, 'Tigre', 252, 1),
(251, 'Mono', 252, 0),
(252, 'Amador', 253, 0),
(253, 'Enrique Pastor', 253, 0),
(254, 'Mente Fría', 253, 0),
(255, 'Fermín Trujillo', 253, 1),
(256, 'Distrito 12', 254, 1),
(257, 'Distrito 13', 254, 0),
(258, 'Distrito 14', 254, 0),
(259, 'Distrito 10', 254, 0),
(260, 'Amnegación', 255, 0),
(261, 'Todas son verdaderas', 255, 0),
(262, 'Erudición', 255, 0),
(263, 'Osadía', 255, 1),
(264, 'Render', 256, 0),
(265, 'Tender', 256, 0),
(266, 'Sender', 256, 0),
(267, 'Bender', 256, 1),
(268, 'Fast & Furious 1', 257, 0),
(269, 'Fast & Furious 3', 257, 1),
(270, 'Fast & Furious 5', 257, 0),
(271, 'Fast & Furious 2', 257, 0),
(272, 'Albañil', 258, 0),
(273, 'Cocinero', 258, 0),
(274, 'Arquitecto', 258, 1),
(275, 'Abogado', 258, 0),
(276, 'Brad Pitt', 259, 0),
(277, 'Leonardo DiCaprio', 259, 0),
(278, 'Barney Stinson', 259, 0),
(279, 'Johnny Deep', 259, 1),
(280, 'Skillet', 260, 0),
(281, 'System Of A Down', 260, 0),
(282, 'Imagine Dragons', 260, 1),
(283, 'Sum 41', 260, 0),
(284, 'Charlie Sheen', 261, 0),
(285, 'Heath Ledger', 261, 1),
(286, 'Liam Neeson', 261, 0),
(287, 'Bud Spencer', 261, 0),
(288, 'Assasins Creed', 262, 1),
(289, 'League Of Legends', 262, 0),
(290, 'Street Fighter', 262, 0),
(291, 'Red Dead Redemption', 262, 0),
(292, 'Barry Gibb', 263, 0),
(293, 'Tom Cruise', 263, 0),
(294, 'Kevin Costner', 263, 0),
(295, 'Jonh Travolta', 263, 1),
(296, 'Black', 264, 0),
(297, 'Wesley', 264, 0),
(298, 'Potter', 264, 0),
(299, 'Malfoy', 264, 1),
(300, 'Kevin Wright', 265, 0),
(301, 'Jake Smith', 265, 0),
(302, 'Jeff Albertson', 265, 1),
(303, 'Gregory Baker', 265, 0),
(304, '10', 2, 0),
(305, '20', 2, 0),
(306, '15', 2, 0),
(307, '22', 2, 1),
(308, '8', 1, 0),
(309, '20', 1, 1),
(310, '15', 1, 0),
(311, '18', 1, 0),
(316, 'NBA', 4, 1),
(317, 'ACB', 4, 0),
(318, 'LEB', 4, 0),
(319, 'Euroliga', 4, 0),
(320, 'Roland Garros', 5, 1),
(321, 'Wimbledon', 5, 0),
(322, 'US Open', 5, 0),
(323, 'Davis', 5, 0),
(324, '2', 6, 1),
(325, '0', 6, 0),
(326, '1', 6, 0),
(327, '3', 6, 0),
(328, '0', 7, 1),
(329, '4', 7, 0),
(330, '2', 7, 0),
(331, 'Más de 5', 7, 0),
(332, '48', 8, 1),
(333, '16', 8, 0),
(334, '32', 8, 0),
(335, '36', 8, 0),
(336, 'Sudamérica', 9, 1),
(337, 'África', 9, 0),
(338, 'Europa', 9, 0),
(339, 'Asia', 9, 0),
(340, 'Paavo Nurmi', 10, 1),
(341, 'Usain Bolt', 10, 0),
(342, 'Carl Lewis', 10, 0),
(343, 'Sawao Kato', 10, 0),
(344, 'Michael Phelps', 11, 1),
(345, 'Mark Spitz', 11, 0),
(346, 'Ryan Lochte', 11, 0),
(347, 'Matt Biondi', 11, 0),
(398, '11-0', 14, 0),
(399, '5-3', 14, 0),
(400, '4-1', 14, 0),
(401, '12-1', 14, 1),
(402, 'Manolo Lama', 15, 0),
(403, 'Andrés Montes', 15, 1),
(404, 'Manu Carreño', 15, 0),
(405, 'Julio Maldonado', 15, 0),
(406, 'Melendi', 418, 0),
(407, 'Beethoven', 418, 1),
(408, 'Verdi', 418, 0),
(409, 'Mozart', 418, 0),
(414, 'Picasso', 421, 1),
(415, 'Dalí', 421, 0),
(416, 'Cervantes', 421, 0),
(417, 'Monet', 421, 0),
(434, 'carnivoros', 1000, 0),
(435, 'omnivoros', 1000, 0),
(436, 'insectivoros', 1000, 0),
(437, 'herbivoros', 1000, 1),
(438, 'carpintero', 1001, 0),
(439, 'bombero', 1001, 0),
(440, 'futbolista', 1001, 0),
(441, 'escritor', 1001, 1),
(442, '1', 3, 0),
(443, '0', 3, 1),
(444, 'más de 5', 3, 0),
(445, 'más de 10', 3, 0),
(496, 'Nicaragua', 1002, 0),
(497, 'Honduras', 1002, 1),
(498, 'El Salvador', 1002, 0),
(499, 'Argentina', 1002, 0),
(508, 'Bill Gatorade', 1004, 0),
(509, 'Bill Gates', 1004, 1),
(510, 'Elon Musk', 1004, 0),
(511, 'Vivaldi', 1004, 0),
(533, 'Fax', 1008, 0),
(534, 'Teléfono', 1008, 0),
(535, 'Módem', 1008, 1),
(536, 'Máquina de escribir', 1008, 0),
(561, 'Pendulum', 1010, 1),
(562, 'Paramore', 1010, 0),
(563, 'Knife Party', 1010, 0),
(564, 'Simple Plan', 1010, 0),
(569, 'Marte', 1012, 1),
(570, 'Venus', 1012, 0),
(571, 'Júpiter', 1012, 0),
(572, 'Saturno', 1012, 0),
(573, 'Tenis', 1013, 0),
(574, 'Béisbol', 1013, 0),
(575, 'Críquet', 1013, 1),
(576, 'Todas son falsas', 1013, 0),
(593, 'Mercurio', 1014, 1),
(594, 'Marte', 1014, 0),
(595, 'Tierra', 1014, 0),
(596, 'Júpiter', 1014, 0);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `expcategorias`
--
ALTER TABLE `expcategorias`
  ADD CONSTRAINT `f1_expertos` FOREIGN KEY (`idExperto`) REFERENCES `expertos` (`id`),
  ADD CONSTRAINT `f2_categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`categoria`);

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `f1categorias` FOREIGN KEY (`categoria`) REFERENCES `categorias` (`categoria`),
  ADD CONSTRAINT `f2niveless` FOREIGN KEY (`nivel`) REFERENCES `niveles` (`Nivel`);

--
-- Filtros para la tabla `respuestas`
--
ALTER TABLE `respuestas`
  ADD CONSTRAINT `f1preguntas` FOREIGN KEY (`idPregunta`) REFERENCES `preguntas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
