<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

        /*
         * Traduce un texto escrito en castellano a "latín macarrónico".
         * Para ello cambia cada palabra del texto por otra que se construye a partir de la original
         *  poniendo la primera letra al final y terminándola en “um”.
         */

        $str = "Una imagen vale más que mil palabras";

        function toMacaronicLatin($str) {

            $words = explode(" ", preg_replace('/[^A-Za-z0-9áéíóúñ \-]/', '', $str));
            $result = [];

            foreach ($words as $word) {
                array_push($result, (substr($word, 1, strlen($word)) . substr(strtolower($word), 0, 1) . "um"));
            }

            $result = ucfirst(implode(" ", $result));

            return $result;

        }


        echo "<p>Texto: $str</p>";
        echo "<p>Latín macarrónico: " . toMacaronicLatin($str) . "</p>";

    ?>
</body>

</html>