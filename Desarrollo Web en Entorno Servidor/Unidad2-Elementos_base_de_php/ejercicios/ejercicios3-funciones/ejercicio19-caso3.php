<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 3</title>
</head>

<body>
    <?php
        
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