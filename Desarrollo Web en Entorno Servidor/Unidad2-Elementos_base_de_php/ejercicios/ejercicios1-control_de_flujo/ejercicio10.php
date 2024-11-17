<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 10</title>
</head>

<body>
    <?php

        /*
         * Inicializar tres variables tipo entero que representan las longitudes de los tres lados
         *  de un triángulo; en base a dichas longitudes indica si el triángulo es isósceles, equilátero
         *  o escaleno.
         */

        $lado1 = 6;
        $lado2 = 6;
        $lado3 = 7;

        if ($lado1 == $lado2 and $lado2 == $lado3) {
            echo "<p>Triangulo equilátero</p>";
        } else if ($lado1 == $lado2 or $lado2 == $lado3 or $lado1 == $lado3) {
            echo "<p>Triangulo isósceles</p>";
        } else {
            echo "<p>Triangulo escaleno</p>";
        }

    ?>
</body>

</html>