<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 7</title>
</head>

<body>
    <?php
        
        $var1 = 1;

        function ambito7(&$p) {
            $p++; // Se incrementa el valor de $p y con ello el valor de $var1, ya que se a pasado por referencia
        }

        echo ambito7($var1); // Pasa la variable $var1 como referencia por lo tanto todos los cambios que se hagan dentro de la función se reflejaran en la variable $var1
        echo "Valor de la variable pasada por referencia \$var1: " . $var1 . "<br>";

    ?>
</body>

</html>