<?php namespace e3cmain ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3 C</title>
</head>

<body>
    <?php

        /*
         * Plantéate el ejercicio A utilizando clases y métodos abstractos.
         */

        require_once("./php/ejercicio3c-primero.php");
        require_once("./php/ejercicio3c-segundo.php");

        use e3cprimero as Pr;
        use e3csegundo as Se;

        $resultadoPrimero = true;
        $alumnoPr = new Pr\Primero("Miguel", 24, 5.34);

        var_dump($alumnoPr);
        echo $alumnoPr->supera_curso($resultadoPrimero);

        $alumnoSe = new Se\Segundo("Miguel", 24, 8.22, "Apto", 7.5);

        var_dump($alumnoSe);
        echo $alumnoSe->supera_curso($resultadoPrimero);

    ?>
</body>

</html>