<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 25</title>
</head>

<body>
    <?php

        // Retorna la representación JSON de un valor dado
        $jsonData = json_encode(array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5));
        var_dump($jsonData);
        echo "$jsonData<br>";

        echo "<br>";

        // Convierte un string codificado en JSON a una variable de PHP
        $arr = json_decode($jsonData);
        var_dump($arr);
        echo "<br>";
        print_r($arr);

    ?>
</body>

</html>