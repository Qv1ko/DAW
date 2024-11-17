<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        /*
         * Construye un array asociativo, que almacene las horas lectivas de cada módulo de 2º DAW
         *  y visualiza sus valores de la forma más legible que sepas.
         */
        
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