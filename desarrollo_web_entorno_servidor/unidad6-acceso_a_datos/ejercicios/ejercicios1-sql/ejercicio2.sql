-- Ejercicio 2

/*
 * Construye una BD denominada cinema que recoja información sobre los actores y las películas en
 *  las que intervienen y resuelve las siguientes consultas:
 * - Mostrar las películas cuyo género sea drama.
 * - Mostrar el nombre de las actrices.
 * - Mostrar cuántos actores hay de una determinada nacionalidad (se podrá elegir desde un
 *    formulario la nacionalidad disponible)
 * - ¿En cuántas películas intervino un determinado actor? (se podrá teclear el nombre del actor)
 */

-- Crear base de datos
CREATE DATABASE cinema;

USE cinema;

-- Crear tablas
CREATE TABLE actores(
    id_actor VARCHAR(5) PRIMARY KEY,
    nacionalidad VARCHAR(20),
    nombre_apellidos VARCHAR(30) NOT NULL,
    sexo CHAR
) engine='Innodb';

CREATE TABLE peliculas(
    titulo VARCHAR(50),
    genero VARCHAR(20) NOT NULL,
    anno_prod VARCHAR(4) NOT NULL,
    CONSTRAINT pk_peliculas PRIMARY KEY (titulo)
);

CREATE TABLE intervenciones (
    id_actor VARCHAR(5),
    titulo VARCHAR(50),
    CONSTRAINT pk_intervenciones PRIMARY KEY (id_actor, titulo),
    CONSTRAINT fk_intervenciones_actores FOREIGN KEY (id_actor) REFERENCES actores(id_actor) ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT fk_intervenciones_peliculas FOREIGN KEY (titulo) REFERENCES peliculas(titulo) ON DELETE CASCADE ON UPDATE CASCADE
) engine='InnoDB';

-- Rellenar tablas
INSERT INTO actores (id_actor, nacionalidad, nombre_apellidos, sexo) VALUES
    ("00001", "francés", "Jacqueline Bisset", "f"),
    ("00002", "española", "Antonio Banderas", "m"),
    ("00003", "española", "Belén Rueda", "f"),
    ("00004", "estadounidense", "Brad Pitt", "m"),
    ("00005", "estadounidense", "Laura Dern", "f");

INSERT INTO peliculas (titulo, genero, anno_prod) VALUES
    ("Dolor y gloria", "drama", "2019"),
    ("Erase una vez...Hollywood", "comedia", "2019"),
    ("Historia de un matrimonio", "drama", "2019"),
    ("La piel que habito", "thriller", "2011");

INSERT INTO intervenciones (id_actor, titulo) VALUES
    ("00002", "Dolor y gloria"),
    ("00004", "Erase una vez...Hollywood"),
    ("00005", "Historia de un matrimonio"),
    ("00002", "La piel que habito");


-- Consultas

-- Mostrar las películas cuyo género sea drama.
SELECT * FROM peliculas WHERE genero = "drama";

-- Mostrar el nombre de las actrices.
SELECT actores.nombre_apellidos FROM actores INNER JOIN intervenciones USING(id_actor) INNER JOIN peliculas USING(titulo)
    WHERE peliculas.genero = "drama";

-- Mostrar cuántos actores hay de una determinada nacionalidad
SELECT count(*) AS "Número de actores" FROM actores WHERE nacionalidad = "española";

-- ¿En cuántas películas intervino un determinado actor?
SELECT count(*) AS "Intervenciones" FROM intervenciones INNER JOIN actores USING(id_actor) WHERE actores.nombre_apellidos = "Brad Pitt";
