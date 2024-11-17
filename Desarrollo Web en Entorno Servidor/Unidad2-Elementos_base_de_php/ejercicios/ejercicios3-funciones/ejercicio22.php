<?php namespace e22; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 22</title>
</head>

<body>
    <?php

        /*
         * Prueba los namespace en estos códigos:
         */
        
        require_once("./ejercicio22-biblioteca1.php");
        require_once("./ejercicio22-biblioteca2.php");

        use e22biblioteca1 as Bi1;
        use e22biblioteca2 as Bi2;

        echo "Namespace actual: " . __NAMESPACE__ . "<br>";
        echo "Se ejecutará la summa, es decir la operación de ejercicio22-biblioteca1.php: " . Bi1\operacion(2, 3) . "<br>";
        echo "Se ejecutará el producto, es decir la operación de ejercicio22-biblioteca2.php: " . Bi2\operacion(2, 3);

    ?>
</body>

</html>