<?php namespace e5main ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 5</title>
</head>

<body>
    <?php

        /*
         * Diseña una clase abstracta para incluir como métodos dos o tres funciones con string.
         */

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