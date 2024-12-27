<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

        /*
         * Determina si a partir de una fecha para realizar una solicitud, se ha terminado el plazo.
         */

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