<?php namespace e6main; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

        /*
         * Crea la clase Empleado con el atributo, NSS, empresa en la que trabaja y salario. Además
         *  tendrá como métodos, un constructor y retención (método que calculará el importe de la
         *  retención a la SS a partir del porcentaje que reciba como parámetro).
         * Crea los trait de comunicaciones y utilízalos para empleado y para el alumno de primero
         *  y de segundo.
         */

        require_once("./php/ejercicio6-empleado.php");
        require_once("./php/ejercicio6-primero.php");
        require_once("./php/ejercicio6-segundo.php");

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