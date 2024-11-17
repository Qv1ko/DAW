<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 12</title>
</head>

<body>
    <?php

        /*
         * Crea una función que reciba un número entero positivo de tres cifras y devuelva el número
         *  invertido. Visualizarle en el script principal.
         */

        $number = rand(100, 999);

        echo "<p>El número $number al reves es " . reverseNumber($number) . "</p>";

        function reverseNumber(int $number): string {
            $digits = str_split((string)$number);
            return implode("", array_reverse($digits));
        }

    ?>
</body>

</html>