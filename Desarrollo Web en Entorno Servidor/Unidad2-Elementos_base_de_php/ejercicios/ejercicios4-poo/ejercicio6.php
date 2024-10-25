<?php namespace e6main; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

        require_once("./ejercicio6-empleado.php");
        require_once("./ejercicio6-primero.php");
        require_once("./ejercicio6-segundo.php");

        use e6empleado as Em;
        use e6primero as Pr;
        use e6segundo as Se;

        $empleado1 = new Em\Empleado("15783892664", "Juan de Colonia", 1100);
        $alumno1 = new Pr\Primero("Miguel", 24, 5.34);
        $alumno2 = new Se\Segundo("Miguel", 24, 8.22, "Apto", 7.5);

        echo "<p>" . $empleado1->saludar() . "</p>";

        $alumno1->enviarMensaje("Soy alumno");
        $alumno2->enviarMensaje("Mensaje para comunicaciones");

    ?>
</body>

</html>