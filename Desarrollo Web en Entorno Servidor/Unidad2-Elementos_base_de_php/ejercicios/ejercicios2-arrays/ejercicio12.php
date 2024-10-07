<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 12</title>
</head>

<body>
    <?php
        
        function letraDni(string $nif) {

            $regla = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

            // return "<p>NIF $nif" . $regla[intval($nif) % 23] . "</p>";
            return "<p>NIF $nif" . $regla[intval($nif) - intval(intval($nif) / 23) * 23] . "</p>";

        }

        echo letraDni("47425014");

    ?>
</body>

</html>