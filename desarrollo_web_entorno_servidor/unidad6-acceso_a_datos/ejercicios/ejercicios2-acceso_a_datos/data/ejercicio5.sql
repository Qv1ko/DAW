USE ciclos;

CREATE TABLE modulo(
    denominacion VARCHAR(8) PRIMARY KEY,
    horas INT
) engine='Innodb';

CREATE TABLE notas(
    denominacion VARCHAR(8),
    id_al INT,
    nota FLOAT,
    CONSTRAINT pk_notas PRIMARY KEY (denominacion, id_al),
    CONSTRAINT fk_modulo FOREIGN KEY (denominacion) REFERENCES modulo(denominacion),
    CONSTRAINT fk_alumno_notas FOREIGN KEY (id_al) REFERENCES alumno(id_al)
) engine='Innodb';

INSERT INTO modulo(denominacion, horas) VALUES
    ("DWES", 9),
    ("DWEC", 8),
    ("DIW", 6),
    ("DAW", 4),
    ("EIE", 3);

INSERT INTO notas(denominacion, id_al, nota) VALUES
    ("DWES", 1, 7),
    ("DWEC", 1, 10),
    ("DIW", 1, 9),
    ("DAW", 1, 8),
    ("EIE", 1, 8),
    ("DWES", 2, 6),
    ("DWEC", 2, 7),
    ("DIW", 2, 8),
    ("DAW", 2, 7),
    ("EIE", 2, 7),
    ("DWES", 3, 8),
    ("DWEC", 3, 9),
    ("DIW", 3, 10),
    ("DAW", 3, 7),
    ("EIE", 3, 9),
    ("DWES", 4, 5),
    ("DWEC", 4, 8),
    ("DIW", 4, 7),
    ("DAW", 4, 6),
    ("EIE", 4, 6);
