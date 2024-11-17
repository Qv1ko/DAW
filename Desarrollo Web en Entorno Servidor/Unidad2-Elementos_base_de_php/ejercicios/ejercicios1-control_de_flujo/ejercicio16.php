<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 16</title>
</head>

<body>
    <?php

        /*
         * Diseña un script para que con las variables $valor=50 y $aux = 'producto', obtengas la
         *  siguiente salida en pantalla:
         */

        $valor = 50;
        $aux = 'producto';

        echo "<p>Este '" . $aux . "' cuesta " . $valor . " $</p>";
        echo "<p>Este \"" . $aux . "\" cuesta " . $valor . " $</p>";
        echo "<p>Este " . $aux . ' cuesta $valor \\$</p>';
        echo "<p>" . $aux . ": " . $valor . " $</p>";
        echo "<p>" . $aux . "s: " . $valor . " $</p>";

    ?>
</body>

</html>