<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <?php

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