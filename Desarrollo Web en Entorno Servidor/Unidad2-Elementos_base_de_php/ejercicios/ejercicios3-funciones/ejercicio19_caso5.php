<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 5</title>
</head>

<body>
    <?php
        
        $var1 = 1;

        function ambito5($p) {
            $p++; // Incrementa el valor de la variable pero solo dentro de la función
            echo "Pasando por ambito5(): ";
            return $p;
        }

        echo ambito5($var1) . "<br>"; // Retorna el valor incrementado de $p, pero la variable $var1 no a cambiado de valor

    ?>
</body>

</html>