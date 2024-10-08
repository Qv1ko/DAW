<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 19 - Caso 6</title>
</head>

<body>
    <?php
        
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