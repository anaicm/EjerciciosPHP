CREATE DATABASE IF NOT EXISTS NombreAlumnos;
use NombreAlumnos;
create table Alumnos(
Nombre varchar (64) not null,
Apellidos varchar (128) not null,
Edad int
);
-- introduciremos cuatro alumnos-----------
INSERT INTO Alumnos("Nombre","Apellidos","Edad") Values
("Pepe", "Trujillo Martinez",16),
("Lola", "Lara Perez",16),
("Juan", "Romera Rios",15),
("Arya", "López Rodriguez",15);
