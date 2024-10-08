<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 2</title>
</head>

<body>
    <?php
        
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