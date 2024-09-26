<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 2</title>
</head>

<body>
    <?php

        $NUMBER = 4;
        $text = "*";

        for ($i = 0; $i < $NUMBER; $i++) { 
            echo "<p>$text</p>";
            $text = $text . "*";
        }

    ?>
</body>

</html>