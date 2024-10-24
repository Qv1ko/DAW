<?php namespace e5index ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

        require_once("./ejercicio5-funciones_cadenas.php");

        use e5funccadenas as Fc;

        $cadena = new Fc\FuncCadenas("reconocer");

        echo $cadena->macarronico();
        echo $cadena->cesar();
        echo $cadena->palindromo();

        $frase = new Fc\FuncCadenas("Se laminan animales");

        echo $frase->macarronico();
        echo $frase->cesar();
        echo $frase->palindromo();

    ?>
</body>

</html>