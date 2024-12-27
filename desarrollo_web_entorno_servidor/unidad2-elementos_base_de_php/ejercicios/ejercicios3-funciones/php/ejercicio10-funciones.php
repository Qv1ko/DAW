<?php

    function visualizarTablaMultiplicar(int $number) {
        for ($i = 0; $i <= 10; $i++) { 
            echo "<p>$number * $i = " . $number * $i . "</p>";
        }
    }

    function tablaMultiplicar(int $number): string {

        $result = "";

        for ($i = 0; $i <= 10; $i++) { 
            $result = $result . "<p>$number * $i = " . $number * $i . "</p>";
        }

        return $result;

    }

    function tablaMultiplicarReferencia(int $number, string &$result) {
        for ($i = 0; $i <= 10; $i++) { 
            $result = $result . "<p>$number * $i = " . $number * $i . "</p>";
        }
    }

?>