<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 20</title>
</head>

<body>
    <?php

        /*
         * Diseña una función para determinar si en un array de strings, se encuentra una determinada
         *  subcadena (ambos datos se pasan como parámetros. Si no se pasa la subcadena se buscará
         *  la subcadena predeterminada "ma".
         * La función debe calcular el número de veces que aparece la subcadena entre las palabras
         *  del array.
         * - Diseña una función de usuario convencional.
         * - Utiliza una variable de función.
         * - Diseña una función anónima e invoca a la función desde una función convencional (callback).

         */
        
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