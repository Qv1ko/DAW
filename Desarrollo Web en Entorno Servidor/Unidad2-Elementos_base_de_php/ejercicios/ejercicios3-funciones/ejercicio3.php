<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        $str = "rojo-verde-azul-amarillo";
        $info = array("Pedro", "González", "López");

        echo "<p>Array de colores</p>";
        print_r(explode('-', $str));

        echo "<p>String de \$persona: " . implode(" ", $info) . "</p>";

    ?>
</body>

</html>