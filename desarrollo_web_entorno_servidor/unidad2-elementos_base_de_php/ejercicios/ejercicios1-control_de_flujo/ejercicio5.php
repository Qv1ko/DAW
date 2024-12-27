<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

        /*
         * Muestra en pantalla la suma de los números del 1 al 100 no terminados en 3.
         */

        $result = 0;

        for ($i = 1; $i <= 100; $i++) { 
            $result += ($i % 10 != 3 ? $i : 0);
        }

        echo "La suma es igual a " . $result;

    ?>
</body>

</html>