<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 11</title>
</head>

<body>
    <?php
        
        $number = 9;
        $counter = 1;
        $factorial = 1;

        while ($number >= $counter) {
            $factorial *= $counter;
            $counter++;
        }

        echo "<p>El factorial de $number es $factorial</p>";

    ?>
</body>

</html>