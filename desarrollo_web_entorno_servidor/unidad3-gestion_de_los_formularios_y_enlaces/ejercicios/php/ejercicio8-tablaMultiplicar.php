<?php

    require_once("./ejercicio8-validador.php");

    if (isset($_POST["respuestaExterna"]) && !empty($_POST["respuestaExterna"])) {
        $number = $_POST["respuestaExterna"];
        $table = "";
        
        if (validateNumber(floatval($number))) {
            for ($i=1; $i < 11; $i++) { 
                $table = $table . "<p>$number x $i = " . $number * $i . "</p>";
            }
        
            echo "<h3>Tabla de multiplicar del $number</h3>";
        } else {
            $table = "<h3 style='color: red;'>Número invalido, escribe un número positivo menor que 10</h3>";
        }

        echo $table;
    }

?>