<?php namespace e24; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 24</title>
</head>

<body>
    <?php

        /*
         * Genera de valor aleatorio entre 1 y 5, el número generado se hará corresponder con la
         *  ejecución de una función de las ya implementadas en apartados anteriores para manejar
         *  un string y almacenadas en scripts diferentes.
         */

        require_once("./actividad23-libreria1.php");
        require_once("./actividad23-libreria2.php");
        require_once("./actividad23-libreria3.php");

        use a23libreria1 as Li1;
        use a23libreria2 as Li2;
        use a23libreria3 as Li3;

        $number = rand(1, 5);

        switch ($number) {
            case 1:
                Li1\name();
                break;
            case 2:
                Li2\name();
                break;
            case 3:
                Li3\name();
                break;    
            default:
                break;
        }

    ?>
</body>

</html>