<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 1</title>
</head>

<body>
    <?php
        
        $numbers = array(4, 7, 9, -12, -5);

        echo "<p>Componentes negativos</p>";

        foreach ($numbers as $number) {
            if ($number < 0) {
                echo "<p>$number</p>";
            }
        }

        echo "<p>Media de los componentes</p>";

        $total = 0;
        $counter = 0;

        foreach ($numbers as $number) {
            $total += $number;
            $counter++;
        }

        // echo "<p>", ($total / count($numbers)) , "</p>";
        // echo "<p>", (array_sum($numbers) / count($numbers)) , "</p>";
        echo "<p>" . $total / $counter . "</p>";

        echo "<p>Array en orden invertido</p>";

    ?>
</body>

</html>