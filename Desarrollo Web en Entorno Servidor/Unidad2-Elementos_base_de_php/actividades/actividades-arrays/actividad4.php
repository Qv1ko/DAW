<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 4</title>
</head>

<body>
    <?php
        
        $matriz = array(array(1, 0), array(0, 1));

        $isMatrizIdentidad = true;

        for ($i = 0; $i < count($matriz); $i++) {
            for ($j = 0; $j < count($matriz[$i]); $j++) {
                if ($i == $j) {
                    if ($matriz[$i][$j] != 1) {
                        $isMatrizIdentidad = false;
                        
                    }
                } else if ($i != $j) {
                    if ($matriz[$i][$j] != 0) {
                        $isMatrizIdentidad = false;
                        
                    }
                }
            }
            if (!$isMatrizIdentidad) {
                break;
            }
        }

        if ($isMatrizIdentidad) {
            echo "<p>La matriz es una matriz identidad</p>";
        } else {
            echo "<p>La matriz no es una matriz identidad</p>";
        }

    ?>
</body>

</html>