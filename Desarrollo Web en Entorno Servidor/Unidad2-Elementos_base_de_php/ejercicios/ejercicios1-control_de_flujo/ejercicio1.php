<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 1</title>
</head>

<body>
    <?php

        /*
         * Inicializa tres variables numéricas al valor que tú quieras y visualiza cuál es el mayor.
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