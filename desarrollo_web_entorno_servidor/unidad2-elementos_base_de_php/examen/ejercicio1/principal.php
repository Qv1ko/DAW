<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Principal</title>
</head>

<body>
    <?php

        require_once("./datos.inc");
        require_once("./funciones.php");

        // Función A
        $plazasOnline = 0;

        plazasOnline($cifps, $plazasOnline);

        echo "<p>Hay un total de $plazasOnline plazas online en Burgos</p>";

        // Función B
        echo "<p>Centros que disponen de modalidad online:</p>";
        // print_r(centrosOnline($cifps));
        foreach (centrosOnline($cifps) as $centro) {
            echo "<p>- $centro</p>";
        }

        // Función C
        echo buscarPlazasOnline($cifps, "S. de Colonia");
        echo buscarPlazasOnline($cifps, "S. Catalina");
        echo buscarPlazasOnline($cifps, "Colonia");

    ?>
</body>

</html>