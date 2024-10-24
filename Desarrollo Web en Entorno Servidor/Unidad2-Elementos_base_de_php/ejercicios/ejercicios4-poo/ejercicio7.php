<?php namespace e7index ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

        require_once("./ejercicio7-dispositivo.php");

        use e7dispositivo as Di;

        $dispositivos = [new Di\Dispositivo("04R", "pantalla", "aula 25"), new Di\Dispositivo("26F", "ordenador", "aula 24"), new Di\Dispositivo("10T", "ratón", "aula 26"), new Di\Dispositivo("15T", "ordenador", "aula 26")];

        echo "<p>Foreach</p>";
        foreach ($dispositivos as $dispositivo) {
            echo $dispositivo->ubicacion() . "<br>";
        }

        echo "<p>For</p>";
        for ($i = 0; $i < count($dispositivos); $i ++) {
            echo $dispositivos[$i]->ubicacion() . "<br>";
        }

        echo "<p>Funciones iterables</p>";
        reset($dispositivos);
        while ($dispositivo = current($dispositivos)) {
            echo $dispositivo->ubicacion() . "<br>";
            next($dispositivos);
        }

    ?>
</body>

</html>