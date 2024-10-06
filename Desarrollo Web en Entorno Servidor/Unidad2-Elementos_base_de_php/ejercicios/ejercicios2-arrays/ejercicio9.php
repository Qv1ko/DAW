<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 9</title>
</head>

<body>
    <?php

        $alumnos = [
            191 => [
                "1eva" => 9.4,
                "2eva" => 8.9
            ],
            202 => [
                "1eva" => 8.7,
                "2eva" => 10
            ],
            340 => [
                "1eva" => 9.3,
                "2eva" => 9.7
            ],
            584 => [
                "1eva" => 9,
                "2eva" => 9.2
            ],
            654 => [
                "1eva" => 9.6,
                "2eva" => 8.8
            ],
        ];

        $notaMedia = 0;
        $mediaMasAlta = 0;
        $matriculaMediaMasAlta = "";

        foreach ($alumnos as $matricula => $notas) {
            $notaMedia = array_sum($notas) / count($notas);
            echo "<p>Alumno con matrícula $matricula - Nota media: $notaMedia</p>";
            if ($notaMedia > $mediaMasAlta) {
                $mediaMasAlta = $notaMedia;
                $matriculaMediaMasAlta = $matricula;
            }
        }

        echo "<p>Nota media más alta: $mediaMasAlta del alumno con matrícula $matriculaMediaMasAlta</p>";

    ?>
</body>

</html>