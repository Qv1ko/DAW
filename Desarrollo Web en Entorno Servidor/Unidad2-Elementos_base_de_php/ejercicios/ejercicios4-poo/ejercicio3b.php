<?php namespace e3bmain ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3 B</title>
</head>

<body>
    <?php

        /*
         * Diseña una nueva clase Primero que extienda de Alumno:
         * − Nuevo atributo, las calificaciones de los módulos del curso se recogen en un array.
         * − Nuevo método que calcule la media de las calificaciones.
         */

        require_once("./ejercicio3b-primero.php");
        require_once("./ejercicio3b-segundo.php");

        use e3bprimero as Pr;
        use e3bsegundo as Se;

        $resultadoPrimero;
        $alumnoPr = new Pr\Primero("Miguel", 24, [6.34, 3, 7.2]);
        echo $alumnoPr->nota_media();

        var_dump($alumnoPr);
        echo $alumnoPr->supera_curso($resultadoPrimero);

        $alumnoSe = new Se\Segundo("Miguel", 24, 8.22, "Apto", 7.5);

        var_dump($alumnoSe);
        echo $alumnoSe->supera_curso($resultadoPrimero);

    ?>
</body>

</html>