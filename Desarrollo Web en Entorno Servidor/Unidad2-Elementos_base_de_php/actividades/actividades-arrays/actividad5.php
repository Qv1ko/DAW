<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5</title>
</head>

<body>
    <?php
        
        $matriz = array(array(2, 3, 5), array(1, 4, 7), array(0, 1, 6));
        // $matriz = array(array(1, 2, 3), array(2, 3, 2), array(3, 2, 1));
        // $matriz = array(array(1, 2, 3), array(2, 3, 4), array(3, 4, 5));

        echo "<p>Matriz</p>";

        foreach ($matriz as $fila => $valores) {
            foreach ($valores as $valor) {
                echo "$valor&emsp;";
            }
            echo "<br>";
        }

        echo "<p>Comprobar simetría</p>";

        $matrizSimetrica = true;

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                if ($matriz[$i][$j] != $matriz[$j][$i]) {
                    $matrizSimetrica = false;
                }
            }
            if (!$matrizSimetrica) {
                break;
            }
        }

        echo "<p>La matriz" . ($matrizSimetrica ? " " : " no ") . "es simetrica</p>";

        echo "<p>Valor de las columnas</p>";

        $columnas = array();

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                if (count($columnas) <= $j) {
                    $columnas[$j] = $matriz[$i][$j];
                } else {
                    $columnas[$j] += $matriz[$i][$j];
                }
            }
        }

        foreach ($columnas as $valor) {
            echo "$valor&emsp;";
        }

        echo "<p>Buscar valor</p>";

        $numero = 0;
        $encontrado = false;
        $posicion = null;

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                if ($matriz[$i][$j] == $numero) {
                    $columnas[$j] = $matriz[$i][$j];
                    $posicion = [$i, $j];
                    // $posicion = [$i + 1, $j + 1];
                    $encontrado = true;
                }
            }
            if ($encontrado) {
                break;
            }
        }

        if ($encontrado) {
            echo "<p>El valor $numero se a encontrado en la fila $posicion[0] y el la columna $posicion[1]</p>";
        } else {
            echo "<p>El valor $numero no se a encontrado en la matriz</p>";
        }

    ?>
</body>

</html>