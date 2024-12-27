<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 4</title>
</head>

<body>
    <table>
        <?php

            /*
             * Muestra en pantalla la tabla de multiplicar de un número previamente inicializado a
             *  un valor entero.
             */

            $number = 4;
            $result;

            for ($i = 0; $i <= 10; $i++) { 
                $result = $number * $i;
                echo "<tr>";
                echo "<td>$number * $i = </td>";
                echo "<td>$result</td>";
                echo "</tr>";
            }

        ?>
    </table>
</body>

</html>