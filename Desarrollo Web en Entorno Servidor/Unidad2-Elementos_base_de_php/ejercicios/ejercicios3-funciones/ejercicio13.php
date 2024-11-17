<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 13</title>
</head>

<body>
    <?php

        /*
         * Crea una función que reciba un array asociativo que almacene las horas lectivas de los
         *  módulos de 2º DAW.
         * La función devolverá el código del módulo con mayor número de horas lectivas.
         */
        
        $horasLectivas = [
            "DWES" => 9,
            "DWEC" => 8,
            "DIW" => 6,
            "DAW" => 4,
            "FOL" => 3,
        ];

        echo "<p>La asignatura con más horas lectivas es " . maxHours($horasLectivas) . "</p>";

        function maxHours(array $asignaturas) {
            $max = max($asignaturas);
            foreach($asignaturas as $asignatura => $horas ) {
                if ($horas == $max) {
                    return $asignatura;
                }
            }
            return "No hay asignaturas";
        }

    ?>
</body>

</html>