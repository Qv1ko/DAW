<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        /*
         * Construye un array asociativo, donde las componentes son las cuatro estaciones del año.
         *  Almacena en cada componente los días lectivos correspondientes.
         * - Muestra la estación con menor número de días lectivos.
         * - Calcula el total de días lectivos.
         */
        
        $estaciones = [
            "Invierno" => [65, 14], // 13 semanas // 14 vacaciones
            "Primavera" => [65, 10], // 13 semanas // 10 vacaciones
            "Verano" => [0, 0], // 0 semanas // 0 vacaciones
            "Otoño" => [65, 5], // 13 semanas // 5 vacaciones
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