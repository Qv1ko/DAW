<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ejercicio 7</title>
</head>

<body>
    <?php

        /*
         * Simular el juego de “piedra, papel y tijeras”.
         * Habrá dos jugadores, lo cual conlleva inicializar dos variables string a alguno de los
         *  valores anteriores.
         */
        
        $player1 = "tijeras";
        $player2 = "papel";

        $game = [
            "piedra" => "papel",
            "papel" => "tijeras",
            "tijeras" => "piedra",
        ];

        if (($player1 == "piedra" || $player1 == "papel" || $player1 == "tijeras") && ($player2 == "piedra" || $player2 == "papel" || $player2 == "tijeras")) {
            if ($player1 == $player2) {
                echo "<p>Empate</p>";
            } else {
                foreach ($game as $obj => $counter) {
                    if ($player1 == $obj) {
                        echo "<p>El ganador es el jugador " . ($player2 == $counter ? 2 : 1) . "</p>";
                        break;
                    }
                }
            }
        } else {
            echo "<p>Valores de juego incorrectos</p>";
        }

    ?>
</body>

</html>