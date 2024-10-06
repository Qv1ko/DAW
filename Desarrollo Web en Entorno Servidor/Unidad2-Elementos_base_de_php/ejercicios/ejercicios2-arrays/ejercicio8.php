<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8</title>
</head>

<body>
    <?php
        
        // $losOscar2020 = [
        //     "ACTORES" => [
        //         "00001" => [
        //             "nacionalidad" => "francés",
        //             "nombre_apellidos" => "Jacqueline Bisset",
        //             "sexo" => "f"
        //         ],
        //         "00002" => [
        //             "nacionalidad" => "española",
        //             "nombre_apellidos" => "Antonio Banderas",
        //             "sexo" => "m"
        //         ],
        //         "00003" => [
        //             "nacionalidad" => "española",
        //             "nombre_apellidos" => "Belén Rueda",
        //             "sexo" => "f"
        //         ],
        //         "00004" => [
        //             "nacionalidad" => "estadounidense",
        //             "nombre_apellidos" => "Brad Pitt",
        //             "sexo" => "m"
        //         ],
        //         "00005" => [
        //             "nacionalidad" => "estadounidense",
        //             "nombre_apellidos" => "Laura Dern",
        //             "sexo" => "f"
        //         ]
        //     ],
        //     "PELICULAS" => [
        //         "Dolor y gloria" => [
        //             "genero" => "drama",
        //             "anno_prod" => 2019
        //         ],
        //         "Erase una vez...Hollywood" => [
        //             "genero" => "comedia",
        //             "anno_prod" => 2019
        //         ],
        //         "Historia de un matrimonio" => [
        //             "genero" => "drama",
        //             "anno_prod" => 2019
        //         ],
        //         "La piel que habito" => [
        //             "genero" => "thriller",
        //             "anno_prod" => 2011
        //         ]
        //     ],
        //     "ACTORES_PELICULAS" => [
        //         "00002" => "Dolor y gloria",
        //         "00004" => "Erase una vez...Hollywood",
        //         "00005" => "Historia de un matrimonio",
        //         "00002" => "La piel que habito",
        //     ]
        // ];

        $array = [
            "Antonio Banderas" => [
                "Dolor y gloria",
                "La piel que habito"
            ],
            "Brad Pitt" => [
                "Erase una vez...Hollywood"
            ],
            "Laura Dern" => [
                "Historia de un matrimonio"
            ]
        ];
        $peliculas = [];

        foreach ($array as $actor => $peliculasActuadas) {
            foreach ($peliculasActuadas as $pelicula) {
                if (!array_key_exists($pelicula, $peliculas)) {
                    $peliculas[$pelicula] = [$actor];
                } else {
                    $peliculas[$pelicula][] = $actor;
                }
            }
        }

        echo "<p>Películas en las que participa algún actor</p>";

        foreach ($peliculas as $titulo => $actores) {
            echo "<p>- $titulo</p>";
        }

        foreach ($peliculas as $titulo => $actores) {
            echo "<p>Película $titulo</p>";
            foreach ($actores as $nombre) {
                echo "<p>- $nombre</p>";
            }
        }

    ?>
</body>

</html>