<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 21</title>
</head>

<body>
    <?php

        function randNumber(int $min, int $max) {
            $number = rand($min, $max);
            if ($number == 6) {
                echo "<p>¡Enhorabuena!</p>";
            } else {
                echo "<p>Inténtelo de nuevo: $number</p>";
            }
        }

        // Función convencional
        randNumber(1, 6);

        // Variable de función
        $aleatorio = function(int $min, int $max) {
            $number = rand($min, $max);
            if ($number == 6) {
                echo "<p>¡Enhorabuena!</p>";
            } else {
                echo "<p>Inténtelo de nuevo: $number</p>";
            }
        };

        $aleatorio(1, 6);

        // Función anónima
        function anonima(callable $cb) {
            $cb(1, 6);
        }

        anonima($aleatorio);

    ?>
</body>

</html>