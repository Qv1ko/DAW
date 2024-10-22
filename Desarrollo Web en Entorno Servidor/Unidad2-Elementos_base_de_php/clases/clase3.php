<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 3</title>
</head>

<body>
    <?php

        $ganadores = [
            "Tenis" => "María",
            "Mus" => "Luis",
            "Pin-pon" => "Ana",
            "Ajedrez" => "Antonio"
        ];

        foreach ($ganadores as $juego => $ganador) {
            echo "<p>En $juego gano $ganador</p>";
        }

        $dwes = [
            "Lunes" => 2,
            "Martes" => 3,
            "Miercoles" => 0,
            "Jueves" => 2,
            "Viernes" => 2
        ];

        $totalHoras = 0;

        foreach ($dwes as $dia => $horas) {
            echo "<p>El $dia hay $horas horas de DWES</p>";
            $totalHoras += $horas;
        }

        echo "<p> En una semana lectiva, se da un total de $totalHoras horas de DWES</p>";

    ?>
</body>

</html>