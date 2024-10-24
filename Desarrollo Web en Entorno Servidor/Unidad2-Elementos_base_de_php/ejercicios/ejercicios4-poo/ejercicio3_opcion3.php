<?php namespace e3o3main ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Opción 3</title>
</head>

<body>
    <?php

        require_once("./ejercicio3-primero.php");
        require_once("./ejercicio3-segundo.php");

        use e3o3primero as Pr;
        use e3o3segundo as Se;

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