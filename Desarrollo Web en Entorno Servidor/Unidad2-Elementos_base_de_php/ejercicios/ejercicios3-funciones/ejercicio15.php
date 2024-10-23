<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 15</title>
</head>

<body>
    <?php
        
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