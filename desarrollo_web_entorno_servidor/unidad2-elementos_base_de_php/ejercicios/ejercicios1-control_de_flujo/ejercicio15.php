<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 15</title>
</head>

<body>
    <?php

        /*
         * Averigua tu número del Tarot. Para ello inicializa una variable con el año de
         *  nacimiento, otra con el mes (numérico) y otra con el día. Suma las tres cifras.
         *  Realiza sucesivas sumas sobre las cifras del número obtenido hasta que sólo te quede uno.
         * Ese es tu número del Tarot. Visualízalo.
         */
        
        $year = 2000;
        $month = 11;
        $day = 13;

        $number = $year + $month + $day;

        while ($number > 9) {

            // $number = array_sum(str_split($number));

            // $digits = str_split($number);
            // $number = 0;
            // foreach ($digits as $digit) {
            //     $number += $digit;
            // }

            $aux = 0;
            while ($number > 0) {
                $aux += $number % 10;
                $number = (int)($number / 10);
            }
            $number = $aux;

        }

        echo "<p>Tú número del tarot es $number</p>";

    ?>
</body>

</html>