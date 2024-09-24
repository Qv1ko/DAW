<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6 - Víctor García Murillo</title>
</head>

<body>
    <?php

        $result = 0;

        for ($i = 1; $i <= 100; $i++) { 
            $result += ($i % 10 != 3 ? $i : 0);
        }

        echo "La suma es igual a " . $result;

    ?>
</body>

</html>