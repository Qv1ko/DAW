<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 15</title>
</head>

<body>
    <?php
        
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