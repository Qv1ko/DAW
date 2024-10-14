<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

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