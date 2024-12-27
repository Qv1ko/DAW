<?php

    session_start();
    
    echo "<h3>Macarrónico</h3>";
    
    $texto = $_SESSION['datossesion'];

    if (isset($texto)) {
        echo macarronico($texto);
    }

    echo '<a href="./ejercicio3.php">Volver al menú</a>';

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