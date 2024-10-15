<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

        date_default_timezone_set("Europe/Madrid");
        setlocale(LC_ALL, '');

        $fecha = rand(2024, 2025) . "/" . rand(1, 12) . "/" . rand(1, 28);
        $secFecha = strtotime($fecha);
        $secNow = strtotime(date("Y/m/d"));

        if ($secNow > $secFecha) {
            echo "<p>El plazo ha finalizado hace " . intval(($secNow - $secFecha) / 86400) . " días</p>";
        } else {

            echo "<p>Quedan " . intval(($secFecha - $secNow) / 86400) + 1 . " días para que finalice el plazo de la solicitud</p>";
        }

        echo "<p>Fecha actual: " . date("d/m/Y") . "</p>";
        echo "<p>Fecha de fin de plazo: " .  date("d/m/Y", $secFecha) . "</p>";

    ?>
</body>

</html>