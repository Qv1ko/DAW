-- Ejercicio 4

/*
 * Dado el esquema relaciona crea las tablas y resuelve las siguientes consultas:
 * - Mostrar todos los datos de los libros no escritos por Arturo Pérez Reverte y posteriores al año 2010.
 * - ¿Cuántos libros hay de cada género?
 * - ¿Cuál es el precio medio de un libro?.
 * - ¿Cuántos escritores tienes más de 60 años?
 * - Título de uno de los libros más barato.
 */

CREATE DATABASE IF NOT EXISTS libreria;

USE libreria;

-- Crear tablas
CREATE TABLE escritor(
    autor VARCHAR(50) PRIMARY KEY,
    f_nacimiento DATE NOT NULL,
    lugar_nacimiento VARCHAR(30) NOT NULL
) engine='Innodb';

CREATE TABLE libro(
    isbn VARCHAR(20) PRIMARY KEY,
    titulo VARCHAR(50) NOT NULL,
    genero VARCHAR(20) NOT NULL,
    anno_publicacion VARCHAR(4),
    precio DECIMAL(6, 2) NOT NULL,
    autor VARCHAR(50),
    CONSTRAINT fk_libro_escritor FOREIGN KEY (autor) REFERENCES escritor (autor)
) engine='Innodb';

-- Insertar datos en las tablas
INSERT INTO escritor (autor, f_nacimiento, lugar_nacimiento) VALUES
    ('Arturo Pérez Reverte', '1951-11-25', 'Cartagena'),
    ('César Pérez Gellida', '1974-12-12', 'Valladolid'),
    ('Dan Brown', '1964-06-22', 'EEUU'),
    ('Javier Sierra', '1971-08-11', 'Teruel'),
    ('Julia Navarro', '1953-07-29', 'Madrid'),
    ('Matilde Asensi', '1962-06-12', 'Alicante');

INSERT INTO libro (isbn, titulo, anno_publicacion, genero, precio, autor) VALUES
    ('947-84-233-5288-3', 'Las mil y una noches', NULL, 'fición', 12.95, NULL),
    ('978-84-081-0041-6', 'Venganza en Sevilla', '2010', 'aventura', 19.00, 'Matilde Asensi'),
    ('978-84-081-2741-3', 'Inferno', '2013', 'misterio', 19.00, 'Dan Brown'),
    ('978-84-082-0042-7', 'Tierra firme', '2007', 'aventura', 17.95, 'Matilde Asensi'),
    ('978-84-1318-386-2', 'Cantar de Mio Cid', NULL, 'poesía', 10.95, NULL),
    ('978-84-204-3547-3', 'Sidi', '2019', 'ficción_histórica', 20.90, 'Arturo Pérez Reverte'),
    ('978-84-663-4811-9', 'Todo lo mejor', '2019', 'novela negra', 9.45, 'César Pérez Gellida'),
    ('978-84-663-5000-6', 'Hombres buenos', '2015', 'aventura', 10.95, 'Arturo Pérez Reverte'),
    ('978-84-663-5002-0', 'La carta esférica', '2000', 'aventura', 13.95, 'Arturo Pérez Reverte'),
    ('978-84-663-5003-7', 'La tabla de Flandes', '1990', 'misterio', 13.95, 'Arturo Pérez Reverte'),
    ('978-84-667-5171-1', 'Lazarillo de Tormes', NULL, 'picaresca', 11.50, NULL),
    ('978-84-912-9204-3', 'Todo lo peor', '2019', 'novela negra', 17.95, 'César Pérez Gellida'),
    ('978-84-968-2900-8', 'El código da Vinci', '2003', 'misterio', 13.95, 'Dan Brown');

-- Consultas

-- Mostrar todos los datos de los libros no escritos por Arturo Pérez Reverte y posteriores al año 2010.
SELECT * FROM libro WHERE autor <> "Arturo Pérez Reverte" AND anno_publicacion > 2010;

-- ¿Cuántos libros hay de cada género?
select DISTINCT genero, count(*) from libro group by genero;

-- ¿Cuál es el precio medio de un libro?
SELECT avg(precio) as "Precio medio" from libro;

-- ¿Cuántos escritores tienes más de 60 años?
SELECT DISTINCT autor FROM escritor WHERE f_nacimiento < DATE_SUB(CURDATE(), INTERVAL 60 YEAR);

-- Título de uno de los libros más barato.
SELECT DISTINCT titulo from libro WHERE precio = (SELECT min(precio) from libro);
