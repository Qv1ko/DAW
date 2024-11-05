<?php

    echo "<h3>Macarrónico</h3>";

    if (isset($_GET['texto'])) {
        echo macarronico($_GET['texto']);
    }

    echo '<a href="./ejercicio3-index.php">Volver al menú</a>';

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

?>