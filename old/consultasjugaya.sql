USE juga_ya;


CREATE TABLE `jugadores` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `extension_foto` VARCHAR(255) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME,
  PRIMARY KEY (`id`)
  );
  
  CREATE TABLE `profesionales` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `titulo` VARCHAR(80) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
  );
  
  CREATE TABLE `ubicaciones` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(255) NOT NULL,
  `localidad` VARCHAR(45) NOT NULL,
  `codigo_postal` VARCHAR(45) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`)
  );
 
  
  CREATE TABLE `complejos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `usuario` VARCHAR(45) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `ubicacion_id` INT(10) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicaciones`(`id`)
  );
  
  CREATE TABLE `eventos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `dia` VARCHAR(12) NOT NULL,
  `fecha_hora` DATETIME NOT NULL,
  `ubicacion_id` INT(10) NOT NULL,
  `fec_ins` DATETIME,
  `fec_upd` DATETIME,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`ubicacion_id`) REFERENCES `ubicaciones`(`id`)
  );
  
  CREATE TABLE `eventos_jugadores` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `jugador_id` INT(10) NOT NULL,
  `evento_id` INT(10) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`jugador_id`) REFERENCES `jugadores`(`id`),
  FOREIGN KEY (`evento_id`) REFERENCES `eventos`(`id`)
  );
  
  CREATE TABLE `eventos_profesionales` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `profesional_id` INT(10) NOT NULL,
  `evento_id` INT(10) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`profesional_id`) REFERENCES `profesionales`(`id`),
  FOREIGN KEY (`evento_id`) REFERENCES `eventos`(`id`)
  );
  
  CREATE TABLE `eventos_complejos` (
  `id` INT(10) NOT NULL AUTO_INCREMENT,
  `complejo_id` INT(10) NOT NULL,
  `evento_id` INT(10) NOT NULL,
  `fec_ins` DATETIME NOT NULL,
  `fec_upd` DATETIME NOT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`complejo_id`) REFERENCES `complejos`(`id`),
  FOREIGN KEY (`evento_id`) REFERENCES `eventos`(`id`)
  );
   insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Plaza San Martin","50 y 25","La Plata","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Gimnasio","38 y 12","La Plata","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Bahia Futbol 5","37 9 y 10","La Plata","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"El Desafio","1 y 62","La Plata","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Club Universitario","Centenario y 504","Gonnet","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Plaza Azcuenaga","25 y 38","La Plata","1900",2019-11-11,2019-12-11);
  insert into ubicaciones (id,nombre,direccion,localidad,codigo_postal,fec_ins,fec_upd) values (default,"Bosque","115 y 57","La Plata","1900",2019-11-11,2019-12-11);
  select * from ubicaciones;