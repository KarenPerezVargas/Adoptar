drop database if exists `adoptame`;
create database `adoptame`;
use `adoptame`;

create table mascotas(idmascotas int, mascotas varchar(30), PRIMARY KEY (idmascotas));

INSERT INTO mascotas VALUES (1, 'Perros');
INSERT INTO mascotas VALUES (2, 'Gatos');
INSERT INTO mascotas VALUES (3, 'Cerdos');
INSERT INTO mascotas VALUES (4, 'Conejos');
INSERT INTO mascotas VALUES (5, 'Caballos');
INSERT INTO mascotas VALUES (6, 'Aves');

<<<<<<< HEAD
create table personas(idpersona int auto_increment, nombres varchar(60), apellidos varchar(50), correo varchar(20), celular varchar(9), dirección varchar(60), idmascotas int, cantidad int, FOREIGN KEY (idmascotas) REFERENCES mascotas(idmascotas), PRIMARY KEY (idpersona));
=======
create table personas(idpersona int auto_increment, nombres varchar(60), apellidos varchar(50), contraseña varchar(20), celular varchar(9), dirección varchar(60), idmascotas int, FOREIGN KEY (idmascotas) REFERENCES mascotas(idmascotas), PRIMARY KEY (idpersona));
>>>>>>> dfb2d3bab45dfa5eadda77a882cd60c157fd3b96
