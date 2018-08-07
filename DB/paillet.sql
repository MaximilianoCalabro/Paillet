-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-08-2018 a las 02:22:01
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.7

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
-- Estructura de tabla para la tabla `abdominoplastia`
--

CREATE TABLE `abdominoplastia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `abdominoplastia`
--

INSERT INTO `abdominoplastia` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Abdominoplastia', 'Es la cirugía para corregir la flacidez cutánea y muscular del abdomen después de embarazos o variaciones importantes de peso, fundamentalmente; permite al paciente mejorar el aspecto de su abdomen, su contorno corporal y elevar su autoestima. Es un procedimiento de gran demanda y con excelentes resultados. Puede combinarse con liposucción de cadera, piernas, rodilla, etc.', 'Pre-operatorio: Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Procedimiento: Se utiliza anestesia raquídea o peridural. Se realiza una incisión sobre el bello púbico que se extiende lateralmente, permitiendo resecar la piel excedente y devolverle tonicidad a la misma. Se fortalecen los músculos abdominales, dando firmeza y disminuyendo la cintura levemente. El ombligo es respetado y re-insertado nuevamente en la piel abdominal. Suelen eliminarse las estrías y cicatrices que se encuentran por debajo del ombligo. Existen complicaciones como en todo procedimiento quirúrgico que deben ser explicadas por el profesional tratante.', 'Post-operatorio: Requiere hospitalización de un día, al empezar a caminar se debe mantener el tronco flexionado en los primeros días. Se debe utilizar una prenda de vestir de compresión por 30 días, para favorecer la adhesión cutánea y la disminución del edema. El dolor es mínimo y cede con analgésicos comunes. La herida y el ombligo se deben lavar y secar perfectamente, con los baños diarios. Recomendamos la realización de terapia de recuperación (US, ES, etc) para una mejor y más rápida re-inserción laboral y social; así como el uso de protección solar en el área tratada, por dos meses aproximadamente. NO se recomienda realizar ejercicios bruscos por 30 días aproximadamente.', 'abdominoplastia.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrugas`
--

CREATE TABLE `arrugas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `arrugas`
--

INSERT INTO `arrugas` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Arrugas', 'Su efecto consiste en producir un bloqueo transitorio y reversible (es decir que NO es definitivo) a nivel de la placa neuro-muscular, lugar en el cual el nervio hace contacto con el músculo indicándole que se contraiga. Actúa fundamentalmente inhibiendo la acetilcolina, la cual es responsable de la contracción muscular y de la secreción del sudor entre otras.  Las arrugas, son en efecto, el resultado de varios factores, entre los que se encuentran la calidad cutánea y los movimientos musculares subyacentes. La mejor forma de lograr preservar una piel saludable y turgente, es realizar un cuidado constante de las radiaciones UV (ultra-violetas) del sol, lo que en nuestra zona adquiere un factor relevante por la conocida disminución de la capa de ozono y los efectos deletéreos que esta produce. También sirven con este fin el uso de productos humectantes y revitalizadores de las propiedades visco-elásticas de la piel.', 'La Toxina Botulínica tipo A - BOTOX® purificada, es producida en el extranjero. Para su correcta preservación, debe ser transportada a una temperatura constante (2 a 8 grados centígrados) desde su producción, lo que garantiza su eficacia a la hora de ser administrada. Es importante recordar que su efecto NO es definitivo, siendo el mismo de 4 a 6 meses.', 'Para su aplicación, se requiere de una limpieza profunda del área a tratar y de material descartable estéril durante su preparación. NO requiere de anestesia, ya que su aplicación es casi indolora; así como tampoco requiere internación ya que es de uso ambulatorio. Puede producir leve dolor al tacto, en el área tratada, los dos primeros días post tratamiento; NO se han reportado complicaciones mayores ya que sus efectos son reversibles.', 'Los cambios obtenidos son evidentes entre los 5 a 10 días posteriores a su aplicación. NO interfieren con las actividades cotidianas de cada individuo.', 'anti-arruga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reconstruccion`
--

CREATE TABLE `reconstruccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reconstruccion`
--

INSERT INTO `reconstruccion` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Reconstrucción', 'Que Es', 'Preope', 'Procedimiento','Postope', 'anti-arruga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `brazos`
--

CREATE TABLE `brazos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `brazos`
--

INSERT INTO `brazos` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Brazos', 'Que Es', 'Preope', 'Procedimiento','Postope', 'anti-arruga.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lazer`
--

CREATE TABLE `lazer` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `lazer`
--

INSERT INTO `lazer` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Lazer CO2', 'Que Es', 'Preope', 'Procedimiento','Postope', 'anti-arruga.jpg');

-- --------------------------------------------------------
--
-- Estructura de tabla para la tabla `aumento_mamario`
--

CREATE TABLE `aumento_mamario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `aumento_mamario`
--

INSERT INTO `aumento_mamario` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Aumento Mamario', 'El aumento del volumen mamario con prótesis es una de las cirugías mas solicitadas en la actualidad. Se indica en pacientes con deseo de un mayor volumen o tamaño mamario, sea por disminución post-parto o por escaso desarrollo glandular, fundamentalmente. Se utilizan también en caso de reconstrucciones mamarias de múltiples etiologías. Es el procedimiento que más frecuentemente realizo en mujeres de 18 a 45 años. Se utilizan implantes de ultima generación, con silicona de alta cohesividad (gel denso, no se derrama), pudiendo escoger diferentes texturas (lisa, rugosa, poliuretano) y diferentes formas (redondas, anatómicas, perfil alto, perfil bajo. Etc.)..', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja a la paciente y se duerme muy pacidamente durante la cirugía. Se puede colocar el implante por un acceso (incisión) peri-areolar o sub mamario fundamentalmente. El implante puede quedar alojado en el plano sub muscular (debajo del músculo pectoral), sub glandular (debajo de la glándula mamaria) o en un plano mixto (sub muscular superior y sub glandular inferior). El tipo de implante, tamaño, vía de acceso y plano de colocación, son analizados y decidido en forma conjunta con nuestras pacientes. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse la paciente de su sedación, comúnmente por la tarde de la cirugía. Se indica analgésico y antibióticos, en los primeros 3 a 5 días. Se recomienda, NO realizar esfuerzos ni movimientos bruscos con los brazos, en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión moderada (sostén o corpiño SIN varilla) por 30 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', 'mamas0.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blefaroplastia`
--

CREATE TABLE `blefaroplastia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `blefaroplastia`
--

INSERT INTO `blefaroplastia` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Blefaroplastia', 'Es la cirugía de los párpados, consiste en la resección de la piel excedente (parpado superior), y corrección de las bolsas grasas salientes o abultadas y exceso de piel (parpado inferior), que dan el aspecto de cansado en el rostro de las personas. NO corrige las patas de gallo, ni da un rejuvenecimiento facial total. Para esto se la puede combinar con otros procedimientos (lifting, o con toxina botulínica, o con el levantamiento de las cejas, entre otros). La cicatriz es mínima y queda oculta en los propios pliegues del parpado superior y debajo de las pestañas en el parpado inferior. Es la cirugía más solicitada por hombre y mujeres, entre 35 a 60 años, ya que da una mejoría local y facial, con una rápida re inserción social y laboral.', 'El día de su cirugía NO usar maquillaje y llevar anteojos de sol para el momento de su alta hospitalaria.  Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 - 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja y hace dormir placidamente al paciente, durante todo el procedimiento (2 horas aproximadamente). Se reseca el exceso cutáneo del parpado superior y se corrige el abultamiento de las bolsas grasas, de ser necesario. En los párpados inferiores, la resección cutánea es más cautelosa y se corrige el abultamiento de las bolsas que suele ser más marcada. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que serán explicadas por el profesional tratante.', 'Se da el alta al recuperarse el paciente, en las primeras horas del post operatorio. Se recomienda la aplicación de compresas frescas en las primeras 72 horas. Se puede realizar el lavado de los ojos, SIN fricción alguna. Se indica descansar con la cabeza elevada, para disminuir el edema en los primeros días. Recomendamos el uso de crema protectora solar y el uso de anteojos para sol, por 30 días. Se pueden maquillar los ojos, a los 7 o 10 días aproximadamente.', 'que-es-la-blefaroplastia.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capilar`
--

CREATE TABLE `capilar` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `capilar`
--

INSERT INTO `capilar` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Implante Capilar', 'Es el procedimiento, por excelencia, para el tratamiento de la calvicie masculina fundamentalmente. La técnica del implante capilar ha ido evolucionando ampliamente en los últimos años, habiendo iniciado tiempo atrás con implantes de gran tamaño (más de 5 pelos por implante) que daban un aspecto poco natural o en “cabeza de muñeca”. Por lo notorio de la aparición de muchos pelos desde un solo punto. Hoy en día hablamos de macro-implantes, cuando colocamos 3 o 4 pelos por implantes, los cuales son indicados para dar volumen en áreas que necesiten. Siendo, micro-implantes la colocación de 1 o 2 pelos por implante, los cuales usamos para dar definición a la línea de implantación pilosa en la frente del paciente.  Se indica también con fines reconstructivos, en pacientes que han perdido una ceja, pestañas o bigote, comúnmente secuela de traumatismos o quemaduras.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza una sedación general endo-venosa, y se completa la anestesia de la zona a tratar con anestesia local. Se realiza con el paciente sentado, luego de haber tomado la zona donadora de injertos, la cual puede situarse en la nuca o región temporal. Se realiza la fragmentación continua y sucesiva de los implantes, hasta lograr implantes del tamaño adecuado al área a tratar. Luego se aplican en forma sucesiva hasta lograr una mejoría apreciable del volumen y densidad del área en cuestión. No colocamos vendajes, no deben retirarse suturas y el paciente sale caminando del quirófano, para retornar a su hogar.', 'Suele ser completamente ambulatorio, el paciente puede lavar su cabeza a las 24 hs. Del procedimiento, no debe usar vendaje pudiendo ser visible las múltiples costras que quedan en la periferia de cada implante. Puede presentar leve edema en frente y párpado a las 48 hs. No interfiere con las actividades diarias del paciente.', 'implante-capilar-hombres.jpg');

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
  `pertenece` int(11) NOT NULL,
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
(1, 1, 'Blefaroplastia', 'Es la cirugía de los párpados, consiste en la resección de la piel excedente (parpado superior), y corrección de las bolsas grasas salientes o abultadas y exceso de piel (parpado inferior), que dan el aspecto de cansado en el rostro de las personas. NO corrige las patas de gallo, ni da un rejuvenecimiento facial total. Para esto se la puede combinar con otros procedimientos (lifting, o con toxina botulínica, o con el levantamiento de las cejas, entre otros). La cicatriz es mínima y queda oculta en los propios pliegues del parpado superior y debajo de las pestañas en el parpado inferior. Es la cirugía más solicitada por hombre y mujeres, entre 35 a 60 años, ya que da una mejoría local y facial, con una rápida re inserción social y laboral.', 'El día de su cirugía NO usar maquillaje y llevar anteojos de sol para el momento de su alta hospitalaria.  Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 - 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja y hace dormir placidamente al paciente, durante todo el procedimiento (2 horas aproximadamente). Se reseca el exceso cutáneo del parpado superior y se corrige el abultamiento de las bolsas grasas, de ser necesario. En los párpados inferiores, la resección cutánea es más cautelosa y se corrige el abultamiento de las bolsas que suele ser más marcada. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que serán explicadas por el profesional tratante.', 'Se da el alta al recuperarse el paciente, en las primeras horas del post operatorio. Se recomienda la aplicación de compresas frescas en las primeras 72 horas. Se puede realizar el lavado de los ojos, SIN fricción alguna. Se indica descansar con la cabeza elevada, para disminuir el edema en los primeros días. Recomendamos el uso de crema protectora solar y el uso de anteojos para sol, por 30 días. Se pueden maquillar los ojos, a los 7 o 10 días aproximadamente.', 'parpados.jpg'),
(2, 2, 'Rinoplastia', 'La nariz es el punto central de la cara, por lo cual siempre preservamos el equilibrio estético de la misma, sin olvidar su importante aspecto funcional. Realizamos una minuciosa evaluación de las diferentes partes que componen la nariz (punta, dorso, raíz, base, narinas, columella) y luego una evaluación en el contexto general de la cara. Teniendo siempre en mente que se obtendrá una mejoría de la forma nasal, que se adecue a los rasgos faciales y preserve o mejore su función. Es una de las cirugías que brinda una mejoría en la imagen personal, ayudando a superar situaciones que elevan la autoestima del paciente.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante. Recuerde que al despertar de su cirugía, probablemente deberá respirar por su boca, esto lo ayudará mucho.', 'Se realiza con anestesia local y sedación endovenosa, o con anestesia general. El 95 % se realizan por vía endonasal (por dentro de la nariz, sin cicatriz visible). Cada nariz requiere de una técnica y tratamiento individual y especializado. Lo más frecuente es la reducción del dorso nasal, la elevación de la punta y el angostamiento de la misma. Es muy frecuente la realización de alguna corrección funcional, a nivel del tabique (septum) o cornetes, para mejorar el paso de aire. Si se ha realizado alguna modificación en el tabique se deben colocar tapones nasales temporales (48 horas aproximadamente). Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se debe usar una férula de yeso o cinta adhesiva por 7 a 15 días aproximadamente, así como recomendamos dormir con la cabeza elevada con dos almohadas, para disminuir el edema. Se indica analgésico en forma preventiva. Se evitan los esfuerzos, movimientos bruscos y mantener la cabeza abajo; en los primeros días. Recomendamos evitar la exposición solar directa por 30 días, de exponerse al sol, utilizar crema bloqueadora solar.', 'nariz.jpg'),
(3, 3, 'Lifting', 'Es el procedimiento en el cual le damos un aspecto más joven al rostro del paciente. Se indica para eliminar arrugas gruesas y flacidez cutánea en cara y cuello. Se restaura la belleza propia de cada rostro, perdida con los años, dejando un resultado natural. Se puede combinar con al cirugía de los párpados (Blefaroplastía) con liposucción de cuellos y otros procedimientos, que sean necesarios en cada caso en particular. Produce una mejoría marcada en la autoestima de los pacientes, los cuales deben tener presente que este procedimiento puede enmascarar o retardar el paso del tiempo en sus caras, pero NO detenerlo. Es un procedimiento solicitado luego de la cuarta década de vida, por ambos sexos.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y  tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante. Se debe evitar teñirse el pelo en los días previos a su cirugía ya que los químicos contenidos en la tintura, afectan el proceso cicatrizal. No usar maquillaje el día de su cirugía, y llevar anteojos para sol, que le serán útiles al retornar a su hogar.', 'Es un procedimiento prolongado y delicado (3 a 4 horas); se realiza con anestesia local y sedación endovenosa. Se utilizan vías de acceso por delante y detrás de la oreja, para que la cicatriz resultante sea lo menos visible posible. La piel sobrante se elimina, y los tejidos por debajo de la misma se resecan o se re-ubican, según el caso, para obtener el mejor y más natural resultado. Existen situaciones extraordinarios o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Requiere de 12 a 24 horas de hospitalización, se indican analgésico y antibióticos en forma preventiva. Se recomienda reposo en cama con la cabecera levantada, en los primeros días. Se suele colocar vendaje compresivo por 48 a 72 horas así como drenajes, según el caso. Se puede bañar al día siguiente, con la precaución de secarse muy bien todas las heridas. Se recomienda utilizar crema protectora solar por 30 días. No se debe realizar esfuerzos ni movimientos bruscos en los primeros 10 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático facial, etc.) para una mejor y más rápida re-inserción laboral y social.', 'anti-arruga.jpg'),
(4, 3, 'Dermoabración', 'Se utiliza en pacientes que presentan irregularidades marcadas en su superficie cutánea, así como en arrugas profundas peri bucales. Los casos mas usuales son secuelas de acne y fumadores crónicos. Su beneficio se basa en la eliminación de las capas más superficiales de la piel y en estimular el proceso cicatrizal propio del paciente, el cual genera colágeno y de un aspecto más joven, turgente y firme a la nueva piel. Se suele combinar con otros procedimientos de rejuvenecimiento facial (Lifting, párpados, etc.)', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y  tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se puede realizar en forma aislada o combinado a otras cirugías. Se utilizan objetos abrasivos (limas, diamantes) para eliminar en forma gradual las capas superficiales de la piel, hasta llegar al plano de profundidad deseado. En caso de ser un procedimiento aislado, es de tipo ambulatorio. Se coloca crema humectante y cicatrizante en el área tratada, para ayudar a una pronta cicatrización superficial.', 'Requiere de la aplicación de cremas humectantes y lavado diario del área tratada. Se suele formar un apequeña costra que suele caerse en los primeros 7 a 10 días. Luego persiste una zona eritematosa (rojiza) que se cubre fácilmente con maquillaje y puede durar hasta 2 meses. Luego de lo cual se observa el resultado definitivo y duradero. Recomendamos el uso de protector solar en el área tratada por 45 a 60 días, como mínimo.', 'anti-arruga.jpg'),
(5, 3, 'Peeling', 'El foto daño o foto envejecimiento, es el resultado de la prolongada exposición a los rayos ultravioletas; lo cual produce cambios tanto a nivel superficial como profundo en la piel. Manifestándose por manchas, arrugas finas y gruesas, flacidez y pérdida de turgencia cutánea; y en el peor de los casos hasta causa de lesiones pre cancerosas. Actualmente existen múltiples procedimientos para disminuir e incluso eliminar los cambios producidos por la exposición solar prolongada. Siendo el de mayor demanda y efectividad los peeling (descamación). Los cuales permiten realizar un cambio en la piel a diferentes profundidades. Es por esto que podemos optar por procedimientos superficiales, medios o profundos, según la profundidad a la cual actúen las diversas sustancias (ácidos). En consecuencia los cambios producidos son proporcionales a la profundidad del peeling realizado.', '-', 'Son procedimientos que combinan la aplicación diaria (nocturna) de cremas especialmente preparados, para cada paciente en particular. Las cuales se deben quitar por las mañanas y aplicar protector solar en todo el rostro, con dos a tres refuerzos, en el transcurso del día. Para evitar que la piel sensibilizada, sea afectada (manchada) por el sol o fuentes de radiaciones (hornos, microondas, lámparas, etc.) Según el caso, se puede combinar con aplicaciones de ácidos locales, para lograr una mejoría marcada en la piel dañada.', '-', 'anti-arruga.jpg'),
(6, 4, 'Aumento', 'El aumento del volumen mamario con prótesis es una de las cirugías mas solicitadas en la actualidad. Se indica en pacientes con deseo de un mayor volumen o tamaño mamario, sea por disminución post-parto o por escaso desarrollo glandular, fundamentalmente. Se utilizan también en caso de reconstrucciones mamarias de múltiples etiologías. Es el procedimiento que más frecuentemente realizo en mujeres de 18 a 45 años. Se utilizan implantes de ultima generación, con silicona de alta cohesividad (gel denso, no se derrama), pudiendo escoger diferentes texturas (lisa, rugosa, poliuretano) y diferentes formas (redondas, anatómicas, perfil alto, perfil bajo. Etc.)..', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja a la paciente y se duerme muy pacidamente durante la cirugía. Se puede colocar el implante por un acceso (incisión) peri-areolar o sub mamario fundamentalmente. El implante puede quedar alojado en el plano sub muscular (debajo del músculo pectoral), sub glandular (debajo de la glándula mamaria) o en un plano mixto (sub muscular superior y sub glandular inferior). El tipo de implante, tamaño, vía de acceso y plano de colocación, son analizados y decidido en forma conjunta con nuestras pacientes. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse la paciente de su sedación, comúnmente por la tarde de la cirugía. Se indica analgésico y antibióticos, en los primeros 3 a 5 días. Se recomienda, NO realizar esfuerzos ni movimientos bruscos con los brazos, en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión moderada (sostén o corpiño SIN varilla) por 30 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', '01-levantamiento-senos.jpg'),
(7, 4, 'Reduccion', 'El aumento del volumen mamario con prótesis es una de las cirugías mas solicitadas en la actualidad. Se indica en pacientes con deseo de un mayor volumen o tamaño mamario, sea por disminución post-parto o por escaso desarrollo glandular, fundamentalmente. Se utilizan también en caso de reconstrucciones mamarias de múltiples etiologías. Es el procedimiento que más frecuentemente realizo en mujeres de 18 a 45 años. Se utilizan implantes de ultima generación, con silicona de alta cohesividad (gel denso, no se derrama), pudiendo escoger diferentes texturas (lisa, rugosa, poliuretano) y diferentes formas (redondas, anatómicas, perfil alto, perfil bajo. Etc.).', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza con anestesia local y sedación endovenosa, la cual relaja a la paciente y se duerme muy pacidamente durante la cirugía. Se puede colocar el implante por un acceso (incisión) peri-areolar o sub mamario fundamentalmente. El implante puede quedar alojado en el plano sub muscular (debajo del músculo pectoral), sub glandular (debajo de la glándula mamaria) o en un plano mixto (sub muscular superior y sub glandular inferior). El tipo de implante, tamaño, vía de acceso y plano de colocación, son analizados y decidido en forma conjunta con nuestras pacientes. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse la paciente de su sedación, comúnmente por la tarde de la cirugía. Se indica analgésico y antibióticos, en los primeros 3 a 5 días. Se recomienda, NO realizar esfuerzos ni movimientos bruscos con los brazos, en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión moderada (sostén o corpiño SIN varilla) por 30 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', '01-levantamiento-senos.jpg'),
(8, 4, 'Levantamiento / Pexia', 'Es un procedimiento muy solicitado, fundamentalmente por mujeres con su maternidad satisfecha, que desean volver a tener el volumen y forma mamario, previo a sus embarazos. Existen múltiples técnicas y formas de lograr los deseos de nuestras pacientes. Se cambia la forma mamaria, dándole volumen; y se re ubica la areola y pezón en su posición óptima. Podemos realizarlo con el tejido propio de la paciente o con el uso de implantes mamarios, según cada caso en particular. Como toda cirugía mamaria, ayuda al bienestar nuestras pacientas.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas,etc.), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza bajo anestesia general o sedación endovenosa + anestesia local. Existen múltiples técnicas, por lo que cada cirujano utiliza la de su preferencia o mayor experiencia. Las cicatrices resultantes pueden variar en su forma, siendo la más habitual la “T” invertida o en forma de ancla. También pueden ser en forma de J (jota), vertical, en forma de O (peri areolar); siempre teniendo presente que estas cicatrices, se ubicaran en la parte inferior, y menos visible, de las mamas. La areola se re-posiciona a un nivel más elevado, y el exceso de piel de la parte inferior mamaria, se eliminan. De ser necesario se procede a la colocación del implante mamario, sea por escaso volumen actual o por deseo de la paciente. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse la paciente, por la tarde o al día siguiente. Se indican analgésicos y antibióticos por 3 a 5 días. Se retiran drenajes a las 48 o 72 hs de operada . Se recomienda NO realizar esfuerzos ni movimientos bruscos con los brazos en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión (sostén o corpiño SIN varilla) por 30 días. La forma definitiva de la nueva mama, se obtiene a los 4 a 6 meses, cuando el proceso cicatrizal está avanzado y los tejidos se han acomodado nuevamente a los efectos de la gravedad. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', '01-levantamiento-senos.jpg'),
(9, 5, 'Liposucción', 'La liposucción es una técnica desarrollada en el año 1979, que ha sido perfeccionada ampliamente en la actualidad. Siendo hoy en día la practica quirúrgica de mayor crecimiento. Consiste en la eliminación de depósitos de tejido graso, que NO ceden con dietas y ejercicios rigurosos, por medio de pequeñas cánulas. Logrando grandes cambios en el contorno corporal de los pacientes. Se indica en pacientes con buena calidad cutánea (que permita su posterior retracción) y con depósitos grasos localizados.  Se puede realizar en forma aislada o puede combinarse con otros procedimientos (Lifting, cirugía del abdomen, de los glúteos, brazos, etc.) Las zonas más frecuentemente tratadas son: caderas, abdomen, muslos, glúteos, rodillas, cuello y brazos.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas, etc.), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se utiliza anestesia local + sedación endovenosa, o anestesia raquídea, dependiendo de la superficie a tratar. Se realizan pequeños accesos (incisiones), de 1 cm y en zonas ocultas, para las cánulas; las cuales se conectan a máquinas especiales para generar vacío (succión). Se procede luego a utilizar técnicas de última generación que permiten una extracción y moldeado del tejido graso. Dejando SIEMPRE un pequeño remanente del mismo, el cual es necesario para el correcto funcionamiento del organismo, y evitar marcas o depresiones. Existen situaciones extraordinarias o imponderables, que como en todo procedimiento quirúrgico, deben ser explicadas por el profesional tratante.', 'El paciente permanece hospitalizado desde unas horas hasta un día, según la magnitud del procedimiento, aunque generalmente es ambulatorio (se da el alta, la misma tarde la cirugía). Se debe utilizar una prenda de compresión por 30 días, para favorecer la retracción cutánea y la disminución del edema. Se indican analgésico y antibióticos por 3 a 5 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida, re-inserción laboral y social. Sugerimos NO realizar ejercicios bruscos por 30 días, luego iniciar actividades gradualmente.', 'corporal.jpg'),
(10, 5, 'Abdominoplastia', 'Es la cirugía para corregir la flacidez cutánea y muscular del abdomen después de embarazos o variaciones importantes de peso, fundamentalmente; permite al paciente mejorar el aspecto de su abdomen, su contorno corporal y elevar su autoestima. Es un procedimiento de gran demanda y con excelentes resultados. Puede combinarse con liposucción de cadera, piernas, rodilla, etc.', 'Pre-operatorio: Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Procedimiento: Se utiliza anestesia raquídea o peridural. Se realiza una incisión sobre el bello púbico que se extiende lateralmente, permitiendo resecar la piel excedente y devolverle tonicidad a la misma. Se fortalecen los músculos abdominales, dando firmeza y disminuyendo la cintura levemente. El ombligo es respetado y re-insertado nuevamente en la piel abdominal. Suelen eliminarse las estrías y cicatrices que se encuentran por debajo del ombligo. Existen complicaciones como en todo procedimiento quirúrgico que deben ser explicadas por el profesional tratante.', 'Post-operatorio: Requiere hospitalización de un día, al empezar a caminar se debe mantener el tronco flexionado en los primeros días. Se debe utilizar una prenda de vestir de compresión por 30 días, para favorecer la adhesión cutánea y la disminución del edema. El dolor es mínimo y cede con analgésicos comunes. La herida y el ombligo se deben lavar y secar perfectamente, con los baños diarios. Recomendamos la realización de terapia de recuperación (US, ES, etc) para una mejor y más rápida re-inserción laboral y social; así como el uso de protección solar en el área tratada, por dos meses aproximadamente. NO se recomienda realizar ejercicios bruscos por 30 días aproximadamente.', 'corporal.jpg'),
(11, 5, 'Pantorrilas', 'Es un procedimiento solicitado por falta de definición o volumen en piernas, tanto de hombres (físico-culturistas fundamentalmente) como mujeres jóvenes. Da una mejora rápida y evidente en la zona, que eleva notoriamente el ánimo del paciente y ayuda a superar limitaciones. Se realiza también con fines reconstructivos en pacientes con secuelas de poliomelitis y otros trastornos nerviosos periféricos o en secuela de traumatismos de diversa índole, en los cuales hay pérdida o ausencia de volumen.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Es un procedimiento de corta duración, se realiza bajo bloqueo peridural y anestesia local, el abordaje se realiza por detrás de la rodilla. Se coloca el implante según el área a aumentar sea la parte interna, externa o ambas, siendo en este último caso necesario el uso de dos implantes (según el caso). El plano de colocación del implante es sub facial, es decir por encima del músculo, lo cual permite el funcionamiento del mismo son inconveniente alguno.', 'Es un procedimiento ambulatorio, el paciente se retira por la tarde de la clínica. Se indica utilizar tacos altos (4 a 6 centímetros) por las primeras 2 a 3 semanas, a fin de evitar mover en exceso, la pantorrilla. Indicamos analgésico y antibióticos en forma rutinaria. Se inicia a las 72 hs de operada, terapia con ultrasonido y drenaje linfático. Se indica media de compresión por 3 a 4 semanas.', 'corporal.jpg'),
(12, 5, 'Gluteos', 'Es un procedimiento de creciente demanda, dado los excelentes resultados que produce y lo rápido de su recuperación. Se indica en casos de hipoplasia glútea o falta de volumen en dicha zona. Por la presencia de varios músculos en la zona, el implante se coloca entre los mismos (plano intrer muscular). La vía de abordaje queda oculta entre ambos glúteos, por lo que el resultado estético final es muy bueno.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza bajo bloqueo peridural, se da el alta en el mismo día de la cirugía. El abordaje se realiza por el pliegue inter-glúteo, dejando una cicatriz oculta, que se cubre fácilmente con ropa interior muy pequeña. El implante se coloca en un plano intra muscular y en posición superior a los ísquiones (huesos sobre los que nos sentamos). Por lo que NUNCA se sienta el paciente sobre sus prótesis. Se utilizan implantes texturados, en forma de almendra, que da un resulta natural, muy agradable, al tacto y vista.', 'Se recomiendo evitar en los primeros días, dormir boca arriba, si se puede de costado y boca abajo es lo más recomendable. Para evitar traumatismos y presión sobre los implantes. Se indica analgésicos y antibióticos en forma rutinaria. Puede utilizarse una calza, para contener la zona y evitar mayor edema. Se indica iniciar terapia con ultrasonido y drenaje linfático a las 72 hs. En caso de colocarse drenajes, se retiran entre las 48 y 72 hs.', 'corporal.jpg'),
(13, 6, 'Arrugas', 'Su efecto consiste en producir un bloqueo transitorio y reversible (es decir que NO es definitivo) a nivel de la placa neuro-muscular, lugar en el cual el nervio hace contacto con el músculo indicándole que se contraiga. Actúa fundamentalmente inhibiendo la acetilcolina, la cual es responsable de la contracción muscular y de la secreción del sudor entre otras.  Las arrugas, son en efecto, el resultado de varios factores, entre los que se encuentran la calidad cutánea y los movimientos musculares subyacentes. La mejor forma de lograr preservar una piel saludable y turgente, es realizar un cuidado constante de las radiaciones UV (ultra-violetas) del sol, lo que en nuestra zona adquiere un factor relevante por la conocida disminución de la capa de ozono y los efectos deletéreos que esta produce. También sirven con este fin el uso de productos humectantes y revitalizadores de las propiedades visco-elásticas de la piel.', 'La Toxina Botulínica tipo A - BOTOX® purificada, es producida en el extranjero. Para su correcta preservación, debe ser transportada a una temperatura constante (2 a 8 grados centígrados) desde su producción, lo que garantiza su eficacia a la hora de ser administrada. Es importante recordar que su efecto NO es definitivo, siendo el mismo de 4 a 6 meses.', 'Para su aplicación, se requiere de una limpieza profunda del área a tratar y de material descartable estéril durante su preparación. NO requiere de anestesia, ya que su aplicación es casi indolora; así como tampoco requiere internación ya que es de uso ambulatorio. Puede producir leve dolor al tacto, en el área tratada, los dos primeros días post tratamiento; NO se han reportado complicaciones mayores ya que sus efectos son reversibles.', 'Los cambios obtenidos son evidentes entre los 5 a 10 días posteriores a su aplicación. NO interfieren con las actividades cotidianas de cada individuo.', 'botox.jpg'),
(14, 6, 'Sudoracion', 'La hiperhidrosis o sudoración (transpiración) excesiva es una afección con diagnóstico empírico ya que NO poseemos un método que nos informe de cuanto es lo que transpiramos o cuanto es lo que normalmente debemos de producir, para que basándonos en esto, podamos llegar a un diagnóstico preciso de HIPERHIDROSIS. Actualmente se utiliza el Test de Minor, en casos en los cuales se tenga algún tipo de duda diagnóstica.', 'El tratamiento consiste en la aplicación de toxina botulínica purificada en las áreas afectadas, siendo de crucial importancia la correcta preparación y aplicación del producto, ya que debe ser colocado a una profundidad exacta, en cantidades adecuadas en cada uno de los múltiples sitios descriptos para este tipo de intervención y bajo anestesia local, para evitar las molestia que suele ocasionar si se obvia este último paso, sobre todo en las manos. Debido a la gran área a tratar y a la cantidad de toxina a utilizar se recomienda realizar la aplicación en etapas, para poder evaluar y apreciar la notable mejoría que suele ocurrir en los primeros 3 a 7 días, y evitar complicaciones.', 'Es un tratamiento de manejo recomendado, por parte de médicos entrenados para tal fin; ya que su aplicación DIFIERE en muchos aspectos del uso habitual de la toxina botulínica purificada para el manejo de arrugas de expresión.', 'Los resultados son excelentes y dan un alivio transitorio, a una gran molestia de pacientes, que deben padecer la excesiva producción de sudoración a diario.', 'botox.jpg'),
(15, 7, 'Cirugía de Orejas', 'Es el procedimiento destinado a corregir deformidades leves en el pabellón auricular, como ser las orejas en asas u orejas prominentes. Se diferencia de la reconstrucción auricular, en la cual puede haber ausencia parcial o total del pabellón auricular, el cual se reconstruye con buenos resultados estéticos y funcionales. Es un procedimiento de mucha demanda por los trastornos psicológicos y sociales que suele acompañar a este tipo de alteraciones, sobre todo en niños de edad escolar.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Puede realizarse con anestesia local sola o con el apoyo de sedación endovenosa en caso de niños o personas muy ansiosas. Se aborda el cartílago auricular, por incisiones en la región posterior de las orejas, ya que es el cartílago el que debemos remodelar o resecar según el caso. La cicatriz queda oculta detrás de la oreja.', 'Es un procedimiento ambulatorio, se indica analgésicos y antibióticos en los primeros días. Se debe utilizar un vendaje de compresión leve en forma constante por 15 días y luego solo por las noches. Puede bañarse al otro día de su cirugía teniendo la precaución de secar bien las heridas y colocar su vendaje inmediatamente.', 'orejas.jpg'),
(16, 7, 'Lesiones Cutaneas', 'Por diversos motivos (exposición solar, edad, tipos de pieles, traumatismos, cirugías previas, etc.) suelen haber un sin número de lesiones cutáneas (lunares, verrugas, tumores benignos de piel, melanomas, epiteliomas, sarcomas, cicatrices, quistes, etc.) que aquejan a nuestros pacientes. Motivando a realizar la consulta médica, tanto por fines estéticos, como por cuestiones reconstructivas y oncológicas; siendo en otras tantas veces por derivación de especialistas (dermatólogos, oncólogos, etc.)', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas, cradioaspirinas, etc.), complejos vitamínicos, alcohol, y tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria.', 'Se realiza en la gran mayoría de los casos en forma ambulatoria, en nuestra clínica, y en casos especiales en sanatorios (edad avanzada, lesiones muy amplias, problemas cardiológicos, etc.). Se coloca anestesia local sobre el área a tratar, y se realiza el procedimiento quirúrgico indicado. Colocándose una gasa, cinta o curación sobre el área tratada; retornando el paciente a su hogar al concluir la misma.', 'Se indican analgésicos según necesidad (si hay dolor) y antibióticos en todos los casos. Se explica como realizar el cuidado de la cicatriz y se indica cuando acudir a la consulta para retirar puntos y control. Son procedimientos muy bien tolerados, que permiten NO alterar su vida social y/o profesional diaria.', 'orejas.jpg'),
(17, 7, 'Implantes Capilares', 'Es el procedimiento, por excelencia, para el tratamiento de la calvicie masculina fundamentalmente. La técnica del implante capilar ha ido evolucionando ampliamente en los últimos años, habiendo iniciado tiempo atrás con implantes de gran tamaño (más de 5 pelos por implante) que daban un aspecto poco natural o en “cabeza de muñeca”. Por lo notorio de la aparición de muchos pelos desde un solo punto. Hoy en día hablamos de macro-implantes, cuando colocamos 3 o 4 pelos por implantes, los cuales son indicados para dar volumen en áreas que necesiten. Siendo, micro-implantes la colocación de 1 o 2 pelos por implante, los cuales usamos para dar definición a la línea de implantación pilosa en la frente del paciente.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza una sedación general endo-venosa, y se completa la anestesia de la zona a tratar con anestesia local. Se realiza con el paciente sentado, luego de haber tomado la zona donadora de injertos, la cual puede situarse en la nuca o región temporal. Se realiza la fragmentación continua y sucesiva de los implantes, hasta lograr implantes del tamaño adecuado al área a tratar. Luego se aplican en forma sucesiva hasta lograr una mejoría apreciable del volumen y densidad del área en cuestión. No colocamos vendajes, no deben retirarse suturas y el paciente sale caminando del quirófano, para retornar a su hogar.', 'Suele ser completamente ambulatorio, el paciente puede lavar su cabeza a las 24 hs. Del procedimiento, no debe usar vendaje pudiendo ser visible las múltiples costras que quedan en la periferia de cada implante. Puede presentar leve edema en frente y párpado a las 48 hs. No interfiere con las actividades diarias del paciente.', 'orejas.jpg');

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
(1, 'parpados.jpg', 'Texto sobre PARPADOS', 'PARPADOS', '/pagina/parpados#cir'),
(2, 'nariz.jpg', 'Texto sobre NARIZ', 'NARIZ', '/pagina/nariz#cir'),
(3, 'anti-arruga.jpg', 'Texto sobre FACIAL', 'FACIAL', '/pagina/facial#cir'),
(4, 'mamarias.jpg', 'Texto sobre MAMARIAS', 'MAMARIAS', '/pagina/mamaria#cir'),
(5, 'corporal.jpg', 'Texto sobre CORPORAL', 'CORPORAL', '/pagina/corporal#cir'),
(6, 'botox.jpg', 'Texto sobre BOTOX', 'BOTOX', '/pagina/botox#cir'),
(7, 'orejas.jpg', 'Texto sobre OTROS', 'OTROS', '/pagina/otros#cir');

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
(1, 'San Martín 3067 PA Santa Fe 3000, Argentina', '(0342) 456 3570', '(0342) 154 063196', 'contacto@estetica-paillet.com.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cutaneas`
--

CREATE TABLE `cutaneas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `cutaneas`
--

INSERT INTO `cutaneas` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Lesiones Cutaneas', 'Por diversos motivos (exposición solar, edad, tipos de pieles, traumatismos, cirugías previas, etc.) suelen haber un sin número de lesiones cutáneas (lunares, verrugas, tumores benignos de piel, melanomas, epiteliomas, sarcomas, cicatrices, quistes, etc.) que aquejan a nuestros pacientes. Motivando a realizar la consulta médica, tanto por fines estéticos, como por cuestiones reconstructivas y oncológicas; siendo en otras tantas veces por derivación de especialistas (dermatólogos, oncólogos, etc.)', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas, cradioaspirinas, etc.), complejos vitamínicos, alcohol, y tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria.', 'Se realiza en la gran mayoría de los casos en forma ambulatoria, en nuestra clínica, y en casos especiales en sanatorios (edad avanzada, lesiones muy amplias, problemas cardiológicos, etc.). Se coloca anestesia local sobre el área a tratar, y se realiza el procedimiento quirúrgico indicado. Colocándose una gasa, cinta o curación sobre el área tratada; retornando el paciente a su hogar al concluir la misma.', 'Se indican analgésicos según necesidad (si hay dolor) y antibióticos en todos los casos. Se explica como realizar el cuidado de la cicatriz y se indica cuando acudir a la consulta para retirar puntos y control. Son procedimientos muy bien tolerados, que permiten NO alterar su vida social y/o profesional diaria.', 'lesiones_tumores_piel2.jpg');

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
-- Estructura de tabla para la tabla `dermoabrasion`
--

CREATE TABLE `dermoabrasion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `dermoabrasion`
--

INSERT INTO `dermoabrasion` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Dermoabrasion', 'Se utiliza en pacientes que presentan irregularidades marcadas en su superficie cutánea, así como en arrugas profundas peri bucales. Los casos mas usuales son secuelas de acne y fumadores crónicos. Su beneficio se basa en la eliminación de las capas más superficiales de la piel y en estimular el proceso cicatrizal propio del paciente, el cual genera colágeno y de un aspecto más joven, turgente y firme a la nueva piel. Se suele combinar con otros procedimientos de rejuvenecimiento facial (Lifting, párpados, etc.)', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y  tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se puede realizar en forma aislada o combinado a otras cirugías. Se utilizan objetos abrasivos (limas, diamantes) para eliminar en forma gradual las capas superficiales de la piel, hasta llegar al plano de profundidad deseado. En caso de ser un procedimiento aislado, es de tipo ambulatorio. Se coloca crema humectante y cicatrizante en el área tratada, para ayudar a una pronta cicatrización superficial.', 'Requiere de la aplicación de cremas humectantes y lavado diario del área tratada. Se suele formar un apequeña costra que suele caerse en los primeros 7 a 10 días. Luego persiste una zona eritematosa (rojiza) que se cubre fácilmente con maquillaje y puede durar hasta 2 meses. Luego de lo cual se observa el resultado definitivo y duradero. Recomendamos el uso de protector solar en el área tratada por 45 a 60 días, como mínimo.', 'shutterstock_332819048-ma.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gluteos`
--

CREATE TABLE `gluteos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `gluteos`
--

INSERT INTO `gluteos` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Glúteos', 'Es un procedimiento de creciente demanda, dado los excelentes resultados que produce y lo rápido de su recuperación. Se indica en casos de hipoplasia glútea o falta de volumen en dicha zona. Por la presencia de varios músculos en la zona, el implante se coloca entre los mismos (plano intrer muscular). La vía de abordaje queda oculta entre ambos glúteos, por lo que el resultado estético final es muy bueno.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza bajo bloqueo peridural, se da el alta en el mismo día de la cirugía. El abordaje se realiza por el pliegue inter-glúteo, dejando una cicatriz oculta, que se cubre fácilmente con ropa interior muy pequeña. El implante se coloca en un plano intra muscular y en posición superior a los ísquiones (huesos sobre los que nos sentamos). Por lo que NUNCA se sienta el paciente sobre sus prótesis. Se utilizan implantes texturados, en forma de almendra, que da un resulta natural, muy agradable, al tacto y vista.', 'Se recomiendo evitar en los primeros días, dormir boca arriba, si se puede de costado y boca abajo es lo más recomendable. Para evitar traumatismos y presión sobre los implantes. Se indica analgésicos y antibióticos en forma rutinaria. Puede utilizarse una calza, para contener la zona y evitar mayor edema. Se indica iniciar terapia con ultrasonido y drenaje linfático a las 72 hs. En caso de colocarse drenajes, se retiran entre las 48 y 72 hs.', 'aumento-de-gluteos-sevilla.jpg');

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
-- Estructura de tabla para la tabla `levantamiento`
--

CREATE TABLE `levantamiento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `levantamiento`
--

INSERT INTO `levantamiento` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Levantamiento / Pexia', 'Es un procedimiento muy solicitado, fundamentalmente por mujeres con su maternidad satisfecha, que desean volver a tener el volumen y forma mamario, previo a sus embarazos. Existen múltiples técnicas y formas de lograr los deseos de nuestras pacientes. Se cambia la forma mamaria, dándole volumen; y se re ubica la areola y pezón en su posición óptima. Podemos realizarlo con el tejido propio de la paciente o con el uso de implantes mamarios, según cada caso en particular. Como toda cirugía mamaria, ayuda al bienestar nuestras pacientas.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas,etc.), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se realiza bajo anestesia general o sedación endovenosa + anestesia local. Existen múltiples técnicas, por lo que cada cirujano utiliza la de su preferencia o mayor experiencia. Las cicatrices resultantes pueden variar en su forma, siendo la más habitual la “T” invertida o en forma de ancla. También pueden ser en forma de J (jota), vertical, en forma de O (peri areolar); siempre teniendo presente que estas cicatrices, se ubicaran en la parte inferior, y menos visible, de las mamas. La areola se re-posiciona a un nivel más elevado, y el exceso de piel de la parte inferior mamaria, se eliminan. De ser necesario se procede a la colocación del implante mamario, sea por escaso volumen actual o por deseo de la paciente. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse la paciente, por la tarde o al día siguiente. Se indican analgésicos y antibióticos por 3 a 5 días. Se retiran drenajes a las 48 o 72 hs de operada . Se recomienda NO realizar esfuerzos ni movimientos bruscos con los brazos en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión (sostén o corpiño SIN varilla) por 30 días. La forma definitiva de la nueva mama, se obtiene a los 4 a 6 meses, cuando el proceso cicatrizal está avanzado y los tejidos se han acomodado nuevamente a los efectos de la gravedad. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', '01-levantamiento-senos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lifting`
--

CREATE TABLE `lifting` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `lifting`
--

INSERT INTO `lifting` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Lifting Facial', 'Es el procedimiento en el cual le damos un aspecto más joven al rostro del paciente. Se indica para eliminar arrugas gruesas y flacidez cutánea en cara y cuello. Se restaura la belleza propia de cada rostro, perdida con los años, dejando un resultado natural. Se puede combinar con al cirugía de los párpados (Blefaroplastía) con liposucción de cuellos y otros procedimientos, que sean necesarios en cada caso en particular. Produce una mejoría marcada en la autoestima de los pacientes, los cuales deben tener presente que este procedimiento puede enmascarar o retardar el paso del tiempo en sus caras, pero NO detenerlo. Es un procedimiento solicitado luego de la cuarta década de vida, por ambos sexos.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y  tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante. Se debe evitar teñirse el pelo en los días previos a su cirugía ya que los químicos contenidos en la tintura, afectan el proceso cicatrizal. No usar maquillaje el día de su cirugía, y llevar anteojos para sol, que le serán útiles al retornar a su hogar.', 'Es un procedimiento prolongado y delicado (3 a 4 horas); se realiza con anestesia local y sedación endovenosa. Se utilizan vías de acceso por delante y detrás de la oreja, para que la cicatriz resultante sea lo menos visible posible. La piel sobrante se elimina, y los tejidos por debajo de la misma se resecan o se re-ubican, según el caso, para obtener el mejor y más natural resultado. Existen situaciones extraordinarios o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Requiere de 12 a 24 horas de hospitalización, se indican analgésico y antibióticos en forma preventiva. Se recomienda reposo en cama con la cabecera levantada, en los primeros días. Se suele colocar vendaje compresivo por 48 a 72 horas así como drenajes, según el caso. Se puede bañar al día siguiente, con la precaución de secarse muy bien todas las heridas. Se recomienda utilizar crema protectora solar por 30 días. No se debe realizar esfuerzos ni movimientos bruscos en los primeros 10 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático facial, etc.) para una mejor y más rápida re-inserción laboral y social.', 'lifting-facial.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `liposuccion`
--

CREATE TABLE `liposuccion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `liposuccion`
--

INSERT INTO `liposuccion` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Liposucción', 'La liposucción es una técnica desarrollada en el año 1979, que ha sido perfeccionada ampliamente en la actualidad. Siendo hoy en día la practica quirúrgica de mayor crecimiento. Consiste en la eliminación de depósitos de tejido graso, que NO ceden con dietas y ejercicios rigurosos, por medio de pequeñas cánulas. Logrando grandes cambios en el contorno corporal de los pacientes. Se indica en pacientes con buena calidad cutánea (que permita su posterior retracción) y con depósitos grasos localizados.  Se puede realizar en forma aislada o puede combinarse con otros procedimientos (Lifting, cirugía del abdomen, de los glúteos, brazos, etc.) Las zonas más frecuentemente tratadas son: caderas, abdomen, muslos, glúteos, rodillas, cuello y brazos.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas, etc.), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Se utiliza anestesia local + sedación endovenosa, o anestesia raquídea, dependiendo de la superficie a tratar. Se realizan pequeños accesos (incisiones), de 1 cm y en zonas ocultas, para las cánulas; las cuales se conectan a máquinas especiales para generar vacío (succión). Se procede luego a utilizar técnicas de última generación que permiten una extracción y moldeado del tejido graso. Dejando SIEMPRE un pequeño remanente del mismo, el cual es necesario para el correcto funcionamiento del organismo, y evitar marcas o depresiones. Existen situaciones extraordinarias o imponderables, que como en todo procedimiento quirúrgico, deben ser explicadas por el profesional tratante.', 'El paciente permanece hospitalizado desde unas horas hasta un día, según la magnitud del procedimiento, aunque generalmente es ambulatorio (se da el alta, la misma tarde la cirugía). Se debe utilizar una prenda de compresión por 30 días, para favorecer la retracción cutánea y la disminución del edema. Se indican analgésico y antibióticos por 3 a 5 días. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida, re-inserción laboral y social. Sugerimos NO realizar ejercicios bruscos por 30 días, luego iniciar actividades gradualmente.', 'liposuccion.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orejas`
--

CREATE TABLE `orejas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `orejas`
--

INSERT INTO `orejas` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Cirugia de Orejas', 'Es el procedimiento destinado a corregir deformidades leves en el pabellón auricular, como ser las orejas en asas u orejas prominentes. Se diferencia de la reconstrucción auricular, en la cual puede haber ausencia parcial o total del pabellón auricular, el cual se reconstruye con buenos resultados estéticos y funcionales. Es un procedimiento de mucha demanda por los trastornos psicológicos y sociales que suele acompañar a este tipo de alteraciones, sobre todo en niños de edad escolar.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Puede realizarse con anestesia local sola o con el apoyo de sedación endovenosa en caso de niños o personas muy ansiosas. Se aborda el cartílago auricular, por incisiones en la región posterior de las orejas, ya que es el cartílago el que debemos remodelar o resecar según el caso. La cicatriz queda oculta detrás de la oreja.', 'Es un procedimiento ambulatorio, se indica analgésicos y antibióticos en los primeros días. Se debe utilizar un vendaje de compresión leve en forma constante por 15 días y luego solo por las noches. Puede bañarse al otro día de su cirugía teniendo la precaución de secar bien las heridas y colocar su vendaje inmediatamente', 'orejas.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pantorrillas`
--

CREATE TABLE `pantorrillas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `pantorrillas`
--

INSERT INTO `pantorrillas` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Pantorrillas', 'Es un procedimiento solicitado por falta de definición o volumen en piernas, tanto de hombres (físico-culturistas fundamentalmente) como mujeres jóvenes. Da una mejora rápida y evidente en la zona, que eleva notoriamente el ánimo del paciente y ayuda a superar limitaciones. Se realiza también con fines reconstructivos en pacientes con secuelas de poliomelitis y otros trastornos nerviosos periféricos o en secuela de traumatismos de diversa índole, en los cuales hay pérdida o ausencia de volumen.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas, las vitaminas C y E, y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'Es un procedimiento de corta duración, se realiza bajo bloqueo peridural y anestesia local, el abordaje se realiza por detrás de la rodilla. Se coloca el implante según el área a aumentar sea la parte interna, externa o ambas, siendo en este último caso necesario el uso de dos implantes (según el caso). El plano de colocación del implante es sub facial, es decir por encima del músculo, lo cual permite el funcionamiento del mismo son inconveniente alguno.', 'Es un procedimiento ambulatorio, el paciente se retira por la tarde de la clínica. Se indica utilizar tacos altos (4 a 6 centímetros) por las primeras 2 a 3 semanas, a fin de evitar mover en exceso, la pantorrilla. Indicamos analgésico y antibióticos en forma rutinaria. Se inicia a las 72 hs de operada, terapia con ultrasonido y drenaje linfático. Se indica media de compresión por 3 a 4 semanas.', 'aumento-de-gemelos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peeling`
--

CREATE TABLE `peeling` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `peeling`
--

INSERT INTO `peeling` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Peelings', 'El foto daño o foto envejecimiento, es el resultado de la prolongada exposición a los rayos ultravioletas; lo cual produce cambios tanto a nivel superficial como profundo en la piel. Manifestándose por manchas, arrugas finas y gruesas, flacidez y pérdida de turgencia cutánea; y en el peor de los casos hasta causa de lesiones pre cancerosas. Actualmente existen múltiples procedimientos para disminuir e incluso eliminar los cambios producidos por la exposición solar prolongada. Siendo el de mayor demanda y efectividad los peeling (descamación). Los cuales permiten realizar un cambio en la piel a diferentes profundidades. Es por esto que podemos optar por procedimientos superficiales, medios o profundos, según la profundidad a la cual actúen las diversas sustancias (ácidos). En consecuencia los cambios producidos son proporcionales a la profundidad del peeling realizado.', NULL, 'Son procedimientos que combinan la aplicación diaria (nocturna) de cremas especialmente preparados, para cada paciente en particular. Las cuales se deben quitar por las mañanas y aplicar protector solar en todo el rostro, con dos a tres refuerzos, en el transcurso del día. Para evitar que la piel sensibilizada, sea afectada (manchada) por el sol o fuentes de radiaciones (hornos, microondas, lámparas, etc.) Según el caso, se puede combinar con aplicaciones de ácidos locales, para lograr una mejoría marcada en la piel dañada.', NULL, 'peeling-quimico.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reduccion_mamario`
--

CREATE TABLE `reduccion_mamario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `reduccion_mamario`
--

INSERT INTO `reduccion_mamario` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Reducción Mamaria', 'Es un procedimiento que se realiza en pacientes que acuden por inconformidad estética (tamaño y/o posición de sus mamas, diámetro areolar, etc.) así como por dificultad física (dolores de espalda, cuello y hombros, vicio en su postura, desviación de su columna vertebral, etc.). El nuevo volumen mamario, se decide en base al tamaño del tórax y a los deseos de la paciente, teniendo siempre en mente un resultado estético, agradable y armonioso.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas, etc.), complejos vitamínicos, alcohol y el tabaco fundamentalmente. Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante.', 'que es Se realiza con anestesia general, fundamentalmente. Existen múltiples técnicas, por lo que cada cirujano utiliza la de su preferencia o mayor experiencia. Las cicatrices resultantes pueden variar en su forma, siendo la más habitual la “T” invertida o en forma de ancla. Se elimina el tejido mamario en exceso y se devuelve a la mama una forma más pequeña, agradable y natural. La areola se re-posiciona a un nivel más elevado, y el exceso de piel de la parte inferior mamaria, se eliminan. Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se da el alta al recuperarse el paciente, por la tarde o al día siguiente. Se indica analgésico y antibióticos, en los primeros 3 a 5 días. Se retiran drenajes a las 48 o 72 hs de operada. Se recomienda NO realizar esfuerzos ni movimientos bruscos con los brazos en los primeros 10 a 15 días, luego se va retornando lentamente con las actividades habituales. Se recomienda usar prenda de vestir de compresión (sostén o corpiño SIN varilla) por 30 días. La forma definitiva de la nueva mama, se obtiene a los 4 a 6 meses, cuando el proceso cicatrizal está avanzado y los tejidos se han acomodado nuevamente a los efectos de la gravedad. Recomendamos la realización de terapia de recuperación (ultrasonido, drenaje linfático, etc.) para una mejor y más rápida re-inserción laboral y social.', 'mamaria.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rinoplastia`
--

CREATE TABLE `rinoplastia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `rinoplastia`
--

INSERT INTO `rinoplastia` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Rinoplastia', 'La nariz es el punto central de la cara, por lo cual siempre preservamos el equilibrio estético de la misma, sin olvidar su importante aspecto funcional. Realizamos una minuciosa evaluación de las diferentes partes que componen la nariz (punta, dorso, raíz, base, narinas, columella) y luego una evaluación en el contexto general de la cara. Teniendo siempre en mente que se obtendrá una mejoría de la forma nasal, que se adecue a los rasgos faciales y preserve o mejore su función. Es una de las cirugías que brinda una mejoría en la imagen personal, ayudando a superar situaciones que elevan la autoestima del paciente.', 'Como en todo procedimiento quirúrgico, recomendamos suspender toda sustancia que aumente el sangrado intra-operatorio, como son las aspirinas (aspirinetas, bayaspirinas), complejos vitamínicos, alcohol y el tabaco fundamentalmente Esta suspensión recomendamos sea por 10 a 15 días antes de su cirugía y mantenerla durante la primer semana post-operatoria. Así mismo recomendamos tomar Árnica montana en los días previos a su procedimiento, para disminuir el sangrado intra-operatorio y acelerar su recuperación post-quirúrgica. Sugerimos nos comunique si está padeciendo algún proceso infeccioso (fiebre, gripe, diarrea, etc.) o si está recibiendo cualquier otro tipo de medicación, esto es MUY importante. Recuerde que al despertar de su cirugía, probablemente deberá respirar por su boca, esto lo ayudará mucho.', 'Se realiza con anestesia local y sedación endovenosa, o con anestesia general. El 95 % se realizan por vía endonasal (por dentro de la nariz, sin cicatriz visible). Cada nariz requiere de una técnica y tratamiento individual y especializado. Lo más frecuente es la reducción del dorso nasal, la elevación de la punta y el angostamiento de la misma. Es muy frecuente la realización de alguna corrección funcional, a nivel del tabique (septum) o cornetes, para mejorar el paso de aire. Si se ha realizado alguna modificación en el tabique se deben colocar tapones nasales temporales (48 horas aproximadamente). Existen situaciones extraordinarias o imponderables, como en todo procedimiento quirúrgico, que deben ser explicadas por el profesional tratante.', 'Se debe usar una férula de yeso o cinta adhesiva por 7 a 15 días aproximadamente, así como recomendamos dormir con la cabeza elevada con dos almohadas, para disminuir el edema. Se indica analgésico en forma preventiva. Se evitan los esfuerzos, movimientos bruscos y mantener la cabeza abajo; en los primeros días. Recomendamos evitar la exposición solar directa por 30 días, de exponerse al sol, utilizar crema bloqueadora solar.', 'nariz.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subseccion`
--

CREATE TABLE `subseccion` (
  `id_subseccion` int(11) NOT NULL,
  `subseccion` varchar(250) COLLATE utf8_bin NOT NULL,
  `id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `subseccion`
--

INSERT INTO `subseccion` (`id_subseccion`, `subseccion`, `id`) VALUES
(1, 'slider2-1.jpg', 0),
(2, 'facial.jpg', 0),
(3, 'fondo_contact.jpg', 0),
(4, 'corporal.jpg', 19),
(5, 'facial.jpg', 19),
(6, '01-levantamiento-senos.jpg', 1),
(7, 'abdominoplastia.jpg', 1),
(8, 'anti-arruga.jpg', 1),
(9, '1.jpg', 2),
(10, 'casa_1.jpg', 2),
(11, 'marcha_1.jpg', 2),
(12, 'anti-arruga.jpg', 3),
(13, 'corporal.jpg', NULL),
(14, 'facial.jpg', NULL),
(15, 'facial.jpg', NULL),
(16, 'implante-capilar-hombres.jpg', NULL),
(17, 'abdominoplastia.jpg', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sudoracion`
--

CREATE TABLE `sudoracion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_bin NOT NULL,
  `que` text COLLATE utf8_bin NOT NULL,
  `pre` text COLLATE utf8_bin NOT NULL,
  `pro` text COLLATE utf8_bin NOT NULL,
  `post` text COLLATE utf8_bin NOT NULL,
  `imagen` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `sudoracion`
--

INSERT INTO `sudoracion` (`id`, `nombre`, `que`, `pre`, `pro`, `post`, `imagen`) VALUES
(1, 'Sudoración', 'La hiperhidrosis o sudoración (transpiración) excesiva es una afección con diagnóstico empírico ya que NO poseemos un método que nos informe de cuanto es lo que transpiramos o cuanto es lo que normalmente debemos de producir, para que basándonos en esto, podamos llegar a un diagnóstico preciso de HIPERHIDROSIS. Actualmente se utiliza el Test de Minor, en casos en los cuales se tenga algún tipo de duda diagnóstica.  La hiperhidrosis afecta al 1% de la población, y suele acompañarse de molestia o incomodidad tanto en la vida social/profesional como privada, así como producir maceración de la piel con la consecuente infección microbiana en algunos casos. Lo cual se suele exacerbar en zonas con marcada humedad ambiental y temperaturas tropicales, condiciones similares a la de nuestra región.', 'El tratamiento consiste en la aplicación de toxina botulínica purificada en las áreas afectadas, siendo de crucial importancia la correcta preparación y aplicación del producto, ya que debe ser colocado a una profundidad exacta, en cantidades adecuadas en cada uno de los múltiples sitios descriptos para este tipo de intervención y bajo anestesia local, para evitar las molestia que suele ocasionar si se obvia este último paso, sobre todo en las manos. Debido a la gran área a tratar y a la cantidad de toxina a utilizar se recomienda realizar la aplicación en etapas, para poder evaluar y apreciar la notable mejoría que suele ocurrir en los primeros 3 a 7 días, y evitar complicaciones.', 'Es un tratamiento de manejo recomendado, por parte de médicos entrenados para tal fin; ya que su aplicación DIFIERE en muchos aspectos del uso habitual de la toxina botulínica purificada para el manejo de arrugas de expresión.', 'Los resultados son excelentes y dan un alivio transitorio, a una gran molestia de pacientes, que deben padecer la excesiva producción de sudoración a diario.', 'shutterstock_332819048-ma.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'paillet18', '$2y$10$YbPwokQWwN2WTN09E88yp.CMODIT6p6bUkJUg77Bg6TfmQW3DGttO', 'kSISK03hTCREspRUURLFRchFukoCuPGD7OIYr0D7F8iXiBy9kKiiYAeimGgh', '2018-08-01 12:58:43', '2018-08-01 12:58:43');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `abdominoplastia`
--
ALTER TABLE `abdominoplastia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `arrugas`
--
ALTER TABLE `arrugas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `aumento_mamario`
--
ALTER TABLE `aumento_mamario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `blefaroplastia`
--
ALTER TABLE `blefaroplastia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `capilar`
--
ALTER TABLE `capilar`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `cutaneas`
--
ALTER TABLE `cutaneas`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `dermoabrasion`
--
ALTER TABLE `dermoabrasion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `gluteos`
--
ALTER TABLE `gluteos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inicio`
--
ALTER TABLE `inicio`
  ADD PRIMARY KEY (`id_inicio`);

--
-- Indices de la tabla `levantamiento`
--
ALTER TABLE `levantamiento`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `lifting`
--
ALTER TABLE `lifting`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `liposuccion`
--
ALTER TABLE `liposuccion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `orejas`
--
ALTER TABLE `orejas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pantorrillas`
--
ALTER TABLE `pantorrillas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `peeling`
--
ALTER TABLE `peeling`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reduccion_mamario`
--
ALTER TABLE `reduccion_mamario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rinoplastia`
--
ALTER TABLE `rinoplastia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  ADD PRIMARY KEY (`id_subseccion`);

--
-- Indices de la tabla `sudoracion`
--
ALTER TABLE `sudoracion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `abdominoplastia`
--
ALTER TABLE `abdominoplastia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `arrugas`
--
ALTER TABLE `arrugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `aumento_mamario`
--
ALTER TABLE `aumento_mamario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `blefaroplastia`
--
ALTER TABLE `blefaroplastia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `capilar`
--
ALTER TABLE `capilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cirugia`
--
ALTER TABLE `cirugia`
  MODIFY `id_cirugia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `cirugias`
--
ALTER TABLE `cirugias`
  MODIFY `id_cirugias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

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
-- AUTO_INCREMENT de la tabla `cutaneas`
--
ALTER TABLE `cutaneas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT de la tabla `dermoabrasion`
--
ALTER TABLE `dermoabrasion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `gluteos`
--
ALTER TABLE `gluteos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inicio`
--
ALTER TABLE `inicio`
  MODIFY `id_inicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `levantamiento`
--
ALTER TABLE `levantamiento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `lifting`
--
ALTER TABLE `lifting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `liposuccion`
--
ALTER TABLE `liposuccion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orejas`
--
ALTER TABLE `orejas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `pantorrillas`
--
ALTER TABLE `pantorrillas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `peeling`
--
ALTER TABLE `peeling`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `reduccion_mamario`
--
ALTER TABLE `reduccion_mamario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rinoplastia`
--
ALTER TABLE `rinoplastia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `subseccion`
--
ALTER TABLE `subseccion`
  MODIFY `id_subseccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `sudoracion`
--
ALTER TABLE `sudoracion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
