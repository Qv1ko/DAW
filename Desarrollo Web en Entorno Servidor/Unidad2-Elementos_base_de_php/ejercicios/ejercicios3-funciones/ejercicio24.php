<?php namespace e24; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 24</title>
</head>

<body>
    <?php

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