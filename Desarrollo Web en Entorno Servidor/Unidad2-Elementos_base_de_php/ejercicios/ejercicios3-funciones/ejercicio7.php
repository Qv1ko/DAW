<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

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