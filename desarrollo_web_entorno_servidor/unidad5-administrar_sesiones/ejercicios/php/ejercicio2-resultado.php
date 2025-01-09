<?php
    session_start();
    echo "El número aleatorio fue... " . $_SESSION["number"];
    echo "<br>El usuario fue... " . $_SESSION["name"];
    echo "<br>Los usuarios válidos son: " . implode(", ", $_SESSION["names"]) . ($_SESSION["name"] ==="Antonio" ? "<br>¡¡PREMIO!! por ser tú" : " y no has conseguido el premio. <a href='./ejercicio2-index.php'>Intentelo de nuevo</a>");
?>