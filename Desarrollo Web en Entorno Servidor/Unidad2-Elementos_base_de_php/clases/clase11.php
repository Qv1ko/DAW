<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 11</title>
</head>

<body>
    <?php

        date_default_timezone_set("Europe/Madrid");

        echo "<p>Fecha actual: " . date('D-M-Y') . "</p>";
        echo "<p>Hora actual: " . date('H:i:s') . "</p>";
        print_r(getdate());

    ?>
</body>

</html>