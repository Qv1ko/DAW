<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 G</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito7(&$p) {
            $p++; // Se incrementa el valor de $p y con ello el valor de $var1, ya que se a pasado por referencia
        }

        echo ambito7($var1); // Pasa la variable $var1 como referencia por lo tanto todos los cambios que se hagan dentro de la función se reflejaran en la variable $var1
        echo "Valor de la variable pasada por referencia \$var1: " . $var1 . "<br>";

    ?>
</body>

</html>