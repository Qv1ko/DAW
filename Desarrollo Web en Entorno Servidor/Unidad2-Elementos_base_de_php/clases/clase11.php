<!DOCTYPE html>
<html lang="en">

<head>
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