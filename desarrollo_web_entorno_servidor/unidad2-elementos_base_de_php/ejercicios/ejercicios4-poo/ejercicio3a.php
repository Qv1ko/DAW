<?php namespace e3aindex ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3 A</title>
</head>

<body>
    <?php

        /*
         * Diseña una nueva clase Primero que extienda de Alumno:
         * - Nuevo atributo, nota media del curso
         * - Nuevo método, supera_curso (para ello la media será >= a 5).
         * Diseña otra nueva clase, Segundo que extiende de Alumno:
         * - Nuevo atributo, nota media del curso
         * - Nuevo atributo, calificación de la FCT (valores posibles "apto" o "no apto")
         * - Nuevo atributo, calificación del módulo de proyecto
         * - implementa el método supera_curso; en este caso el alumno de segundo, supera el curso
         *    si la media del curso es >= 5, supera el proyecto y obtiene "apto" en la FCT y supera primero.
         * Comprueba su funcionamiento desde un script.
         */

        require_once("./php/ejercicio3a-primero.php");
        require_once("./php/ejercicio3a-segundo.php");

        use e3aprimero as Pr;
        use e3asegundo as Se;

        $resultadoPrimero;
        $alumnoPr = new Pr\Primero("Miguel", 24, 5.34);

        var_dump($alumnoPr);
        echo $alumnoPr->supera_curso($resultadoPrimero);

        $alumnoSe = new Se\Segundo("Miguel", 24, 8.22, "Apto", 7.5);

        var_dump($alumnoSe);
        echo $alumnoSe->supera_curso($resultadoPrimero);

    ?>
</body>

</html>