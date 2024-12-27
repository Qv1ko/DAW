<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 F</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito6() {
            global $var1;
            $GLOBALS['var2'] = $var1 + 10; // Guarda en una variable global el valor de $var1 + 10
        }

        echo ambito6(); // Realiza la declaración e instancia de la variable global
        echo "Valor de la variable \$var2: " . $var2 . "<br>"; // Se puede acceder a $var2 porque es una variable global
        // echo "Valor de la variable \$var2: " . $GLOBALS["var2"] . "<br>"; // Tambien accede al valor global de $var2

    ?>
</body>

</html>