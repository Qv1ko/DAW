<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 1</title>
</head>

<body>
    <?php

        /*
         * Construir un array de 5 componentes de tipo int y a continuación:
         * - Muestra el número de componentes negativas.
         * - Muestra la media de las componentes.
         * - Visualiza las posiciones del array en las que se almacene como valor el cuadrado de su
         *    posición. Si no se da esta circunstancia en ninguna componente, indícalo con un mensaje.
         * - Visualizar el array en orden invertido.
         * - Crear un nuevo array cuyos componentes tomarán como valor el doble de los componentes
         *    de este primer array.
         * - Incrementa en dos más sus componentes y calcula de nuevo la media de ellas.
         */
        
        $numbers = array(4, 7, 9, -12, -5);

        echo "<p>Componentes negativos</p>";

        $countNegative = 0;

        foreach ($numbers as $number) {
            if ($number < 0) {
                echo "$number&emsp;&emsp;";
                $countNegative++;
            }
        }

        echo "<p>Hay $countNegative números negativos</p>";

        echo "<p>Media de los componentes</p>";

        $total = 0;
        $counter = 0;

        foreach ($numbers as $number) {
            $total += $number;
            $counter++;
        }

        // echo "<p>", ($total / count($numbers)) , "</p>";
        // echo "<p>", (array_sum($numbers) / count($numbers)) , "</p>";
        echo "<p>" . $total / $counter . "</p>";

        echo "<p>Posiciciones en las que se almacena como valor el cuadrado de su posición</p>";

        $finded = false;

        for ($i = 0; $i < $counter; $i++) {
            for ($j = 0; $j < $counter; $j++) {
                if ($i * $i == $numbers[$j]) {
                    echo $j . "&emsp;&emsp;";
                    $finded = true;
                }
            }
        }

        if (!$finded) {
            echo "<p>No se da la circunstancia</p>";
        }


        echo "<p>Array en orden invertido</p>";

        for ($i = $counter  * - 1; $i >= 0; $i--) { 
            echo "$numbers[$i]&emsp;&emsp;";
        }

        echo "<p>Array con valores dobles</p>";

        for ($i = 0; $i < $counter; $i++) { 
            $numbers[$i] *= 2;
        }

        foreach ($numbers as $number) {
            echo "$number&emsp;&emsp;";
        }

        echo "<p>Incremento de los componentes</p>";

        for ($i = 0; $i < $counter; $i++) { 
            $numbers[$i] += 2;
        }

        $total = 0;
        $counter = 0;

        foreach ($numbers as $number) {
            $total += $number;
            $counter++;
            echo "$number&emsp;&emsp;";
        }

        echo "<p>" . $total / $counter . "</p>";

    ?>
</body>

</html>