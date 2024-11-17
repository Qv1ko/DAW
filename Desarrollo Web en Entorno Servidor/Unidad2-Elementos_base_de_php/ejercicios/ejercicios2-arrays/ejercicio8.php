<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 8</title>
</head>

<body>
    <?php

        /*
         * Construye un array asociativo que recoja información sobre los actores y las películas
         *  en las que intervienen:
         * De los actores, sólo se recoge en el array el nombre del actor y de las películas en las
         *  que interviene, el título de la película.
         * - Mostrar las películas en las que participa algún actor.
         * - Mostrar las películas en las que participa cada actor y mostrar también al actor.
         */
        
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