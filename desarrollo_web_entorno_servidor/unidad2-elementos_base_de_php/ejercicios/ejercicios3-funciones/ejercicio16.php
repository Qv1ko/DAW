<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 16</title>
</head>

<body>
    <?php

        /*
         * Calcular la edad pasando a una función tres parámetros: el día de nacimiento, el mes y
         *  el año. Muestra la edad.
         */

        echo "<p>Tiene " . calcularEdad(3, 3, 2006) . " años</p>";

        function calcularEdad(int $dia, int $mes, int $ano): int {
            $now = strtotime(date("Y/m/d"));
            $cumple = strtotime(date("$ano/$mes/$dia"));
            $edad = date("Y", $now) - date("Y", $cumple);

            if (date("md", $now) < date("md", $cumple)) {
                $edad--;
            }
            
            return $edad;
        }

    ?>
</body>

</html>