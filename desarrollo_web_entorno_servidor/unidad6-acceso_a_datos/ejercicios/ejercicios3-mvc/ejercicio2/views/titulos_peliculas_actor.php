<?php
    echo "<h2>Películas del actor " . $_POST["actor"] . "</h2>";
    foreach ($peliculas as $pelicula) {
        echo "<p>- $pelicula</p>";
    }
    die();
?>