<?php namespace ejercicio2; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        require_once("./ejercicio2-alumno.php");
        require_once("./ejercicio2-becado.php");

        use ejercicio2\alumno as Al;
        use ejercicio2\becado as Be;

        $alumno1 = new Al\Alumno("Esther", 26);
        echo "<p>" . $alumno1->visualizar() . "</p>";

        $alumno2 = new Be\Becado("Javier", 20, 1000);
        echo "<p>" . $alumno2->visualizar() . "</p>";

    ?>
</body>

</html>