<?php

    if (isset($_GET["respuesta"])) {
        echo (strtolower(trim($_GET["respuesta"])) == "blanco" ? '<p>¡Repuesta correcta!</p>' : '<a href="./ejercicio5-index.php">Intententalo de nuevo...</a>');
    } else {
        echo (strtolower(trim($_POST["respuesta"])) == "blanco" ? '<p>¡Repuesta correcta!</p>' : '<a href="./ejercicio5-index.php">Intententalo de nuevo...</a>');
    }

?>