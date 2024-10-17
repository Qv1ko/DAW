<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

        echo "<h1>Ejercicio 8</h1>";
        echo "<p>Hoy es " . date("d-m-Y") . "</p>";
        echo "<p>Hoy es " . date("l-F") . "</p>";
        echo "<p>Semana " . date("W") . " del año</p>";
        echo "<br>";
        echo "<p>Y son las " . date("h:i") . "</p>";

        date_default_timezone_set("Europe/Madrid");
        
        echo "<p>Y son las " . date("h:i") . " Ahora si es correcta</p>";
        echo "<p>Y ahora más completa " . date("h:i:s a") . "</p>";

    ?>
</body>

</html>