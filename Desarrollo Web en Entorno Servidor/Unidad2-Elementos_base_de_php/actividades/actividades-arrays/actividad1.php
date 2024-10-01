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
                echo "$number&emsp;&emsp;";
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

        echo "<p>Posiciones del cuadrado de su valor</p>";

        foreach ($numbers as $number) {
            if (array_key_exists($numbers[$number * $number])) {
                echo $numbers[$number * $number];
            }
        }

        echo "<p>Array en orden invertido</p>";

        for ($i = $counter - 1; $i >= 0; $i--) { 
            echo "$numbers[$i]&emsp;&emsp;";
        }

        echo "<p>Array con valores dobles</p>";

        for ($i = 0; $i < $counter; $i++) { 
            $numbers[$i] *= 2;
        }

        foreach ($numbers as $number) {
            echo "$number&emsp;&emsp;";
        }

        echo "<p>Incremento de los componentes</p>";

        for ($i = 0; $i < $counter; $i++) { 
            $numbers[$i] += 2;
        }

        $total = 0;
        $counter = 0;

        foreach ($numbers as $number) {
            $total += $number;
            $counter++;
            echo "$number&emsp;&emsp;";
        }

        echo "<p>" . $total / $counter . "</p>";

    ?>
</body>

</html>