<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 12</title>
</head>

<body>
    <?php

        /*
         * Determinar si un número es primo.
         * Para ello inicializa una variable a un valor entero.
         */

        $number = 14;
        $prime = true;

        if ($number < 1 || is_int($number)) {
            for ($i = 2; $i <= $number / 2; $i++) { 
                if ($number % $i == 0) {
                    $prime = false;
                    break;
                }
            }
    
            if ($prime) {
                echo "<p>El número $number es primo</p>";
            } else {
                echo "<p>El número $number no es primo</p>";
            }
        } else {
            echo "<p>Valor incorrecto</p>";
        }

    ?>
</body>

</html>