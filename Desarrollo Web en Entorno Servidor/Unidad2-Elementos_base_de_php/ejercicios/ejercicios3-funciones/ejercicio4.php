<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 4</title>
</head>

<body>
    <?php

        /*
         * Determina si una frase es palíndromo. Utiliza las funciones de string para ello.
         */

        echo palindromo("Dabale arroz a la zorra el abad");
        echo palindromo("A mi me mima");
        echo palindromo("A mi no me mima");

        function palindromo(string $text = "ejemplo") {

            $textIni = $text;
            $text = implode(explode(' ', strtolower($text)));

            return "<p>La frase '" . $textIni . (strcmp($text, strrev($text)) == 0 ? "' es palindromo" : "' no es palindromo") . "</p>";

        }

    ?>
</body>

</html>