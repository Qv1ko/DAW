<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>

<body>
    <?php

        $NUMBER = 4;
        $value = 1;

        for ($i = 1; $i <= $NUMBER; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo $value;
                $value++;
            }
            echo "<br>";
        }

    ?>
</body>

</html>