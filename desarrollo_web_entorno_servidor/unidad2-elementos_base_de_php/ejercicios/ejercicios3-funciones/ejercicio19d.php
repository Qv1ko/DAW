<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 19 D</title>
</head>

<body>
    <?php

        /*
         * ¿Cuál es la salida de este script?
         */
        
        $var1 = 1;

        function ambito4() {
            global $var1;
            static $var3 = 1; // En la primera llamada inicializa una variable estatica a valor 1, despues no ejecuta la linea de codigo porque almacena su ultimo valor
            $var2 = $var1 + $var3;
            $var3 += 10; // Suma 10 a la variable estatica
            echo "Pasando por ambito4(): ";
            echo $var2 . " " . $var3 . "<br>";
        }

        ambito4(); // Al finalizar la función no borra el valor de $var3 porque es una variable estatica
        ambito4(); // El valor de $var3 se guarda y se sigue aumentando

    ?>
</body>

</html>