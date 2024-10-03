<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

        $num1 = 8;
        $num2 = 4;
        $result;

        $char = "-";

        switch ($char) {
            case '+':
                $result = $num1 + $num2;
                break;
            case '-':
                $result = $num1 - $num2;
                break;
            case '/':
                $result = $num1 / $num2;
                break;
            case 'x':
                $result = $num1 * $num2;
                break;
                        
            default:
                echo "<p>Tipo de operación invalido</p>";
                break;
        }

        echo "<p>Resultado de la operación: $result</p>";

    ?>
</body>

</html>