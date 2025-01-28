-- Ejercicio 3

/*
 * Incorpora a la BD cinema, dos nuevas tablas (cine y proyectar) y resuelve las siguientes consultas:
 * - Muestra, de forma ordenada, por cada cine, las películas proyectadas de la forma más legible que sepas.
 * - Muestra la dirección del cine en el cual se proyectó la película "Historia de un matrimonio".
 * - ¿Qué películas se proyectaron en 2019?
 * - Y...¿en noviembre de 2019?
 * - ¿Cuál fue la película más taquillera?
 */

CREATE DATABASE IF NOT EXISTS cinema;

USE cinema;

-- Crear tablas
CREATE TABLE cine(
    id_cine VARCHAR(8) PRIMARY KEY,
    nombre_c VARCHAR(20) NOT NULL,
    ciudad VARCHAR(20)
) engine='Innodb';

CREATE TABLE proyectar(
    titulo VARCHAR(50),
    id_cine VARCHAR(8),
    fecha_proy DATE,
    CONSTRAINT pk_proyectar PRIMARY KEY (titulo, id_cine),
    CONSTRAINT fk_proyectar_peliculas FOREIGN KEY (titulo) REFERENCES peliculas (titulo),
    CONSTRAINT fk_proyectar_cine FOREIGN KEY (id_cine) REFERENCES cine (id_cine)
) engine='Innodb';

-- Inserción de campos en las tablas
INSERT INTO cine(id_cine, nombre_c, ciudad) VALUES
    ("CINE1", "Odeón", "Burgos"),
    ("CINE2", "Van Golem", "Burgos"),
    ("CINE3", "CineSur", "Sevilla"),
    ("CINE4", "Gapitol", "Madrid"),
    ("CINE5", "Conde Duque", "Madrid");

ALTER TABLE proyectar ADD recaudacion DECIMAL(10,2);

INSERT INTO proyectar(titulo, id_cine, fecha_proy, recaudacion) VALUES
    ("Dolor y gloria", "CINE1", "2019-11-15", 2500),
    ("Dolor y gloria", "CINE2", "2019-11-15", 3400),
    ("Dolor y gloria", "CINE3", "2019-11-15", 1200),
    ("Dolor y gloria", "CINE4", "2019-11-15", 1200),
    ("Dolor y gloria", "CINE5", "2019-11-15", 2500),
    ("Erase una vez...Hollywood", "CINE1", "2019-11-01", 3400),
    ("Erase una vez...Hollywood", "CINE3", "2019-11-01", 1200),
    ("Erase una vez...Hollywood", "CINE4", "2019-11-01", 2500),
    ("Historia de un matrimonio", "CINE3", "2010-10-15", 4600),
    ("Historia de un matrimonio", "CINE4", "2010-10-15", 3400),
    ("La piel que habito", "CINE1", "2010-10-01", 1200),
    ("La piel que habito", "CINE2", "2010-10-01", 3400),
    ("La piel que habito", "CINE3", "2010-10-01", 2500),
    ("La piel que habito", "CINE4", "2010-10-01", 4600),
    ("La piel que habito", "CINE5", "2010-10-01", 2500);

-- Consultas

-- Muestra, de forma ordenada, por cada cine, las películas proyectadas de la forma más legible que sepas.
SELECT CONCAT("- ", cine.nombre_c, ": ", proyectar.titulo) FROM proyectar INNER JOIN cine USING(id_cine) ORDER BY cine.nombre_c, proyectar.titulo;

-- Muestra la dirección del cine en el cual se proyectó la película "Historia de un matrimonio".
SELECT DISTINCT cine.ciudad FROM cine INNER JOIN proyectar USING(id_cine) WHERE titulo = "Historia de un matrimonio";

-- ¿Qué películas se proyectaron en 2019?
SELECT DISTINCT titulo FROM proyectar WHERE year(fecha_proy) = "2019";

-- Y...¿en noviembre de 2019?
SELECT DISTINCT titulo FROM proyectar WHERE year(fecha_proy) = "2019" and month(fecha_proy) = "11";

-- ¿Cuál fue la película más taquillera?
SELECT titulo FROM (SELECT titulo, SUM(recaudacion) AS total FROM proyectar GROUP BY titulo) AS a
    WHERE total = (SELECT MAX(total) FROM (SELECT SUM(recaudacion) AS total FROM proyectar GROUP BY titulo ) AS b);
