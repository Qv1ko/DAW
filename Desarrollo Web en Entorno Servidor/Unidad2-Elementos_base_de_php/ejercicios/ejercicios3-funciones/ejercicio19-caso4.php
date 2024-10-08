<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 4</title>
</head>

<body>
    <?php
        
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