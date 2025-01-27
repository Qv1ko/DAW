-- Ejercicio 1

-- Crear y usar base de datos
CREATE DATABASE ciclos;

SHOW DATABASES;

USE ciclos;


-- Creación de tablas
CREATE TABLE curso(
    id_curso INT,
    deno VARCHAR(15),
    CONSTRAINT pk_curso PRIMARY KEY (id_curso)
) engine='Innodb';

CREATE TABLE alumno(
    id_al INT PRIMARY KEY,
    nombre VARCHAR(15),
    edad INT,
    id_curso INT,
    CONSTRAINT fk_alumno foreign KEY (id_curso) REFERENCES curso(id_curso)
) engine='Innodb';

-- Ver la arquitectura de la tabla
DESC curso;

-- Cambiar los valores de un campo
ALTER TABLE curso change id_curso codigo INT;


-- Insertar información
-- Insertar registros de curso
INSERT INTO curso (codigo, deno) VALUES (1, "DAW1"), (2, "DAW2");

-- Insertar registros de alumno
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES(
    1, "Ana", 18, 1),
    (2, "Sergio", 18, 1),
    (3, "Jorge", 19, 1),
    (4, "María", 21, 2);

-- INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (5, "Pedro", 23, 3);
INSERT INTO alumno (id_al, nombre, edad, id_curso) VALUES (5, "Pedro", 23, 2);

INSERT INTO alumno (id_al, nombre, edad) VALUES (6, "Juan", 21);


-- Consultas
-- Datos de los alumnos que tengan 18 años
SELECT * FROM alumno WHERE edad = 18;

-- Nombre y edad de los alumnos que tengan 18 años
SELECT nombre, edad FROM alumno WHERE edad = 18;

-- Nombre de los alumnos que no tengan 18 años
SELECT nombre FROM alumno WHERE edad <> 18;

-- Edad del alumno que se llama Jorge
SELECT edad FROM alumno WHERE nombre = "Jorge";

-- Datos de los alumnos cuyo código de alumno no sea NULL
SELECT * FROM alumno WHERE id_al IS NOT NULL;

-- Nombre de los alumnos que tengan o 18 años o 21
SELECT nombre FROM alumno WHERE edad = 18 OR edad = 21;

-- Nombre de los alumnos que tengan entre 18 y 21 (ambos inclusives)
SELECT nombre FROM alumno WHERE edad BETWEEN 18 AND 21;


-- Modificar la estructura
-- Agrega un nuevo atributo denominado ubicacion VARCHAR(10)
ALTER TABLE curso ADD column ubicacion VARCHAR(10);

DESC curso;

-- Modifica el tipo asignado al atributo creado
ALTER TABLE curso change ubicacion ubicacion VARCHAR(15);

DESC curso;

-- Cambia el nombre del atributo creado
ALTER TABLE curso DROP column ubicacion2 VARCHAR(15);

-- Borra el atributo creado
ALTER TABLE curso DROP column ubicacion2;


-- Actualizar la información de la tabla alumno
-- Juan es un alumno de 2
UPDATE alumno SET id_curso = 2 WHERE nombre = "Juan";

-- Hay que actualizar la edad de los alumnos con 18 años; deben tener 19.
UPDATE alumno SET edad = 19 WHERE edad = 18;

-- Eliminar a Pedro
DELETE FROM alumno WHERE nombre = "Pedro";
