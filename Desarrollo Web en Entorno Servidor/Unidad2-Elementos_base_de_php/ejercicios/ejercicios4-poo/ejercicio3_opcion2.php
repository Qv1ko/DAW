<?php namespace e3o2main ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Opción 2</title>
</head>

<body>
    <?php

        require_once("./actividad3-primero.php");
        require_once("./actividad3-segundo.php");

        use e3o2primero as Pr;
        use e3o2segundo as Se;

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