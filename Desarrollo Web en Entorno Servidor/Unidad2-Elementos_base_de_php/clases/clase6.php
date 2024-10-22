<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 6</title>
</head>

<body>
    <?php

        function multiplicar($valor2, $valor2) {
            return $valor1 * $valor2;
        }
        
        function suma($valor1, $valor2) {
            return $valor1 + $valor2;
        }

        function calcular($operacion, $valor1, $valor2) {
            return $operacion($valor1, $valor2);
        }

        echo "<p>" . calcular('suma', 5, 6) . "</p>";

        // Función anónima
        $a = function($b) {

        }

        $a($b);

        function prueba($nombre, $callback) {
            $callback();
            echo $nombre . "<br>";
        }

        // Función anónima
        $cb = function() {
            echo "Hola ";
        }

        prueba('Ana', $cb);
        prueba('Marcos', function() {
            echo "Hola ";
        })

        require_once("./clase6-mostrar.php");

        $number = 5;

        $numeroElegido = function(int $number): string {
            return "<p>Este es el número elegido: $number</p>";
        };

        $dibujar = function(int $number): string {

            $line = "";

            for ($i = 0; $i < $number; $i++) { 
                $line .= "*";
            }

            return $line;
            
        };

        echo $numeroElegido($number);
        echo $dibujar($number);

        mostrar($numeroElegido, 7);
        mostrar($dibujar, 7);
        
    ?>
</body>

</html>