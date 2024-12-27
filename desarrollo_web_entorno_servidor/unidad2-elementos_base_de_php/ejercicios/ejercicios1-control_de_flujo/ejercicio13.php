<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 13</title>
</head>

<body>
    <?php

        /*
         * Determinar si un número entero y de tres cifras es capicúa.
         * Inicializa una variable a un valor entero de tres cifras.
         */

        $num1 = 303;
        $num2 = "";
        $aux = $num1;

        // echo "El número " , $num1 , ($num1 == (int)strrev((string)$num1) ? " es capicúa" : " no es capicúa");

        while ($aux > 0) {
            $num2 = $num2 . (string)($aux % 10);
            $aux = (int)($aux / 10);
        }

        echo "El número " , $num1 , ($num1 == (int)$num2 ? " es capicúa" : " no es capicúa");

    ?>
</body>

</html>