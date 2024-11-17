<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

        /*
         * Resolver el ejercicio 6 de los ejercicios de control de flujo utilizando un array asociativo.
         */
        
        $dinero = 287;
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
                switch (true) {
                    case $dinero >= 100:
                        $billetes["100"]++;
                        $dinero -= 100;
                        break;
                    case $dinero >= 50:
                        $billetes["50"]++;
                        $dinero -= 50;
                        break;
                    case $dinero >= 20:
                        $billetes["20"]++;
                        $dinero -= 20;
                        break;
                    case $dinero >= 10:
                        $billetes["10"]++;
                        $dinero -= 10;
                        break;
                    case $dinero >= 5:
                        $billetes["5"]++;
                        $dinero -= 5;
                        break;
                    default:
                        break;
                }
            }

            foreach ($billetes as $billete => $contador) {
                if ($contador > 1) {
                    echo "<p>$contador billetes de $billete</p>";
                } else if ($contador == 1) {
                    echo "<p>$contador billete de $billete</p>";
                }
            }

            if ($dinero > 0) {
                echo "<p>Sobran $dinero euros</p>";
            }
        }

    ?>
</body>

</html>