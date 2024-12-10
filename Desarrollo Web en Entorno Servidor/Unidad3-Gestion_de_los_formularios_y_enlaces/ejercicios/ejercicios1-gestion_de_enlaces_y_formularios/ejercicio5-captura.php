<?php

    if (isset($_GET["respuesta"]) && !empty($_GET['respuesta'])) {
        echo (strtolower(trim($_GET["respuesta"])) == "blanco" ? '<p>¡Repuesta correcta!</p>' : '<a href="./ejercicio5.php">Intententalo de nuevo...</a>');
    } elseif (isset($_POST["respuesta"]) && !empty($_POST['respuesta'])) {
        echo (strtolower(trim($_POST["respuesta"])) == "blanco" ? '<p>¡Repuesta correcta!</p>' : '<a href="./ejercicio5.php">Intententalo de nuevo...</a>');
    }

?>