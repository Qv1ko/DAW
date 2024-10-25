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

        use a7dispositivo as Di;

        $d1 = new Di\Dispositivo("04R", "pantalla", "aula 25");
        $d2 = new Di\Dispositivo("26F", "ordenador", "aula 24");
        $d3 = new Di\Dispositivo("10T", "ratón", "aula 26");
        $d4 = new Di\Dispositivo("15T", "ordenador", "aula 26");

        $dispositivos = [$d1, $d2, $d3, $d4];

        $iterador = new RecursiveArrayIterator($dispositivos);
        var_dump($iterador);
        echo "<br>";
        foreach ($iterador as $dispositivo) {
            echo $dispositivo->ubicacion() . "<br>";
        }

        reset($dispositivos);
        while ($dispositivo = current($dispositivos)) {
            echo $dispositivo->ubicacion() . "<br>";
            next($dispositivos);
        }

    ?>
</body>

</html>