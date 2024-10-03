<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php
        
        $estaciones = [
            "Invierno" => [65, 14],
            "Primavera" => [65, 12],
            "Verano" => [15, 0],
            "Otoño" => [50, 2],
        ];

        $est = "";
        $lectivos = 5 * 4 * 12;
        $lectivosTotales = 0;

        foreach ($estaciones as $estacion => $dias) {
            if ($dias[0] - $dias[1] < $lectivos) {
                $est = $estacion;
                $lectivos = $dias[0] - $dias[1];
            }
            $lectivosTotales += $dias[0] - $dias[1];
        }

        echo "<p>La estación con menos días lectivos es $est, con $lectivos días lectivos</p>";
        echo "<p>Hay un total de $lectivosTotales días lectivos</p>";

    ?>
</body>

</html>