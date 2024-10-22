<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 8</title>
</head>

<body>
    <?php

        $var1 = 1;
        // global $var1 = 1; // Error de sintaxis

        function ambito2() {
            global $var1;
            $var2 = $var1;
            echo $var2;
        }

        ambito2();

    ?>
</body>

</html>