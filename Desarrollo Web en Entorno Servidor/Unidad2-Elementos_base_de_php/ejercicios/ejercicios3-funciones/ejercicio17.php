<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 17</title>
</head>

<body>
    <?php
        
        echo "<p>Faltan " . faltaNavidad() . " días para el día de navidad</p>";

        function faltaNavidad() {

            $now = date("Y/m/d");
            define('NAVIDAD', (date(date("m") == 12 && date("d") > 25 ? strval(inval(date("Y"))) + 1 : date("Y")) . "-12-25"));
            $secDia = 60 * 60 * 24;

            return intval((strtotime(NAVIDAD) - strtotime($now)) / $secDia);

        }

    ?>
</body>

</html>