<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        /*
         * Muestra en pantalla la figura de una piramide:
         * Para ello utilizarás una variable de tipo entero a la cual le asignarás un valor
         *  constante, dicho valor indicará el número de filas de la figura.
         */

        $NUMBER = 4;
        $text = "*";

        for ($i = 0; $i < $NUMBER; $i++) { 
            echo "<p>$text</p>";
            $text = $text . "*";
        }

    ?>
</body>

</html>