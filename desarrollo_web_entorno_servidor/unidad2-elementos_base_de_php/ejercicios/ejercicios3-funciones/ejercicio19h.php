<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 H</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        const VALOR = 100; // Variable contante con valor 100

        function ambito8() {
            $var1 = VALOR * 2;
            define('OTRO_VALOR', -50); // Declara una nueva variable contante con valor -50
            return $var1;
        }

        // Suma el valor de la constante VALOR * 2 más el valor de la contante OTRO_VALOR porque al ser contante su valor es global
        echo "Valor de la suma de ambito8() + OTRO_VALOR: " . (ambito8() + OTRO_VALOR);

    ?>
</body>

</html>