<?php

    echo "<h3>Encriptación César</h3>";

    if (isset($_GET['texto'])) {
        echo cesar($_GET['texto']);
    }

    echo '<a href="./ejercicio4-index.php">Volver al menú</a>';

    function cesar(string $texto): string {

        if (strlen($texto) < 1) {
            $texto = "Encriptación César";
        }

        $alfabeto = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "ñ", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $caracteres = str_split(strtolower(preg_replace('/[^A-Za-z0-9áéíóúñ \-]/', '', $texto)));
        $resultado = "";
        $esLetra = false;

        for ($i = 0; $i < count($caracteres); $i++) {

            $esLetra = false;

            for ($j = 0; $j < count($alfabeto) && !$esLetra; $j++) {
                if ($caracteres[$i] == $alfabeto[$j]) {
                    $resultado = $resultado . $alfabeto[$j + 3];
                    $esLetra = true;
                }
            }

            if (!$esLetra) {
                $resultado = $resultado . $caracteres[$i];
            }

        }

        return "<p>El texto \"$texto\" encriptado por método césar: $resultado</p>";

    }

?>