<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 14</title>
</head>

<body>
    <?php

        /*
         * Crea un array bidimensional para almacenar el estado de las plazas de un microbús de 16
         *  plazas (libre u ocupada), donde el número de asiento es el siguiente (impares
         *  ventanilla, pares pasillo).
         * A continuación, calcula y visualiza el número de asientos libres que hay en ventanilla.
         */

        $microbus = [
            "1" => ["ventanilla" => "ocupado"],
            "2" => ["pasillo" => "libre"],
            "4" => ["pasillo" => "libre"],
            "3" => ["ventanilla" => "ocupado"],
            "5" => ["ventanilla" => "ocupado"],
            "6" => ["pasillo" => "ocupado"],
            "8" => ["pasillo" => "libre"],
            "7" => ["ventanilla" => "ocupado"],
            "9" => ["ventanilla" => "ocupado"],
            "10" => ["pasillo" => "ocupado"],
            "12" => ["pasillo" => "libre"],
            "11" => ["ventanilla" => "libre"],
            "13" => ["ventanilla" => "ocupado"],
            "14" => ["pasillo" => "ocupado"],
            "16" => ["pasillo" => "ocupado"],
            "15" => ["ventanilla" => "ocupado"],
        ];

        $fila = 0;
        $libresVentanilla = 0;

        foreach ($microbus as $asiento => $propiedades) {
            foreach ($propiedades as $posicion => $estado) {
                echo "(" . ($asiento < 10 ? "0" . $asiento : $asiento) . ($estado == "libre" ? "L" : "O") . ")";
                $fila++;
                if ($fila == 4) {
                    echo "<br>";
                    $fila = 0;
                } elseif ($fila == 2) {
                    echo "P";
                }
                if ($posicion == "ventanilla" && $estado == "libre") {
                    $libresVentanilla++;
                }
            }
        }
        echo "<p>Hay " . ($libresVentanilla == 1 ? "un asiento libre" : "$libresVentanilla asientos libres") . " en ventanilla</p>";

    ?>
</body>

</html>