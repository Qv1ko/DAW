<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 8</title>
</head>

<body>
    <?php
        
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