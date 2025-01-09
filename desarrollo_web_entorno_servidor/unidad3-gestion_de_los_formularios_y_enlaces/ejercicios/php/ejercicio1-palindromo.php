<?php

    echo "<h3>Palíndromo</h3>";
    echo '<form action="" method="post">';
    echo '<input type="caracteres" name="texto">';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';

    function palindromo(string $texto): string {

        if (strlen($texto) < 1) {
            $texto = "Palíndromo";
        }

        $caracteres = str_split(strtolower(preg_replace('/[^A-Za-z0-9áéíóúñ \-]/', '', $texto)));

        for ($i = 0; $i < count($caracteres); $i++) {
            if ($caracteres[$i] == " ") {
                array_splice($caracteres, $i, 1);
            }
        }

        $inverso = [];

        for ($i = count($caracteres) - 1; $i >= 0 ; $i--) {
            array_push($inverso, $caracteres[$i]);
        }

        $esPalindromo = true;

        for ($i = 0; $i < count($caracteres) && $esPalindromo; $i++) {
            if ($caracteres[$i] != $inverso[$i]) {
                $esPalindromo = false;
            }
        }

        return "<p>El texto \"$texto\" " . ($esPalindromo ? "" : "no") . " es palíndromo</p>";

    }

    if (isset($_POST['texto'])) {
        echo palindromo($_POST['texto']);
    }

    echo '<a href="./ejercicio1-index.php">Volver al menú</a>';

?>