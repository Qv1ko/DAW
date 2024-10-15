<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 18</title>
</head>

<body>
    <?php

        require_once('./ejercicio18-funciones.php');

        $farmacos = [
            "Azacitidina" => date("Y/m/d", fechaRand()),
            "Ciclosporina" => date("Y/m/d", fechaRand()),
            "Docetaxel" => date("Y/m/d", fechaRand()),
            "Fulvestrant" => date("Y/m/d", fechaRand()),
            "Pentostatina" => date("Y/m/d", fechaRand()),
        ];

        $farmacos = deleteCaducados($farmacos);

        echo "<p>Farmacos disponibles actualmente: </p>";
        foreach ($farmacos as $farmaco => $fechaCad) {
            echo "<p>- $farmaco</p>";
        }

    ?>
</body>

</html>