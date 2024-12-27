<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 C</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito3() {
            global $var1;
            $var1++; // Incrementa en 1 el valor de la variable global
            echo "Pasando por ambito3(): " . $var1 . "<br>";
        }

        ambito3();
        $var1++; // Incrementa en 1 el valor de la variable global
        echo "Incrementando \$var1: " . $var1 . "<br>";

    ?>
</body>

</html>