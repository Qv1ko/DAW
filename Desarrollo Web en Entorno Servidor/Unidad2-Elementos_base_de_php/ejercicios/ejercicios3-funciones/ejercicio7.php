<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

        /*
         * Visualiza una palabra y sus rotaciones.
         */

        $str = "Hola";

        echo "<p>" . implode(", ", rotate($str)) . "</p>";
        
        function rotate(string $str): array {

            $result = [];

            for ($i = 0; $i < strlen($str); $i++) { 
                $str = substr($str, strlen($str) - 1, 1) . substr($str, 0, strlen($str) - 1);
                array_push($result, $str);
            }

            return $result;

        }

    ?>
</body>

</html>