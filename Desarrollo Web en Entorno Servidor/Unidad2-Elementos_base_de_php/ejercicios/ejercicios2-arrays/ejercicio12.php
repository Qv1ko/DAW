<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 12</title>
</head>

<body>
    <?php

        /*
         * Diseña una aplicación que obtenga la letra del DNI.
         * Obtenida la letra correspondiente, muestra el DNI completo.
         */
        
        function letraDni(string $nif) {

            $regla = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X", "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"];

            // return "<p>NIF $nif" . $regla[intval($nif) % 23] . "</p>";
            return "<p>NIF $nif" . $regla[intval($nif) - intval(intval($nif) / 23) * 23] . "</p>";

        }

        echo letraDni("47425014");

    ?>
</body>

</html>