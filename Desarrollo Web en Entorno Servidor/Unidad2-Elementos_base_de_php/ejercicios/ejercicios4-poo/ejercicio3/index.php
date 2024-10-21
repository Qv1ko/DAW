<?php namespace actividad3; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        require_once("./ejercicio3-alumno.php");
        require_once("./actividad3-primero.php");
        require_once("./actividad3-segundo.php");

        use actividad3\alumno as Al;
        use actividad3\primero as Pr;
        use actividad3\segundo as Se;
        
        $alumnoPr = new Pr\Primero("Miguel", 24, 6.34);

        var_dump($alumnoPr);
        echo "<p>El alumno " . $alumnoPr->visualizar() . "</p>";

        $alumnoSe = new Se\Segundo("Miguel", 24, 8.22, "Apto", 7.5);

        var_dump($alumnoSe);
        // echo "<p>El alumno " . $alumnoSe->visualizar($alumnoPr->supera_curso()) . "</p>";

    ?>
</body>

</html>