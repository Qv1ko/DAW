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
            "0091" => [
                "1eva" => 9.4,
                "2eva" => 8.9
            ],
            "0202" => [
                "1eva" => 8.7,
                "2eva" => 10
            ],
            "0340" => [
                "1eva" => 9.3,
                "2eva" => 9.7
            ],
            "0584" => [
                "1eva" => 9,
                "2eva" => 9.2
            ],
            "0654" => [
                "1eva" => 9.6,
                "2eva" => 8.8
            ],
        ];

        $sumaNotas = 0;
        $countNotas = 0;
        $notaMedia = 0;
        $mediaMasAlta = 0;
        $matriculaMediaMasAlta = "";

        foreach ($alumnos as $matricula => $evaluaciones) {
            $sumaNotas = 0;
            $countNotas = 0;
            foreach ($evaluaciones as $evaluacion => $nota) {
                $sumaNotas += $nota;
                $countNotas++;
            }
            // $notaMedia = array_sum($notas) / count($notas);
            $notaMedia = $sumaNotas / $countNotas;
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