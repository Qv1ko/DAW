<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

        $animales = [
            "domesticos" => ["perro", "gato", "caballo"],
            "salvajes" => [
                "oso" => "montaña",
                "delfin" => "mares templados",
                "cocodrilo" => "laguna",
            ],
        ];

        var_dump($animales);

        foreach ($animales as $tipo => $listaAnimales) {
            echo "<p>Animales $tipo</p>";
            foreach ($listaAnimales as $clave => $valor) {
                echo "<p>\t- El " . (is_string($clave) ? $clave . " (habitat de $valor)</p>" : $valor);
                
            }
        }

    ?>
</body>

</html>