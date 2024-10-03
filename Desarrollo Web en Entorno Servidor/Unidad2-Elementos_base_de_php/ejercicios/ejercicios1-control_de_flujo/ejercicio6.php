<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php
        
        $dinero = 535;
        $b100 = 0;
        $b50 = 0;
        $b20 = 0;
        $b10 = 0;
        $b5 = 0;

        if ($dinero <= 0) {
            echo "<p>No tienes dinero</p>";
        } else {
            echo "<p>$dinero € es equivalente a:</p>";
            while ($dinero >= 5) {
                switch (true) {
                    case $dinero >= 100:
                        $b100++;
                        $dinero -= 100;
                        break;
                    case $dinero >= 50:
                        $b50++;
                        $dinero -= 50;
                        break;
                    case $dinero >= 20:
                        $b20++;
                        $dinero -= 20;
                        break;
                    case $dinero >= 10:
                        $b10++;
                        $dinero -= 10;
                        break;
                    case $dinero >= 5:
                        $b5++;
                        $dinero -= 5;
                        break;
                    default:
                        break;
                }
                
            }

            // No funciona
            // switch (true) {
            //     case $b100 > 0:
            //         if ($b100 == 1) {
            //             echo "<p>$b100 billete de 100€</p>";
            //         } else {
            //             echo "<p>$b100 billetes de 100€</p>";
            //         }
            //     case $b50 > 0:
            //         if ($b50 == 1) {
            //             echo "<p>$b50 billete de 50€</p>";
            //         } else {
            //             echo "<p>$b50 billetes de 50€</p>";
            //         }
            //     case $b20 > 0:
            //         if ($b20 == 1) {
            //             echo "<p>$b20 billete de 20€</p>";
            //         } else {
            //             echo "<p>$b20 billetes de 20€</p>";
            //         }
            //     case $b10 > 0:
            //         if ($b10 == 1) {
            //             echo "<p>$b10 billete de 10€</p>";
            //         } else {
            //             echo "<p>$b10 billetes de 10€</p>";
            //         }
            //     case $b5 > 0:
            //         if ($b5 == 1) {
            //             echo "<p>$b5 billete de 5€</p>";
            //         } else {
            //             echo "<p>$b5 billetes de 5€</p>";
            //         }
            //     case $dinero > 0:
            //         echo "<p>Sobran $dinero euros</p>";
            // }

            if ($b100 > 0) {
                if ($b100 == 1) {
                    echo "<p>$b100 billete de 100€</p>";
                } else {
                    echo "<p>$b100 billetes de 100€</p>";
                }
            }
            
            if ($b50 > 0) {
                if ($b50 == 1) {
                    echo "<p>$b50 billete de 50€</p>";
                } else {
                    echo "<p>$b50 billetes de 50€</p>";
                }
            }
            
            if ($b20 > 0) {
                if ($b20 == 1) {
                    echo "<p>$b20 billete de 20€</p>";
                } else {
                    echo "<p>$b20 billetes de 20€</p>";
                }
            }
            
            if ($b10 > 0) {
                if ($b10 == 1) {
                    echo "<p>$b10 billete de 10€</p>";
                } else {
                    echo "<p>$b10 billetes de 10€</p>";
                }
            }
            
            if ($b5 > 0) {
                if ($b5 == 1) {
                    echo "<p>$b5 billete de 5€</p>";
                } else {
                    echo "<p>$b5 billetes de 5€</p>";
                }
            }
            
            if ($dinero > 0) {
                echo "<p>Sobran $dinero euros</p>";
            }

        }

    ?>
</body>

</html>