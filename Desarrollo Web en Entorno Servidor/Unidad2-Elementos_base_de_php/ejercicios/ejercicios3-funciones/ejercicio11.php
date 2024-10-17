<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php

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