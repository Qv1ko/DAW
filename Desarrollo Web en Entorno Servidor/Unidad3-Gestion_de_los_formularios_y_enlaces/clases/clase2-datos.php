<?php

    var_dump($_POST);

    echo "<p>El nombre del usuario es " . $_POST["usuario"]["nombre"] . "</p>";
    echo "<p>La contraseña del usuario es " . $_POST["usuario"]["clave"] . "</p>";

    echo "<p>El turno del alumno es " . ($_POST["turno"] == "D" ? "diurno" : "vespertino") . "</p>";

?>