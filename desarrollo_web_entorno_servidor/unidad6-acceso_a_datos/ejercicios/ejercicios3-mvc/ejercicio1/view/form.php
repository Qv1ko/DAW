<?php
    require_once("./lib/functions.php");
    $bbdd = bbdd();

    echo '<form action="./controller/controller.php" method="post">';
    echo '<label for="db">Elige una BD:</label>';
    echo '<select name="db" id="db">';

    foreach ($bbdd as $db) {
        echo "<option value='$db'>$db</option>";
    }

    echo '</select>';
    echo '<label for="query">Consulta a realizar:</label>';
    echo '<textarea name="query" id="query"></textarea>';
    echo '<button type="submit">continuar</button>';
    echo '</form>';
?>