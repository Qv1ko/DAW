<?php namespace e23; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 23</title>
</head>

<body>
    <?php
        
        require_once("./ejercicio23-libreria1.php");
        require_once("./ejercicio23-libreria2.php");
        require_once("./ejercicio23-libreria3.php");

        use e23libreria1 as Li1;
        use e23libreria2 as Li2;
        use e23libreria3 as Li3;

        echo "<p>Constante de la libreria 1: " . Li1\LIBRERIA . "</p>";
        echo "<p>Constante de la libreria 2: " . Li2\LIBRERIA . "</p>";
        echo "<p>Constante de la libreria 3: " . Li3\LIBRERIA . "</p>";

    ?>
</body>

</html>