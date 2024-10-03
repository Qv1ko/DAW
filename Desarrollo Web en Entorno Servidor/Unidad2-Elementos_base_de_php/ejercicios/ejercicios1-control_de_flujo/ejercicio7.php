<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
</head>

<body>
    <?php
        
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