<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad 5</title>
</head>

<body>
    <table>
        <?php

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