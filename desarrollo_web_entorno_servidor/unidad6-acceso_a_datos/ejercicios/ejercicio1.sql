-- Ejercicio 1


-- Crear y usar base de datos
create database ciclos;

show databases;

use ciclos;


-- Creación de tablas
create table curso(
    id_curso int,
    deno varchar(15),
    constraint pk_curso primary key (id_curso)
) engine='Innodb';

create table alumno(
    id_al int primary key,
    nombre varchar(15),
    edad int,
    id_curso int,
    constraint fk_alumno foreign key (id_curso) references curso(id_curso)
) engine='Innodb';

-- Ver la arquitectura de la tabla
desc curso;

-- Cambiar los valores de un campo
alter table curso change id_curso codigo int;


-- Insertar información
-- Insertar registros de curso
insert into curso (codigo, deno) values (1, "DAW1"), (2, "DAW2");

-- Insertar registros de alumno
insert into alumno (id_al, nombre, edad, id_curso) values(
    1, "Ana", 18, 1),
    (2, "Sergio", 18, 1),
    (3, "Jorge", 19, 1),
    (4, "María", 21, 2);

-- insert into alumno (id_al, nombre, edad, id_curso) values (5, "Pedro", 23, 3);
insert into alumno (id_al, nombre, edad, id_curso) values (5, "Pedro", 23, 2);

insert into alumno (id_al, nombre, edad) values (6, "Juan", 21);


-- Consultas
-- Datos de los alumnos que tengan 18 años
select * from alumno where edad = 18;

-- Nombre y edad de los alumnos que tengan 18 años
select nombre, edad from alumno where edad = 18;

-- Nombre de los alumnos que no tengan 18 años
select nombre from alumno where edad <> 18;

-- Edad del alumno que se llama Jorge
select edad from alumno where nombre = "Jorge";

-- Datos de los alumnos cuyo código de alumno no sea NULL
select * from alumno where id_al is not null;

-- Nombre de los alumnos que tengan o 18 años o 21
select nombre from alumno where edad = 18 or edad = 21;

-- Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives)
select nombre from alumno where edad between 18 and 21;


-- Modificar la estructura
-- Agrega un nuevo atributo denominado ubicacion VARCHAR(10)
alter table curso add column ubicacion varchar(10);

desc curso;

-- Modifica el tipo asignado al atributo creado
alter table curso change ubicacion ubicacion varchar(15);

desc curso;

-- Cambia el nombre del atributo creado
alter table curso drop column ubicacion2 varchar(15);

-- Borra el atributo creado
alter table curso drop column ubicacion2;


-- Actualizar la información de la tabla alumno
-- Juan es un alumno de 2
update alumno set id_curso = 2 where nombre = "Juan";

-- Hay que actualizar la edad de los alumnos con 18 años; deben tener 19.
update alumno set edad = 19 where edad = 18;

-- Eliminar a Pedro
delete from alumno where nombre = "Pedro";
