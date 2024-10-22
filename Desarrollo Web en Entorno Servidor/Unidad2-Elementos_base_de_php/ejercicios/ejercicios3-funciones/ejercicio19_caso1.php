<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 1</title>
</head>

<body>
    <?php
        
        $var1 = 1;

        function ambito1() {
            $var2 = $var1; // No se pasa la variable $var1 como función, por lo tanto no tiene valor dentro
            echo "Pasando por ambito1(): ";
            echo var_dump($var2) . "<br>"; // $var2 no tiene valor
        }

        ambito1(); // Error porque la variable $var1 no esta definida dentro de la función

    ?>
</body>

</html>