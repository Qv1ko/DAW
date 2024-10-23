<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 14</title>
</head>

<body>
    <?php
        
        $horasLectivas = [
            "DWES" => 9,
            "DWEC" => 8,
            "DIW" => 6,
            "DAW" => 4,
            "FOL" => 3,
        ];

        print_r(deleteMax($horasLectivas));

        function deleteMax(array $asignaturas): array {
            $max = max($asignaturas);

            foreach($asignaturas as $asignatura => $horas ) {
                if ($horas == $max) {
                    unset($asignaturas[$asignatura]);
                }
            }
            
            return $asignaturas;
        }

    ?>
</body>

</html>