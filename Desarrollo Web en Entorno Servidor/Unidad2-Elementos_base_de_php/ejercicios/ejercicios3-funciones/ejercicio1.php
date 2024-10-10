<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
        
        $numbers = array(rand(-15, 15), rand(-15, 15), rand(-15, 15), rand(-15, 15), rand(-15, 15));

        echo "<p>Número de componentes negativos: " . componentesNegativos($numbers) . "</p>";
        echo "<p>La media de los componentes es: " . componentesMedia($numbers) . "</p>";
        echo "<p>Posiciciones en las que se almacena como valor el cuadrado de su posición: " . valoresCuadradoPosicion($numbers) . "</p>";
        echo "<p>Array en orden invertido: " . arrayInvertido($numbers) . "</p>";
        echo "<p>Valores dobles del array: " . arrayDoble($numbers) . "</p>";
        echo "<p>Mitad de los valores del array: " . arrayMitad($numbers) . "</p>";
        echo "<p>Ordenación con sort():" . ordenarSort($numbers) . "</p>";
        echo "<p>Ordenación con rsort():" . ordenarRsort($numbers) . "</p>";

        function componentesNegativos(array $numbers): int {

            $count = 0;

            foreach ($numbers as $number) {
                if ($number < 0) {
                    $count++;
                }
            }

            return $count;

        }

        function componentesMedia(array $numbers): float {
            return array_sum($numbers) / count($numbers);
        }

        function valoresCuadradoPosicion(array $numbers): string {

            $text = "";

            for ($i = 0; $i < count($numbers); $i++) {
                for ($j = 0; $j < count($numbers); $j++) {
                    if ($i * $i == $numbers[$j]) {
                        $text = $text . ($text != "" ? ", " : "") . "[" . strval($j) . "] = " . $numbers[$j];
                    }
                }
            }

            return $text != "" ? $text : "No se da la circunstancia";

        }

        function arrayInvertido(array $numbers): string {
            return implode(", ", array_reverse($numbers));
        }

        function arrayDoble(array $numbers): string {
            return implode(", ", array_map(fn(int $number): int => $number * 2, $numbers));
        }

        function arrayMitad(array $numbers): string {
            return implode(", ", array_map(fn(int $number): float => $number / 2, $numbers));
        }

        function ordenarSort(array $numbers): string {
            // return implode(", ", sort($numbers));
        }

        function ordenarRsort(array $numbers): string {

        }

    ?>
</body>

</html>