<?php namespace e3dmain ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3 D</title>
</head>

<body>
    <?php

        /*
         * Plantéate el ejercicio A utilizando el diseño de una interface, clases y subclases.
         */

        require_once("./php/ejercicio3d-primero.php");
        require_once("./php/ejercicio3d-segundo.php");

        use e3dprimero as Pr;
        use e3dsegundo as Se;        

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