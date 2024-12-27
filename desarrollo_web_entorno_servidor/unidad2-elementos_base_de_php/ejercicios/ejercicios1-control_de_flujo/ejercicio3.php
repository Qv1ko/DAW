<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        /*
         * Muestra en pantalla la figura de una piramide formada por números de 0 a x:
         * Para ello utilizarás una variable de tipo entero a la cual le asignarás un valor
         *  constante, dicho valor indicará el número de filas de la figura.
         */

        $NUMBER = 4;
        $value = 1;

        for ($i = 1; $i <= $NUMBER; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo $value;
                $value++;
            }
            echo "<br>";
        }

    ?>
</body>

</html>