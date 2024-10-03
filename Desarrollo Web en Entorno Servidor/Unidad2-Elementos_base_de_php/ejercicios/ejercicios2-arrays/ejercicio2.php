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
        
        $segundoDaw = [
            "Desarrollo Web en Entorno Cliente" => 8,
            "Desarrollo Web en Entorno Servidor" => 9,
            "Despliegue de Aplicaciones Web" => 4,
            "Diseño de Interfaces Web" => 6,
            "Empresa e Iniciativa Emprendedora" => 3,
        ];

        foreach ($segundoDaw as $modulo => $horas) {
            echo "<p>El modulo de $modulo tiene $horas horas lectivas a la semana</p>";
        }

    ?>
</body>

</html>