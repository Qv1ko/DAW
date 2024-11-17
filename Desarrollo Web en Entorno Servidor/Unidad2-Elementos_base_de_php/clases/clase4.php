<!DOCTYPE html>
<html lang="en">

<head>
    <title>Clase 4</title>
</head>

<body>
    <?php

        $ganadores = [
            'Fiestas.2023' => [
                "Tenis" => "Ana",
                "Mus" => "Luis",
                "Parchis" => "Carmen",
                "Pin-pon" => "Antonia"
            ],
            'Fiestas.2024' => [
                "Tenis" => "Jorge",
                "Mus" => "Luisa",
                "Ajedrez" => "Victor"
            ]
        ];

        foreach ($ganadores as $fiesta => $competiciones) {
            echo "<p>$fiesta</p>";
            foreach ($competiciones as $competicion => $ganador) {
                echo "<p>&emsp;$competicion: $ganador</p>";
            }
        }

        echo "<br>";

        $horasLectivasDaw = [
            "Primero de DAW" => [
                "Bases de Datos" => 6,
                "Entornos de Desarrollo" => 3,
                "Formación y Orientación Laboral" => 3,
                "Lenguaje de Marcas y Sistemas de Gestión de Información" => 4,
                "Programación" => 8,
                "Sistemas Informáticos" => 6
            ],
            "Segundo de DAW" => [
                "Desarrollo web en entorno cliente" => 8,
                "Desarrollo web en entorno servidor" => 9,
                "Despliegue de aplicaciones web" => 4,
                "Diseño de interfaces web" => 6,
                "Empresa e iniciativa emprendedora" => 3
            ]
        ];
        $horasCurso = 0;

        foreach ($horasLectivasDaw as $curso => $modulos) {
            foreach ($modulos as $modulo => $horas) {
                echo "<p>$modulo: $horas horas lectivas</p>";
            }
        }

        echo "<br>";

        foreach ($horasLectivasDaw as $curso => $modulos) {
            $horasCurso = 0;
            echo "<p>$curso</p>";
            foreach ($modulos as $modulo => $horas) {
                echo "<p>&emsp;&emsp;Modulo de $modulo: $horas horas</p>";
                $horasCurso += $horas;
            }
            echo "<p>&emsp;Horas totales de $curso: $horasCurso</p>";
        }

        echo "<br>";

        foreach ($horasLectivasDaw as $curso => $modulos) {
            $horasCurso = 0;
            foreach ($modulos as $modulo => $horas) {
                $horasCurso += $horas;
            }
            echo "<p>En $curso hay $horasCurso horas lectivas</p>";
        }

    ?>
</body>

</html>