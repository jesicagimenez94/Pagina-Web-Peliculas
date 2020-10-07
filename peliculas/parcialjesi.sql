-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2020 a las 17:55:09
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `parcialjesi`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `movies`
--

CREATE TABLE `movies` (
  `id_movie` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `anio` int(11) NOT NULL,
  `puntaje` float NOT NULL,
  `duracion` int(11) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `imagen` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `movies`
--

INSERT INTO `movies` (`id_movie`, `titulo`, `anio`, `puntaje`, `duracion`, `genero`, `descripcion`, `imagen`) VALUES
(1, 'X-MEN', 2000, 6.5, 104, 'Accion/Ciencia Ficcion', 'El profesor Xavier lidera a Wolverine y otros superhéroes contra Magneto, un mutante que dominará a la humanidad.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTW9vPlQrh1oqgltle82NU4pdugEGfo2yL2axMQmNusHloeDP1b'),
(2, 'X-MEN 2', 2003, 7.4, 134, 'Acción/Ciencia ficción', 'Un mutante desconocido se introduce en la Casa Blanca e intenta asesinar al presidente sin éxito. Charles Xavier y el resto de mutantes tratarán de capturar al magnicida fallido', 'https://vignette.wikia.nocookie.net/xmen9260/images/d/d1/X-Men_2.jpg/revision/latest?cb=20170223150900&path-prefix=es'),
(3, 'X-Men III - La batalla Final', 2006, 6.7, 104, 'Acción/Ciencia ficción ', 'El descubrimiento de una cura para las mutaciones divide la situación en dos bandos. Los mutantes pueden elegir abandonar sus poderes y convertirse totalmente en humanos o continuar con sus habilidades y seguir aislados. Una guerra entre los seguidor', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcRO_AOo86XPZrjGTAgX-7Jnz5y6tH3cNX6-pt3Xd04sD6Zkoq4o'),
(4, 'X-Men Orígenes: Wolverine\r\n', 2009, 6.6, 120, 'Acción/Aventura ', 'Buscando consuelo de su oscuro pasado Logan, más conocido como Wolverine, parece haber encontrado el amor y la alegría con Kayla Silverfox pero todo cambia cuando ella es asesinada.', 'https://i.pinimg.com/originals/87/51/e1/8751e13ccc07cf538ce5a1e94a5c3473.jpg'),
(5, 'X-Men: primera generación', 2011, 6.8, 132, 'Acción/Ciencia ficción', 'A principios de los años 60, Charles Xavier y Magneto se convierten en grandes amigos. Usando sus poderes, se unen para proteger al mundo de una guerra nuclear.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS8RduB1InjRmhLthupqByGBWPA_XTKHOzRyyuCNb_2lF2OxfMw'),
(6, 'X-Men: Días del futuro pasado\r\n', 2014, 6.9, 151, 'Acción/Ciencia ficción', 'Los X-Men unen fuerzas con sus versiones más jóvenes con el fin de cambiar el pasado y salvar su futuro y el de la humanidad.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTvoqkmbzJlG1zYnal137C5NAmueaNzzuqWZECfjZ4WQMCHIEeD'),
(7, 'Wolverine: inmortal', 2013, 138, 5, 'Acción/Ciencia ficción', 'En Japón y vulnerable por primera vez, Wolverine se enfrenta a un samurái letal de acero y su interior lucha contra su propia inmortalidad.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcS5xLVe6rATLuXP8g74EZPzhPdcgfzyb7OT0W5QFu1hIhV-lvOu'),
(8, 'X-Men: Apocalipsis', 2016, 6, 147, 'Acción/Aventura', 'Apocalipsis, el mutante más poderoso, despierta tras miles de años de letargo y pretende destruir a toda la humanidad. Para lograrlo, recluta a un equipo de peligrosos mutantes, encabezados por Magneto. Sólo un grupo de jóvenes mutantes, dirigidos po', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ6e391y0ipODgRe7jMwv8rPDs4tc8JPebKPRZx6vcZBdY-XDKF'),
(9, 'X-Men: Dark Phoenix', 2019, 5.1, 115, 'Acción/Ciencia ficción', 'Los X-Men se enfrentan a su enemigo más poderoso: uno de sus miembros, Jean Grey. Durante una misión de rescate en el espacio, Jean casi muere al ser alcanzada por una misteriosa fuerza cósmica. Cuando regresa a casa, esa radiación la ha hecho más po', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR61bDkZOuC8-aIwZa7PYItzOxZi-m9d3Hl1o4tnhBes5dj7yx7'),
(10, 'Logan', 2017, 7.4, 141, 'Acción/Ciencia ficción', 'Han pasado los años y los mutantes están en declive. Logan, débil y cansado, vive alejado de todos hasta que acepta una última misión de Charles Xavier: la de proteger a una joven especial, de nombre Laura Kinney pero conocida como X-23, la última es', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSeHitRWl8O51AD6-6xMiiXZKY0j8aHiP3DPkOss6cZsJdwa9h6'),
(11, 'Deadpool', 2016, 6.8, 119, 'Acción/Comedia ', 'Un ex mercenario quien, tras haber sido sometido a un cruel experimento, adquiere el superpoder de sanar rápidamente y pretende vengarse del hombre que destrozó su vida.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQ7tH_XGgGCyfaujXrjUMlw_UQeF4tUXZ2GdM4WbYxcRDoXVZ-f'),
(12, 'Deadpool 2', 2018, 7.7, 134, 'Acción/Comedia ', 'Deadpool debe proteger a Russell, un adolescente mutante, de Cable, un soldado del futuro genéticamente modificado. Deadpool se alía con otros superhéroes para poder derrotar al poderoso Cable.', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRkfTX9AfA_ztkMsrY4mmFBa7SbeR98NjU0uLiiiaMfhmKK8lsa'),
(13, 'Spider-Man', 2002, 7.3, 121, 'Acción/Aventura', 'Un tímido estudiante se vuelve en un luchador contra el crimen, desde que la picadura de una araña mutante le da poderes extraordinarios.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTOox1R4aWo6xAdhvEMwK2UDy40rgBp5WzZ9-VnMkjyThAjV5G4'),
(14, 'Spider-Man 2', 2004, 7.3, 135, 'Acción/Aventura', 'El atormentado Peter Parker lucha contra un científico siniestro que usa sus tentáculos mecánicos con fines destructivos.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcQy6KUcWyJB0yL6-ML2qojIbh-N3MqeMywbWZlDGW7FbwK4lsLx'),
(15, 'Spider-Man 3', 2007, 5.4, 156, 'Acción/Aventura', 'Peter Parker sufre una terrible transformación cuando su traje de Hombre Araña se vuelve negro y libera una personalidad oscura y vengativa.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT0J9Xz6u56J3GiAFeqnWvaQxgf8zmVK0Bz0dO6L1Gph80qZnIq'),
(16, 'Venom', 2018, 7.3, 140, 'Acción/Ciencia ficción', 'El periodista Eddie Brock está investigando a Carlton Drake, el célebre fundador de Life Foundation. Brock establece una simbiosis con un ente alienígena que le ofrece superpoderes, pero el ser se apodera de su personalidad y lo vuelve perverso.', 'https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTZaRa4lpAjxe-1MyN3Sy4ASnfnnkNzbtybyr-h3UGakUj-KYjy'),
(17, 'Pesadilla en la calle del infierno', 1984, 6.6, 101, 'Terror', 'Un grupo de adolescentes sufre unas pesadillas horrendas en las que un ser deforme que porta garras de acero los persigue. Lo más inquietante es que los hechos empiezan a sugerir que lo que ocurre mientras sueñan repercute en la vida real.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcTwsuD7q3UwaXkqrf1BQAHlURN1eWno96QSwFJ_2V68JzpXIRga'),
(18, 'Pesadilla en Elm Street 3: Dream Warriors', 1987, 6.6, 96, 'Terror', 'Jóvenes que comparten pesadillas similares en una institución se unen para librarse de la influencia de Freddy Krueger.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRVCimEGGgUtS1kD4b1tU_fOgjgF0U8BGqqWqly0nfgv5su7X17'),
(19, 'Pesadilla en Elm Street 4: The Dream Master', 1988, 5.7, 159, 'Terror', 'Una adolescente usa el poder de sus amigos difuntos para terminar con el reinado de terror de Freddy Krueger.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS37qhHyoeu_Oge0UVEsnv3KV7JP3wLj3Dy7JeulEFDXC-rLVDA'),
(20, 'Freddy vs. Jason', 2003, 5.7, 98, 'Terror', 'Unos adolescentes quedan atrapados en medio de la batalla entre Freddy Krueger y el asesino enmascarado Jason.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRlQqm2YUCdxP63Ww2q3jDfjeoqZlskzictKcJQ7mbXlZXvziLr'),
(21, 'Alien vs. Predator\r\n', 2004, 7, 121, 'Terror', 'Dos razas alienígenas se enfrentan a muerte en una pirámide enterrada bajo el hielo de la Antártida. Poco importa quién gane, perderá la humanidad.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR4HOjBsD7a7vuBfGHIW0gBn8FRXN6AvXZ0k43DXipbxL4QQCxd'),
(22, 'Mulan\r\n', 1998, 7.6, 86, 'Animación', 'El ejército de los Hunos, encabezado por el malvado Shun Yiu, quiere conquistar China. El emperador, para impedírselo, ha mandado a filas a todos los varones con el fin de proteger el imperio. Por otra parte, Mulán es una chica joven y valiente que v', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRooYm0BOo70nQWVFnY-QpAyU4u7lt7wboWqR7bry-t0cTceyfM'),
(23, 'La Sirenita', 1989, 6.8, 86, 'Animación', 'La sirena Ariel está fascinada por el mundo de los humanos, pero su padre le prohíbe relacionarse con ellos. En un viaje secreto, se enamora de un humano y recurre a una perversa hechicera para que, mediante un conjuro, su amor triunfe.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRWOOC0-qyIRBM_wHvbh7MYxebNWQaWEfniJNfsSixdqBHhsBjo'),
(24, 'Pocahontas\r\n', 1995, 7.7, 86, 'Animación', 'Pocahontas es la hija de Powhatan, el jefe de una tribu india de América del Norte. Un día observa la llegada de un grupo de colones ingleses, encabezados por el ambicioso gobernador Radcliff y el valiente capitán John Smith. Acompañada de sus compañ', 'https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcTK1JI-NyXU4fM4pUjHumTAa4klkwN6DCjvKHAPlooJsa3fMJAZ'),
(25, 'Aladdín', 1992, 7.4, 85, 'Animación', 'En Bagdad, un ladrón árabe halla una lámpara mágica y trata de ganar el amor de una princesa con la ayuda de los deseos concedidos por un genio.', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSLJfyLL9_3p3S8SSgLr8KFLfP0Z8o40ejGkHp8az08pTTUegMH'),
(26, 'La Cenicienta\r\n', 1950, 8.4, 76, 'Animación', 'Con una malvada madrastra y dos hermanastras celosas que la mantienen esclavizada y en harapos, Cenicienta no tiene oportunidad de asistir al baile real, hasta que aparece su hada madrina.', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQAjoqKNE_YmiNWGc0BLSQqoV7njqDLrGkd3doTtxiCzpK7818h');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contrasenia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_usuario`, `nombre`, `email`, `contrasenia`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin1234'),
(6, 'Jesica', 'jesicagimenez2294@gmail.com', 'jesi1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id_movie`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `movies`
--
ALTER TABLE `movies`
  MODIFY `id_movie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
