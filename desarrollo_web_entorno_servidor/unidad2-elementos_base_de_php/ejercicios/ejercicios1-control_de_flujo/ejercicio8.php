<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

        /*
         * Simular una calculadora básica (sumar, restar, multiplicar y dividir).
         */

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