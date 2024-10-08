<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

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