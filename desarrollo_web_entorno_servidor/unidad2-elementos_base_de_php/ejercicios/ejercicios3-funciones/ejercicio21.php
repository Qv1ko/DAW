<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 21</title>
</head>

<body>
    <?php

        /*
         * Diseña una función para que genere un número aleatorio entre 1 y 6 simulando el
         *  funcionamiento de un dado.
         * La función deberá incluir las sentencias echo adecuada para informar del resultado obtenido.
         * - Diseña una función de usuario convencional.
         * - Utiliza una variable de función.
         * - Diseña una función anónima e invoca a la función desde una función convencional (callback).
         */

        // Función convencional
        function randNumber(int $min, int $max) {
            $number = rand($min, $max);
            if ($number == 6) {
                echo "<p>¡Enhorabuena!</p>";
            } else {
                echo "<p>Inténtelo de nuevo: $number</p>";
            }
        }

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
        $anonima = function(int $min, int $max) {
            $number = rand($min, $max);
            if ($number == 6) {
                echo "<p>¡Enhorabuena!</p>";
            } else {
                echo "<p>Inténtelo de nuevo: $number</p>";
            }
        };

        function azar(callable $cb) {
            $cb(1, 6);
        }

        azar($anonima);

    ?>
</body>

</html>