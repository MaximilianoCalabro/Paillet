-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-07-2018 a las 14:03:03
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `paillet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugia`
--

CREATE TABLE `cirugia` (
  `id_cirugia` int(11) NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `titulo` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cirugia`
--

INSERT INTO `cirugia` (`id_cirugia`, `texto`, `titulo`) VALUES
(1, 'Aqui se puede enterar en que consiste cada cirugia', 'Cirugias Ofrecidas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugias`
--

CREATE TABLE `cirugias` (
  `id_cirugias` int(11) NOT NULL,
  `pertenece` varchar(50) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que_es` text COLLATE utf8_bin NOT NULL,
  `pre_ope` text COLLATE utf8_bin NOT NULL,
  `procedimientos` text COLLATE utf8_bin NOT NULL,
  `post_ope` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cirugias`
--

INSERT INTO `cirugias` (`id_cirugias`, `pertenece`, `nombre`, `que_es`, `pre_ope`, `procedimientos`, `post_ope`, `imagen`) VALUES
(1, 'Parpados', 'Blefaroplastia', 'Es la cirugía de los párpados, consiste en la resección de la piel excedente (parpado superior), y corrección de las bolsas grasas salientes o abultadas y exceso de piel (parpado inferior), que dan el aspecto de cansado en el rostro de las personas. NO corrige las patas de gallo, ni da un rejuvenecimiento facial total. Para esto se la puede combinar con otros procedimientos (lifting, o con toxina botulínica, o con el levantamiento de las cejas, entre otros). La cicatriz es mínima y queda oculta en los propios pliegues del parpado superior y debajo de las pestañas en el parpado inferior. Es la cirugía más solicitada por hombre y mujeres, entre 35 a 60 años, ya que da una mejoría local y facial, con una rápida re inserción social y laboral.', 'El día de su cirugía NO usar maquillaje y llevar anteojos de sol para el momento de su alta hospitalaria.  Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 - 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja y hace dormir placidamente al paciente, durante todo el procedimiento (2 horas aproximadamente). Se reseca el exceso cutáneo del parpado superior y se corrige el abultamiento de las bolsas grasas, de ser necesario. En los párpados inferiores, la resección cutánea es más cautelosa y se corrige el abultamiento de las bolsas que suele ser más marcada. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que serán explicadas por el profesional tratante.', 'Se da el alta al recuperarse el paciente, en las primeras horas del post operatorio. Se recomienda la aplicación de compresas frescas en las primeras 72 horas. Se puede realizar el lavado de los ojos, SIN fricción alguna. Se indica descansar con la cabeza elevada, para disminuir el edema en los primeros días. Recomendamos el uso de crema protectora solar y el uso de anteojos para sol, por 30 días. Se pueden maquillar los ojos, a los 7 o 10 días aproximadamente.', 'parpados.jpg'),
(2, 'Nariz', 'Rinoplastia', 'La nariz es el punto central de la cara, por lo cual siempre preservamos el equilibrio estético de la misma, sin olvidar su importante aspecto funcional. Realizamos una minuciosa evaluación de las diferentes partes que componen la nariz (punta, dorso, raíz, base, narinas, columella) y luego una evaluación en el contexto general de la cara. Teniendo siempre en mente que se obtendrá una mejoría de la forma nasal, que se adecue a los rasgos faciales y preserve o mejore su función. Es una de las cirugías que brinda una mejoría en la imagen personal, ayudando a superar situaciones que elevan la autoestima del paciente.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante. Recuerde que al despertar de su cirugía, probablemente deberá respirar por su boca, esto lo ayudará mucho.', 'Se realiza con anestesia local y sedación endovenosa, o con anestesia general. El 95 % se realizan por vía endonasal (por dentro de la nariz, sin cicatriz visible). Cada nariz requiere de una técnica y tratamiento individual y especializado. Lo más frecuente es la reducción del dorso nasal, la elevación de la punta y el angostamiento de la misma. Es muy frecuente la realización de alguna corrección funcional, a nivel del tabique (septum) o cornetes, para mejorar el paso de aire. Si se ha realizado alguna modificación en el tabique se deben colocar tapones nasales temporales (48 horas aproximadamente). Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se debe usar una férula de yeso o cinta adhesiva por 7 a 15 días aproximadamente, así como recomendamos dormir con la cabeza elevada con dos almohadas, para disminuir el edema. Se indica analgésico en forma preventiva. Se evitan los esfuerzos, movimientos bruscos y mantener la cabeza abajo; en los primeros días. Recomendamos evitar la exposición solar directa por 30 días, de exponerse al sol, utilizar crema bloqueadora solar.', 'nariz.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cirugia_slider`
--

CREATE TABLE `cirugia_slider` (
  `id_cirugia_slider` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL,
  `titulo` varchar(250) COLLATE utf8_bin NOT NULL,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cirugia_slider`
--

INSERT INTO `cirugia_slider` (`id_cirugia_slider`, `imagen`, `texto`, `titulo`, `direccion`) VALUES
(3, 'parpados.jpg', 'Texto sobre PARPADOS', 'PARPADOS', '/pagina/parpado'),
(4, 'nariz.jpg', 'Texto sobre NARIZ', 'NARIZ', '/pagina/nariz'),
(5, 'anti-arruga.jpg', 'Texto sobre FACIAL', 'FACIAL', '/pagina/facial'),
(6, 'mamarias.jpg', 'Texto sobre MAMARIAS', 'MAMARIAS', '/pagina/mamarias'),
(7, 'corporal.jpg', 'Texto sobre CORPORAL', 'CORPORAL', '/pagina/corporal'),
(8, 'botox.jpg', 'Texto sobre BOTOX', 'BOTOX', '/pagina/botox'),
(9, 'orejas.jpg', 'Texto sobre OTROS', 'OTROS', '/pagina/otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clinica`
--

CREATE TABLE `clinica` (
  `id_clinica` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clinica`
--

INSERT INTO `clinica` (`id_clinica`, `imagen`, `texto`) VALUES
(1, 'clinica.jpg', 'Estamos ubicados en la zona céntrica de la ciudad de Santa Fe, en la nueva peatonal San Martín Norte (San Martín 3067 entre Crespo y Suipacha, a escasas cuadras de los Sanatorios y Clínicas más importantes, en plena área comercial y financiera. Con fácil y rápido acceso, desde los diferente puntos de ingresos de la ciudad y a escasas 3 cuadras de la terminal de ómnibus.\r\nContamos con todas la comodidades, para hacer su visita, agradable y placentera. Siendo un lugar propio y exclusivo, dando calidez y privacidad a todos nuestros pacientes.'),
(2, '2.jpg', 'Nuestra Clínica tiene 5 consultorios para la realización de consultas, propiamente dichas, examen de pacientes, fotografías, y cuidados post operatorios, entre otros. Tenes una sala para la realización de cirugías menores (extracción de lunares, quistes, plastias de cicatrices, etc.), aplicaciones de Botox, Dysport, Acido Hialurónico, microdermoabrasion, peeling, etc.\r\n\r\nAdemás disponemos de 8 gabinetes, individuales, de uso exclusivo para nuestro gabinete estético. En el cual se realizan todo tipo de tratamientos NO quirúrgicos, para mejorar contorno corporal, y cosmética facial, entre otros. Así mismo brindamos terapias post operatorias (drenaje linfático, ultrasonidos, etc.) a todos nuestros pacientes, como parte de nuestros servicios exclusivos.\"\"'),
(3, '3.jpg', 'Realizamos TODOS nuestros procedimientos quirúrgicos mayores (aumento mamario con prótesis, liposucción, parpados, lifting, levantamiento mamarios, narices, dermolipectomias, etc.) en reconocida y moderna clínica, de Santa Fe. La cual se haya debidamente autorizada, habilitada, actualizada y equipada para realizar procedimientos quirúrgicos de alta complejidad (cirugías cardiacas).Lo cual nos permite un cómodo, confiable y seguro lugar de trabajo, para realizar nuestros múltiples procedimientos. La misma cuenta con confortables y cómodas habitaciones. Que hacen de su estadía, un momento agradable y placentero. Ubicada en la zona de mayor concentración de centros médicos y sanatorios de la ciudad de Santa Fe. A pocas cuadras de modernos y confortables hoteles; así como de fácil acceso por los diversos medios de transportes locales y de larga distancia.\"\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `direccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(50) COLLATE utf8_bin NOT NULL,
  `whatsapp` varchar(50) COLLATE utf8_bin NOT NULL,
  `correo` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `direccion`, `telefono`, `whatsapp`, `correo`) VALUES
(1, 'San Martín 3067 PA Santa Fe 3000, Argentina', '(0342) 456 3570', '(0342) 154 063196', 'jcp@estetica-paillet.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv`
--

CREATE TABLE `cv` (
  `id_cv` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cv`
--

INSERT INTO `cv` (`id_cv`, `imagen`, `texto`) VALUES
(1, 'paillet.jpg', 'º El Dr. Juan Carlos Paillet nace en la Provincia de Santa Fe, Argentina, el 2 de Mayo de 1972. \r\nº Cursa sus estudios primarios en el colegio La Salle Jobson (1977-1984), Santa Fe, Capital. \r\nº Cursa sus estudios secundarios en el colegio La Salle Jobson, bachiller con orientación biológica (1985-1989), Santa Fe, Capital. \r\nº Posee dominio del idioma inglés americano y británico. Realiza la Carrera de Medicina en la Universidad Nacional de Rosario. (1990-1997). \r\nº Realiza su residencia en Cirugía General en el Hospital JM Cullen . Santa Fe, Capital (1-6-97 al 31-5-2000), habiendo ingresado por concurso de antecedentes y oposición. \r\nº Realiza la Residencia de Cirugía Estética y Reconstructiva en el Instituto Jalisciense de Cirugía Reconstructiva de Jalisco Dr. José Guerrerosantos, Guadalajara, México (1-3-01 al 29-2-2004), habiendo ingresado por concurso de antecedentes y oposición.\"');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_lista`
--

CREATE TABLE `cv_lista` (
  `id_cv_lista` int(11) NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cv_lista`
--

INSERT INTO `cv_lista` (`id_cv_lista`, `texto`) VALUES
(1, 'Residencia de Cirugía General Hospital JM Cullen . Santa Fe, Capital (1-6-97 al 31-5-2000). Habiendo ingresado por concurso de antecedentes y oposición.'),
(2, 'Asistencia a la “1° Jornadas de Actualización en Patología Quirúrgica”. Santa Fe, Capital. 13 de Junio 1998.'),
(3, 'Presentación de trabajo en la Sociedad de Cirugía y Gastroenterología de Santa Fe “Traumatismos Agudos Toráxicos”. 21 de mayo 1998.'),
(4, 'Miembro Titular del “IX Congreso Uruguayo Medico-Quirúrgico de Emergencia”. Montevideo, Uruguay.5 al 7 de Agosto de 1998.'),
(5, 'Presentación Poster “Traumatismos Toráxicos” en el IX Congreso Uruguayo Medico-Quirúrgico de Emergencia. Montevideo, Uruguay. 5 al 7 de Agosto de 1998.'),
(6, 'Aprobación del Curso teórico práctico “Manejo Avanzado del Trauma ATLS”. Santa Fe, Capital. 5 y 6 de Septiembre de 1998.'),
(7, 'Asistencia al “69° Congreso Argentino de Cirugía. 42° Congreso Argentino de Cirugía Toráxica. 23° Congreso Argentino de Coloproctología. 9° Congreso Argentino de Angiología y Cirugía Cardiovascular”. Buenos Aires, Arg. 12 al 16 de Octubre de 1998.'),
(8, 'Miembro Titular del “XI Congreso Panamericano y III Congreso Argentino de Trauma”. Buenos Aires, Arg. 11 al 14 de Noviembre de 1998.'),
(9, 'Miembro Titular de “La Sociedad Argentina de Medicina y Cirugía del Trauma”. Buenos Aires, Arg.Diciembre 1998.'),
(10, 'Presentación de trabajo en la Sociedad de Cirugía y Gastroenterología de Santa Fe “Adenocarcinoma del Angulo de Treitz”. 15 de Abril de 1999.'),
(11, 'Secretario de las “2° Jornadas de Actualización en Patología Quirúrgica”. Santa Fe, Capital. 12 de Junio 1999.'),
(12, 'Miembro Titular del “XXXVI Congreso de la Asociación de Cirugía del Litoral”. Santa Fe, Capital. 18 al 20 de Agosto de 1999.'),
(13, 'Secretario en “Relato Oficial – Hernias y Eventraciones - del XXXVI Congreso de la Asociación de Cirugía del Litoral”. Santa Fe, Capital. 18 al 20 de Agosto de 1999.'),
(14, 'Concurrente del “IV Encuentro de Residentes y Ex Residentes de Cirugía de la Ciudad de Rosario y II Jornadas de la Asociación Argentina de Médicos Residentes de Cirugía de la Región Litoral”. Rosario, Santa Fe. 24 y 25 de septiembre de 1999.'),
(15, 'Presentación de trabajo en la Sociedad de Cirugía y Gastroenterología de Santa Fe “Medidas Hepáticas Traumáticas”. 21 de Octubre de 1999.'),
(16, 'Asistente a la “I Reunión Interdisciplinaria de Cirugía Laparoscópica”. Santa Fe, Capital. 29 y 30 de Octubre de 1999.'),
(17, 'Rotación de 3 meses en la University of Illinois at Chicago, Minimally Invasive Surgery Center. Como Residente en formación en Cirugía Laparoscópica, a cargo del Dr. Santiago Horgan. 1 de Febrero al 30 de Abril, año 2000.'),
(18, 'Asistencia a “SAGES Annual Scientific Session and Postgraduate Course”. Atlanta, Georgia, USA. 29 de Marzo al 1 de Abril, año 2000.'),
(19, 'Asistencia al Curso “Endoscopic Management of Colorectal Disease” - SAGES. Atlanta, Georgia, USA. 29 de Marzo, año 2000.'),
(20, 'Titulación como Cirujano General, previo aprobación de examen teórico (escrito y oral) y práctico. 25 de Septiembre, año 2000. Otorgado por mesa directiva Colegio Médico.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cv_plastica`
--

CREATE TABLE `cv_plastica` (
  `id_cv_plastica` int(11) NOT NULL,
  `texto` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cv_plastica`
--

INSERT INTO `cv_plastica` (`id_cv_plastica`, `texto`) VALUES
(1, 'Residencia de Cirugía Estética y Reconstructiva - Instituto Jalisciense de Cirugía Reconstructiva de Jalisco Dr. José Guerrerosantos – Guadalajara - México (1-3-01 al 29-2-2004) Habiendo ingresado por concurso de antecedentes y oposición.'),
(2, 'Asistencia al “XVI Curso de Actualización sobre el Manejo del Paciente Quemado – XVI Congreso Nacional de la Asociación Mexicana de Quemaduras, A.C”. Guadalajara, Jalisco, México. 18 al 21 de Abril, del 2001.'),
(3, 'Asistencia al “XXVIII Simposio Anual Internacional de Cirugía Plástica – Estética – 2001”. Guadalajara, Jalisco, México. 8 al 12 de Noviembre del 2001.'),
(4, 'Asistencia al “Seminario de Transplante de Pelo”. Guadalajara, Jalisco, México. 1 y 2 de Marzo del 2002.'),
(5, 'Asistencia al “Annual Meeting of The American Society for Aesthetic Plastic Surgery”. Las Vegas, Nevada, USA. 27 de Abril al 3 de Mayo del 2002.'),
(6, 'Asistencia al “XIII Curso Internacional de Cirugía Plástica y Estética”. Barcelona, España. 26 al 29 de Junio del 2002.'),
(7, 'Participación en el Curso-Taller “Aumento Mamario con Implantes Anatómicos”. Guadalajara, Jalisco, México. 9 y 10 de Agosto del 2002.'),
(8, 'Asistencia en la conferencia “Aplicación Clínica de la Microcirugía en Cirugía Reconstructiva”. Guadalajara, Jalisco, México. 20 y 21 De Septiembre del 2002.'),
(9, 'Reconocimiento por su labor en el Programa “Cirugía Extramuros – El Cirujano Te Visita”. Ojuelos, Jalisco, México. 25 al 27 de Septiembre del 2002.'),
(10, 'Reconocimiento por su participación en la “V Jornadas de Cirugías Reconstructivas”. Yahualica de González Gallo, Jalisco, México. Octubre del 2002.'),
(11, 'Asistencia al “XXIX Simposio Anual Internacional de Cirugía Plástica – Estética – 2002”. Guadalajara, Jalisco, México. 12 al 16 de Noviembre del 2002.'),
(12, 'Participación en el “III Curso Internacional Cirugía del Contorno Corporal”. Guadalajara, Jalisco, México. 11 al 14 de Junio del 2003.'),
(13, 'Asistencia al “XXX Simposio Anual Internacional de Cirugía Plástica – Estética – 2003”. Puerto Vallarta, Jalisco, México. 4 al 8 de Noviembre del 2003.'),
(14, 'Diploma por haber obtenido “El PRIMER Lugar en el Concurso de Residentes Dr. José Barba Rubio, con el tema: UNA NUEVA ALTERNATIVA EN EL MANEJO DE LA CONTRACTURA CAPSULAR MAMARIA”. Puerto Vallarta, Jalisco, México. 5 de Noviembre del 2003.'),
(15, 'Asistencia al “XXXV Congreso Nacional de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva, A. C.”. Monterrey, Nuevo León, México. 18 al 21 de febrero del 2004.'),
(16, 'Reconocimiento por “El PRIMER Lugar dentro del XXXIII Concurso Nacional de Residentes Dr. Fernando Ortiz Monasterio. En el XXXV Congreso Nacional de la Asociación Mexicana de Cirugía Plástica, Estética y Reconstructiva, A. C.”. Monterrey, Nuevo León, México. Febrero del 2004.'),
(17, 'Finalización Residencia en “Cirugía Plástica y Reconstructiva en el Instituto Jalisciense de Cirugía reconstructiva Dr. José Guerrerosantos – I.J.C.R.” Guadalajara, Jalisco, México. Febrero 2001 – Febrero 2004.'),
(18, 'Publicación del artículo “Aesthetic Facial Contour Augmentation with Microlipofilling” Aesthetic Surgery Journal – July/August 2003 Volume 23, Number 4, Pages 239-247; como Co-Autor.'),
(19, 'Asistencia al XXXIV Congreso Argentino de Cirugía Plástica. La Plata, abril 2004.'),
(20, 'Presentación del trabajo “Una nueva alternativa en el manejo de la contractura capsular mamaria” en la sesión de aportes al módulo de implantes mamarios, en el XXXIV Congreso Argentino de Cirugía Plástica. La Plata, abril 2004.'),
(21, 'Participación del XV Congreso de la Federación Ibero Latino Americana de Cirugía Plástica (FILACP). Sevilla – España, 7 al 11 de mayo del 2004.'),
(22, 'Participación en el Concurso de Residentes de la Federación Ibero Latino Americana de Cirugía Plástica (FILACP), con el trabajo “Una nueva alternativa en el manejo de la contractura capsular mamaria”. Sevilla – España, 9 de mayo del 2004.'),
(23, 'Titulación como Cirujano Plástico, previo aprobación de examen teórico (escrito y oral) y práctico.14 de Julio, de 2004. Otorgado por mesa directiva Colegio Médico Santa Fe 1° circunscripción.'),
(24, 'Participación como asistente al III Curso Intensivo para médicos en formación Cirugía Plástica Estética Reparadora Dr. José M. Robles. Buenos Aires, 30 de septiembre de 2004.'),
(25, 'Participación en el IX Simposio Internacional de Cirugía Plástica Siglo XXI. Buenos Aires, 1 y 2 de Octubre de 2004.'),
(26, 'Asistencia al XXXI Simposio Anual Internacional de Cirugía Plástica – Estética 2004. Puerto Vallarta, noviembre 9 al 13 de 2004, México.'),
(27, 'Publicación del articulo “Electrostimulation: Uses and applications for periprosthetic capsular contracture: Experimental model” Aesth. Plast. Surg. 29:410 – 414, 2005. Como Co-Autor.'),
(28, 'Asistencia al XVI Congreso de la Federación Ibero latinoamericana de Cirugía Plástica – XXXVI Congreso Argentino de Cirugía Plástica. 28 de marzo al 1 de abril de 2006 – Buenos Aires – Argentina.'),
(29, 'Asistencia al IV Curso de Cirugía Oncoplastica en Patología Mamaria. 31 de agosto, 1 de septiembre de 2006 - Buenos Aires – Argentina.'),
(30, 'Asistencia al XXXIII Simposio Anual Internacional de Cirugía Plástica – Estética 2006. Puerto Vallarta, noviembre 7 al 11 de 2006, México.'),
(31, 'Publicacion del articulo “Combined Gluteoplasty: Liposuction and Gluteal Implants” Plastic and Reconstructive Surgery, 119(3):1067-1074, March 2007. Como Co-Autor.'),
(32, 'Asistencia al “Annual Meeting of The American Society for Aesthetic Plastic Surgery”. New York, USA, april 19 – 24, 2007.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inicio`
--

CREATE TABLE `inicio` (
  `id_inicio` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `inicio`
--

INSERT INTO `inicio` (`id_inicio`, `imagen`) VALUES
(3, 'aumento-de-gluteos-sevilla.jpg'),
(4, '01-levantamiento-senos.jpg'),
(5, 'anti-arruga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subseccion_slider`
--

CREATE TABLE `subseccion_slider` (
  `id_subseccion_slider` int(11) NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL,
  `fk_cirugias` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  ADD PRIMARY KEY (`id_cirugia`);

--
-- Indices de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  ADD PRIMARY KEY (`id_cirugias`);

--
-- Indices de la tabla `cirugia_slider`
--
ALTER TABLE `cirugia_slider`
  ADD PRIMARY KEY (`id_cirugia_slider`);

--
-- Indices de la tabla `clinica`
--
ALTER TABLE `clinica`
  ADD PRIMARY KEY (`id_clinica`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id_cv`);

--
-- Indices de la tabla `cv_lista`
--
ALTER TABLE `cv_lista`
  ADD PRIMARY KEY (`id_cv_lista`);

--
-- Indices de la tabla `cv_plastica`
--
ALTER TABLE `cv_plastica`
  ADD PRIMARY KEY (`id_cv_plastica`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id_inicio`);

--
-- Indices de la tabla `subseccion_slider`
--
ALTER TABLE `subseccion_slider`
  ADD PRIMARY KEY (`id_subseccion_slider`),
  ADD KEY `fk_cirugias` (`fk_cirugias`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  MODIFY `id_cirugia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  MODIFY `id_cirugias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cirugia_slider`
--
ALTER TABLE `cirugia_slider`
  MODIFY `id_cirugia_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clinica`
--
ALTER TABLE `clinica`
  MODIFY `id_clinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cv`
--
ALTER TABLE `cv`
  MODIFY `id_cv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cv_lista`
--
ALTER TABLE `cv_lista`
  MODIFY `id_cv_lista` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `cv_plastica`
--
ALTER TABLE `cv_plastica`
  MODIFY `id_cv_plastica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id_inicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `subseccion_slider`
--
ALTER TABLE `subseccion_slider`
  MODIFY `id_subseccion_slider` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `subseccion_slider`
--
ALTER TABLE `subseccion_slider`
  ADD CONSTRAINT `subseccion_slider_ibfk_1` FOREIGN KEY (`fk_cirugias`) REFERENCES `cirugias` (`id_cirugias`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
