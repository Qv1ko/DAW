SET NAMES 'utf8';

DROP DATABASE IF EXISTS tienda_chocolate;

CREATE DATABASE tienda_chocolate CHARACTER
SET latin1 COLLATE latin1_swedish_ci;

--
-- Set default database
--
USE tienda_chocolate;

--
-- Create table `clientes`
--
create table clientes (
    id bigint primary key generated always as identity,
    nombre text not null,
    direccion text not null,
    telefono text
);

--
-- Create table `productos`
--
create table productos (
    id bigint primary key generated always as identity,
    nombre text not null,
    descripcion text,
    precio numeric(10, 2) not null
);

--
-- Create table `pedidos`
--
create table pedidos (
    id bigint primary key generated always as identity,
    cliente_id bigint not null,
    producto_id bigint not null,
    cantidad int not null,
    fecha_pedido timestamp
);

--
-- Create foreign key
--
ALTER TABLE pedidos
ADD CONSTRAINT fk_pedidos_clientes FOREIGN KEY (cliente_id)
REFERENCES clientes (id);

--
-- Create foreign key
--
ALTER TABLE pedidos
ADD CONSTRAINT fk_pedidos_productos FOREIGN KEY (producto_id)
REFERENCES productos (id);

-- 
-- Dumping data for table `clientes`
--
insert into clientes (nombre, direccion, telefono)
values
    ('Juan Pérez', 'Calle Falsa 123', '555-1234'),
    ('María López', 'Avenida Siempre Viva 742', '555-5678'),
    ('Carlos García', 'Boulevard de los Sueños Rotos 56', '555-8765'),
    ('Ana Martínez', 'Calle de la Amargura 99', '555-4321'),
    ('Luis Fernández', 'Avenida de la Paz 101', '555-6789'),
    ('Laura Sánchez', 'Calle del Sol 202', '555-9876'),
    ('Pedro Gómez', 'Avenida de la Luna 303', '555-5432'),
    ('Sofía Díaz', 'Calle de las Estrellas 404', '555-2109'),
    ('Miguel Torres', 'Avenida del Mar 505', '555-6543'),
    ('Lucía Ramírez', 'Calle del Viento 606', '555-3210'),
    ('Javier Morales', 'Avenida del Norte 707', '555-7890'),
    ('Isabel Ruiz', 'Calle del Sur 808', '555-0987'),
    ('Fernando Castro', 'Avenida del Este 909', '555-4567'),
    ('Patricia Ortiz', 'Calle del Oeste 1010', '555-7654'),
    ('Andrés Herrera', 'Avenida Central 1111', '555-2345'),
    ('Marta Vargas', 'Calle Principal 1212', '555-8765'),
    ('Raúl Jiménez', 'Avenida Secundaria 1313', '555-3456'),
    ('Elena Navarro', 'Calle Tercera 1414', '555-6543'),
    ('Diego Mendoza', 'Avenida Cuarta 1515', '555-4321'),
    ('Natalia Romero', 'Calle Quinta 1616', '555-1234');

-- 
-- Dumping data for table `productos`
--
insert into productos (nombre, descripcion, precio)
values
    ('Chocolate Negro', 'Chocolate con 70% de cacao', 2.50),
    ('Chocolate con Leche', 'Chocolate suave y cremoso', 2.00),
    ('Chocolate Blanco', 'Chocolate dulce y cremoso', 2.20),
    ('Chocolate con Almendras', 'Chocolate con trozos de almendra', 2.80),
    ('Chocolate con Avellanas', 'Chocolate con trozos de avellana', 2.90),
    ('Chocolate con Menta', 'Chocolate con sabor a menta', 2.60),
    ('Chocolate con Naranja', 'Chocolate con esencia de naranja', 2.70),
    ('Chocolate con Fresa', 'Chocolate con sabor a fresa', 2.75),
    ('Chocolate con Café', 'Chocolate con un toque de café', 2.85),
    ('Chocolate con Caramelo', 'Chocolate relleno de caramelo', 3.00),
    ('Chocolate con Coco', 'Chocolate con trozos de coco', 2.65),
    ('Chocolate con Pasas', 'Chocolate con pasas', 2.55),
    ('Chocolate con Licor', 'Chocolate con un toque de licor', 3.20),
    ('Chocolate con Jengibre', 'Chocolate con esencia de jengibre', 2.95),
    ('Chocolate con Canela', 'Chocolate con un toque de canela', 2.50),
    ('Chocolate con Pimienta', 'Chocolate con un toque picante', 2.70),
    ('Chocolate con Sal', 'Chocolate con un toque de sal', 2.60),
    ('Chocolate con Vainilla', 'Chocolate con esencia de vainilla', 2.40),
    ('Chocolate con Frutos Rojos', 'Chocolate con trozos de frutos rojos', 2.90),
    ('Chocolate con Miel', 'Chocolate con un toque de miel', 3.10);

-- 
-- Dumping data for table `pedidos`
--
insert into pedidos (cliente_id, producto_id, cantidad)
values
    (1, 1, 5),
    (2, 2, 3),
    (3, 3, 4),
    (4, 4, 2),
    (5, 5, 6),
    (6, 6, 1),
    (7, 7, 3),
    (8, 8, 2),
    (9, 9, 5),
    (10, 10, 4),
    (11, 11, 2),
    (12, 12, 3),
    (13, 13, 1),
    (14, 14, 5),
    (15, 15, 2),
    (16, 16, 4),
    (17, 17, 3),
    (18, 18, 6),
    (19, 19, 2),
    (20, 20, 1);