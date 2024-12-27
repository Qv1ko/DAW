<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 E</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito5($p) {
            $p++; // Incrementa el valor de la variable pero solo dentro de la función
            echo "Pasando por ambito5(): ";
            return $p;
        }

        echo ambito5($var1) . "<br>"; // Retorna el valor incrementado de $p, pero la variable $var1 no a cambiado de valor

    ?>
</body>

</html>