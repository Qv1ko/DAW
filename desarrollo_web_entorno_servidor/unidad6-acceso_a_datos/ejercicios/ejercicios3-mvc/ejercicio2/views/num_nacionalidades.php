<?php
    echo "<h2>Actores con nacionalidad " . $_POST['nacionalidad'] . "</h2>";
    foreach ($actores as $actor) {
        echo "<p>- $actor</p>";
    }
    die();
?>