<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

        /*
         * Poner un ejemplo de función que utiliza la asignación de valor en la cabecera (ejemplo
         *  el caso de calcular el precio con iva, si no se pasa el iva se supone que es el 21%).
         */

        $precio = rand(1, 75);
        $iva = rand(1, 21);

        echo "<p>El total de mi compra de $precio euros fue de " . total($precio) . "€</p>";
        echo "<p>El total de mi compra de $precio euros con $iva% de IVA fue de " . total($precio, $iva) . "€</p>";

        function total(float $precio, float $iva = 21): float {
            return round($precio + $precio * ($iva / 100), 2);
        }

    ?>
</body>

</html>