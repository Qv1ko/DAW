<?php

    echo "<h3>Macarrónico</h3>";
    echo '<form action="" method="post">';
    echo '<input type="text" name="texto">';
    echo '<input type="submit" value="Encriptar">';
    echo '</form>';

    function macarronico(string $texto): string {
        if (strlen($texto) == 0) {
            $texto = "macarrónico";
        }
        
        $palabras = explode(" ", preg_replace('/[^A-Za-z0-9áéíóúñ \-]/', '', $texto));
        $resultado = [];

        foreach ($palabras as $palabra) {
            array_push($resultado, (substr($palabra, 1, strlen($palabra)) . substr(strtolower($palabra), 0, 1) . "um"));
        }

        $resultado = ucfirst(implode(" ", $resultado));

        return "<p>El texto \"$texto\" encriptado en macarrónico: $resultado</p>";
    }

    if (isset($_POST['texto'])) {
        echo macarronico($_POST['texto']);
    }

    echo '<a href="./ejercicio1-index.php">Volver al menú</a>';

?>