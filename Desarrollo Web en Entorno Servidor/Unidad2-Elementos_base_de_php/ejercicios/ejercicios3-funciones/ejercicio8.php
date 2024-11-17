<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál sería el código para obtener la siguiente salida en pantalla?
         */

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