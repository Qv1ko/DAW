<!DOCTYPE html>
<html lang="en">

<head>
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