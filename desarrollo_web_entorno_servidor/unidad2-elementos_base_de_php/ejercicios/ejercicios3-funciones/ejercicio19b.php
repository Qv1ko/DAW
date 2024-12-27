<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 B</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito2() {
            global $var1; // Se declara que la variable $var1 es global y existe fuera de la función
            $var2 = $var1; // Guarda el valor de la variable $var1
            echo "Pasando por ambito2(): ";
            echo $var2 . "<br>";
        }

        ambito2();

    ?>
</body>

</html>