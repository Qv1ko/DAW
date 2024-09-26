<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 6</title>
</head>

<body>
    <?php
        
        $dinero = 534;
        $billetes = [
            "100" => 0,
            "50" => 0,
            "20" => 0,
            "10" => 0,
            "5" => 0
        ];

        if ($dinero <= 0) {
            echo "<p>No tienes dinero</p>";
        } else {
            echo "<p>$dinero € es equivalente a:</p>";
            while ($dinero >= 5) {
                if ($dinero > 100) {
                    $billetes["100"]++;
                    $dinero -= 100;
                }
            }
        }

    ?>
</body>

</html>