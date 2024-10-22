<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 9</title>
</head>

<body>
    <?php
        
        $valor = 0;

        if (empty($valor)) {
            echo "Es una variable vacía" . "<br>";
        }

        if (!isset($valor)) {
            echo "La variable esta no definida" . "<br>";
        }

    ?>
</body>

</html>