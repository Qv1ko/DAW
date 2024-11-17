<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

        /*
         * Crea una función para determinar que un string es un palíndromo.
         */

        echo palindromo("Dabale arroz a la zorra el abad");
        echo palindromo("A mi me mima");
        echo palindromo("A mi no me mima");

        function palindromo(string $text = "ejemplo") {

            $textIni = $text;

            $text = str_split(strtolower($text));

            for ($i = 0; $i < count($text); $i++) {
                if ($text[$i] == " ") {
                    array_splice($text, $i, 1);
                }
            }

            $invert = [];

            for ($i = count($text) - 1; $i >= 0 ; $i--) {
                array_push($invert, $text[$i]);
            }

            $isPalindromo = true;

            for ($i = 0; $i < count($text) && $isPalindromo; $i++) {
                if ($text[$i] != $invert[$i]) {
                    $isPalindromo = false;
                }
            }

            return "<p>El texto \"$textIni\" " . ($isPalindromo ? "" : "no") . " es palíndromo</p>";

        }

    ?>
</body>

</html>