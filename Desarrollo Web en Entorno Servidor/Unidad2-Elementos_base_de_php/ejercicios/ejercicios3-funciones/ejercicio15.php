<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 15</title>
</head>

<body>
    <?php

        /*
         * Crea una función que reciba un array asociativo que almacene los ingresos y gastos de
         *  una familia gallega durante un mes.
         * El array recoge una muestra de las familias de cada provincia de esa comunidad.
         * La función devuelve cual es la provincia que más ahorra. Visualiza la provincia.
         */
        
        $familiasGallegas = [
            "A Coruña" => [rand(800, 1250), rand(800, 900)],
            "Lugo" => [rand(800, 1250), rand(800, 900)],
            "Pontevedra" => [rand(800, 1250), rand(800, 900)],
            "Ourense" => [rand(800, 1250), rand(800, 900)],
        ];

        echo "<p>" . masAhorradora($familiasGallegas) . "</p>";

        function masAhorradora(array $provincias): string {
            
            $ahorroMaximo = 0;

            $mensaje = "No hay datos";

            foreach ($provincias as $provincia => $ig) {
                if ($ig[0] - $ig[1] > $ahorroMaximo) {
                    $ahorroMaximo = $ig[0] - $ig[1];
                    $mensaje = "La provincia que más ahorra es " . $provincia . "<br>M.Ingresos: " . $ig[0] . "<br>M.Gasto: " . $ig[1] . "<br>Ahorro: " . $ig[0] - $ig[1];
                }
            }

            return $mensaje;

        }

    ?>
</body>

</html>