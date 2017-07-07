create database elearning;
use elearning;

create table consultas (
  id_consulta int(7) not null auto_increment,
  nombre varchar(50) not null,
  apellido varchar(50) not null,
  sexo varchar(6) default null,
  edad int(3) default null,
  motivo varchar(15) not null,
  correo varchar(80) not null,
  mensaje text not null,
  constraint id_consulta primary key(id_consulta)  
);

insert into consultas (nombre, apellido, sexo, edad, motivo, correo, mensaje) values
('Juan', 'González', 'varon', 23, 'sitioweb', 'juangonzalez@gmail.com', 'Consulta de prueba.'),
('Benjamín', 'Rodriguez', 'varon', 29, 'redessociales', 'benjaminrodriguez@hotmail.com', 'Otra consulta de prueba.'), ('Sofía', 'López','mujer', 25, 'amigo', 'sofialopez@yahoo.com','Hola buenos días mi consulta es...');


