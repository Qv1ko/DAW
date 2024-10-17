<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
        
        $str = "Una imagen vale más que mil palabras";

        echo "<p>La frase \"$str\" encriptada por el método César: " . cesarEncrypt($str) . "</p>";
        
        function cesarEncrypt(string $str): string {
            
            $alfabeto = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
            $chars = str_split(strtolower($str));
            $result = "";
            $isLetter = false;

            for ($i = 0; $i < count($chars); $i++) {

                $isLetter = false;

                for ($j = 0; $j < count($alfabeto) && !$isLetter; $j++) {
                    if ($chars[$i] == $alfabeto[$j]) {
                        $result = $result . $alfabeto[$j + 3];
                        $isLetter = true;
                    }
                }

                if (!$isLetter) {
                    $result = $result . $chars[$i];
                }

            }

            return $result;

        }

    ?>
</body>

</html>