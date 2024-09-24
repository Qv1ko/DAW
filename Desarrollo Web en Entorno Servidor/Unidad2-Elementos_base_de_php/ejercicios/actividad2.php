<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
</head>

<body>
    <?php

        $num1 = 7;
        $num2 = 7;
        $num3 = 15;
        // $max = max($num1, $num2, $num3);
        $max = 0;
        $maxCounter = 1;

        // echo "Número mayor: " , $max;
        // echo "<br>Número de máximos: " , array_count_values([$num1, $num2, $num3])[$max];

        foreach ([$num1, $num2, $num3] as $number) {
            if ($max == $number) {
                $maxCounter++;
            } else if ($max < $number) {
                $maxCounter = 1;
                $max = $number;
            }
        }

        echo "Número mayor: " , $max;
        echo "<br>Número de máximos: " , $maxCounter;

    ?>
</body>

</html>