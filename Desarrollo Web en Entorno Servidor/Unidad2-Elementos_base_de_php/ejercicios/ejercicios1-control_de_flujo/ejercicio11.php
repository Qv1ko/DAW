<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

        /*
         * Calcula el factorial de un número.
         * Para ello inicializa una variable a un valor entero.
         */
        
        $number = 9;
        $counter = 1;
        $factorial = 1;

        while ($number >= $counter) {
            $factorial *= $counter;
            $counter++;
        }

        echo "<p>El factorial de $number es $factorial</p>";

    ?>
</body>

</html>