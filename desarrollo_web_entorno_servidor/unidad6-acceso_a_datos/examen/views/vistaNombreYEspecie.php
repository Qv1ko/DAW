<?php
    echo "<p>Nombre y especies:</p>";
    echo "<ul>";
    foreach ($resultados as $item) {
        echo "<li>" . $item["nombre"] . " " . $item["especie"] . "</li>";
    }
    echo "</ul>";
?>