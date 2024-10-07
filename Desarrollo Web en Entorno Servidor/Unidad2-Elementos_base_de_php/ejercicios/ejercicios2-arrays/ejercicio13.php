<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 13</title>
</head>

<body>
    <?php

        $urgencias = [
            "León" => [20, 4],
            "Palencia" => [17, 2],
            "Burgos" => [23, 4],
            "Zamora" => [25, 5],
            "Valladolid" => [36, 7],
            "Soria" => [8, 1],
            "Salamanca" => [29, 3],
            "Avila" => [18, 3],
            "Segovia" => [21, 5]
        ];

        function hospitalizados(array $urgencias) {

            $total = 0;

            foreach ($urgencias as $provincia => $pacientes) {
                $total += $pacientes[1];
            }

            return $total;

        }

        echo "<p>Total de pacientes hospitalizados en castilla y león: " . hospitalizados($urgencias) . "</p>";

    ?>
</body>

</html>