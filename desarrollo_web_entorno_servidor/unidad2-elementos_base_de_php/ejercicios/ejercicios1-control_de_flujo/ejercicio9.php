<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

        /*
         * Determinar el número de máximos que hay en tres números enteros; inicializa para ello
         *  tres variables enteras. Visualizar el número de máximos.
         */

        $num1 = 7;
        $num2 = 7;
        $num3 = 15;
        // $max = max($num1, $num2, $num3);
        $max = 0;
        $maxCounter = 1;

        // echo "<br>Número de máximos: " , array_count_values([$num1, $num2, $num3])[$max];

        foreach ([$num1, $num2, $num3] as $number) {
            if ($max == $number) {
                $maxCounter++;
            } else if ($max < $number) {
                $maxCounter = 1;
                $max = $number;
            }
        }

        echo "<br>Número de máximos: " , $maxCounter;

    ?>
</body>

</html>