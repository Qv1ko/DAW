<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 13</title>
</head>

<body>
    <?php

        $num1 = 303;
        $num2 = "";
        $aux = $num1;

        // echo "El número " , $num1 , ($num1 == (int)strrev((string)$num1) ? " es capicúa" : " no es capicúa");

        while ($aux > 0) {
            $num2 = $num2 . (string)($aux % 10);
            $aux = (int)($aux / 10);
        }

        echo "El número " , $num1 , ($num1 == (int)$num2 ? " es capicúa" : " no es capicúa");

    ?>
</body>

</html>