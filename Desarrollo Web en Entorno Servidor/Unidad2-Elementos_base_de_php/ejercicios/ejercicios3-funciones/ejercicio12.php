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

        $number = rand(100, 999);

        echo "<p>El número $number al reves es " . reverseNumber($number) . "</p>";

        function reverseNumber(int $number): string {
            $digits = str_split((string)$number);
            return implode("", array_reverse($digits));
        }

    ?>
</body>

</html>