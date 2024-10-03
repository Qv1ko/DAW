<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 16</title>
</head>

<body>
    <?php

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