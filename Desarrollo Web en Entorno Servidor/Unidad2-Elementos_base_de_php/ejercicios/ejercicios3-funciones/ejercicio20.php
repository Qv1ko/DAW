<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 20</title>
</head>

<body>
    <?php
        
        $arr = ["pa", "la", "bra", "ma", "ma", "lr", "la", "dl", "pa", "pa"];

        // Función convencional
        function searchString(array $arr, string $str = "ma"): int {
            $counter = 0;
            if (in_array($str, $arr)) {
                foreach ($arr as $string) {
                    if ($string == $str) {
                        $counter = $counter + 1;
                    }
                }
            }
            return $counter;
        }

        echo "<p>La cadena \"ma\" se encontro en el array " . (searchString($arr) != 1 ? searchString($arr) . " veces" : " una vez") . "</p>";

        // Variable de función
        $find = "pa";
        $funct = function(array $arr, string $str = "ma"): int {
            $counter = 0;
            if (in_array($str, $arr)) {
                foreach ($arr as $string) {
                    if ($string == $str) {
                        $counter = $counter + 1;
                    }
                }
            }
            return $counter;
        };
        echo "<p>La cadena \"$find\" se encontro en el array " . ($funct($arr, $find) != 1 ? $funct($arr, $find) . " veces" : " una vez") . "</p>";

        // Función anónima
        $anonima = function(array $arr, string $str = "ma"): int {
            $counter = 0;
            if (in_array($str, $arr)) {
                foreach ($arr as $string) {
                    if ($string == $str) {
                        $counter = $counter + 1;
                    }
                }
            }
            return $counter;
        };
        
        function buscarString(callable $cb, array $arr, string $word) {
            $count = $cb($arr, $word);
            echo "<p>La cadena \"$word\" se encontro en el array " . ($count != 1 ? $count . " veces" : " una vez") . "</p>";
        }

        $find = "lr";
        buscarString($anonima, $arr, $find);

    ?>
</body>

</html>