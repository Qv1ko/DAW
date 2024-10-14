<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        $lectivasDaw = [
            "Despliegue de Aplicaciones Web" => 4,
            "Diseño de Interfaces Web" => 6,
            "Desarrollo Web en Entorno Cliente" => 8,
            "Desarrollo Web en Entorno Servidor" => 9,
            "Empresa e Iniciativa Emprendedora" => 3
        ];

        echo "<p>Array original:</p>";
        print_r($lectivasDaw);

        echo "<p>Array ordenado con asort():</p>";
        asort($lectivasDaw);
        print_r($lectivasDaw);
        
        echo "<p>Array ordenado con ksort():</p>";
        ksort($lectivasDaw);
        print_r($lectivasDaw);

    ?>
</body>

</html>