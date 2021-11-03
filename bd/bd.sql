--creacion de la base de datos
CREATE DATABASE IF NOT EXISTS `cyberMemoryBD`  DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cyberMemoryBD`;


-- usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contraseña` varchar(15) NOT NULL,
  `typoUsuario` enum('usuario', 'contacto') NOT NULL DEFAULT 'usuario',
  `seBorro` boolean DEFAULT false,
   `huella` blob DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `usuario` (`idUsuario`, `nombre`, `email`, `contraseña`, `typoUsuario`, `seBorro`, `fecha_nac`, `telefono`) VALUES
	(1, 'Eduardo', 'edu@gmail.com', 'edu12345', 2, false, "1983-03-03", '33333333');


INSERT INTO `usuario` (`idUsuario`, `nombre`, `email`, `contraseña`, `typoUsuario`, `seBorro`, `fecha_nac`, `telefono`) VALUES
	(2, 'Teresa', 'tere@gmail.com', 'tere1234', 1, false, "1986-06-06", '6666666');



-- emoticones
CREATE TABLE IF NOT EXISTS `emoticon` (
  `idEmoticon` int(11) NOT NULL AUTO_INCREMENT,
  `emoticon` varchar(20) NOT NULL,
  `descripcion` varchar(20) NOT NULL,
  PRIMARY KEY (`idEmoticon`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `emoticon` (`idEmoticon`, `emoticon`, `descripcion`) VALUES
	(1,  '&#128512;', 'risa');
INSERT INTO `emoticon` (`idEmoticon`, `emoticon`, `descripcion`) VALUES
	(2,  '&#128518;', 'xd');
INSERT INTO `emoticon` (`idEmoticon`, `emoticon`, `descripcion`) VALUES
	(3,  '&#128528;', 'neutral');
INSERT INTO `emoticon` (`idEmoticon`, `emoticon`, `descripcion`) VALUES
	(4,  ' &#128545;', 'enojado');
INSERT INTO `emoticon` (`idEmoticon`, `emoticon`, `descripcion`) VALUES
	(5,  '&#128527;', 'sonrisa');



  -- recuerdo
CREATE TABLE IF NOT EXISTS `recuerdo` (
  `idRecuerdo` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(30) ,
  `fecha` date ,
  `hora_desde` time,
  `hora_hasta` time,
  `ubicacion` varchar(30) ,
  `coordenadas` point DEFAULT NULL,
  `compañia` varchar(30) ,
  `comentarios` varchar(255), 
  `informacion` text , 
  PRIMARY KEY (`idRecuerdo`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

INSERT INTO `recuerdo` (`idRecuerdo`, `titulo`, `fecha`, `hora_desde`, `hora_hasta`,`ubicacion`, `coordenadas`,`compañia`, `comentarios`) VALUES
	(1, 'Casa de Jorge', "2021-09-21", "18:30", "01:30", "Charcas  2909 - CABA", POINT(-34.59462072, -58.40854815),"Jorge, Mario, Maria", "Juntada con amigos festejando el dia de la primavera");


-- emoticones/recuerdo
CREATE TABLE IF NOT EXISTS `emoticon_recuerdo` (
  `idEmoticonRecuerdo` int(11) NOT NULL AUTO_INCREMENT,
  `idRecuerdo` int(11) NOT NULL,
  `idEmoticon` int(11) NOT NULL,
  PRIMARY KEY (`idEmoticonRecuerdo`),
  FOREIGN KEY (idRecuerdo) REFERENCES recuerdo(idRecuerdo),
  FOREIGN KEY (idemoticon) REFERENCES emoticon(idEmoticon)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;


INSERT INTO `emoticon_recuerdo` (`idEmoticonRecuerdo`, `idRecuerdo`, `idEmoticon`) VALUES
	(1,  1, 1);
  INSERT INTO `emoticon_recuerdo` (`idEmoticonRecuerdo`, `idRecuerdo`, `idEmoticon`) VALUES
	(2,  1, 2);
  INSERT INTO `emoticon_recuerdo` (`idEmoticonRecuerdo`, `idRecuerdo`, `idEmoticon`) VALUES
  (3,  1, 5);

  --favorito

  -- ACA SALE ESTE ERROR #1072 - La columna clave 'favorito' no existe en la tabla
  -- No me deja crear la tabla MYSQL en php admin
  
  CREATE TABLE IF NOT EXISTS `favorito` (
  `idFavorito` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` int(11) NOT NULL,
  `idRecuerdo` int(11) NOT NULL,
  `nombre` varchar(30),
  PRIMARY KEY (`favorito`),
  FOREIGN KEY (idUsuario) REFERENCES usuario(idUsuario),
  FOREIGN KEY (idRecuerdo) REFERENCES  recuerdo(idRecuerdo)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

