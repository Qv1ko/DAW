<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 6</title>
</head>

<body>
    <?php

        /*
         * Construir una array bidimensional con información sobre, animales. De los animales
         *  recogerá información sobre los domésticos y los salvajes (tres animales domésticos y
         *  cuatro salvajes, de cada uno de los salvajes, denonimación y hábitat).
         * - Muestra el array con var_dump().
         * - Recorre el array y muestra su información lo más legible que sepas.
         */

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