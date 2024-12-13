<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 14</title>
</head>

<body>
    <?php

        /*
         * Crea una función que, partiendo del array asociativo anterior, devuelva el array sin el
         *  módulo de mayor número de horas lectivas. 
         */
        
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