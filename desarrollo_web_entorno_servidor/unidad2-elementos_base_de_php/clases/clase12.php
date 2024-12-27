<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 12</title>
</head>

<body>
    <?php

        date_default_timezone_set("Europe/Madrid");
        setlocale(LC_ALL, ''); // es_ES, '0';

        echo mktime(0, 0, 0, 10, 15, 2024);
        echo "<br>";
        echo strtotime("3 weeks");
        echo "<br>";
        echo idate("d");
        echo "<br>";
        echo strtotime("15-10-2024");
        echo "<br>";
        echo strftime('%A-%B-%Y');
        
    ?>
</body>

</html>