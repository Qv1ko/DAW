<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 2</title>
</head>

<body>
    <?php

        /*
         * A partir del array asociativo que almacena las lectivas de los módulos de 2º de DAW
         *  utiliza las funciones de ordenación de arrays asociativos (asort y ksort).
         */

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