<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 10</title>
</head>

<body>
    <?php

        $lado1 = 6;
        $lado2 = 6;
        $lado3 = 7;

        if ($lado1 == $lado2 and $lado2 == $lado3) {
            echo "<p>Triangulo equilátero</p>";
        } else if ($lado1 == $lado2 or $lado2 == $lado3 or $lado1 == $lado3) {
            echo "<p>Triangulo isósceles</p>";
        } else {
            echo "<p>Triangulo escaleno</p>";
        }

    ?>
</body>

</html>